<?php
// Déclaration des variables
$numberslot = $_POST['numberslot'];
$musicid = $_POST['musicid'];
$slot = "numberslot=".$numberslot;
$sqlslot = "slot".$numberslot;

// Modification de la base de données
include('connect.php');
$sql = "UPDATE ".$sqlslot." SET musicid = '$musicid', cue1 = '0', cue2 = '0', cue3 = '0'  WHERE ".$sqlslot.".id = '1'";
$req = $bdd->query($sql);
$bdd=null;
header('Location: editslot.php?'.$slot);
?>
