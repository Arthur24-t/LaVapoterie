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
<title>Liquides</title>
    <link rel="icon" href="/image/logo.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="../css/cigarette.css" />
</head>



<body>
<div class="head">
    <?php include("header.php"); ?>
</div>
<?php include("header.php"); ?>

    <div class="corps">


               



        <div class="produit">
        
            <div class="item">
                <div class="image_produit"><img src="../image/produit/C01.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>Pod Caliburn </p>
                    </div>
                    <div class="descprition_produit">
                        <p>Ecigarette pod </p>
                    </div>
                    <div class="prix_produit">
                        <p>30€</p>
                    </div>
                    <div class="bouton"><a href="Cigarettes.php?action=ajout&amp;i=C01&amp; l=Pod Caliburn&amp;q=1&amp;p=30">Ajouter au panier</a></div>
                </div>
            </div>


            <div class="item">
                <div class="image_produit"><img src="../image/produit/C04.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>Ecigarette Kit </p>
                    </div>
                    <div class="descprition_produit">
                        <p>Kit Ecigarette debutant </p>
                    </div>
                    <div class="prix_produit">
                        <p>40€</p>
                    </div>
                    <div class="bouton"><a href="Cigarettes.php?action=ajout&amp;i=C04&amp; l=Ecigarette Kit&amp;q=1&amp;p=40">Ajouter au panier</a></div>
                </div>
            </div>


            <div class="item">
                <div class="image_produit"><img src="../image/produit/C08.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>Target Kit</p>
                    </div>
                    <div class="descprition_produit">
                        <p>Ecigarette Kit de Target</p>
                    </div>
                    <div class="prix_produit">
                        <p>80€</p>
                    </div>
                    <div class="bouton"><a href="Cigarettes.php?action=ajout&amp;i=C08&amp; l=Target Kit&amp;q=1&amp;p=80">Ajouter au panier</a></div>

                </div>
            </div>
            


            <div class="item">
                <div class="image_produit"><img src="../image/produit/C14.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>Aegis Solo</p>
                    </div>
                    <div class="descprition_produit">
                        <p>Ecigarette pour debutant !</p>
                    </div>
                    <div class="prix_produit">
                        <p>54€</p>
                    </div>
                    <div class="bouton"><a href="Cigarettes.php?action=ajout&amp;i=C14&amp; l=Aegis Solo&amp;q=1&amp;p=54">Ajouter au panier</a></div>
                </div>
            </div>

            <div class="item">
                <div class="image_produit"><img src="../image/produit/C15.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>M100</p>
                    </div>
                    <div class="descprition_produit">
                        <p>Ecigarette M100 pour la puissance</p>
                    </div>
                    <div class="prix_produit">
                        <p>70€</p>
                    </div>
                    <div class="bouton"><a href="Cigarettes.php?action=ajout&amp;i=C15&amp; l=M100&amp;q=1&amp;p=70">Ajouter au panier</a></div>
                </div>
            </div>

           

            <div class="item">
                <div class="image_produit"><img src="../image/produit/C16.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>Pod 2000</p>
                    </div>
                    <div class="descprition_produit">
                        <p>Juste notre meilleur ecigarette</p>
                    </div>
                    <div class="prix_produit">
                        <p>15€</p>
                    </div>
                    <div class="bouton"><a href="Cigarettes.php?action=ajout&amp;i=C16&amp; l=Pod 2000&amp;q=1&amp;p=15">Ajouter au panier</a></div>
                </div>
            </div>

            <div class="item">
                <div class="image_produit"><img src="../image/produit/C22.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>VapeZen </p>
                    </div>
                    <div class="descprition_produit">
                        <p>Vapoter tranquillement grace a VapeZen</p>
                    </div>
                    <div class="prix_produit">
                        <p>123€</p>
                    </div>
                    <div class="bouton"><a href="Cigarettes.php?action=ajout&amp;i=C22&amp; l=VapeZen&amp;q=1&amp;p=123">Ajouter au panier</a></div>
                </div>
            </div>

            

            <div class="item">
                <div class="image_produit"><img src="../image/produit/C28.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>Ecigarette Performance </p>
                    </div>
                    <div class="descprition_produit">
                        <p>La performance a l'etat pure</p>
                    </div>
                    <div class="prix_produit">
                        <p>125€</p>
                    </div>
                    <div class="bouton"><a href="Cigarettes.php?action=ajout&amp;i=C28&amp; l=Ecigarette Performance&amp;q=1&amp;p=125">Ajouter au panier</a></div>
                </div>
            </div>


            <div class="item">
                <div class="image_produit"><img src="../image/produit/C29.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>Ecigarette Economique </p>
                    </div>
                    <div class="descprition_produit">
                        <p>Economisez du liquide !</p>
                    </div>
                    <div class="prix_produit">
                        <p>100€</p>
                    </div>
                    <div class="bouton"><a href="Cigarettes.php?action=ajout&amp;i=C29&amp; l=Ecigarette Economique&amp;q=1&amp;p=100">Ajouter au panier</a></div>
                </div>
            </div>

    </div>

</body>

</html>