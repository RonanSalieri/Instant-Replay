<?php
// Ordre de visualisation des fichiers
$ordre = $_GET['ordre'];
if ($ordre==""){
	$requete = "SELECT * FROM music ORDER BY music.id ASC";
}
if ($ordre=="DESC"){
	$requete = "SELECT * FROM music ORDER BY music.id DESC";
}
if ($ordre=="ASC"){
	$requete = "SELECT * FROM music ORDER BY music.id ASC";
}
if ($ordre=="TITDESC"){
	$requete = "SELECT * FROM music ORDER BY music.musicname DESC";
}
if ($ordre=="TITASC"){
	$requete = "SELECT * FROM music ORDER BY music.musicname ASC";
}
if ($ordre=="FICDESC"){
	$requete = "SELECT * FROM music ORDER BY music.musicfile DESC";
}
if ($ordre=="FICASC"){
	$requete = "SELECT * FROM music ORDER BY music.musicfile ASC";
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Instant Replay 1.0</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<title>Instant Replay 1.0</title>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
<script src="js/bootstrap.js"></script>
</head>
<body>
<header>
<?php include('menu.html'); ?>
<?php include('apropos.html') ?>
<?php include('aide.html') ?>
</header>
<main>
<div class="container">
<div class="row">
<div class="col-12">
<h1>Bibliothèque des musiques</h1>
<h4>Ajouter un fichier dans la bibliothèque</h4>
<div class="col-12">
<!-- Début de form pour ajouter des fichiers -->
	<form action="addfile.php" method="post" enctype="multipart/form-data">
	<label class="form-label">Titre du morceau</label>
	<input type="text" name="musictitle" id="musictitle" class="form-control" placeholder="Titre du morceau" aria-describedby="basic-addon1">		
	<label class="form-label">Nouveau fichier</label>
	<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
	<input type="file" class="form-control" id="fileToUpload" name="fileToUpload">
	<br>
</div>
<div class="col-12" align="center">
	<input type="submit" class="btn btn-primary" value="Ajouter">
</div>
</form>
<!-- Fin du Form d'ajout des fichiers -->
<div class="col-12">
<h4>Bibliothèque</h4>
<table class="table table-hover"> 
<thead> 
<tr> 
<th scope="col">
	<a href="file.php?ordre=DESC">
		<span class="material-icons-outlined">
			arrow_drop_down
		</span>
	</a>
	<a href="file.php?ordre=ASC">
		<span class="material-icons-outlined">
			arrow_drop_up
		</span>
	</a>
</th> 
<th scope="col">Titre
	<a href="file.php?ordre=TITDESC">
		<span class="material-icons-outlined">
			arrow_drop_down
		</span>
	</a>
	<a href="file.php?ordre=TITASC">
		<span class="material-icons-outlined">
			arrow_drop_up
		</span>
	</a>
	</th> 
<th scope="col">Nom du fichier
	<a href="file.php?ordre=FICDESC">
	<span class="material-icons-outlined">
		arrow_drop_down
	</span>
	</a>
	<a href="file.php?ordre=FICASC">
	<span class="material-icons-outlined">
		arrow_drop_up
	</span>
	</a>
</th> 
<th scope="col">Lecteur</th> 
<th scope="col">Action</th> 
</tr>                                     
</thead>                                 
<tbody> 
<?php
	// Affichage des fichiers inclus dans la base de données
	include('connect.php');
	$sql = $requete;
	$req = $bdd->query($sql);
	while($row = $req->fetch()) {
	$musicid=$row['id'];
	$musicname=$row['musicname'];
	$musicfile=$row['musicfile'];
?>
	<tr> 
		<td><?php echo $musicid; ?></th> 
		<td><?php echo $musicname; ?></td> 
		<td><?php echo $musicfile; ?></td> 
		<td>
			<?php echo"<audio src='music/$musicfile' controls></audio>"; ?>	
		</td>
		<td>
			<?php echo"<a href='delete_file.php?file=$musicid'>";?>
			<button type="button" class="btn btn-danger">Détruire</button></a>
		</td>
	</tr>
<?php 
}
$bdd=null;
?>
</tbody>                                 
</table>
</div>	
</main>	
<footer class="text-center">Ronan Salieri - ronansalieri{[AT]}gmail.com - 2022 - <a href="https://github.com/RonanSalieri" target="_new">Github</a></footer>
</body>
</html>