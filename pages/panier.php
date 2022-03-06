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
<link rel="stylesheet" type="text/css" href="../css/panier.css" />

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

               echo "<div class='tableau'><table  cellspacing= 10px align='center'>";
               echo "


                  
                  <td><h2>Image</h2></td>
                  <td align='left'><h2>Libellé</h2></td>
                  <td align='center'><h2>Quantité</h2></td>
                  <td><h2>Prix</h2></td>
   
                  <td align='center'><h2>Action</h2></td>";


               for ($i = 0; $i < $nbArticles; $i++) {

                  echo "<tr>";
                  echo "<div class=\"panier_produit\">";
                  echo "<td><div class=\"image_produit\"><img src=\"../image/produit/" . htmlspecialchars($_SESSION['panier']['idProduit'][$i]) . ".jpg\"></td></div>";
                  echo "<td align='center'><div class=\"libelle_produit\">" . htmlspecialchars($_SESSION['panier']['libelleProduit'][$i]) . "</div></td>";

                  echo "<td align='center'><div class=\"qte_produit\"><p id='quantite'>" . htmlspecialchars($_SESSION['panier']['qteProduit'][$i]) . "</p></div></td>";

                  echo "<td align='center'><div class=\"prix_produit\">" . htmlspecialchars($_SESSION['panier']['prixProduit'][$i]) . "€</div></td>";
                  echo "<td align='center'><div class=\"supprimer_produit\"><a href=\"" . htmlspecialchars("panier.php?action=suppression&l=" . rawurlencode($_SESSION['panier']['libelleProduit'][$i])) . "\">Supprimer</a> </div></td>";
                  echo "</div>";
                  echo "</tr>";
               }
               echo "</table></div>";

               echo "Total : " . MontantGlobal() . "€\n";




               echo "<input type=\"submit\" value=\"Rafraichir\"/>";
               echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";
               echo "<div class=\"passercom\"><a href=\"livraison.php\">Passer la commande</a> </div>";
            }
         }
         ?>
         </table>
      </form>
   </div>
   </div>
</body>

</html>