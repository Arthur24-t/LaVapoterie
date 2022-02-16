<?php
session_start();
echo '<?xml version="1.0" encoding="utf-8"?>';

include_once("fonction-panier.php");
?>

<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8" />

<head>
    <title>Accessoire</title>
    <link rel="icon" href="/image/logo.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="pauline.css" />
</head>

<?php include("header.php"); ?>

<body>
<form action="" method="POST">
    <div class="corps">


        <!--
        <div class="Recherche">

            <div>
                <p>Recherche</p>
                <div>
                    <input type="checkbox" name="cigarette" id="Ecigarette">
                    <label for="Ecigarette">Ecigarette</label>
                </div>
                <div>
                    <input type="checkbox" name="liquide" id="liquide">
                    <label for="liquide">Liquide</label>
                </div>
                <div>
                    <input type="checkbox" name="Composant" id="composant">
                    <label for="Composant">Composant</label>
                </div>
                <div>
                    <input type="checkbox" name="new" id="new">
                    <label for="new">Nouveau Produit</label>
                </div>
                <div>
                    <input type="checkbox" name="cigarette" id="Ecigarette">
                    <label for="Ecigarette">Ecigarette</label>
                </div>
            </div>
        </div>

-->


        <div class="produit">
        
            <div class="item">
                <div class="image_produit"><img src="/image/produit/A28.jpg">
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
                    <div class="bouton"><button class="ajout_panier" type="submit" name="prod-A28"> ajouter au panier </button></div>
                </div>
            </div>

            <?php
                if (isset($_POST["prod-A28"])) {
                    
                    ajouterArticle("A28", "Pochette Accessoire", 1, 25);
                }
            ?>

            <div class="item">
                <div class="image_produit"><img src="/image/produit/A45.jpg">
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
                    <div class="bouton"><button class="ajout_panier" type="submit" name="prod-A45"> ajouter au panier </button></div>
                </div>
            </div>

            <?php
                if (isset($_POST["prod-A45"])) {
                    
                    ajouterArticle("A45", "Seringue", 1, 2);
                }
            ?>

            <div class="item">
                <div class="image_produit"><img src="/image/produit/A20.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>Flacon</p>
                    </div>
                    <div class="descprition_produit">
                        <p>Flacon pour liquide  en plastique de  contenance 100ml</p>
                    </div>
                    <div class="prix_produit">
                        <p>5€</p>
                    </div>
                    <div class="bouton"><button class="ajout_panier" type="submit" name="prod-A20"> ajouter au panier </button></div>

                </div>
            </div>

            
            <?php
                if (isset($_POST["prod-A20"])) {
                    
                    ajouterArticle("A20", "Flacon", 1, 30);
                }
            ?>
            


            <div class="item">
                <div class="image_produit"><img src="/image/produit/A26.jpg">
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
                    <div class="bouton"><button class="ajout_panier" type="submit" name="prod-A26"> ajouter au panier </button></div>
                </div>
            </div>

            <?php
                if (isset($_POST["prod-A26"])) {
                    
                    ajouterArticle("A26", "Chargeur", 1, 140);
                }
            ?>

            <div class="item">
                <div class="image_produit"><img src="/image/produit/A20.jpg">
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
                    <div class="bouton"><button class="ajout_panier" type="submit" name="prod-A20"> ajouter au panier </button></div>
                </div>
            </div>

            <?php
                if (isset($_POST["prod-A20"])) {
                    
                    ajouterArticle("A20", "Flacon", 1, 30);
                }
            ?>

            <div class="item">
                <div class="image_produit"><img src="/image/produit/A23.jpg">
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
                    <div class="bouton"><button class="ajout_panier" type="submit" name="prod-A23"> ajouter au panier </button></div>
                </div>
            </div>

            <?php
                if (isset($_POST["prod-A23"])) {
                    
                    ajouterArticle("A23", "DripTip", 1, 30);
                }
            ?>

            <div class="item">
                <div class="image_produit"><img src="/image/produit/A45.jpg">
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
                    <div class="bouton"><button class="ajout_panier" type="submit" name="prod-A45"> ajouter au panier </button></div>
                </div>
            </div>

            <?php
                if (isset($_POST["prod-A45"])) {
                    
                    ajouterArticle("A45", "Seringue", 1, 2);
                }
            ?>

            <div class="item">
                <div class="image_produit"><img src="/image/produit/A45.jpg">
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
                    <div class="bouton"><button class="ajout_panier" type="submit" name="prod-A45"> ajouter au panier </button></div>
                </div>
            </div>

            <?php
                if (isset($_POST["prod-A45"])) {
                    
                    ajouterArticle("A45", "Seringue", 1, 2);
                }
            ?>

            <div class="item">
                <div class="image_produit"><img src="/image/produit/A45.jpg">
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
                    <div class="bouton"><button class="ajout_panier" type="submit" name="prod-A45"> ajouter au panier </button></div>
                </div>
            </div>

            <?php
                if (isset($_POST["prod-A45"])) {
                    
                    ajouterArticle("A45", "Seringue", 1, 2);
                }
            ?>


    </div>
</form>
</body>

</html>