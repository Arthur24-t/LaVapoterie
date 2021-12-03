
<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8" />

<head>
    <title>Site d'achat d'ecigarette</title>
    <link rel="icon" href="/image/logo.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="site.css" />
    
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

        <div class="top">
        <div>
        <p>Top des ventes</p>
        <div class="item">
            <div><H1>1</H1></div>
                <div class="image_produit"><img src="/image/cigarette-electronique-80w-complet-kit-kit-vape-av.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>cigarette</p>
                    </div>
                    <div class="descprition_produit">
                        <p>elle fume</p>
                    </div>
                    <div class="prix_produit">
                        <p>10€</p>
                    </div>
                    <div class="quantite">
                        <form action="" method="POST">
                    <input name="nb-0001" id="number" type="number" value="1" min="1" max="15">   
                    </div> 
                    <div class="bouton"><button class="ajout_panier" type="submit" name="prod-0001"> <img src="/image/panier.png"> ajouter au panier </button></div>
                </div></form>
            </div>

            <?php  

if (isset($_POST["prod-0001"]))
{
$produit = $_POST["prod-0001"];
$nb= $_POST["nb-0001"];
$_SESSION["truc"] +=1 ;
echo $nb;
}
else
echo "bleu";


try {
 
    $pdo = new PDO(
        'mysql:host=localhost;dbname=site;charset=utf8',
        'root',
        '1234'
    );
    
    }
    catch (PDOException $exception) {
     
     mail('VOTRE_EMAIL', 'PDOException', $exception->getMessage());
     exit('Erreur de connexion à la base de données');
     
    }



?>



            <div class="item">
            <div><H1>2</H1></div>
                <div class="image_produit"><img src="/image/cigarette-electronique-80w-complet-kit-kit-vape-av.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>cigarette</p>
                    </div>
                    <div class="descprition_produit">
                        <p>elle fume</p>
                    </div>
                    <div class="prix_produit">
                        <p>10€</p>
                    </div>
                    <div class="quantite">
                    <input name="nb-0002" id="number" type="number" value="1" min="1" max="15">   
                    </div> 
                    <div class="bouton"><button class="ajout_panier" type="submit" name="prod-0002"> <img src="/image/panier.png"> ajouter au panier </button></div>
                </div>
            </div>
            <div class="item">
            <div><H1>3</H1></div>
                <div class="image_produit"><img src="/image/cigarette-electronique-80w-complet-kit-kit-vape-av.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>cigarette</p>
                    </div>
                    <div class="descprition_produit">
                        <p>elle fume</p>
                    </div>
                    <div class="prix_produit">
                        <p>10€</p>
                    </div>
                    <div class="quantite">
                    <input  name="nb-0003" id="number" type="number" value="1" min="1" max="15">   
                    </div> 
                    <div class="bouton"><button class="ajout_panier" type="submit" name="prod-0003"> <img src="/image/panier.png"> ajouter au panier </button></div>
                </div>
            </div>
            <div class="item">
            <div><H1>4</H1></div>
                <div class="image_produit"><img src="/image/cigarette-electronique-80w-complet-kit-kit-vape-av.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>cigarette</p>
                    </div>
                    <div class="descprition_produit">
                        <p>elle fume</p>
                    </div>
                    <div class="prix_produit">
                        <p>10€</p>
                    </div>
                    <div class="quantite">
                    <input name="nb-0004" id="number" type="number" value="1" min="1" max="15">   
                    </div> 
                    <div class="bouton"><button class="ajout_panier" type="submit" name="prod-0004"> <img src="/image/panier.png"> ajouter au panier </button></div>
                </div>
            </div>
            <div class="item">
            <div><H1>5</H1></div>
                <div class="image_produit"><img src="/image/cigarette-electronique-80w-complet-kit-kit-vape-av.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>cigarette</p>
                    </div>
                    <div class="descprition_produit">
                        <p>elle fume</p>
                    </div>
                    <div class="prix_produit">
                        <p>10€</p>
                    </div>
                    <div class="quantite">
                    <input name="nb-0005" id="number" type="number" value="1" min="1" max="15">   
                    </div> 
                    <div class="bouton"><button class="ajout_panier" type="submit" name="prod-0005"> <img src="/image/panier.png"> ajouter au panier </button></div>
                </div>
            </div>
    </div>
