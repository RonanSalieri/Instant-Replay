<?php
include('connect.php');
	$sql = "SELECT * FROM slot7 WHERE id=1";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$musicid=$row['musicid'];
	$slot7cue1=$row['cue1'];
	$slot7cue2=$row['cue2'];
	$slot7cue3=$row['cue3'];
	}
	$sql = "SELECT * FROM music WHERE id=$musicid";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$slot7musicname=$row['musicname'];
	$slot7musicfile=$row['musicfile'];
	}
$slot7_short_musicname=substr($slot7musicname, 0, 25);
$bdd=null;			
?>	
<audio id="slot7" <?php echo"src='music/$slot7musicfile'";?>"></audio>
<div class="col">
<div class="card shadow-sm bg-light" style="padding: 5px;">
<div class="row">
<h6>Slot #7 - <?php echo"$slot7_short_musicname"; ?></h6>	
	<div class="col-md-4">
		<button id="butslot7cue1" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot7cue1()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot7cue2" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot7cue2()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot7cue3" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot7cue3()">CUE</button>
	</div>

	<div class="col-md-4">
		<span><?php echo $slot7cue1; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot7cue2; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot7cue3; ?></span>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<button id="butslot7play" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="playslot7()">
			<span class="material-icons-outlined" style="font-size: 2rem;">play_arrow</span>
		</button>
	</div>
	<div class="col-md-4">
		<button id="butslot7pause" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="pauseslot7()">
			<span class="material-icons-outlined" style="font-size: 2rem;">pause</span>
		</button>
	</div>
	<div class="col-md-4">
		<button id="butslot7stop" type="button" class="btn btn-lg btn-primary fs-4" style="width:100%;" onClick="stopslot7()">
			<span class="material-icons-outlined" style="font-size: 2rem;">stop</span>
		</button>
	</div>
</div>
<h6 align="center">Temps : <span id="tempsmorceauslot7"></span> / <span id="totaltempsslot7"></span></h6> 
<table width="100%" border="0">
  <tbody>
    <tr>
      <td>Volume</td>
      <td><input type="range" class="form-range" id="sliderslot7"  min="0" max="100" value="100" step="1" oninput="volumeslot7(this.value)" onchange="volumeslot7(this.value)"></td>
    </tr>
  </tbody>
</table>
</div>
</div>
<script>
// SLOT 7 ------------------------------------------------------------------------------
// audio temps reel Slot 7
var audioslot7 = document.getElementById('slot7');
audioslot7.ontimeupdate = function() {readreeltime7()};
function readreeltime7() {
var audioslot7 = document.getElementById('slot7');
document.getElementById("tempsmorceauslot7").innerHTML = audioslot7.currentTime; // Temps réel
document.getElementById("totaltempsslot7").innerHTML = audioslot7.duration; // Temps fin de morceau
}
//Slot7 Cue1
function slot7cue1() {	
var audioslot7 = document.getElementById('slot7');
audioslot7.currentTime = <?php echo $slot7cue1 ?>;
audioslot7.play();
document.getElementById('butslot7cue1').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot7cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot7cue3').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot7play').disabled = true; 
document.getElementById('butslot7pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot7stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot7 Cue2
function slot7cue2() {	
var audioslot7 = document.getElementById('slot7');
audioslot7.currentTime = <?php echo $slot7cue2 ?>;
audioslot7.play();
document.getElementById('butslot7cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot7cue2').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot7cue3').className="btn btn-lg btn-secondary fs-4";
document.getElementById('butslot7play').disabled = true; 
document.getElementById('butslot7pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot7stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot7 Cue3
function slot7cue3() {	
var audioslot7 = document.getElementById('slot7');
audioslot7.currentTime = <?php echo $slot7cue3 ?>;
audioslot7.play();
document.getElementById('butslot7cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot7cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot7cue3').className="btn btn-lg btn-danger fs-4";
document.getElementById('butslot7play').disabled = true; 
document.getElementById('butslot7pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot7stop').className="btn btn-lg btn-secondary fs-4"; 
}
</script>
