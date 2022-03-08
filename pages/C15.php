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
   <?php include("/header.php"); ?>
</div>

<body>
   <?php include("header.php"); ?>
   <div id="container">

      <div class="produit">
         <div class="gauche">
            <div class="titre">
               <h1>M100 </h1> <!-- coller a droite -->
            </div>
            <div class="image">
               <img src='../image/produit/C15.jpg'>
            </div>
         </div>
         <div class="droite">
            <div class="description">
               <p>Avec ce kit M100, Geek Vape vous propose une cigarette électronique de petite taille, mais particulièrement puissante.
                  Équipée d’une batterie de 2500 mAh, elle pourra monter jusqu'à 100W !
                  Ce kit se compose de la box M100, remplaçante de l'Aegis Mini, et qui aurait d'ailleurs pu s'appeler Aegis Mini 2.
                  Cette petite box M100 se distingue par son excellente batterie, mais aussi pour sa fabrication avec plusieurs matériaux.
                  Le mod est étanche, résiste à la poussière, aux chocs et aux chutes.
                  Elle est également rechargeable à grande vitesse avec sa connexion USB-C.
                  Enfin, côté sécurité, le fabricant ajoute un bouton qui verrouille et évite à la box de fonctionner accidentellement.
                  Lors d’un transport, par exemple.


               </p> <!-- mettre a droite de l'image -->
            </div>
            <div class="prix">
               <p> 70€ </p>
            </div>
            <div class="bouton">
               <a href='C15.php?action=ajout&amp;i=C15&amp;l=M100&amp;q=1&amp;p=70€'>Ajouter au panier</a>
            </div>
         </div>
      </div>

   </div>

</body>

</html>