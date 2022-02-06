<?php 
session_start();
$numCommande = $_SESSION["numCom"];

$db_username = 'root';
    $db_password = '1234';
    $db_name     = 'lavapoterie';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');

           $sql  = "SELECT prodId, prodNom, quantite FROM produit,detailcommande WHERE refProduit = prodId AND refCommande = '$numCommande'";

           $result = mysqli_query($db,$sql);
           
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
        <p>Merci de votre commande !</p>
        <p>votre commande numero :<?php echo $numCommande;?> sera expedié dans les meilleurs delais </p>
        <p>Detail de votre commande : </p>

        <?php 
         print "<table bgcolor=yellow border=2>\n";

         // ------------------------------------------------------
          while ( $a_row = mysqli_fetch_row( $result ) )
              {
              print "<tr>\n";
              foreach ( $a_row as $field )  // Affichage d'un champ dans la cellule du tableau
                  print "\t<td>$field</td>\n";
              print "</tr>\n";
              }
         // ---------------------------------------------------------- 
         
         print "</table>\n";
         
          mysqli_close( $db );  // Fermeture de la oonnexion à la BDD
         
        ?>




        <a href="index.php">Poursuivez votre shopping</a>
<?php 

    
?>


</div>
    </div>
</body>

</html>