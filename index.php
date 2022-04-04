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
<script src="js/slots.js"></script>
</head>
<body>
<?php include('apropos.html') ?>
<?php include('aide.html') ?>
<header>
<?php 
include('menu.html');
?>
</header>
<main>
<div class="container">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
<!-- Lecteur 1 -->
<?php
include('slot1.php');
?>
<!-- Lecteur 2 -->	
<div class="col">
<?php
include('slot2.php');
?>
</div>
<!-- Lecteur 3 -->
<div class="col">
<?php
include('slot3.php');
?>
</div>
<!-- Lecteur 4 -->
<div class="col">
<?php
include('slot4.php');
?>
</div>
<!-- Lecteur 5 -->
<div class="col">
<?php
include('slot5.php');
?>
</div>
<!-- Lecteur 6 -->
<div class="col">
<?php
include('slot6.php');
?>
</div>
<!-- Lecteur 7 -->
<div class="col">
<?php
include('slot7.php');
?>
</div>	
<!-- Lecteur 8 -->
<div class="col">
<?php
include('slot8.php');
?>
</div>
<!-- Lecteur 9 -->
<div class="col">
<?php
include('slot9.php');
?>
</div>	

</div>
</div>
<br>
<footer class="text-center">Ronan Salieri - ronansalieri{[AT]}gmail.com - 2022 - <a href="https://github.com/RonanSalieri" target="_new">Github</a></footer>
</main>
</body>
</html>