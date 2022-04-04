<?php
include('connect.php');
	$sql = "SELECT * FROM slot2 WHERE id=1";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$musicid=$row['musicid'];
	$slot2cue1=$row['cue1'];
	$slot2cue2=$row['cue2'];
	$slot2cue3=$row['cue3'];
	}
	$sql = "SELECT * FROM music WHERE id=$musicid";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$slot2musicname=$row['musicname'];
	$slot2musicfile=$row['musicfile'];
	}
$slot2_short_musicname=substr($slot2musicname, 0, 25);
$bdd=null;			
?>	
<audio id="slot2" <?php echo"src='music/$slot2musicfile'";?>"></audio>
<div class="col">
<div class="card shadow-sm bg-light" style="padding: 5px;">
<div class="row">
<h6>Slot #2 - <?php echo"$slot2_short_musicname"; ?></h6>	
	<div class="col-md-4">
		<button id="butslot2cue1" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot2cue1()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot2cue2" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot2cue2()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot2cue3" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot2cue3()">CUE</button>
	</div>

	<div class="col-md-4">
		<span><?php echo $slot2cue1; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot2cue2; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot2cue3; ?></span>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<button id="butslot2play" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="playslot2()">
			<span class="material-icons-outlined" style="font-size: 2rem;">play_arrow</span>
		</button>
	</div>
	<div class="col-md-4">
		<button id="butslot2pause" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="pauseslot2()">
			<span class="material-icons-outlined" style="font-size: 2rem;">pause</span>
		</button>
	</div>
	<div class="col-md-4">
		<button id="butslot2stop" type="button" class="btn btn-lg btn-primary fs-4" style="width:100%;" onClick="stopslot2()">
			<span class="material-icons-outlined" style="font-size: 2rem;">stop</span>
		</button>
	</div>
</div>
<h6 align="center">Temps : <span id="tempsmorceauslot2"></span> / <span id="totaltempsslot2"></span></h6> 
<table width="100%" border="0">
  <tbody>
    <tr>
      <td>Volume</td>
      <td><input type="range" class="form-range" id="sliderslot2"  min="0" max="100" value="100" step="1" oninput="volumeslot2(this.value)" onchange="volumeslot2(this.value)"></td>
    </tr>
  </tbody>
</table>
</div>
</div>
<script>
// SLOT 2 ------------------------------------------------------------------------------
// audio temps reel Slot 2
var audioslot2 = document.getElementById('slot2');
audioslot2.ontimeupdate = function() {readreeltime2()};
function readreeltime2() {
var audioslot2 = document.getElementById('slot2');
document.getElementById("tempsmorceauslot2").innerHTML = audioslot2.currentTime; // Temps réel
document.getElementById("totaltempsslot2").innerHTML = audioslot2.duration; // Temps fin de morceau
}
//Slot1 Cue2
function slot2cue1() {	
var audioslot2 = document.getElementById('slot2');
audioslot2.currentTime = <?php echo $slot2cue1 ?>;
audioslot2.play();
document.getElementById('butslot2cue1').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot2cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2cue3').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2play').disabled = true; 
document.getElementById('butslot2pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot2 Cue2
function slot2cue2() {	
var audioslot2 = document.getElementById('slot2');
audioslot2.currentTime = <?php echo $slot2cue2 ?>;
audioslot2.play();
document.getElementById('butslot2cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2cue2').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot2cue3').className="btn btn-lg btn-secondary fs-4";
document.getElementById('butslot2play').disabled = true; 
document.getElementById('butslot2pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot2 Cue3
function slot2cue3() {	
var audioslot2 = document.getElementById('slot2');
audioslot2.currentTime = <?php echo $slot2cue3 ?>;
audioslot2.play();
document.getElementById('butslot2cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2cue3').className="btn btn-lg btn-danger fs-4";
document.getElementById('butslot2play').disabled = true; 
document.getElementById('butslot2pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot2stop').className="btn btn-lg btn-secondary fs-4"; 
}
</script>
