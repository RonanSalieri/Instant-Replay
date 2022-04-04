<?php
include('connect.php');
	$sql = "SELECT * FROM slot9 WHERE id=1";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$musicid=$row['musicid'];
	$slot9cue1=$row['cue1'];
	$slot9cue2=$row['cue2'];
	$slot9cue3=$row['cue3'];
	}
	$sql = "SELECT * FROM music WHERE id=$musicid";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$slot9musicname=$row['musicname'];
	$slot9musicfile=$row['musicfile'];
	}
$slot9_short_musicname=substr($slot9musicname, 0, 25);
$bdd=null;			
?>	
<audio id="slot9" <?php echo"src='music/$slot9musicfile'";?>"></audio>
<div class="col">
<div class="card shadow-sm bg-light" style="padding: 5px;">
<div class="row">
<h6>Slot #9 - <?php echo"$slot9_short_musicname"; ?></h6>	
	<div class="col-md-4">
		<button id="butslot9cue1" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot9cue1()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot9cue2" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot9cue2()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot9cue3" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot9cue3()">CUE</button>
	</div>

	<div class="col-md-4">
		<span><?php echo $slot9cue1; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot9cue2; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot9cue3; ?></span>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<button id="butslot9play" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="playslot9()">
			<span class="material-icons-outlined" style="font-size: 2rem;">play_arrow</span>
		</button>
	</div>
	<div class="col-md-4">
		<button id="butslot9pause" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="pauseslot9()">
			<span class="material-icons-outlined" style="font-size: 2rem;">pause</span>
		</button>
	</div>
	<div class="col-md-4">
		<button id="butslot9stop" type="button" class="btn btn-lg btn-primary fs-4" style="width:100%;" onClick="stopslot9()">
			<span class="material-icons-outlined" style="font-size: 2rem;">stop</span>
		</button>
	</div>
</div>
<h6 align="center">Temps : <span id="tempsmorceauslot9"></span> / <span id="totaltempsslot9"></span></h6> 
<table width="100%" border="0">
  <tbody>
    <tr>
      <td>Volume</td>
      <td><input type="range" class="form-range" id="sliderslot9"  min="0" max="100" value="100" step="1" oninput="volumeslot9(this.value)" onchange="volumeslot9(this.value)"></td>
    </tr>
  </tbody>
</table>
</div>
</div>
<script>
// SLOT 7 ------------------------------------------------------------------------------
// audio temps reel Slot 9
var audioslot9 = document.getElementById('slot9');
audioslot9.ontimeupdate = function() {readreeltime9()};
function readreeltime9() {
var audioslot9 = document.getElementById('slot9');
document.getElementById("tempsmorceauslot9").innerHTML = audioslot9.currentTime; // Temps réel
document.getElementById("totaltempsslot9").innerHTML = audioslot9.duration; // Temps fin de morceau
}
//Slot9 Cue1
function slot9cue1() {	
var audioslot9 = document.getElementById('slot9');
audioslot9.currentTime = <?php echo $slot9cue1 ?>;
audioslot9.play();
document.getElementById('butslot9cue1').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot9cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot9cue3').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot9play').disabled = true; 
document.getElementById('butslot9pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot9stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot9 Cue2
function slot9cue2() {	
var audioslot9 = document.getElementById('slot9');
audioslot9.currentTime = <?php echo $slot9cue2 ?>;
audioslot9.play();
document.getElementById('butslot9cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot9cue2').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot9cue3').className="btn btn-lg btn-secondary fs-4";
document.getElementById('butslot9play').disabled = true; 
document.getElementById('butslot9pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot9stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot9 Cue3
function slot9cue3() {	
var audioslot9 = document.getElementById('slot9');
audioslot9.currentTime = <?php echo $slot9cue3 ?>;
audioslot9.play();
document.getElementById('butslot9cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot9cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot9cue3').className="btn btn-lg btn-danger fs-4";
document.getElementById('butslot9play').disabled = true; 
document.getElementById('butslot9pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot9stop').className="btn btn-lg btn-secondary fs-4"; 
}
</script>
