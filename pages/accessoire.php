<?php

session_start();
echo '<?xml version="1.0" encoding="utf-8"?>';

include_once("fonction-panier.php");

$action = (isset($_POST['action']) ? $_POST['action'] : (isset($_GET['action']) ? $_GET['action'] : null));
if ($action !== null) {
    if (!in_array($action, array('ajout', 'suppression', 'refresh')))
        

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





?>


<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8" />

<head>
    <title>Accessoire</title>
    <link rel="icon" href="/image/logo.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="../css/pauline.css" />
</head>

<body>
<div class="head">
    <?php include("header.php"); ?>
</div>
<?php include("header.php"); ?>

    <div class="corps">


        <div class="produit">

            <div class="item">
                <div class="image_produit"><img src="../image/produit/A28.jpg">
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
                    <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A28&amp; l=Rangement&amp;q=1&amp;p=25">Ajouter au panier</a></div>
                </div>
            </div>



            <div class="item">
                <div class="image_produit"><img src="../image/produit/A45.jpg">
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
                    <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A45&amp; l=Seringue&amp;q=1&amp;p=2">Ajouter au panier</a></div>
                </div>
            </div>



            <div class="item">
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
            </div>




            <div class="item">
                <div class="image_produit"><img src="../image/produit/A26.jpg">
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
                    <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A26&amp; l=Chargeur&amp;q=1&amp;p=140">Ajouter au panier</a></div>
                </div>
            </div>


            <div class="item">
                <div class="image_produit"><img src="../image/produit/A20.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>Flacon</p>
                    </div>
                    <div class="descprition_produit">
                        <p>Flacon pour liquide <br> en plastique de <br> contenance 100ml</p>
                    </div>
                    <div class="prix_produit">
                        <p>5€</p>
                    </div>
                    <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A20&amp; l=Flacon&amp;q=1&amp;p=5">Ajouter au panier</a></div>
                </div>
            </div>



            <div class="item">
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
            </div>


            <div class="item">
                <div class="image_produit"><img src="../image/produit/A45.jpg">
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
                    <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A45&amp; l=Seringue&amp;q=1&amp;p=2">Ajouter au panier</a></div>
                </div>
            </div>



            <div class="item">
                <div class="image_produit"><img src="../image/produit/A45.jpg">
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
                    <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A45&amp; l=Seringue&amp;q=1&amp;p=2">Ajouter au panier</a></div>
                </div>
            </div>

          

            <div class="item">
                <div class="image_produit"><img src="../image/produit/A45.jpg">
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
                    <div class="bouton"><a href="accessoire.php?action=ajout&amp;i=A45&amp; l=Seringue&amp;q=1&amp;p=2">Ajouter au panier</a></div>
                </div>
            </div>




        </div>
      
</body>

</html>