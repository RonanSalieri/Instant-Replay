<?php
include('connect.php');
	$sql = "SELECT * FROM slot4 WHERE id=1";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$musicid=$row['musicid'];
	$slot4cue1=$row['cue1'];
	$slot4cue2=$row['cue2'];
	$slot4cue3=$row['cue3'];
	}
	$sql = "SELECT * FROM music WHERE id=$musicid";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$slot4musicname=$row['musicname'];
	$slot4musicfile=$row['musicfile'];
	}
$slot4_short_musicname=substr($slot4musicname, 0, 25);
$bdd=null;			
?>	
<audio id="slot4" <?php echo"src='music/$slot4musicfile'";?>"></audio>
<div class="col">
<div class="card shadow-sm bg-light" style="padding: 5px;">
<div class="row">
<h6>Slot #4 - <?php echo"$slot4_short_musicname"; ?></h6>	
	<div class="col-md-4">
		<button id="butslot4cue1" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot4cue1()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot4cue2" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot4cue2()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot4cue3" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot4cue3()">CUE</button>
	</div>

	<div class="col-md-4">
		<span><?php echo $slot4cue1; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot4cue2; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot4cue3; ?></span>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<button id="butslot4play" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="playslot4()">
			<span class="material-icons-outlined" style="font-size: 2rem;">play_arrow</span>
		</button>
	</div>
	<div class="col-md-4">
		<button id="butslot4pause" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="pauseslot4()">
			<span class="material-icons-outlined" style="font-size: 2rem;">pause</span>
		</button>
	</div>
	<div class="col-md-4">
		<button id="butslot4stop" type="button" class="btn btn-lg btn-primary fs-4" style="width:100%;" onClick="stopslot4()">
			<span class="material-icons-outlined" style="font-size: 2rem;">stop</span>
		</button>
	</div>
</div>
<h6 align="center">Temps : <span id="tempsmorceauslot4"></span> / <span id="totaltempsslot4"></span></h6> 
<table width="100%" border="0">
  <tbody>
    <tr>
      <td>Volume</td>
      <td><input type="range" class="form-range" id="sliderslot4"  min="0" max="100" value="100" step="1" oninput="volumeslot4(this.value)" onchange="volumeslot4(this.value)"></td>
    </tr>
  </tbody>
</table>
</div>
</div>
<script>
// SLOT 4 ------------------------------------------------------------------------------
// audio temps reel Slot 4
var audioslot4 = document.getElementById('slot4');
audioslot4.ontimeupdate = function() {readreeltime4()};
function readreeltime4() {
var audioslot4 = document.getElementById('slot4');
document.getElementById("tempsmorceauslot4").innerHTML = audioslot4.currentTime; // Temps réel
document.getElementById("totaltempsslot4").innerHTML = audioslot4.duration; // Temps fin de morceau
}
//Slot4 Cue1
function slot4cue1() {	
var audioslot4 = document.getElementById('slot4');
audioslot4.currentTime = <?php echo $slot4cue1 ?>;
audioslot4.play();
document.getElementById('butslot4cue1').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot4cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot4cue3').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot4play').disabled = true; 
document.getElementById('butslot4pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot4stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot4 Cue2
function slot4cue2() {	
var audioslot4 = document.getElementById('slot4');
audioslot4.currentTime = <?php echo $slot4cue2 ?>;
audioslot4.play();
document.getElementById('butslot4cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot4cue2').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot4cue3').className="btn btn-lg btn-secondary fs-4";
document.getElementById('butslot4play').disabled = true; 
document.getElementById('butslot4pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot4stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot4 Cue3
function slot4cue3() {	
var audioslot4 = document.getElementById('slot4');
audioslot4.currentTime = <?php echo $slot4cue3 ?>;
audioslot4.play();
document.getElementById('butslot4cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot4cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot4cue3').className="btn btn-lg btn-danger fs-4";
document.getElementById('butslot4play').disabled = true; 
document.getElementById('butslot4pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot4stop').className="btn btn-lg btn-secondary fs-4"; 
}
</script>
