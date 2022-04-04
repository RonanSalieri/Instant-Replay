<?php
include('connect.php');
	$sql = "SELECT * FROM slot5 WHERE id=1";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$musicid=$row['musicid'];
	$slot5cue1=$row['cue1'];
	$slot5cue2=$row['cue2'];
	$slot5cue3=$row['cue3'];
	}
	$sql = "SELECT * FROM music WHERE id=$musicid";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$slot5musicname=$row['musicname'];
	$slot5musicfile=$row['musicfile'];
	}
$slot5_short_musicname=substr($slot5musicname, 0, 25);
$bdd=null;			
?>	
<audio id="slot5" <?php echo"src='music/$slot5musicfile'";?>"></audio>
<div class="col">
<div class="card shadow-sm bg-light" style="padding: 5px;">
<div class="row">
<h6>Slot #5 - <?php echo"$slot5_short_musicname"; ?></h6>	
	<div class="col-md-4">
		<button id="butslot5cue1" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot5cue1()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot5cue2" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot5cue2()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot5cue3" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot5cue3()">CUE</button>
	</div>

	<div class="col-md-4">
		<span><?php echo $slot5cue1; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot5cue2; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot5cue3; ?></span>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<button id="butslot5play" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="playslot5()">
			<span class="material-icons-outlined" style="font-size: 2rem;">play_arrow</span>
		</button>
	</div>
	<div class="col-md-4">
		<button id="butslot5pause" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="pauseslot5()">
			<span class="material-icons-outlined" style="font-size: 2rem;">pause</span>
		</button>
	</div>
	<div class="col-md-4">
		<button id="butslot5stop" type="button" class="btn btn-lg btn-primary fs-4" style="width:100%;" onClick="stopslot5()">
			<span class="material-icons-outlined" style="font-size: 2rem;">stop</span>
		</button>
	</div>
</div>
<h6 align="center">Temps : <span id="tempsmorceauslot5"></span> / <span id="totaltempsslot5"></span></h6> 
<table width="100%" border="0">
  <tbody>
    <tr>
      <td>Volume</td>
      <td><input type="range" class="form-range" id="sliderslot5"  min="0" max="100" value="100" step="1" oninput="volumeslot5(this.value)" onchange="volumeslot5(this.value)"></td>
    </tr>
  </tbody>
</table>
</div>
</div>
<script>
// SLOT 5 ------------------------------------------------------------------------------
// audio temps reel Slot 5
var audioslot5 = document.getElementById('slot5');
audioslot5.ontimeupdate = function() {readreeltime5()};
function readreeltime5() {
var audioslot5 = document.getElementById('slot5');
document.getElementById("tempsmorceauslot5").innerHTML = audioslot5.currentTime; // Temps réel
document.getElementById("totaltempsslot5").innerHTML = audioslot5.duration; // Temps fin de morceau
}
//Slot5 Cue1
function slot5cue1() {	
var audioslot5 = document.getElementById('slot5');
audioslot5.currentTime = <?php echo $slot5cue1 ?>;
audioslot5.play();
document.getElementById('butslot5cue1').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot5cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot5cue3').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot5play').disabled = true; 
document.getElementById('butslot5pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot5stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot5 Cue2
function slot5cue2() {	
var audioslot5 = document.getElementById('slot5');
audioslot5.currentTime = <?php echo $slot5cue2 ?>;
audioslot5.play();
document.getElementById('butslot5cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot5cue2').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot5cue3').className="btn btn-lg btn-secondary fs-4";
document.getElementById('butslot5play').disabled = true; 
document.getElementById('butslot5pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot5stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot5 Cue3
function slot5cue3() {	
var audioslot5 = document.getElementById('slot5');
audioslot5.currentTime = <?php echo $slot5cue3 ?>;
audioslot5.play();
document.getElementById('butslot5cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot5cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot5cue3').className="btn btn-lg btn-danger fs-4";
document.getElementById('butslot5play').disabled = true; 
document.getElementById('butslot5pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot5stop').className="btn btn-lg btn-secondary fs-4"; 
}
</script>
