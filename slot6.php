<?php
include('connect.php');
	$sql = "SELECT * FROM slot6 WHERE id=1";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$musicid=$row['musicid'];
	$slot6cue1=$row['cue1'];
	$slot6cue2=$row['cue2'];
	$slot6cue3=$row['cue3'];
	}
	$sql = "SELECT * FROM music WHERE id=$musicid";
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$slot6musicname=$row['musicname'];
	$slot6musicfile=$row['musicfile'];
	}
$slot6_short_musicname=substr($slot6musicname, 0, 25);
$bdd=null;			
?>	
<audio id="slot6" <?php echo"src='music/$slot6musicfile'";?>"></audio>
<div class="col">
<div class="card shadow-sm bg-light" style="padding: 5px;">
<div class="row">
<h6>Slot #6 - <?php echo"$slot6_short_musicname"; ?></h6>	
	<div class="col-md-4">
		<button id="butslot6cue1" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot6cue1()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot6cue2" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot6cue2()">CUE</button>
	</div>
	<div class="col-md-4">
		<button id="butslot6cue3" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="slot6cue3()">CUE</button>
	</div>

	<div class="col-md-4">
		<span><?php echo $slot6cue1; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot6cue2; ?></span>
	</div>
	<div class="col-md-4">
		<span><?php echo $slot6cue3; ?></span>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<button id="butslot6play" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="playslot6()">
			<span class="material-icons-outlined" style="font-size: 2rem;">play_arrow</span>
		</button>
	</div>
	<div class="col-md-4">
		<button id="butslot6pause" type="button" class="btn btn-lg btn-secondary fs-4" style="width:100%;" onClick="pauseslot6()">
			<span class="material-icons-outlined" style="font-size: 2rem;">pause</span>
		</button>
	</div>
	<div class="col-md-4">
		<button id="butslot6stop" type="button" class="btn btn-lg btn-primary fs-4" style="width:100%;" onClick="stopslot6()">
			<span class="material-icons-outlined" style="font-size: 2rem;">stop</span>
		</button>
	</div>
</div>
<h6 align="center">Temps : <span id="tempsmorceauslot6"></span> / <span id="totaltempsslot6"></span></h6> 
<table width="100%" border="0">
  <tbody>
    <tr>
      <td>Volume</td>
      <td><input type="range" class="form-range" id="sliderslot6"  min="0" max="100" value="100" step="1" oninput="volumeslot6(this.value)" onchange="volumeslot6(this.value)"></td>
    </tr>
  </tbody>
</table>
</div>
</div>
<script>
// SLOT 5 ------------------------------------------------------------------------------
// audio temps reel Slot 6
var audioslot6 = document.getElementById('slot6');
audioslot6.ontimeupdate = function() {readreeltime6()};
function readreeltime6() {
var audioslot6 = document.getElementById('slot6');
document.getElementById("tempsmorceauslot6").innerHTML = audioslot6.currentTime; // Temps réel
document.getElementById("totaltempsslot6").innerHTML = audioslot6.duration; // Temps fin de morceau
}
//Slot6 Cue1
function slot6cue1() {	
var audioslot6 = document.getElementById('slot6');
audioslot6.currentTime = <?php echo $slot6cue1 ?>;
audioslot6.play();
document.getElementById('butslot6cue1').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot6cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot6cue3').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot6play').disabled = true; 
document.getElementById('butslot6pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot6stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot6 Cue2
function slot6cue2() {	
var audioslot6 = document.getElementById('slot6');
audioslot6.currentTime = <?php echo $slot6cue2 ?>;
audioslot6.play();
document.getElementById('butslot6cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot6cue2').className="btn btn-lg btn-danger fs-4"; 
document.getElementById('butslot6cue3').className="btn btn-lg btn-secondary fs-4";
document.getElementById('butslot6play').disabled = true; 
document.getElementById('butslot6pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot6stop').className="btn btn-lg btn-secondary fs-4"; 
}
//Slot6 Cue3
function slot6cue3() {	
var audioslot6 = document.getElementById('slot6');
audioslot6.currentTime = <?php echo $slot6cue3 ?>;
audioslot6.play();
document.getElementById('butslot6cue1').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot6cue2').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot6cue3').className="btn btn-lg btn-danger fs-4";
document.getElementById('butslot6play').disabled = true; 
document.getElementById('butslot6pause').className="btn btn-lg btn-secondary fs-4"; 
document.getElementById('butslot6stop').className="btn btn-lg btn-secondary fs-4"; 
}
</script>
