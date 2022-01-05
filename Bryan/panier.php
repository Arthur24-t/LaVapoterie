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



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<link rel="stylesheet" type="text/css" href="panier.css" />

<head>
   <div class="head">
      <?php include("header.php"); ?>
   </div>

   <?php include("header.php"); ?>
</head>

<body>
   <div class="panier_millieu">
      <form method="post" action="panier.php">
         
        
      

         <?php
         if (creationPanier()) {
            $nbArticles = count($_SESSION['panier']['libelleProduit']);
            if ($nbArticles <= 0)
               
               echo "<tr><div class=\"panier_vide\"><td>Votre panier est vide </ td></div></tr>";
               
            else {
               
                  
                  echo"<div class=\"haut_table\">


                  <div >
                     <h2>Image</h2>
                  </div>
      
      
                  <div >
                     <h2>Libellé</h2>
                  </div>
      
      
                  <div>
                     <h2>Quantité</h2>
                  </div>
      
      
                  <div>
                     <h2>Prix</h2>
                  </div>
      
      
                  <div>
                     <h2>Action</h2>
                  </div>
      
               </div>";

               for ($i = 0; $i < $nbArticles; $i++) {



                  echo "<div class=\"panier_produit\">";
                  echo "<div class=\"image_produit\"><img src=\"/image/produit/" . htmlspecialchars($_SESSION['panier']['idProduit'][$i]) . ".jpg\"></div>";
                  echo "<div class=\"libelle_produit\">" . htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]) . "</div>";
                  echo "<div class=\"qte_produit\"><input type=\"number\"  name=\"q[]\" value=\"" . htmlspecialchars($_SESSION['panier']['qteProduit'][$i]) . "\"/></div>";
                  echo "<div class=\"prix_produit\">" . htmlspecialchars($_SESSION['panier']['prixProduit'][$i]) . "€</div>";
                  echo "<div class=\"supprimer_produit\"><a href=\"" . htmlspecialchars("panier.php?action=suppression&l=" . rawurlencode($_SESSION['panier']['libelleProduit'][$i])) . "\">Suprimer</a> </div>";
                  echo "</div>";
               }

               echo "<tr><td colspan=\"2\"> </td>";
               echo "<td colspan=\"2\">";
               echo "Total : " . MontantGlobal();
               echo "€</td></tr>";
               echo "</table>";
               
               echo "<tr><td colspan=\"5\">";
               echo "<input type=\"submit\" value=\"Rafraichir\"/>";
               echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";
               echo "<div class=\"supprimer_produit\"><a href=\"fonction-commande.php\">Passer la commande</a> </div>";
               
               echo "</td></tr>";
            }
         }
         ?>
         </table>
      </form>
   </div>
   </div>
</body>

</html>