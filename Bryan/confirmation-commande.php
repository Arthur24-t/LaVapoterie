<?php
session_start();
$numCommande = $_SESSION["numCom"];

$db_username = 'root';
$db_password = '1234';
$db_name     = 'lavapoterie';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password, $db_name)
    or die('could not connect to database');

$sql  = "SELECT prodId, prodNom, quantite, prodPrix FROM produit,detailCommande WHERE refProduit = prodId AND refCommande = '$numCommande'";

$result = mysqli_query($db, $sql);

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
            <p>votre commande numero :<?php echo $numCommande; ?> sera expedié dans les meilleurs delais </p>
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