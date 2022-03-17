<?php
session_start();
echo '<?xml version="1.0" encoding="utf-8"?>';
include_once("pages/fonction-panier.php");

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
    <script type="text/javascript" src="Js/Age.js"></script>
    
    <link rel="icon" href="/image/logo.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <link rel="stylesheet" media="screen and (max-width: 1920px)" href="css/index.css" type="text/css" />
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="css/index.css" type="text/css" />

</head>

<div class="head">
    <?php include("pages/header.php"); ?>
</div>


<body>
    <?php include("pages/header.php"); ?>


    <div class="banderole">

        <img src="/image/banniere.png">

    </div>



    <div class="corps">
        <div class="millieu">
            <div class="titre">
                <h1>TOP DES VENTES</h1>
            </div>

            <div class="top">

                <div class="num">
                    <H1>1</H1>
                </div>
                <div class="item">
                    <a href="/pages/C01.php">
                        <div class="image_produit"><img src="/image/produit/C01.jpg">
                        </div>
                        <div class="tout">
                            <div class="nom_produit">
                                <p>Pod Caliburn</p>
                            </div>
                            <div class="descprition_produit">
                                <p>Cigarette de petit gabari pour les débutants</p>
                            </div>
                            <div class="prix_produit">
                                <p>30€</p>
                    </a>
                </div>
                <div class="quantite">
                  

                </div>

                <div class="bouton"><a href="index.php?action=ajout&amp;i=C01&amp;l=Pod Caliburn&amp;q=1&amp;p=30">Ajouter au panier</a></div>
            </div>
        </div>

        <div class="num">
            <H1>2</H1>
        </div>

        <div class="item">

            <div class="image_produit"><img src="/image/produit/C14.jpg">
            </div>
            <div class="tout">
                <a href="/pages/C14.php">
                    <div class="nom_produit">
                        <p>Aegis Solo</p>
                    </div>
                    <div class="descprition_produit">
                        <p>Cigarette pour plus expèrimenté(es)</p>
                    </div>
                    <div class="prix_produit">
                        <p>54€</p>
                    </div>
                    <div class="quantite">

                    </div>
                </a>
                <div class="bouton"><a href="index.php?action=ajout&amp;i=C14&amp; l=Aegis Solo&amp;q=1&amp;p=54">Ajouter au panier</a></div>
            </div>
        </div>


        <div class="num">
            <H1>3</H1>
        </div>
        <div class="item">
            <a href="/pages/A11.php">
                <div class="image_produit"><img src="/image/produit/A11.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>ACU 30w</p>
                    </div>
                    <div class="descprition_produit">
                        <p>un acu de 30w </br>comptatible toute ecigarette</p>
                    </div>
                    <div class="prix_produit">
                        <p>10€</p>
                    </div>
                    <div class="quantite">
            </a>
        </div>
        <div class="bouton"><a href="index.php?action=ajout&amp;i=A11&amp; l=Acu 30w&amp;q=1&amp;p=10">Ajouter au panier</a></div>
    </div>
    </div>


    <div class="num">
        <H1>4</H1>
    </div>
    <div class="item">
        <a href="/pages/L30.php">
            <div class="image_produit"><img src="/image/produit/L30.jpg">
            </div>
            <div class="tout">
                <div class="nom_produit">
                    <p>Liquide Mangue</p>
                </div>
                <div class="descprition_produit">
                    <p>Liquide Mangue pour ecigarette</p>
                </div>
                <div class="prix_produit">
                    <p>10€</p>
                </div>
                <div class="quantite">

        </a>
    </div>
    <div class="bouton"><a href="index.php?action=ajout&amp;i=L30&amp; l=Liquide Mangue&amp;q=1&amp;p=12">Ajouter au panier</a></div>
    </div>
    </div>

    <div class="num">
        <H1>5</H1>
    </div>
    <div class="item">
        <a href="/pages/C29.php">
            <div class="image_produit"><img src="/image/produit/C29.jpg">
            </div>
            <div class="tout">
                <div class="nom_produit">
                    <p>Ecigarette Economique</p>
                </div>
                <div class="descprition_produit">
                    <p>Cigarette économique pour les expérimentés/p>
                </div>
                <div class="prix_produit">
                    <p>100€</p>
                </div>
                <div class="quantite">
        </a>
    </div>
    <div class="bouton"><a href="index.php?action=ajout&amp;i=C29&amp; l=Ecigarette economique&amp;q=1&amp;p=100">Ajouter au panier</a></div>
    </div>
    </div>
    </div>






    <div class="titre">
        <H1>LES PROMOTION DU MOMENTS</H1>
    </div>

    <div class="promo">
        <div class="toutpromo1">

            <div class="item_promo">
                <a href="/pages/A12.php">
                    <div class="image_produit"><img src="/image/produit/A12.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Chargeur Double</p>
                        </div>
                        <div class="descprition_produit">
                            <p>chargeur double pour ACU</p>
                        </div>
                        <div class="prix_produit">
                            <p>14€</p>
                        </div>
                        <div class="quantite">
                </a>
            </div>
            <div class="bouton"><a href="index.php?action=ajout&amp;i=A12&amp; l=Chargeur Double&amp;q=1&amp;p=14">Ajouter au panier</a></div>
        </div>
    </div>


    <div class="item_promo">
        <a href="/pages/A17.php">
            <div class="image_produit"><img src="/image/produit/A17.jpg">
            </div>
            <div class="tout">
                <div class="nom_produit">
                    <p>Pochette de rangement </p>
                </div>
                <div class="descprition_produit">
                    <p>Pour ranger la cigarette et ses accessoires</p>
                </div>
                <div class="prix_produit">
                    <p>25€</p>
                </div>
                <div class="quantite">
        </a>
    </div>
    <div class="bouton"><a href="index.php?action=ajout&amp;i=A17&amp; l=Pochette de rangement&amp;q=1&amp;p=25">Ajouter au panier</a>
    </div>
    </div>
    </div>


    <div class="item_promo">
        <a href="/pages/A20.php">
            <div class="image_produit"><img src="/image/produit/A20.jpg">
            </div>
            <div class="tout">
                <div class="nom_produit">
                    <p>Flacon</p>
                </div>
                <div class="descprition_produit">
                    <p>Contenant pour liquide</p>
                </div>
                <div class="prix_produit">
                    <p>12€</p>
                </div>
                <div class="quantite">
        </a>
    </div>
    <div class="bouton"><a href="index.php?action=ajout&amp;i=A20&amp; l=Flacon&amp;q=1&amp;p=12">Ajouter au panier</a></div>
    </div>
    </div>



    <div class="item_promo">
        <a href="/pages/P02.php">
            <div class="image_produit"><img src="/image/produit/P02.jpg">
            </div>
            <div class="tout">
                <div class="nom_produit">
                    <p>Resistance 50w</p>
                </div>
                <div class="descprition_produit">
                    <p>Resistance 50w pour toute cigarette</p>
                </div>
                <div class="prix_produit">
                    <p>3€</p>
                </div>
                <div class="quantite">
        </a>
    </div>
    <div class="bouton"><a href="index.php?action=ajout&amp;i=P02&amp; l=Resistance&amp;q=1&amp;p=12">Ajouter au panier</a></div>
    </div>
    </div>


    </div>
    <div class="toutpromo2">
        <div class="item_promo">
            <a href="/pages/C04.php">
                <div class="image_produit"><img src="/image/produit/C04.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>Ecigarette Kit</p>
                    </div>
                    <div class="descprition_produit">
                        <p> Kit de cigarette pour débutant</p>
                    </div>
                    <div class="prix_produit">
                        <p>40€</p>
                    </div>
                    <div class="quantite">
            </a>
        </div>
        <div class="bouton"><a href="index.php?action=ajout&amp;i=C04&amp; l=Ecigarette Kit&amp;q=1&amp;p=40">Ajouter au panier</a></div>
    </div>
    </div>



    <div class="item_promo">
        <a href="/pages/L25.php">
            <div class="image_produit"><img src="/image/produit/L25.jpg">
            </div>
            <div class="tout">
                <div class="nom_produit">
                    <p>Liquide Ananas</p>
                </div>
                <div class="descprition_produit">
                    <p>Eliquide goût Ananas</p>
                </div>
                <div class="prix_produit">
                    <p>9€</p>
                </div>
                <div class="quantite">
        </a>
    </div>
    <div class="bouton"><a href="index.php?action=ajout&amp;i=L25&amp; l=Liquide Ananas&amp;q=1&amp;p=9">Ajouter au panier</a></div>
    </div>
    </div>

    <div class="item_promo">
        <a href="/pages/C16.php">
            <div class="image_produit"><img src="/image/produit/C16.jpg">
            </div>
            <div class="tout">
                <div class="nom_produit">
                    <p>Pod 2000</p>
                </div>
                <div class="descprition_produit">
                    <p>Pod pour débutant peu encombrante</p>
                </div>
                <div class="prix_produit">
                    <p>15€</p>
                </div>

                <div class="quantite">
        </a>
    </div>
    <div class="bouton">
        <a href="index.php?action=ajout&amp;i=C16&amp; l=Pod 2000&amp;q=1&amp;p=15">Ajouter au panier</a>
    </div>
    </div>

    </div>

    <div class="item_promo">
        <a href="immanquables.php">
            <div class="image_produit"><img src="/image/suivant.png">
            </div>

            <div class="tout">
                <div class="nom_produit">
                    <p>La suite</p>
                </div>
                <div class="descprition_produit">
                    <p>cliquez ici pour decouvrir d'autre promotion !</p>
                </div>
                <div class="prix_produit">
                    <p></p>
                </div>
        </a>
    </div>
    </div>
    </form>

    </div>
    </div>






    <div class="titre">
        <H1>NOS CATEGORIES</H1>
    </div>

    <div class="categorie">
        <div class="categ_">
            <a href="Cigarettes.php">
                <h3>ECIGARETTE</h3>
                <img src="image/ciga_dessin.jpg" alt="">
            </a>
        </div>
        <div class="categ_">
            <a href="liquides.php">
                <h3>LIQUIDES</h3>
                <img src="image/liquide_categ.png" alt="">
            </a>
        </div>



        <div class="categ_">
            <a href="accessoire.php">
                <h3>ACCESSOIRES</h3>
                <img src="image/accessorie.jpg" alt="">
            </a>
        </div>
        <div class="categ_">
            <a href="pieces.php">
                <h3>PIECES</h3>
                <img src="image/pieces_categ.jpg" alt="">
            </a>
        </div>

    </div>

    </div>


</body>

</html>