
<link rel="stylesheet" type="text/css" href="site.css" />


    <div class="truc">
        <div class="bidule">
            
        </div>
        <a href="index.php">
            <div class="logo">
                <img src="image/Logo.png" class="logo" width="200" height="200">
            </div>
        </a>
        
        <div class="panier"><a href="panier.php">
            <img src="/image/panier.png" class="panier" width="90" height="90">
            <?php   
            include_once("fonction-panier.php");
            $nb= compterArticles();

            if ($nb == 0)
            {
            echo "<p>il n'y a pas d'article </br>dans le panier </p>" ;
            }
            else
            echo "<p>il y a $nb d'article </br>dans le panier </p>" ;
            ?>
    </a>
            </br>
        </div>
    </div>


    <div class="menu">

        <a href="immanquables.php">
            <div>A NE PAS MANQUER !</div>
        </a>
        <a href="Cigarettes.php">
            <div>NOS CIGARETTES ELECTRONIQUES</div>
        </a>
        <a href="liquides.php">
            <div>E-LIQUIDES</div>
        </a>
        <a href="accessoire.php">
            <div>ACCESSOIRES</div>
        </a>
        <a href="pieces.php">
            <div>PIECES DETACHEES</div>
        </a>
        <a href="guide.php">
            <div>LE GUIDE</div>
        </a>
        <a href="contact.php">
            <div>QUI SOMMES-NOUS ?</div>
        </a>

    </div>