</div>


    <div class="millieu">
        <h1>Les Promotions du moment !!</h1>
        <div class="promo">
        <div class="toutpromo1">
            <div class="item_promo">
        
                <div class="image_produit"><img src="/image/cigarette-electronique-80w-complet-kit-kit-vape-av.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>cigarette</p>
                    </div>
                    <div class="descprition_produit">
                        <p>elle fume</p>
                    </div>
                    <div class="prix_produit">
                        <p>10€</p>
                    </div>
                    <div class="quantite">
                    <input id="number" type="number" value="1" min="1" max="15">   
                    </div> 
                    <div class="bouton"><button class="ajout_panier" type="submit" name="prod-0006"> <img src="/image/panier.png"> ajouter au panier </button></div>
                </div>
            </div>


            <div class="item_promo">
                <div class="image_produit"><img src="/image/heisenberg.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>Produit</p>
                    </div>
                    <div class="descprition_produit">
                        <p>c'est liquide</p>
                    </div>
                    <div class="prix_produit">
                        <p>5€</p>
                    </div>
                    <div class="quantite">
                    <input id="number" type="number" value="1" min="1" max="15">   
                    </div> 
                    <div class="bouton"><button class="ajout_panier" type="submit"> <img src="/image/panier.png"> ajouter au panier </button>
                </div>
                </div>
            </div>

            <div class="item_promo">
                <div class="image_produit"><img src="/image/ecigarette.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>ecigarette superturbo</p>
                    </div>
                    <div class="descprition_produit">
                        <p>mega cigarette de la mort qui tue</p>
                    </div>
                    <div class="prix_produit">
                        <p>un rein</p>
                    </div>
                    <div class="quantite">
                    <input id="number" type="number" value="1" min="1" max="15">   
                    </div> 
                    <div class="bouton"><button class="ajout_panier" type="submit"> <img src="/image/panier.png"> ajouter au panier </button></div>
                </div>
            </div>

            <div class="item_promo">
                <div class="image_produit"><img src="/image/resistance-melo-ec-eleaf-a-l-unite-cigarette-electronique.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>Resistance</p>
                    </div>
                    <div class="descprition_produit">
                        <p>Resiste prouve que tu existes</p>
                    </div>
                    <div class="prix_produit">
                        <p>24€</p>
                    </div>
                    <div class="quantite">
                    <input id="number" type="number" value="1" min="1" max="15">   
                    </div> 
                    <div class="bouton"><button class="ajout_panier" type="submit"> <img src="/image/panier.png"> ajouter au panier </button></div>
                </div>
            </div>

            
        </div>
        <div class="toutpromo2">
        <div class="item_promo">
                
        <div class="image_produit"><img src="/image/cigarette-electronique-80w-complet-kit-kit-vape-av.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>cigarette</p>
                    </div>
                    <div class="descprition_produit">
                        <p>elle fume</p>
                    </div>
                    <div class="prix_produit">
                        <p>10€</p>
                    </div>
                    <div class="quantite">
                    <input id="number" type="number" value="1" min="1" max="15">   
                    </div> 
                    <div class="bouton"><button class="ajout_panier" type="submit"> <img src="/image/panier.png"> ajouter au panier </button></div>
                </div>
            </div>


            <div class="item_promo">
                <div class="image_produit"><img src="/image/heisenberg.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>Produit</p>
                    </div>
                    <div class="descprition_produit">
                        <p>c'est liquide</p>
                    </div>
                    <div class="prix_produit">
                        <p>5€</p>
                    </div>
                    <div class="quantite">
                    <input id="number" type="number" value="1" min="1" max="15">   
                    </div> 
                    <div class="bouton"><button class="ajout_panier" type="submit"> <img src="/image/panier.png"> ajouter au panier </button></div>
                </div>
            </div>

            <div class="item_promo">
                <div class="image_produit"><img src="/image/ecigarette.jpg">
                </div>
                <div class="tout">
                    <div class="nom_produit">
                        <p>ecigarette superturbo</p>
                    </div>
                    <div class="descprition_produit">
                        <p>mega cigarette de la mort qui tue</p>
                    </div>
                    <div class="prix_produit">
                        <p>un rein</p>
                    </div>
                    
                    <div class="quantite">
                    <input id="number" type="number" value="1" min="1" max="15">   
                    </div> 
                    <div class="bouton">
                    <button class="ajout_panier" type="submit"> <img src="/image/panier.png"> ajouter au panier </button>
                </div>
                </div>
                
            </div>

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


        </div>
        </div>
        <H1>Nos Categorie !</H1>
        <div class="categorie">
            
<div class="ligne1">
    <div class="categ_">
        <a href="Cigarettes.html">
        <p>ecigarette</p>
<img src="image/ciga_dessin.jpg" alt="">
</a>
    </div>
    <div class="categ_">
    <a href="liquides.html">
    <p>liquide</p>
<img src="image/liquide_categ.png" alt="">
    </a>
    </div>
    </div>

<div class="ligne2">
    <div class="categ_">
    <a href="accessoire.html">
    <p>Accessoire</p>
<img src="image/accessorie.jpg" alt="">
</a>
    </div>
    <div class="categ_">
    <a href="pieces.html">
    <p>Pieces</p>
<img src="image/pieces_categ.jpg" alt="">
</a>
    </div>
    </div>
    </div>
        </div>



<div class="commentaire">
<p>les commentaires:</p>
        </div>

    </div>

</body>

<footer>
<div class="footer_certif">
    <div><p>une super livraison </p></div>
    <div><p>des avis certifié !</p></div> !
</div>
</footer>

</html>


