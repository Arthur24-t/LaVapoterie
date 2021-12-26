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
} catch (PDOException $exception) {

    mail('VOTRE_EMAIL', 'PDOException', $exception->getMessage());
    exit('Erreur de connexion à la base de données');
}
//------------------------affectation numero de commande -----------------

$requete = "SELECT MAX(comRef) FROM commande";

    $exe = $pdo->prepare($requete);
    $exe->execute();
    $fini = $exe->fetchAll();

    //echo $fini;

    
    $conn = mysqli_connect('localhost', 'root', '1234', 'site');


// On créé la requête
$req = "SELECT * FROM produit";
 
// on envoie la requête
$res = $conn->query($req);
 
// on va scanner tous les tuples un par un
echo "<table>";
while ($data = mysqli_fetch_array($res)) {
    // on affiche les résultats
    echo "<tr><td>".$data['id']."</td><td>".$data['texte']."</td></tr>";
}
echo "</table>";




//-------------------------------------------------------


$nbArticles = count($_SESSION['panier']['libelleProduit']); //recupere le nombre de produit dans la panier 

for ($i = 0; $i < $nbArticles; $i++) {
    $id = $_SESSION['panier']['idProduit'][$i];
    $nb = $_SESSION['panier']['qteProduit'][$i];
    $date = date('d-m-y h:i:s');
    $

    //$requete = "SELECT prodStock FROM produit WHERE prodId = '$id'";

    $requete = "UPDATE produit SET prodStock= prodStock-$nb  WHERE prodID='$id'";

    $exe = $pdo->prepare($requete);
    $exe->execute();
    $fini = $exe->fetch();
}

supprimePanier();
?>

<?php
session_start();
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