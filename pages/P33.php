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
               <h1>Mod Juxta V2 Carbone Pro-MS</h1> 
            </div>
            <div class="image">
               <img src='../image/produit/P33.jpg'>
            </div>
         </div>
         <div class="droite">
            <div class="description">
               <p>  Le mod Juxta V2 Carbone Pro-MS est un mod méca à double barreau, conçu pour fonctionner avec deux accus de type 18650. Installés en série, le mod Juxta V2 offre jusqu'à 8.4 Volts.
                    Le mod Juxta V2 est une véritable box mécanique fabriquée en carbone et laiton. Les platines et le bouton de contact sont également en laiton. </p> <!-- mettre a droite 30€image -->

               </p> 
            </div>
            <div class="prix">
               <p> 380 €</p>
            </div>
            <div class="bouton">
               <a href='P33.php?action=ajout&amp;i=P33&amp;l=Mod Juxta V2 &amp;q=1&amp;p=380'>Ajouter au panier</a>
            </div>
         </div>
      </div>











                                          
                                                                                                                             </div>
        </div>

    </div>

</body>

</html>