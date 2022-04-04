<?php
// Connection à la base de données
include('connect.php');
// Requête et récupération des données de la table du slot
	$sql = "SELECT * FROM slot1 WHERE id=1";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$musicid=$row['musicid'];
	$slot1cue1=$row['cue1'];
	$slot1cue2=$row['cue2'];
	$slot1cue3=$row['cue3'];
	}
// Requête dans la table musique pour connaître le titre issu du slot1
	$sql = "SELECT * FROM music WHERE id=$musicid";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$slot1musicname=$row['musicname'];
	$slot1musicfile=$row['musicfile'];
	}
// On raccouric les noms des titres à 25 caractères pour l'affichage
$slot1_short_musicname=substr($slot1musicname, 0, 25);
$bdd=null;			
?>	
<!-- Lecteur Audio -->
<audio id="slot1" <?php echo"src='music/$slot1musicfile'";?>"></audio>
<div class="col">
<div class="card shadow-sm bg-light" style="padding: 5px;">
<div class="row">
<!-- Titre -->	
<h6>Slot #1 - <?php echo"$slot1_short_musicname"; ?></h6>
<!-- Boutons CUE -->
	<div class="col-md-4">
		<button id="butslot1cue1" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot1cue1()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot1cue2" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot1cue2()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot1cue3" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot1cue3()">CUE</button>
	</div>
<!-- Temps des CUE -->
	<div class="col-md-4">
		<span><?php echo $slot1cue1; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot1cue2; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot1cue3; ?></span>
	</div>
</div>
<!-- Boutons PLAY -->
<div class="row">
	<div class="col-md-4">
		<button id="butslot1play" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="playslot1()">
			<span class="material-icons-outlined" style="font-size: 2rem;">play_arrow</span>
		</button>
	</div>
<!-- Boutons PAUSE -->
	<div class="col-md-4">
		<button id="butslot1pause" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="pauseslot1()">
			<span class="material-icons-outlined" style="font-size: 2rem;">pause</span>
		</button>
	</div>
<!-- Boutons STOP -->
	<div class="col-md-4">
		<button id="butslot1stop" type="button" class="btn btn-lg btn-primary fs-4" style="width:100%;" onClick="stopslot1()">
			<span class="material-icons-outlined" style="font-size: 2rem;">stop</span>
		</button>
	</div>
</div>
<!-- Affichage du temps -->
<h6 align="center">Temps : <span id="tempsmorceauslot1"></span> / <span id="totaltempsslot1"></span></h6> 
<table width="100%" border="0">
  <tbody>
    <tr>
<!-- Volume -->
      <td>Volume</td>
      <td><input type="range" class="form-range" id="sliderslot1"  min="0" max="100" value="100" step="1" oninput="volumeslot1(this.value)" onchange="volumeslot1(this.value)"></td>
    </tr>
  </tbody>
</table>
</div>
</div>
<script>
// SLOT 1 ------------------------------------------------------------------------------
// audio temps reel Slot 1
var audioslot1 = document.getElementById('slot1');
audioslot1.ontimeupdate = function() {readreeltime()};
function readreeltime() {
var audioslot1 = document.getElementById('slot1');
document.getElementById("tempsmorceauslot1").innerHTML = audioslot1.currentTime; // Temps réel
document.getElementById("totaltempsslot1").innerHTML = audioslot1.duration; // Temps fin de morceau
}
//Slot1 Cue1
function slot1cue1() {	
var audioslot1 = document.getElementById('slot1');
audioslot1.currentTime = <?php echo $slot1cue1 ?>;
audioslot1.play();
document.getElementById('butslot1cue1').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot1cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1cue3').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1play').disabled = true; 
document.getElementById('butslot1pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot1 Cue2
function slot1cue2() {	
var audioslot1 = document.getElementById('slot1');
audioslot1.currentTime = <?php echo $slot1cue2 ?>;
audioslot1.play();
document.getElementById('butslot1cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1cue2').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot1cue3').className="btn btn-lg btn-secondary fs-4";
document.getElementById('butslot1play').disabled = true; 
document.getElementById('butslot1pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot1 Cue3
function slot1cue3() {	
var audioslot1 = document.getElementById('slot1');
audioslot1.currentTime = <?php echo $slot1cue3 ?>;
audioslot1.play();
document.getElementById('butslot1cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1cue3').className="btn btn-lg btn-danger fs-4";
document.getElementById('butslot1play').disabled = true; 
document.getElementById('butslot1pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot1stop').className="btn btn-lg btn-secondary fs-4"; 
}

</script>
