<?php
session_start();
echo '<?xml version="1.0" encoding="utf-8"?>';

include_once("fonction-panier.php");
?>
<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8" />

<head>
    <title>Site d'achat d'ecigarette</title>
    <link rel="icon" href="/image/logo.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="index.css" />
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="index.css" type="text/css" />

</head>

<div class="head">
<?php include("header.php"); ?>
</div>

<!--Nos coups de coeurs TOP 5-->


<!--- lien facebook et insta en bas de page newlatters sur site gaelle -->



<body>
<?php include("header.php"); ?>


    <div class="banderole">
        
        <img  src="/image/banniere.png"> 
                   
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
                    
                    <div class="image_produit"><img src="/image/produit/C01.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Pod Caliburn</p>
                        </div>
                        <div class="descprition_produit">
                            <p>elle fume</p>
                        </div>
                        <div class="prix_produit">
                            <p>30€</p>

                        </div>
                        <div class="quantite">
                            <form action="" method="POST">
                                
                        </div>
                        <div class="bouton"><button class="ajout_panier" type="submit" name="prod-C01"> ajouter au panier </button></div>
                    </div>
                </div>

                <?php
                if (isset($_POST["prod-C01"])) {
                    
                    ajouterArticle("C01", "Pod Caliburn", 1, 30);
                }


               
                ?>

                    <div class="num">
                        <H1 >2</H1>
                    </div>

                <div class="item">
                    
                    <div class="image_produit"><img src="/image/produit/C14.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Aegis Solo</p>
                        </div>
                        <div class="descprition_produit">
                            <p>elle fume</p>
                        </div>
                        <div class="prix_produit">
                            <p>54€</p>
                        </div>
                        <div class="quantite">
                            
                        </div>
                        <div class="bouton"><button class="ajout_panier" type="submit" name="prod-C14"> ajouter au panier </button></div>
                    </div>
                </div>

                <?php
                if (isset($_POST["prod-C14"])) {
                    
                    ajouterArticle("C14", "Aegis Solo", 1, 54);
                }
                ?>
                <div class="num">
                        <H1>3</H1>
                    </div>
                <div class="item">
                    
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
                            
                        </div>
                        <div class="bouton"><button class="ajout_panier" type="submit" name="prod-A11"> ajouter au panier </button></div>
                    </div>
                </div>
                <?php

                if (isset($_POST["prod-A11"])) {
                    
                    ajouterArticle("A11", "Acu 30w", 1, 10);
                }
                ?>
                <div class="num">
                        <H1>4</H1>
                    </div>
                <div class="item">
                    
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

                            
                        </div>
                        <div class="bouton"><button class="ajout_panier" type="submit" name="prod-L30" >  ajouter au panier </button></div>
                    </div>
                </div>

                <?php

                if (isset($_POST["prod-L30"])) {
                    
                    ajouterArticle("L30", "Liquide Mangue", 1, 12);
                }
                ?>
                <div class="num">
                        <H1>5</H1>
                    </div>
                <div class="item">
                
                    <div class="image_produit"><img src="/image/produit/C29.jpg">
                    </div>
                    <div class="tout">
                        <div class="nom_produit">
                            <p>Ecigarette Economique</p>
                        </div>
                        <div class="descprition_produit">
                            <p>Cigarette pas tres economique vu son prix</p>
                        </div>
                        <div class="prix_produit">
                            <p>100€</p>
                        </div>
                        <div class="quantite">
                            
                        </div>
                        <div class="bouton"><button class="ajout_panier" type="submit" name="prod-C29"> ajouter au panier </button></div>
                    </div>
                </div>
            </div>

            <?php

            if (isset($_POST["prod-C29"])) {
                
                ajouterArticle("C29", "Ecigarette economique", 1, 100);
            }
            ?>




            <div class="titre">
                <H1>LES PROMOTION DU MOMENTS</H1>
            </div>

            <div class="promo">
                <div class="toutpromo1">

                    <div class="item_promo">

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
                                
                            </div>
                            <div class="bouton"><button class="ajout_panier" name="prod-A12"> ajouter au panier </button></div>
                        </div>
                    </div>

                    <?php

                    if (isset($_POST["prod-A12"])) {
                        
                        ajouterArticle("A12", "Chargeur Double", 1, 14);
                    }
                    ?>

                    <div class="item_promo">
                        <div class="image_produit"><img src="/image/produit/A17.jpg">
                        </div>
                        <div class="tout">
                            <div class="nom_produit">
                                <p>Pochette de rangement </p>
                            </div>
                            <div class="descprition_produit">
                                <p>Pour ranger ses affaires</p>
                            </div>
                            <div class="prix_produit">
                                <p>25€</p>
                            </div>
                            <div class="quantite">
                                
                            </div>
                            <div class="bouton"><button class="ajout_panier" type="submit" name="prod-A17"> ajouter au panier </button>
                            </div>
                        </div>
                    </div>
                    <?php

                    if (isset($_POST["prod-A17"])) {
                        
                        ajouterArticle("A17", "Pochette de rangement", 1, 25);
                    }
                    ?>

                    <div class="item_promo">
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
                                <p>12</p>
                            </div>
                            <div class="quantite">
                                
                            </div>
                            <div class="bouton"><button class="ajout_panier" type="submit" name="prod-A20"> ajouter au panier </button></div>
                        </div>
                    </div>

                    <?php

                    if (isset($_POST["prod-A20"])) {
                        
                        ajouterArticle("A20", "Flacon", 1, 12);
                    }
                    ?>

                    <div class="item_promo">
                        <div class="image_produit"><img src="/image/produit/P02.jpg">
                        </div>
                        <div class="tout">
                            <div class="nom_produit">
                                <p>Resistance 50w</p>
                            </div>
                            <div class="descprition_produit">
                                <p>Resiste prouve que tu existes</p>
                            </div>
                            <div class="prix_produit">
                                <p>3€</p>
                            </div>
                            <div class="quantite">
                                
                            </div>
                            <div class="bouton"><button class="ajout_panier" type="submit" name="prod-P02"> ajouter au panier </button></div>
                        </div>
                    </div>
                    <?php

                    if (isset($_POST["prod-P02"])) {
                        
                        ajouterArticle("P02", "Resistance 50w", 1, 12);
                    }
                    ?>

                </div>
                <div class="toutpromo2">
                    <div class="item_promo">

                        <div class="image_produit"><img src="/image/produit/C04.jpg">
                        </div>
                        <div class="tout">
                            <div class="nom_produit">
                                <p>Ecigarette Kit</p>
                            </div>
                            <div class="descprition_produit">
                                <p>elle fume</p>
                            </div>
                            <div class="prix_produit">
                                <p>40€</p>
                            </div>
                            <div class="quantite">
                                
                            </div>
                            <div class="bouton"><button class="ajout_panier" type="submit" name="prod-C04"> ajouter au panier </button></div>
                        </div>
                    </div>

                    <?php

                    if (isset($_POST["prod-C04"])) {
                        
                        ajouterArticle("C04", "Ecigarette kit", 1, 40);
                    }
                    ?>
                    <div class="item_promo">
                        <div class="image_produit"><img src="/image/produit/L25.jpg">
                        </div>
                        <div class="tout">
                            <div class="nom_produit">
                                <p>Liquide Ananas</p>
                            </div>
                            <div class="descprition_produit">
                                <p>c'est liquide et gout Ananas</p>
                            </div>
                            <div class="prix_produit">
                                <p>9€</p>
                            </div>
                            <div class="quantite">
                                
                            </div>
                            <div class="bouton"><button class="ajout_panier" type="submit" name="prod-L25"> ajouter au panier </button></div>
                        </div>
                    </div>

                    <?php

                    if (isset($_POST["prod-L25"])) {
                        
                        ajouterArticle("L25", "Liquide Ananas", 1, 9);
                    }
                    ?>
                    <div class="item_promo">
                        <div class="image_produit"><img src="/image/produit/C16.jpg">
                        </div>
                        <div class="tout">
                            <div class="nom_produit">
                                <p>Pod 2000</p>
                            </div>
                            <div class="descprition_produit">
                                <p>super ecigarette</p>
                            </div>
                            <div class="prix_produit">
                                <p>15€</p>
                            </div>

                            <div class="quantite">
                                
                            </div>
                            <div class="bouton">
                                <button class="ajout_panier" type="submit" name="prod-C16"> ajouter au panier </button>
                            </div>
                        </div>

                    </div>
                    <?php

                    if (isset($_POST["prod-C16"])) {
                        
                        ajouterArticle("C16", "Pod 2000", 1, 15);
                    }
                    ?>
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