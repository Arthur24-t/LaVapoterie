<?php
session_start();
$user = strtolower($_SESSION['username']);
    

if (isset($_POST['save'])) {
    $db_username = 'root';
    $db_password = '1234';
    $db_name     = 'lavapoterie';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password, $db_name)
        or die('could not connect to database');

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $numCarte = mysqli_real_escape_string($db, htmlspecialchars($_POST['numCarte']));
    $dateCarte = mysqli_real_escape_string($db, htmlspecialchars($_POST['dateCarte']));
    $cryptoCarte = mysqli_real_escape_string($db, htmlspecialchars($_POST['cryptoCarte']));
    

    $query = "UPDATE `client` SET `cliAdresse`= '$adresse',
    `cliNumCarte`= '$numCarte',
    `cliDateExpiration`= '$dateCarte',
    `cliCryptogramme`= '$cryptoCarte' 
    WHERE cliPseudo LIKE '$user'";
echo "$query";
$res = mysqli_query($db, $query);
header('Location: fonction-commande.php');
}

$numCarte = mysqli_real_escape_string($db, htmlspecialchars($_POST['numCarte']));
$dateCarte = mysqli_real_escape_string($db, htmlspecialchars($_POST['dateCarte']));
$cryptoCarte = mysqli_real_escape_string($db, htmlspecialchars($_POST['cryptoCarte']));

// pas de terminal de paiement mais les valeur son sorti comme si on pouvait les verifier !


header('Location: fonction-commande.php');
