<?php 
session_start();
$numCommande = $_SESSION["numCom"];
?>


<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8" />

<head>
    <link rel="stylesheet" type="text/css" href="commande.css" />
</head>
<div class="head">
    <?php include("header.php"); ?>
</div>


<body>
    <div class="bordereaux">
        <p>Merci de votre commande !</p>
        <p>vos produit numero :<?php echo $numCommande;?> sera expedié dans les meilleurs delais </p>
        <a href="index.php">Poursuivez votre shopping</a>
<?php 

    
?>



    </div>
</body>

</html>