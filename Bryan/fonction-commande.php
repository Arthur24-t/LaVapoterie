<?php
session_start();
include_once("fonction-panier.php");


try {

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

$nbArticles = count($_SESSION['panier']['libelleProduit']);

for ($i = 0; $i < $nbArticles; $i++) {
   $id= $_SESSION['panier']['idProduit'][$i];
$requete = "UPDATE produit SET prodStock = prodStock - 1 WHERE prodId = $id";

$pdo->exec($requete);

}
