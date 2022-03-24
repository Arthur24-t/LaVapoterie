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
    <title>Ecigarette</title>
    <link rel="icon" href="/image/logo.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="../css/liquide.css" />
</head>



<body>
    <div class="head">
        <?php include("header.php"); ?>
    </div>
    <?php include("header.php"); ?>

    <div class="corps">

        <div class="produit">

            <div class="item">
                <a href="L05.php">
                    <div class="image_produit"><img src="../image/produit/L05.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Liquide Pomme </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Flacon Liquide goût Pomme </p>
                        </div>
                        <div class="prix_produit">
                            <p>10€</p>
                        </div>
                        <div class="bouton"><a href="liquides.php?action=ajout&amp;i=C01&amp;l=Pod Caliburn&amp;q=1&amp;p=30">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>



            <div class="item">
                <a href="L06.php">
                    <div class="image_produit"><img src="../image/produit/L06.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Liquide Fraise </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Flacon Liquide goût Fraise </p>
                        </div>
                        <div class="prix_produit">
                            <p>11€</p>
                        </div>
                        <div class="bouton"><a href="liquides.php?action=ajout&amp;i=L06&amp; l=Liquide Fraise&amp;q=1&amp;p=11">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="L09.php">
                    <div class="image_produit"><img src="../image/produit/L09.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Liquide Citron </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Flacon Liquide goût Citron </p>
                        </div>
                        <div class="prix_produit">
                            <p>12€</p>
                        </div>
                        <div class="bouton"><a href="liquides.php?action=ajout&amp;i=L09&amp; l=Liquide Citron&amp;q=1&amp;p=12">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="L21.php">
                    <div class="image_produit"><img src="../image/produit/L21.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Liquide Banane </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Flacon Liquide goût Banane </p>
                        </div>
                        <div class="prix_produit">
                            <p>11€</p>
                        </div>
                        <div class="bouton"><a href="liquides.php?action=ajout&amp;i=L21&amp; l=Liquide Banane&amp;q=1&amp;p=11">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>


            <div class="item">
                <a href="L25.php">
                    <div class="image_produit"><img src="../image/produit/L25.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Liquide Ananas </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Flacon Liquide goût ananas </p>
                        </div>
                        <div class="prix_produit">
                            <p>9€</p>
                        </div>
                        <div class="bouton"><a href="liquides.php?action=ajout&amp;i=L25&amp; l=Liquide Ananas&amp;q=1&amp;p=9">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="L26.php">
                    <div class="image_produit"><img src="../image/produit/L26.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Liquide Exotique </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Flacon Liquide goût Exotique </p>
                        </div>
                        <div class="prix_produit">
                            <p>10€</p>
                        </div>
                        <div class="bouton"><a href="liquides.php?action=ajout&amp;i=L26&amp; l=Liquide Exotique&amp;q=1&amp;p=10">Ajouter au panier</a></div>
                    </div>
                </a>
           </div>

            <div class="item">
                <a href="L30.php">
                    <div class="image_produit"><img src="../image/produit/L30.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Liquide Mangue </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Flacon Liquide goût Mangue </p>
                        </div>
                        <div class="prix_produit">
                            <p><strike>10€</strike> 7€ </p>
                        </div>
                        <div class="bouton"><a href="liquides.php?action=ajout&amp;i=L30&amp; l=Liquide Mangue&amp;q=1&amp;p=7">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="L46.php">
                    <div class="image_produit"><img src="../image/produit/L46.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Liquide Vap Blond </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Flacon Liquide goût légèrement épicé et doucement gourmand. </p>
                        </div>
                        <div class="prix_produit">
                            <p> 5€ </p>
                        </div>
                        <div class="bouton"><a href="liquides.php?action=ajout&amp;i=L46&amp; l=Liquide Vap Blond&amp;q=1&amp;p=5">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="L47.php">
                    <div class="image_produit"><img src="../image/produit/L47.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Liquide Caramel</p>
                        </div>
                        <div class="descprition_produit">
                            <p>Flacon Liquide goût Caramel. </p>
                        </div>
                        <div class="prix_produit">
                            <p> 5€ </p>
                        </div>
                        <div class="bouton"><a href="liquides.php?action=ajout&amp;i=L47&amp; l=Liquide Caramel&amp;q=1&amp;p=5">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="L48.php">
                    <div class="image_produit"><img src="../image/produit/L48.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Liquide Classic Menthe </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Flacon Liquide goût Menthe. </p>
                        </div>
                        <div class="prix_produit">
                            <p> 5€ </p>
                        </div>
                        <div class="bouton"><a href="liquides.php?action=ajout&amp;i=L48&amp; l=Liquide Menthe&amp;q=1&amp;p=5">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

        </div>
    </div>


</body>

</html>