<?php
// Déclaration de variable
$musicid = $_GET['file'];

// Connection à la base donnée, requête et destruction du ficher
include('connect.php');
$sql="SELECT musicfile FROM music WHERE music.id=$musicid";
$req = $bdd->query($sql);
while($row = $req->fetch()) {
$musicfile=$row['musicfile'];
}
$musicfile = "music/$musicfile";
if (file_exists ($musicfile))
	unlink ($musicfile);

$sql="DELETE FROM music WHERE music.id=$musicid";
$req = $bdd->query($sql);

$bdd=null;
header('Location: file.php');


?>