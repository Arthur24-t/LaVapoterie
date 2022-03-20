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
    <title>immanquables</title>
    <link rel="icon" href="/image/logo.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="../css/immanquables.css" />
</head>

<body>
    <div class="head">
        <?php include("header.php"); ?>
    </div>
    <?php include("header.php"); ?>

    <div class="corps">

        <div class="item">
            <div class="image_produit"><img src="/image/produit/C01.jpg">
                <a href="/pages/C01.php">
            </div>
            <div class="tout">
                <div class="nom_produit">
                    <p>Pod Caliburn</p>
                </div>
                <div class="descprition_produit">
                    <p>Cigarette de petit gabari pour les débutants</p>
                </div>
                <div class="prix_produit">
                    <p><strike>30€</strike> 25€</p>
                </div>
                </a>
                <div class="bouton"><a href="immanquables.php?action=ajout&amp;i=C01&amp;l=Pod Caliburn&amp;q=1&amp;p=25">Ajouter au panier</a></div>

            </div>


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
                        <p><strike>54€</strike> 49€</p>
                    </div>
                </a>
                <div class="bouton"><a href="immanquables.php?action=ajout&amp;i=C14&amp; l=Aegis Solo&amp;q=1&amp;p=49">Ajouter au panier</a></div>
            </div>
        </div>

        <div class="item">

            <div class="image_produit"><img src="/image/produit/A11.jpg">
            </div>
            <div class="tout">
                <a href="/pages/A11.php">
                    <div class="nom_produit">
                        <p>ACU 30w</p>
                    </div>
                    <div class="descprition_produit">
                        <p>un acu de 30w </br>comptatible toute ecigarette</p>
                    </div>
                    <div class="prix_produit">
                        <p><strike>10€</strike> 7€</p>
                    </div>
                </a>
                <div class="bouton"><a href="immanquables.php?action=ajout&amp;i=A11&amp; l=Acu 30w&amp;q=1&amp;p=7">Ajouter au panier</a></div>

            </div>
        </div>



        <div class="item">

            <div class="image_produit"><img src="/image/produit/L30.jpg">
            </div>
            <div class="tout">
                <a href="/pages/L30.php">
                    <div class="nom_produit">
                        <p>Liquide Mangue</p>
                    </div>
                    <div class="descprition_produit">
                        <p>Liquide Mangue pour ecigarette</p>
                    </div>
                    <div class="prix_produit">
                        <p><strike>10€</strike> 7€</p>
                    </div>
                </a>
                <div class="bouton"><a href="immanquables.php?action=ajout&amp;i=L30&amp; l=Liquide Mangue&amp;q=1&amp;p=7">Ajouter au panier</a></div>
            </div>

        </div>


        <div class="item">
            <div class="image_produit"><img src="/image/produit/C29.jpg">
            </div>
            <div class="tout">
                <a href="/pages/C29.php">
                    <div class="nom_produit">
                        <p>Ecigarette Economique</p>
                    </div>
                    <div class="descprition_produit">
                        <p>Cigarette économique pour les expérimentés</p>
                    </div>
                    <div class="prix_produit">
                        <p><strike>100€</strike> 90€ </p>
                    </div>
                </a>
                <div class="bouton"><a href="immanquables.php?action=ajout&amp;i=C29&amp; l=Ecigarette economique&amp;q=1&amp;p=90">Ajouter au panier</a></div>
            </div>

        </div>
    </div>

</body>

</html>