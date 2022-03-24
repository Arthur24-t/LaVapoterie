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
    <title>Accessoire</title>
    <link rel="icon" href="/image/logo.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="../css/accessoire.css" />
</head>

<body>
    <div class="head">
        <?php include("header.php"); ?>
    </div>
    <?php include("header.php"); ?>

    <div class="corps">


        <div class="produit">

            <div class="item">
                <a href="A03.php">
                    <div class="image_produit"><img src="../image/produit/A03.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Rangement </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Boite de rangement <br> pour cigarette</p>
                        </div>
                        <div class="prix_produit">
                            <p>25€</p>
                        </div>
                        <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A03&amp; l=Rangement&amp;q=1&amp;p=25">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>



            <div class="item">
                <a href="A19.php">
                    <div class="image_produit"><img src="../image/produit/A19.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Seringue </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Seringue de 10ml </p>
                        </div>
                        <div class="prix_produit">
                            <p>2€</p>
                        </div>
                        <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A19&amp; l=Seringue&amp;q=1&amp;p=2">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>



            <div class="item">
                <a href="A20.php">
                    <div class="image_produit"><img src="../image/produit/A20.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Flacon</p>
                        </div>
                        <div class="descprition_produit">
                            <p>Flacon pour liquide en plastique de contenance 100ml</p>
                        </div>
                        <div class="prix_produit">
                            <p>5€</p>
                        </div>
                        <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A20&amp; l=Flacon&amp;q=1&amp;p=5">Ajouter au panier</a></div>

                    </div>
                </a>
            </div>




            <div class="item">
                <a href="A12.php">
                    <div class="image_produit"><img src="../image/produit/A12.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Chargeur</p>
                        </div>
                        <div class="descprition_produit">
                            <p>Chargeur pour cigarette X</p>
                        </div>
                        <div class="prix_produit">
                            <p>140€</p>
                        </div>
                        <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A16&amp; l=Chargeur&amp;q=1&amp;p=140">Ajouter au panier</a></div>
                    </div>
                </a>
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
                    <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A11&amp; l=Acu 30w&amp;q=1&amp;p=7">Ajouter au panier</a></div>

                </div>
            </div>



            <div class="item">
                <a href="A23.php">
                    <div class="image_produit"><img src="../image/produit/A23.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Drip tip</p>
                        </div>
                        <div class="descprition_produit">
                            <p>Drip tip Bleu</p>
                        </div>
                        <div class="prix_produit">
                            <p>30€</p>
                        </div>
                        <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A23&amp; l=Drip Tip&amp;q=1&amp;p=30">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="A13.php">
                    <div class="image_produit"><img src="../image/produit/A13.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Pochette de réparation</p>
                        </div>
                        <div class="descprition_produit">
                            <p>Divers obljets pour réparer les Cigarettes </p>
                        </div>
                        <div class="prix_produit">
                            <p>41€</p>
                        </div>
                        <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A13&amp; l=Pochette réparation&amp;q=1&amp;p=41">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="A10.php">
                    <div class="image_produit"><img src="../image/produit/A10.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Lingette de nettoyage</p>
                        </div>
                        <div class="descprition_produit">
                            <p>Lingette de nettoyage de la cigarette</p>
                        </div>
                        <div class="prix_produit">
                            <p>1€</p>
                        </div>
                        <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A10&amp; l=Lingette&amp;q=1&amp;p=1">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>


            <div class="item">
                <a href="A17.php">
                    <div class="image_produit"><img src="../image/produit/A17.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Pochette de rangement</p>
                        </div>
                        <div class="descprition_produit">
                            <p>Pochette de rangement de la cigarette et de ces différents accessoires. </p>
                        </div>
                        <div class="prix_produit">
                            <p>25€</p>
                        </div>
                        <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A17&amp; l=Pochette Rangement&amp;q=1&amp;p=25">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="A24.php">
                    <div class="image_produit"><img src="../image/produit/A24.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Réservoir</p>
                        </div>
                        <div class="descprition_produit">
                            <p>Réservoir d'E-cigarette de 5mL. </p>
                        </div>
                        <div class="prix_produit">
                            <p>100€</p>
                        </div>
                        <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A24&amp; l=Réservoir&amp;q=1&amp;p=100">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

        <div class="item">
            <a href="A31.php">
                <div class="image_produit"><img src="../image/produit/A31.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>Mod S tube digiflor</p>
                    </div>
                    <div class="descprition_produit">
                        <p>Mod électronique élégant pour tous les atomiseurs de 22 mm de diamètre. </p>
                    </div>
                    <div class="prix_produit">
                        <p>30€</p>
                    </div>
                    <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A31&amp; l=Mod&amp;q=1&amp;p=30">Ajouter au panier</a></div>
                </div>
            </a>
        </div>

        <div class="item">
            <a href="A36.php">
                <div class="image_produit"><img src="../image/produit/A36.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>DIY Kit Mini V2 Coil Master</p>
                    </div>
                    <div class="descprition_produit">
                        <p>Boite de différent outils pour confectionner vos résistances. </p>
                    </div>
                    <div class="prix_produit">
                        <p>18€</p>
                    </div>
                    <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A36&amp; l=DIY Kit Mini V2 Coil Master&amp;q=1&amp;p=18">Ajouter au panier</a></div>
                </div>
            </a>
        </div>

        <div class="item">
            <a href="A37.php">
                <div class="image_produit"><img src="../image/produit/A37.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>Coil Trimmer</p>
                    </div>
                    <div class="descprition_produit">
                        <p> C'est un outil de coupe pour tous les coils. </p>
                    </div>
                    <div class="prix_produit">
                        <p>18€</p>
                    </div>
                    <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A37&amp; l=Coil Trimmer&amp;q=1&amp;p=18">Ajouter au panier</a></div>
                </div>
            </a>
        </div>

        <div class="item">
            <a href="A49.php">
                <div class="image_produit"><img src="../image/produit/A49.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>Spray désinfectant Aseptivape 20 ml</p>
                    </div>
                    <div class="descprition_produit">
                        <p>  Spray de poche 20 ml rechargeable biocide (virucide, bactéricide et fongicide). </p>
                    </div>
                    <div class="prix_produit">
                        <p>3€</p>
                    </div>
                    <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A49&amp; l=Spray désinfectant&amp;q=1&amp;p=3">Ajouter au panier</a></div>
                </div>
            </a>
        </div>
        

    </div>
</body>

</html>