<?php 
// Déclaration des variables
$target_dir = "music/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$musicFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$musictitle = $_POST['musictitle'];
$fichierdd = $_FILES["fileToUpload"]["name"];

// Le fichier existe ?
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Verification de la taille du fichier
if ($_FILES["fileToUpload"]["size"] > 2000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// On a le droit qu'au MP3 et WAV
if($musicFileType != "mp3" && $musicFileType != "wav" ) {
  echo "Sorry, only mp3, & wav files are allowed.";
  $uploadOk = 0;
}

// Upload ok ?
if ($uploadOk == 0) {
  header('Location: file.php');
// On télécharge
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	  include('connect.php');
	  $sql = "INSERT INTO music (id, musicname, musicfile) VALUES (NULL, '$musictitle', '$fichierdd')";
	  $req = $bdd->query($sql);
	  header('Location: file.php');
	  
  } else {
    echo "Sorry, there was an error uploading your file.";
    header('Location: file.php');
  }
}
?>