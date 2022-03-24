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

            <div class="item">
                <a href="P31.php">
                    <div class="image_produit"><img src="../image/produit/P31.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Mod S Tube DigiFlavor </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Ce S Tube est un mod électronique élégant pour tous les atomiseurs de 22 mm de diamètre</p>
                        </div>
                        <div class="prix_produit">
                            <p>30€</p>
                        </div>
                        <div class="bouton"><a href="pieces.php?action=ajout&amp;i=P31&amp; l=Mod S Tube DigiFlavor&amp;q=1&amp;p=30">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="P32.php">
                    <div class="image_produit"><img src="../image/produit/P32.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Mod basic Mech </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Le Basic Mech, c'est la vape en méca par excellence !</p>
                        </div>
                        <div class="prix_produit">
                            <p>109€</p>
                        </div>
                        <div class="bouton"><a href="pieces.php?action=ajout&amp;i=P32&amp; l=Mod basic Mech &amp;q=1&amp;p=109">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>


            <div class="item">
                <a href="P33.php">
                    <div class="image_produit"><img src="../image/produit/P33.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Mod Juxta V2 </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Le mod Juxta V2 Carbone Pro-MS est un mod méca à double barreau</p>
                        </div>
                        <div class="prix_produit">
                            <p>380€</p>
                        </div>
                        <div class="bouton"><a href="pieces.php?action=ajout&amp;i=P33&amp; l=Mod Juxta V2 &amp;q=1&amp;p=380">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="P34.php">
                    <div class="image_produit"><img src="../image/produit/P34.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Box dotBox 220w </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Avec la dotBox 220W, dotMod vous propose une fois de plus un mod électronique d'exception </p>
                        </div>
                        <div class="prix_produit">
                            <p>92€</p>
                        </div>
                        <div class="bouton"><a href="pieces.php?action=ajout&amp;i=P34&amp; l=Box dotBox 220w &amp;q=1&amp;p=92">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="P38.php">
                    <div class="image_produit"><img src="../image/produit/P38.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Alien Wires Wotofo </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Les coils Alien Wires de chez Wotofo sont constitués d'un cœur de trois fils Ni80 </p>
                        </div>
                        <div class="prix_produit">
                            <p>9€</p>
                        </div>
                        <div class="bouton"><a href="pieces.php?action=ajout&amp;i=P38&amp; l=Alien Wires Wotofo&amp;q=1&amp;p=9">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="P39.php">
                    <div class="image_produit"><img src="../image/produit/P39.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Dual Core Clapton Coils 5 </p>
                        </div>
                        <div class="descprition_produit">
                            <p>5 mm ID Clapton Coils 0.65 ohm de chez Wotofo </p>
                        </div>
                        <div class="prix_produit">
                            <p>5€</p>
                        </div>
                        <div class="bouton"><a href="pieces.php?action=ajout&amp;i=P39&amp; l=Dual Core Clapton Coils 5 &amp;q=1&amp;p=5">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>


            <div class="item">
                <a href="P40.php">
                    <div class="image_produit"><img src="../image/produit/P40.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Réservoir Pyrex Valkyrie </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Ce réservoir est compatible avec l'atomiseur Valkyrie RTA de Vaperz Cloud</p>
                        </div>
                        <div class="prix_produit">
                            <p>3€</p>
                        </div>
                        <div class="bouton"><a href="pieces.php?action=ajout&amp;i=P40&amp; l=Réservoir Pyrex Valkyrie &amp;q=1&amp;p=3">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="P41.php">
                    <div class="image_produit"><img src="../image/produit/P41.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Deck RBA Puppy </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Le deck RBA Puppy vous permet de transformer votre clearomiseur d'Animodz en atomiseur reconstructible. </p>
                        </div>
                        <div class="prix_produit">
                            <p>25€</p>
                        </div>
                        <div class="bouton"><a href="pieces.php?action=ajout&amp;i=P41&amp; l=Deck RBA Puppy &amp;q=1&amp;p=25">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>
            <div class="item">
                <a href="P42.php">
                    <div class="image_produit"><img src="../image/produit/P42.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Atomiseur Geary </p>
                        </div>
                        <div class="descprition_produit">
                            <p>Wotofo vous propose le Gear V2 RTA, un atomiseur reconstructible compact et puissant </p>
                        </div>
                        <div class="prix_produit">
                            <p>31€</p>
                        </div>
                        <div class="bouton"><a href="pieces.php?action=ajout&amp;i=P42&amp; l=Atomiseur Gear&amp;q=1&amp;p=31">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>


            <div class="item">
                <a href="P43.php">
                    <div class="image_produit"><img src="../image/produit/P43.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Dead Rabbit</p>
                        </div>
                        <div class="descprition_produit">
                            <p>Hellvape optimise son atomiseur phare RDA </p>
                        </div>
                        <div class="prix_produit">
                            <p>25€</p>
                        </div>
                        <div class="bouton"><a href="pieces.php?action=ajout&amp;i=P43&amp; l=Dead Rabbit&amp;q=1&amp;p=25">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="P44.php">
                    <div class="image_produit"><img src="../image/produit/P44.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Valkyrie RTA Vaperz</p>
                        </div>
                        <div class="descprition_produit">
                            <p>Vaperz Cloud, célèbre fabricant américain de produits hors norme </p>
                        </div>
                        <div class="prix_produit">
                            <p>34€</p>
                        </div>
                        <div class="bouton"><a href="pieces.php?action=ajout&amp;i=P44&amp; l=Valkyrie RTA Vaperz&amp;q=1&amp;p=64">Ajouter au panier</a></div>
                    </div>
                </a>
            </div>

        </div>
    </div>


</body>

</html>