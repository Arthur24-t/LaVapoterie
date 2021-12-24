<?php
session_start();
include_once("fonction-panier.php");


try {
//test de la connection
    $pdo = new PDO(
        'mysql:host=localhost;dbname=site;charset=utf8',
        'root',
        '1234'
    );
echo"connecter";

} catch (PDOException $exception) {

    mail('VOTRE_EMAIL', 'PDOException', $exception->getMessage());
    exit('Erreur de connexion à la base de données');
}



$nbArticles = count($_SESSION['panier']['libelleProduit']);//recupere le nombre de produit dans la panier 

for ($i = 0; $i < $nbArticles; $i++) {
   $id= $_SESSION['panier']['idProduit'][$i];
   $nb = $_SESSION['panier']['qteProduit'][$i];
   echo $id;

//$requete = "SELECT prodStock FROM produit WHERE prodId = '$id'";

$requete = "UPDATE produit SET prodStock= prodStock-$nb  WHERE prodID='$id'";

$test =$pdo->prepare($requete);
$test->execute();
$bleu = $test->fetch();





}
