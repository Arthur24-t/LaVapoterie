<?php 

// connexion à la base de données
$db_username = 'root';
$db_password = '1234';
$db_name     = 'lavapoterie';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
       or die('could not connect to database');

// on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
// pour éliminer toute attaque de type injection SQL et XSS
$adresse = mysqli_real_escape_string($db,htmlspecialchars($_POST['adresse'])); 
$cAdresse = mysqli_real_escape_string($db,htmlspecialchars($_POST['ComplementAdresse']));
$cPostal = mysqli_real_escape_string($db,htmlspecialchars($_POST['Cpostal']));
$Ville =mysqli_real_escape_string($db,htmlspecialchars($_POST['Ville']));

$facAdresse = mysqli_real_escape_string($db,htmlspecialchars($_POST['adresseFac'])); 
$facCAdresse = mysqli_real_escape_string($db,htmlspecialchars($_POST['complementAdresseFac']));
$facCPostal = mysqli_real_escape_string($db,htmlspecialchars($_POST['CpostalFac']));
$facVille =mysqli_real_escape_string($db,htmlspecialchars($_POST['villeFac']));


?>