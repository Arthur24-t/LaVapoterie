<?php
session_start();
$user = strtolower($_SESSION['username']);

$numCommande = $_SESSION["numCom"];

$db_username = 'root';
$db_password = '1234';
$db_name     = 'lavapoterie';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password, $db_name)
    or die('could not connect to database');

$sql  = "SELECT prodId, prodNom, quantite, prodPrix FROM produit,detailCommande WHERE refProduit = prodId AND refCommande = '$numCommande'";

$result = mysqli_query($db, $sql);


$requete =  "SELECT cliAdresse, cliCompAdresse, cliCPostal, cliVille FROM client WHERE cliPseudo LIKE '$user';";

// Exécution de la requête sur la connexion établie
$exe = mysqli_query($db, $requete);

// nombre de lignes retournées par la requête SQL
$num_rows = mysqli_num_rows($exe);

// Affichage du résultat de la requête par une boucle TANT QUE (While)


// ------------------------------------------------------
while ($a_row = mysqli_fetch_row($exe)) {
    $i = 0;
    foreach ($a_row as $field) {
        $i++;
        $tab[$i] = $field;
    }
}


?>


<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8" />

<head>
    <link rel="stylesheet" type="text/css" href="confirmation-commande.css" />
</head>
<div class="head">
    <?php include("header.php"); ?>
</div>


<body>
    <div class="bordereaux">
        <div class="millieu">
            <h1>Merci de votre commande !</h1>
            <p>votre commande numero :<?php echo $numCommande; ?> sera expedié dans les meilleurs delais a votre adresse :</p>
            <?php echo"<p>$tab[1] $tab[2], $tab[3], $tab[4]  </p>"; ?>
            <p>Detail de votre commande : </p>

            <?php
            echo "<div class='table'><table cellspacing= 50px align='center'>

            <td><h4>Refenrence produit</h4></td>
            <td align='left'><h4>Libellé</h4></td>
            <td align='center'><h4>Quantité</h4></td>
            <td><h4>Prix</h4></td>
            ";

            // ------------------------------------------------------
            while ($a_row = mysqli_fetch_row($result)) {
                echo "<tr>\n";
                foreach ($a_row as $field)  // Affichage d'un champ dans la cellule du tableau
                    echo "\t<td align='center'>$field</td>\n";
                echo "</tr>\n";
            }
            // ---------------------------------------------------------- 

            echo "</table>\n</div>";

            mysqli_close($db);  // Fermeture de la oonnexion à la BDD

            ?>




            <a href="index.php">Poursuivez votre shopping</a>
            <?php


            ?>


        </div>
    </div>
</body>

</html>