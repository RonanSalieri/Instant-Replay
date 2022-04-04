<?php
// Récupération du numéro du slot qui doit être édité et sécurité
$numberslot = $_GET['numberslot'];
if ($numberslot == ""){
header('Location: index.php');
exit();		
} 
if ($numberslot <> "1" and $numberslot <> "2"
   and $numberslot <> "3" and $numberslot <> "4"
   and $numberslot <> "5" and $numberslot <> "6"
   and $numberslot <> "7" and $numberslot <> "8"
   and $numberslot <> "9"){
header('Location: index.php');
exit();		
} 
$slot = "slot".$numberslot;
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Instant Replay 1.0</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<title>Instant Replay 1.0</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
<script src="js/bootstrap.js"></script>
<script src="js/editslot.js"></script>
</head>
<body>
<header>
<?php include('menu.html');?>
<?php include('apropos.html') ?>
<?php include('aide.html') ?>
</header>
<main>
<div class="container">
<div class="row">
	<div class="col-12">
<!-- Choix du changement de titre issu de la bibliothèque -->
		<h1>Edition du slot #<?php echo "$numberslot"; ?></h1>
		<p class="lead">Choisir un titre de la bibliothèque</p>
	</div>
</div>
<div class="row mb-4">
<!-- Le form est valider automatiquement après le choix du titre via ON CHANGE du SELECT -->
<form action="changemusic.php" method="post">
	<div class="col-12"> 
		<input type="hidden" name="numberslot" id="numberslot" <?php echo"value='$numberslot'";?>>
		<select name="musicid" id="musicid"class="form-select" aria-label="Default select example" onchange='if(this.value != 0) { this.form.submit(); }'> 
			<option selected disabled>Choisir un titre de la bibliothèque</option>  
<?php
// Affichage des titres de musique de la base de données
include('connect.php');
$sql = "SELECT * FROM music ORDER BY music.id ASC";
$req = $bdd->query($sql);
while($row = $req->fetch()) {
$musicid=$row['id'];
$musicname=$row['musicname'];
echo"<option value='$musicid'>$musicname</option>";
$bdd=null;
}
?>                                  
</select>                                     
	</div>
</form>
</div>	
<div class="row">
<?php
// Récupération des points CUE
include('connect.php');
$sql = "SELECT * FROM $slot WHERE $slot.id=1";
$req = $bdd->query($sql);
while($row = $req->fetch()) {
$musicidslot=$row['musicid'];
$cue1slot=$row['cue1'];
$cue2slot=$row['cue2'];
$cue3slot=$row['cue3'];
}

// Récupération du titre du morceau et du fichier
$sql2 = "SELECT * FROM music WHERE id = $musicidslot";
$req2 = $bdd->query($sql2);
while($row2 = $req2->fetch()) {
$musicnameslot=$row2['musicname'];
$musicfileslot=$row2['musicfile'];
}
$bdd=null;
?> 
	<h3>Edition du fichier : <?php echo"$musicnameslot"; ?></h3>
	<!-- Insertion de Wavesurfer.js -->
	<script src="https://unpkg.com/wavesurfer.js"></script>
	<div id="waveform">
    	<progress id="progress" class="progress progress-striped" value="0" max="100"></progress>
		<!-- Lecteur audio Muted -->
		<audio id="audio" controls muted <?php echo"src='music/$musicfileslot'"?> hidden="true"></audio>
    </div>
	<!-- Script pour le waveform -->
	<script>
	var ctx = document.createElement('canvas').getContext('2d');
    var linGrad = ctx.createLinearGradient(0, 64, 0, 200);
    linGrad.addColorStop(0.5, 'rgba(0, 0, 0, 1.000)');
    linGrad.addColorStop(0.5, 'rgba(183, 183, 183, 1.000)');
	var wavesurfer = WaveSurfer.create({
      // Use the id or class-name of the element you created, as a selector
      container: '#waveform',
      // The color can be either a simple CSS color or a Canvas gradient
      waveColor: linGrad,
      progressColor: 'hsla(0,100%,42%,0.82)',
      cursorColor: '#FF0004',
      hideCursor: 'false',
      hideScrollbar: 'false',
      interact: false,
	// This parameter makes the waveform look like SoundCloud's player
      barWidth: 3
    });
    wavesurfer.on('loading', function (percents) {
      document.getElementById('progress').value = percents;
    });
    wavesurfer.on('ready', function (percents) {
      document.getElementById('progress').style.display = 'none';
    });
	  wavesurfer.load('music/<?=$musicfileslot?>');
	</script>
	</div>
