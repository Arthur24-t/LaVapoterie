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
    <title>Site d'achat d'ecigarette</title>
    <link rel="icon" href="/image/logo.png" type="../image/icon type">
    <link rel="stylesheet" type="text/css" href="../css/produit.css" />

</head>

<div class="head">
    <?php include("header.php"); ?>
</div>

<body>
    <?php include("header.php"); ?>
    <div id="container">

    <div class="produit">
         <div class="gauche">
            <div class="titre">
               <h1>Pod Kroma Z Innokin</h1> 
            </div>
            <div class="image">
               <img src='../image/produit/C50.jpg'>
            </div>
         </div>
         <div class="droite">
            <div class="description">
               <p>  Avec le Pod Kroma Z, Innokin entre dans cette nouvelle génération de cigarette électronique qui propose un kit simple et ergonomique, associé à une cartouche de bonne contenance (4,5 ml) et des résistances polyvalentes. Le pod Kroma Z est en effet capable d'offrir une vape indirecte et semi-directe, car il permet de varier l'aération et d'obtenir un tirage serré ou plus aérien.</p> <!-- mettre a droite 30€image -->

               </p> 
            </div>
            <div class="prix">
               <p> 34 €</p>
            </div>
            <div class="bouton">
               <a href='C50.php?action=ajout&amp;i=C50&amp;l=Pod Kroma Z Innokin&amp;q=1&amp;p=34'>Ajouter au panier</a>
            </div>
         </div>
      </div>                                                                                                        </div>
        </div>

    </div>

</body>

</html>