<?php
include('connect.php');
	$sql = "SELECT * FROM slot8 WHERE id=1";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$musicid=$row['musicid'];
	$slot8cue1=$row['cue1'];
	$slot8cue2=$row['cue2'];
	$slot8cue3=$row['cue3'];
	}
	$sql = "SELECT * FROM music WHERE id=$musicid";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$slot8musicname=$row['musicname'];
	$slot8musicfile=$row['musicfile'];
	}
$slot8_short_musicname=substr($slot8musicname, 0, 25);
$bdd=null;			
?>	
<audio id="slot8" <?php echo"src='music/$slot8musicfile'";?>"></audio>
<div class="col">
<div class="card shadow-sm bg-light" style="padding: 5px;">
<div class="row">
<h6>Slot #8 - <?php echo"$slot8_short_musicname"; ?></h6>	
	<div class="col-md-4">
		<button id="butslot8cue1" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot8cue1()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot8cue2" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot8cue2()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot8cue3" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot8cue3()">CUE</button>
	</div>

	<div class="col-md-4">
		<span><?php echo $slot8cue1; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot8cue2; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot8cue3; ?></span>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<button id="butslot8play" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="playslot8()">
			<span class="material-icons-outlined" style="font-size: 2rem;">play_arrow</span>
		</button>
	</div>
	<div class="col-md-4">
		<button id="butslot8pause" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="pauseslot8()">
			<span class="material-icons-outlined" style="font-size: 2rem;">pause</span>
		</button>
	</div>
	<div class="col-md-4">
		<button id="butslot8stop" type="button" class="btn btn-lg btn-primary fs-4" style="width:100%;" onClick="stopslot8()">
			<span class="material-icons-outlined" style="font-size: 2rem;">stop</span>
		</button>
	</div>
</div>
<h6 align="center">Temps : <span id="tempsmorceauslot8"></span> / <span id="totaltempsslot8"></span></h6> 
<table width="100%" border="0">
  <tbody>
    <tr>
      <td>Volume</td>
      <td><input type="range" class="form-range" id="sliderslot8"  min="0" max="100" value="100" step="1" oninput="volumeslot8(this.value)" onchange="volumeslot8(this.value)"></td>
    </tr>
  </tbody>
</table>
</div>
</div>
<script>
// SLOT 7 ------------------------------------------------------------------------------
// audio temps reel Slot 8
var audioslot8 = document.getElementById('slot8');
audioslot8.ontimeupdate = function() {readreeltime8()};
function readreeltime8() {
var audioslot8 = document.getElementById('slot8');
document.getElementById("tempsmorceauslot8").innerHTML = audioslot8.currentTime; // Temps réel
document.getElementById("totaltempsslot8").innerHTML = audioslot8.duration; // Temps fin de morceau
}
//Slot8 Cue1
function slot8cue1() {	
var audioslot8 = document.getElementById('slot8');
audioslot8.currentTime = <?php echo $slot8cue1 ?>;
audioslot8.play();
document.getElementById('butslot8cue1').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot8cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot8cue3').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot8play').disabled = true; 
document.getElementById('butslot8pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot8stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot8 Cue2
function slot8cue2() {	
var audioslot8 = document.getElementById('slot8');
audioslot8.currentTime = <?php echo $slot8cue2 ?>;
audioslot8.play();
document.getElementById('butslot8cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot8cue2').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot8cue3').className="btn btn-lg btn-secondary fs-4";
document.getElementById('butslot8play').disabled = true; 
document.getElementById('butslot8pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot8stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot7 Cue3
function slot8cue3() {	
var audioslot8 = document.getElementById('slot8');
audioslot8.currentTime = <?php echo $slot8cue3 ?>;
audioslot8.play();
document.getElementById('butslot8cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot8cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot8cue3').className="btn btn-lg btn-danger fs-4";
document.getElementById('butslot8play').disabled = true; 
document.getElementById('butslot8pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot8stop').className="btn btn-lg btn-secondary fs-4"; 
}
</script>
