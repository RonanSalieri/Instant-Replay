<?php
include('connect.php');
	$sql = "SELECT * FROM slot3 WHERE id=1";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$musicid=$row['musicid'];
	$slot3cue1=$row['cue1'];
	$slot3cue2=$row['cue2'];
	$slot3cue3=$row['cue3'];
	}
	$sql = "SELECT * FROM music WHERE id=$musicid";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$slot3musicname=$row['musicname'];
	$slot3musicfile=$row['musicfile'];
	}
$slot3_short_musicname=substr($slot3musicname, 0, 25);
$bdd=null;			
?>	
<audio id="slot3" <?php echo"src='music/$slot3musicfile'";?>"></audio>
<div class="col">
<div class="card shadow-sm bg-light" style="padding: 5px;">
<div class="row">
<h6>Slot #3 - <?php echo"$slot3_short_musicname"; ?></h6>	
	<div class="col-md-4">
		<button id="butslot3cue1" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot3cue1()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot3cue2" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot3cue2()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot3cue3" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot3cue3()">CUE</button>
	</div>

	<div class="col-md-4">
		<span><?php echo $slot3cue1; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot3cue2; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot3cue3; ?></span>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<button id="butslot3play" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="playslot3()">
			<span class="material-icons-outlined" style="font-size: 2rem;">play_arrow</span>
		</button>
	</div>
	<div class="col-md-4">
		<button id="butslot3pause" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="pauseslot3()">
			<span class="material-icons-outlined" style="font-size: 2rem;">pause</span>
		</button>
	</div>
	<div class="col-md-4">
		<button id="butslot3stop" type="button" class="btn btn-lg btn-primary fs-4" style="width:100%;" onClick="stopslot3()">
			<span class="material-icons-outlined" style="font-size: 2rem;">stop</span>
		</button>
	</div>
</div>
<h6 align="center">Temps : <span id="tempsmorceauslot3"></span> / <span id="totaltempsslot3"></span></h6> 
<table width="100%" border="0">
  <tbody>
    <tr>
      <td>Volume</td>
      <td><input type="range" class="form-range" id="sliderslot3"  min="0" max="100" value="100" step="1" oninput="volumeslot3(this.value)" onchange="volumeslot3(this.value)"></td>
    </tr>
  </tbody>
</table>
</div>
</div>
<script>
// SLOT 3 ------------------------------------------------------------------------------
// audio temps reel Slot 3
var audioslot3 = document.getElementById('slot3');
audioslot3.ontimeupdate = function() {readreeltime3()};
function readreeltime3() {
var audioslot3 = document.getElementById('slot3');
document.getElementById("tempsmorceauslot3").innerHTML = audioslot3.currentTime; // Temps réel
document.getElementById("totaltempsslot3").innerHTML = audioslot3.duration; // Temps fin de morceau
}
//Slot1 Cue1
function slot3cue1() {	
var audioslot3 = document.getElementById('slot3');
audioslot3.currentTime = <?php echo $slot3cue1 ?>;
audioslot3.play();
document.getElementById('butslot3cue1').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot3cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot3cue3').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot3play').disabled = true; 
document.getElementById('butslot3pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot3stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot3 Cue2
function slot3cue2() {	
var audioslot3 = document.getElementById('slot3');
audioslot3.currentTime = <?php echo $slot3cue2 ?>;
audioslot3.play();
document.getElementById('butslot3cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot3cue2').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot3cue3').className="btn btn-lg btn-secondary fs-4";
document.getElementById('butslot3play').disabled = true; 
document.getElementById('butslot3pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot3stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot3 Cue3
function slot3cue3() {	
var audioslot3 = document.getElementById('slot3');
audioslot3.currentTime = <?php echo $slot3cue3 ?>;
audioslot3.play();
document.getElementById('butslot3cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot3cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot3cue3').className="btn btn-lg btn-danger fs-4";
document.getElementById('butslot3play').disabled = true; 
document.getElementById('butslot3pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot3stop').className="btn btn-lg btn-secondary fs-4"; 
}
</script>
