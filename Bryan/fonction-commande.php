<?php
session_start();
include_once("fonction-panier.php");

//connection a la base de donnée 
if (isset($_SESSION['username'])){

$db_username = 'root';
    $db_password = '1234';
    $db_name     = 'lavapoterie';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');

//------------------------------------affecter le numero de commande  ---------------------------
function numCommande($db){

$numCom = rand(1,100000);

$sql  = "SELECT COUNT(*) AS nbr FROM client WHERE cliPseudo = '".$numCom."'";  //recherche du pseudo dans la base de donnée
        
        $ex  = mysqli_query($db,$sql);
        $alors  = mysqli_fetch_assoc($ex);

        if((!$alors['nbr'] == 0)){
            numCommande($db);
        }
        else{
            return $numCom;
        }
}
//------------------------------------mettre dans les tables ---------------------------

$ncom = numCommande($db);
$user = $_SESSION['username'];
$today = date("y-m-d");

$requete_commande = "INSERT into commande (comRef,`comClient`,`comDate`) 
VALUES($ncom, '$user','$today')"; // creation de la commande 

$exe_commande = mysqli_query($db, $requete_commande);

$nbArticle = count($_SESSION['panier']['libelleProduit']); //recupere le nombre de produit dans le panier 

for ($i = 0; $i < $nbArticle; $i++) { // chaque produit va se mettre dans le detail de commande 
    $id = $_SESSION['panier']['idProduit'][$i];
    $nb = $_SESSION['panier']['qteProduit'][$i];

    $query = "INSERT into detailCommande (`refProduit`,`refCommande`,quantite)
    VALUES('$id', $ncom,$nb)";
    echo $query;
// Exécuter la requête sur la base de données
$res = mysqli_query($db, $query);


}

           

           
//-----------------------retire les produit du stock--------------------------------

for ($i = 0; $i < $nbArticle; $i++) {
    $id = $_SESSION['panier']['idProduit'][$i];
    $nb = $_SESSION['panier']['qteProduit'][$i];
    $date = date('d-m-y h:i:s');
    

    //$requete = "SELECT prodStock FROM produit WHERE prodId = '$id'";

    $requete = "UPDATE produit SET prodStock= prodStock-$nb  WHERE prodID='$id'";

    $exe = $db->prepare($requete);
    $exe->execute();
    $fini = $exe->fetch();
}

supprimePanier(); // supprime le panier a la fin de la commande 

echo '<?xml version="1.0" encoding="utf-8"?>';
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
        <p>vos produit sera expedié dans les meilleurs delais </p>
        <a href="index.php">Poursuivez votre shopping</a>
    </div>
</body>

</html>
<?php } 

else {

    header('Location: connection.php?erreur=3');

}

?>
