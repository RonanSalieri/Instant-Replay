<?php
// Déclaration des variables
$numberslot = $_POST['numberslot'];
$cue1 = $_POST['cue1'];
$cue2 = $_POST['cue2'];
$cue3 = $_POST['cue3'];
$slot = "numberslot=".$numberslot;
$sqlslot = "slot".$numberslot;

// Requête
include('connect.php');
$sql = "UPDATE ".$sqlslot." SET CUE1 = '$cue1', CUE2 = '$cue2', CUE3 = '$cue3' WHERE ".$sqlslot.".id = '1'";
echo $sql;
$req = $bdd->query($sql);
$bdd=null;
header('Location: editslot.php?'.$slot);
?>


