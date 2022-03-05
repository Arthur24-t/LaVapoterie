<?php
session_start();
echo '<?xml version="1.0" encoding="utf-8"?>';

include_once("fonction-panier.php");

$action = (isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : null));
if ($action !== null) {
    if (!in_array($action, array('ajout', 'suppression', 'refresh')))
        $erreur = true;

    //récupération des variables en POST ou GET
    $i = (isset($_POST['i']) ? $_POST['i'] : (isset($_GET['i']) ? $_GET['i'] : null));
    $l = (isset($_POST['l']) ? $_POST['l'] : (isset($_GET['l']) ? $_GET['l'] : null));
    $p = (isset($_POST['p']) ? $_POST['p'] : (isset($_GET['p']) ? $_GET['p'] : null));
    $q = (isset($_POST['q']) ? $_POST['q'] : (isset($_GET['q']) ? $_GET['q'] : null));

    //Suppression des espaces verticaux
    $l = preg_replace('#\v#', '', $l);
    $i = preg_replace('#\v#', '', $i);
    //On vérifie que $p est un float
    $p = floatval($p);

    //On traite $q qui peut être un entier simple ou un tableau d'entiers

    if (is_array($q)) {
        $QteArticle = array();
        $i = 0;
        foreach ($q as $contenu) {
            $QteArticle[$i++] = intval($contenu);
        }
    } else
        $q = intval($q);
}

if (!$erreur) {
    switch ($action) {
        case "ajout":
            ajouterArticle($i, $l, $q, $p);
            break;

        case "suppression":
            supprimerArticle($l);
            break;

        case "refresh":
            for ($b = 0; $b < count($QteArticle); $b++) {
                modifierQTeArticle($_SESSION['panier']['libelleProduit'][$b], round($QteArticle[$b]));
            }
            break;
        default:
            break;
    }
}

?>


<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8" />

<head>
    <title>Site d'achat d'ecigarette</title>
    <link rel="icon" href="/image/logo.png" type="../image/icon type">
    <link rel="stylesheet" type="text/css" href="../css/produit.css" />

</head>

<div class="head">
    <?php include("/header.php"); ?>
</div>

<body>
    <?php include("header.php"); ?>
    <div id="container">

        <div class="produit"><div class="gauche">
            <div class="titre">
                <h1>Drip Trip Bleu                                                                      </h1> <!-- coller a droite -->
            </div>
            <div class="image">
        <img src='../image/produit/A23.jpg'>                         </div></div>
            <div class="droite">
            <div class="description">
                <p> Drip Trip de couleur bleu                                                                                                                                                 
                            </p> <!-- mettre a droite de l'image -->
            </div>
            <div class="prix">
                <p>  30         </p>
            </div>
            <div class="bouton">
              <a href='A23.php?action=ajout&amp;i=A23&amp;l=Drip Trip Bleu&amp;q=1&amp;p=30'>Ajouter au panier</a></div>                                                                   </div>
        </div>

    </div>

</body>

</html>