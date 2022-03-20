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
    <title>Pieces detachées</title>
    <link rel="icon" href="/image/logo.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="../css/piece.css" />
</head>



<body>
    <div class="head">
        <?php include("header.php"); ?>
    </div>
    <?php include("header.php"); ?>

    <div class="corps">

        <div class="produit">

            <div class="item">
                <a href="P02.php">
                    <div class="image_produit"><img src="../image/produit/P02.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Resistance 50w </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Resistance de 50w</p>
                        </div>
                        <div class="prix_produit">
                            <p>3€</p>
                        </div>
                        <div class="bouton"><a href="pieces.php?action=ajout&amp;i=P02&amp; l=Resistance 50w&amp;q=1&amp;p=3">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>


            <div class="item">
                <a href="P07.php">
                    <div class="image_produit"><img src="../image/produit/P07.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Reservoir 10ml </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Reservoir de 10ml </p>
                        </div>
                        <div class="prix_produit">
                            <p>4€</p>
                        </div>
                        <div class="bouton"><a href="pieces.php?action=ajout&amp;i=P07&amp; l=Reservoir 10ml&amp;q=1&amp;p=4">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="P18.php">
                    <div class="image_produit"><img src="../image/produit/P18.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Batterie </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Batterie de cigarette </p>
                        </div>
                        <div class="prix_produit">
                            <p>150€</p>
                        </div>
                        <div class="bouton"><a href="pieces.php?action=ajout&amp;i=P18&amp; l=batterie&amp;q=1&amp;p=150">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="P27.php">
                    <div class="image_produit"><img src="../image/produit/P27.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Clearomiseur </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Clearomiseur de 5 mL </p>
                        </div>
                        <div class="prix_produit">
                            <p>110€</p>
                        </div>
                        <div class="bouton"><a href="pieces.php?action=ajout&amp;i=P27&amp; l=Clearomiseur&amp;q=1&amp;p=110">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>
        </div>
    </div>


</body>

</html>