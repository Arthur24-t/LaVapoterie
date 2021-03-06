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
               <h1>Aegis Solo </h1> <!-- coller a droite -->
            </div>
            <div class="image">
               <img src='../image/produit/C14.jpg'>
            </div>
         </div>
         <div class="droite">
            <div class="description">
               <p> Aegis Solo est un cigarette accessible au petit budget,
                  et pour les débutants cherchant à réduire leur consommation de cigarette et de nicotine.
                  La Aegis Solo est une box de type électronique dans laquelle il faudra mettre en place un accu 18650.
                  Légère et peu encombrante, elle peut tout de même délivrer jusqu'à 100 Watts !
                  Muni du chipset AS de dernière génération, elle réagit au quart de tour et offre une multitude de réglages qui s'opèrent très facilement.
               </p> <!-- mettre a droite de l'image -->
            </div>
            <div class="prix">
               <p> 54€ </p>
            </div>
            <div class="bouton">
               <a href='C14.php?action=ajout&amp;i=C14&amp;l=Aegis Solo&amp;q=1&amp;p=54€'>Ajouter au panier</a>
            </div>
         </div>
      </div>

   </div>

</body>

</html>