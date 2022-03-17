<?php
session_start();
echo '<?xml version="1.0" encoding="utf-8"?>';
include_once("fonction-panier.php");

$erreur = false;

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

echo '<?xml version="1.0" encoding="utf-8"?>'; ?>




<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8" />

<head>
    <title>Immanquables</title>
    <link rel="icon" href="/image/logo.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="site.css" />
   <!-- <link rel="stylesheet" type="text/css" href="../css/immanquables.css" />-->
</head>

<div class="head">
    <?php include("header.php"); ?>
</div>


<body>


<div class="corps">


<div class="produit">

    <div class="item">
        <a href="A03.php">
            <div class="image_produit"><img src="../image/produit/A03.jpg">
            </div>
            <div class="tout">
                <div class="nom_produit">
                    <p>Rangement </p>
                </div>
                <div class="descprition_produit">
                    <p>Boite de rangement <br> pour cigarette</p>
                </div>
                <div class="prix_produit">
                    <p>25€</p>
                </div>
                <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A03&amp; l=Rangement&amp;q=1&amp;p=25">Ajouter au panier</a></div>
            </div>
        </a>
    </div>



    <div class="item">
        <a href="A19.php">
            <div class="image_produit"><img src="../image/produit/A19.jpg">
            </div>
            <div class="tout">
                <div class="nom_produit">
                    <p>Seringue </p>
                </div>
                <div class="descprition_produit">
                    <p>Seringue de 10ml </p>
                </div>
                <div class="prix_produit">
                    <p>2€</p>
                </div>
                <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A19&amp; l=Seringue&amp;q=1&amp;p=2">Ajouter au panier</a></div>
            </div>
        </a>
    </div>


</div>

</body>

</html>