<div class="row">
	<div>
	<br>
<!-- Affichage du temsp -->
	<span><h5>Position : <span id="tempsreel"></span>/ <span id="tempstotal"></span></h5></span>
	</div>
</div>
<div class="mt-2 row">
<div class="col-2">
</div>
<div class="col-md-7">
<!-- Boutons de navigation dans le morceau -->
	<div class="col-11 bg bg-light border border-secondary rounded p-2 text-center">
	<h6 class="text-left">Déplacement</h6>
	<button type="button" class="btn btn-primary fs-4" onClick="moins5(), wavesurfer.skip(-5), wavesurfer.pause()">
	<span class="material-icons-outlined align-middle"><h3>arrow_circle_left</h3></span>5</button>
	<button type="button" class="btn btn-primary fs-4" onClick="plus5(), wavesurfer.skip(5), wavesurfer.pause()">
	<span class="material-icons-outlined align-middle"><h3>arrow_circle_right</h3></span>5</button>
	<button type="button" class="btn btn-primary fs-4" onClick="moins1(), wavesurfer.skip(-1), wavesurfer.pause()">
	<span class="material-icons-outlined align-middle"><h3>arrow_circle_left</h3></span>1</button>
	<button type="button" class="btn btn-primary fs-4" onClick="plus1(), wavesurfer.skip(1), wavesurfer.pause()">
	<span class="material-icons-outlined align-middle"><h3>arrow_circle_right</h3></span>1</button>
	<button type="button" class="btn btn-primary fs-4" onClick="moins05(), wavesurfer.skip(-0.5), wavesurfer.pause()">
	<span class="material-icons-outlined align-middle"><h3>arrow_circle_left</h3></span>0.5</button>
	<button type="button" class="btn btn-primary fs-4" onClick="plus05(), wavesurfer.skip(0.5), wavesurfer.pause()">
	<span class="material-icons-outlined align-middle"><h3>arrow_circle_right</h3></span>0.5</button>
	<button type="button" class="btn btn-primary fs-4" onClick="moins01(), wavesurfer.skip(-0.1), wavesurfer.pause()">
	<span class="material-icons-outlined align-middle"><h3>arrow_circle_left</h3></span>0.1</button>
	<button type="button" class="btn btn-primary fs-4" onClick="plus01(), wavesurfer.skip(0.1), wavesurfer.pause()">
	<span class="material-icons-outlined align-middle"><h3>arrow_circle_right</h3></span>0.1</button>
	</div>
	<div class="p-2"></div>
	<div class="col-11 text-center">
<!-- Boutons PLAY & PAUSE -->		
	<button id="btnplay" type="button" class="btn btn-secondary btn-lg fs-1" onClick="audioplay(), wavesurfer.play()"><span class="material-icons-outlined" style="font-size: 2rem;">play_arrow</span></button>
	<button id="btnpause" type="button" class="btn btn-secondary btn-lg fs-1" onClick="audiopause(), wavesurfer.pause()"><span class="material-icons-outlined" style="font-size: 2rem;">pause</span></button>
	</div>	
</div>
<!-- Edition et Player des CUE -->
<div class="col-md-3 bg bg-light border border-secondary rounded p-2">
	<h6>Edition & sauvegarde des CUEs</h6>
