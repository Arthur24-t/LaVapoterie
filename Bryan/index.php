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
    <link rel="stylesheet" type="text/css" href="site.css" />
    <link rel="stylesheet" media="screen and (max-width: 1280px)" href="site.css" type="text/css" />

</head>

<?php include("header.php"); ?>


<!--Nos coups de coeurs TOP 5-->


<!--- lien facebook et insta en bas de page newlatters sur site gaelle -->



<body>



    <div class="banderole">

        <table>
            <tr></tr>
        </table>

    </div>
    <div class="corps">
        <div class="millieu">
            <div class="titre">
                <h1>Top des ventes</h1>
            </div>
            <div class="top">

                <div class="item">
                    <div>
                        <H1>1</H1>
                    </div>
                    <div class="image_produit"><img src="/image/produit/pod-caliburn.jpg">
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
                                <input name="nb-C01" id="number" type="number" value="1" min="1" max="15">
                        </div>
                        <div class="bouton"><button class="ajout_panier" type="submit" name="prod-C01"> ajouter au panier </button></div>
                    </div>
                </div>

                <?php
                if (isset($_POST["prod-C01"])) {
                    $qte = $_POST["nb-C01"];
                    ajouterArticle("C01", "Pod Caliburn", $qte, 30);
                }


                /*

                try {

                    $pdo = new PDO(
                        'mysql:host=localhost;dbname=site;charset=utf8',
                        'root',
                        '1234'
                    );
                } catch (PDOException $exception) {

                    mail('VOTRE_EMAIL', 'PDOException', $exception->getMessage());
                    exit('Erreur de connexion à la base de données');
                }
                */
                ?>
                


                <div class="item">
                    <div>
                        <H1>2</H1>
                    </div>
                    <div class="image_produit"><img src="/image/produit/aegis-solo.jpg">
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
                            <input name="nb-C14" id="number" type="number" value="1" min="1" max="15">
                        </div>
                        <div class="bouton"><button class="ajout_panier" type="submit" name="prod-C14"> ajouter au panier </button></div>
                    </div>
                </div>

                <?php
                if (isset($_POST["prod-C14"])) {
                    $qte = $_POST["nb-C14"];
                    ajouterArticle("C14", "Aegis Solo", $qte, 54);
                }
                ?>
                <div class="item">
                    <div>
                        <H1>3</H1>
                    </div>
                    <div class="image_produit"><img src="/image/produit/acu-30w.jpg">
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
                            <input name="nb-A11" id="number" type="number" value="1" min="1" max="15">
                        </div>
                        <div class="bouton"><button class="ajout_panier" type="submit" name="prod-A11"> ajouter au panier </button></div>
                    </div>
                </div>
                <?php

                if (isset($_POST["prod-A11"])) {
                    $qte = $_POST["nb-A11"];
                    ajouterArticle("A11", "Acu 30w", $qte, 10);
                }
                ?>
                <div class="item">
                    <div>
                        <H1>4</H1>
                    </div>
                    <div class="image_produit"><img src="/image/produit/liquide-mangue.jpg">
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

                            <input name="nb-L30" id="number" type="number" value="1" min="1" max="15">
                        </div>
                        <div class="bouton"><button class="ajout_panier" type="submit" name="prod-L30" onclick="document.location.reload(true)"> <img src="/image/panier.png"> ajouter au panier </button></div>
                    </div>
                </div>

                <?php

                if (isset($_POST["prod-L30"])) {
                    $qte = $_POST["nb-L30"];
                    ajouterArticle("L30", "Liquide Mangue", $qte, 12);
                }
                ?>
                <div class="item">
                    <div>
                        <H1>5</H1>
                    </div>
                    <div class="image_produit"><img src="/image/produit/cigarette-economique.jpg">
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
                            <input name="nb-C29" id="number" type="number" value="1" min="1" max="15">
                        </div>
                        <div class="bouton"><button class="ajout_panier" type="submit" name="prod-C29"> ajouter au panier </button></div>
                    </div>
                </div>
            </div>

            <?php

            if (isset($_POST["prod-C29"])) {
                $qte = $_POST["nb-C29"];
                ajouterArticle("C29", "Ecigarette economique", $qte, 100);
            }
            ?>




            <div class="titre">
                <h1>Les Promotions du moment !!</h1>
            </div>

            <div class="promo">
                <div class="toutpromo1">

                    <div class="item_promo">

                        <div class="image_produit"><img src="/image/produit/chargeur-double.jpg">
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
                                <input name="nb-A11" id="number" type="number" value="1" min="1" max="15">
                            </div>
                            <div class="bouton"><button class="ajout_panier" name="prod-A11"> ajouter au panier </button></div>
                        </div>
                    </div>

                    <?php

                    if (isset($_POST["prod-A11"])) {
                        $qte = $_POST["nb-A11"];
                        ajouterArticle("A11", "Chargeur Double", $qte, 14);
                    }
                    ?>

                    <div class="item_promo">
                        <div class="image_produit"><img src="/image/produit/pochette-rangement.jpg">
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
                                <input name="nb-A17" id="number" type="number" value="1" min="1" max="15">
                            </div>
                            <div class="bouton"><button class="ajout_panier" type="submit" name="prod-A11"> ajouter au panier </button>
                            </div>
                        </div>
                    </div>
                    <?php

                    if (isset($_POST["prod-A17"])) {
                        $qte = $_POST["nb-A17"];
                        ajouterArticle("A17", "Pochette de rangement", $qte, 25);
                    }
                    ?>

                    <div class="item_promo">
                        <div class="image_produit"><img src="/image/produit/flacon.jpg">
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
                                <input name="nb-A20" id="number" type="number" value="1" min="1" max="15">
                            </div>
                            <div class="bouton"><button class="ajout_panier" type="submit" name="prod-A20"> ajouter au panier </button></div>
                        </div>
                    </div>

                    <?php

                    if (isset($_POST["prod-A20"])) {
                        $qte = $_POST["nb-A20"];
                        ajouterArticle("A20", "Flacon", $qte, 12);
                    }
                    ?>

                    <div class="item_promo">
                        <div class="image_produit"><img src="/image/produit/resistance-50w.jpg">
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
                                <input name="nb-P02" id="number" type="number" value="1" min="1" max="15">
                            </div>
                            <div class="bouton"><button class="ajout_panier" type="submit" name="prod-P02"> ajouter au panier </button></div>
                        </div>
                    </div>
                    <?php

                    if (isset($_POST["prod-P02"])) {
                        $qte = $_POST["nb-P02"];
                        ajouterArticle("P02", "Resistance 50w", $qte, 12);
                    }
                    ?>

                </div>
                <div class="toutpromo2">
                    <div class="item_promo">

                        <div class="image_produit"><img src="/image/produit/ecigarette-kit.jpg">
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
                                <input name="nb-C04" id="number" type="number" value="1" min="1" max="15">
                            </div>
                            <div class="bouton"><button class="ajout_panier" type="submit" name="prod-C04"> ajouter au panier </button></div>
                        </div>
                    </div>

                    <?php

                    if (isset($_POST["prod-C04"])) {
                        $qte = $_POST["nb-C04"];
                        ajouterArticle("C04", "Ecigarette kit", $qte, 40);
                    }
                    ?>
                    <div class="item_promo">
                        <div class="image_produit"><img src="/image/produit/liquide ananas.jpg">
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
                                <input name="nb-L25" id="number" type="number" value="1" min="1" max="15">
                            </div>
                            <div class="bouton"><button class="ajout_panier" type="submit" name="prod-L25"> ajouter au panier </button></div>
                        </div>
                    </div>

                    <?php

                    if (isset($_POST["prod-L25"])) {
                        $qte = $_POST["nb-L25"];
                        ajouterArticle("L25", "Liquide Ananas", $qte, 9);
                    }
                    ?>
                    <div class="item_promo">
                        <div class="image_produit"><img src="/image/produit/pod-2000.jpg">
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
                                <input name="nb-C16" id="number" type="number" value="1" min="1" max="15">
                            </div>
                            <div class="bouton">
                                <button class="ajout_panier" type="submit" name="prod-C16"> ajouter au panier </button>
                            </div>
                        </div>

                    </div>
                    <?php

                    if (isset($_POST["prod-C16"])) {
                        $qte = $_POST["nb-C16"];
                        ajouterArticle("C16", "Pod 2000", $qte, 15);
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




            <div class="titre">
                <H1>Nos Categorie !</H1>
            </div>

            <div class="categorie">


                <div class="ligne1">
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
                </div>

                <div class="ligne2">
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
        </div>
    </div>


    <div class="commentaire">

    </div>



</body>

<footer>
    <div class="footer_certif">
        <div>
            <p>une super livraison </p>
        </div>
        <div>
            <p>des avis certifié !</p>
        </div> !
    </div>
</footer>

</html>