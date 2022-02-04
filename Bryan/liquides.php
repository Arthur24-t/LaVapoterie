<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8" />

<head>
    <title>Eliquides</title>
    <link rel="icon" href="/image/logo.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="site.css" />
</head>

<?php include("header.php"); ?>

<body>
    <form action="" method="POST">
    <div class="corps">
    <div class="produit">
        
        <div class="item">
            <div class="image_produit"><img src="/image/produit/L05.jpg">
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

    </div>

    </form>

</body>

</html>