<form action="savecue.php" method="post">
<input type="hidden" name="numberslot" id="numberslot" <?php echo"value='$numberslot'";?>>
	<div class="row">
		<audio id="audiocue1" controls <?php echo"src='music/$musicfileslot'"?> hidden="true"></audio>
		<div class="col-3 p-2">
			<button type="button" class="btn btn-primary fs-6" onClick="capturecue1()">CUE 1</button>
		</div>
		<div class="col-3 p-2">
			<input <?php echo"value=$cue1slot";?> name="cue1" id="cue1" type="text" class="form-control" placeholder="0" aria-label="Username" aria-describedby="basic-addon1" >
		</div>
		<div class="col-2 p-2">
			<button id="btncue1play" type="button" class="btn btn-secondary" onclick="playcue1(), wavesurfer.pause()"><span class="material-icons-outlined" style="font-size: 1rem;">play_arrow</span></button>
		</div>
		<div class="col-2 p-2">
			<button type="button" class="btn btn-primary" onclick="stopcue1()"><span class="material-icons-outlined" style="font-size: 1rem;">stop</span></button>
		</div>
		<div class="col-2 p-2">
			<button type="button" class="btn btn-warning" onclick="resetcue1()"><span class="material-icons-outlined" style="font-size: 1rem;">timer_off</span></button>
		</div>
	</div>
	<div class="row">
		<audio id="audiocue2" controls <?php echo"src='music/$musicfileslot'"?> hidden="true"></audio>
		<div class="col-3 p-2">
			<button type="button" class="btn btn-primary fs-6" onClick="capturecue2()">CUE 2</button>
		</div>
		<div class="col-3 p-2">
			<input <?php echo"value=$cue2slot";?> name="cue2" id="cue2" type="text" class="form-control" placeholder="0" aria-label="Username" aria-describedby="basic-addon1" >
		</div>
		<div class="col-2 p-2">
			<button id="btncue2play" type="button" class="btn btn-secondary" onclick="playcue2(), wavesurfer.pause()"><span class="material-icons-outlined" style="font-size: 1rem;">play_arrow</span></button>
		</div>
		<div class="col-2 p-2">
			<button type="button" class="btn btn-primary" onclick="stopcue2()"><span class="material-icons-outlined" style="font-size: 1rem;">stop</span></button>
		</div>
		<div class="col-2 p-2">
			<button type="button" class="btn btn-warning" onclick="resetcue2()"><span class="material-icons-outlined" style="font-size: 1rem;">timer_off</span></button>
		</div>
	</div>
	<div class="row">
		<audio id="audiocue3" controls <?php echo"src='music/$musicfileslot'"?> hidden="true"></audio>
		<div class="col-3 p-2">
			<button type="button" class="btn btn-primary fs-6" onClick="capturecue3()">CUE 3</button>
		</div>
		<div class="col-3 p-2">
			<input <?php echo"value=$cue3slot";?> name="cue3" id="cue3" type="text" class="form-control" placeholder="0" aria-label="Username" aria-describedby="basic-addon1" >
		</div>
		<div class="col-2 p-2">
			<button id="btncue3play" type="button" class="btn btn-secondary" onclick="playcue3(), wavesurfer.pause()"><span class="material-icons-outlined" style="font-size: 1rem;">play_arrow</span></button>
		</div>
		<div class="col-2 p-2">
			<button type="button" class="btn btn-primary" onclick="stopcue3()"><span class="material-icons-outlined" style="font-size: 1rem;">stop</span></button>
		</div>
		<div class="col-2 p-2">
			<button type="button" class="btn btn-warning" onclick="resetcue3()"><span class="material-icons-outlined" style="font-size: 1rem;">timer_off</span></button>
		</div>
	</div>
<div class="row">
	<div class="col-12 text-center">
		<button type="submit" class="btn btn-danger fs-2">SAUVEGARDER</button>
	</div>
</form>
</div>	
</div>
</div>	
</div>
</main>
<div class="p-4"></div>
<footer class="text-center">Ronan Salieri - ronansalieri{[AT]}gmail.com - 2022 - <a href="https://github.com/RonanSalieri" target="_new">Github</a></footer>
<!-- Affichage temps du morceau -->
<script>
    var vid = document.getElementById("audio");
    audio.ontimeupdate = function() {realtime()};
    function realtime() {
    document.getElementById("tempsreel").innerHTML = audio.currentTime;
	document.getElementById("tempstotal").innerHTML = audio.duration;
    }
</script>
</body>
</html>