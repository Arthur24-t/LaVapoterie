<link rel="stylesheet" type="text/css" href="../css/header.css" />
<link rel="stylesheet" media="screen and (max-width: 1280px)" href="../css/header.css" type="text/css" />

<div class="truc">
    <div class="reseau">
        <img src="../image/logo insta.jpg">
        <img src="../image/logo facebook.png">
    </div>
    <a href="../index.php">
        <div class="logob">
            <img src="../image/Logo.png" class="logo" width="200" height="200">
        </div>
    </a>



    <div class="container">
        <!-- tester si l'utilisateur est connecté -->
        <?php

        if (isset($_GET['deconnexion'])) {
            if ($_GET['deconnexion'] == true) {
                unset($_SESSION['username']);
                header("location:index.php");
            }
        }
        if (isset($_SESSION['username'])) {
            $user = strtolower($_SESSION['username']);
            // afficher un message
            echo "<p><span class='pseudo'>Bonjour &nbsp <span style='font-weight:bold'>$user </span></span></p>";
            echo "<a href='index.php?deconnexion=true'><span class='deco'><br>Déconnexion</span></a>";
        } else {
            echo "<a href='connection.php'><span class='co'>Connection</span></a>";
        }
        ?>





        <div class="panier"><a href="/pages/panier.php">
                <img src="../image/panier.png" class="panier" width="90" height="90">

                <!-- Docked at the top right corner -->
                <div class="container__docker">
                    <?php
                    include_once("fonction-panier.php");
                    $nb = compterArticles();

                    if ($nb == 0) {
                        echo "<p>0   </p>";
                    } else
                        echo "<p>$nb </p>";
                    ?>
                </div>


            </a>


        </div>




        </br>
    </div>
</div>


<div class="menu">

    <a href="/pages/immanquables.php">
        <div>A NE PAS MANQUER !</div>
    </a>
    <a href="/pages/Cigarettes.php">
        <div>NOS CIGARETTES ELECTRONIQUES</div>
    </a>
    <a href="/pages/liquides.php">
        <div>E-LIQUIDES</div>
    </a>
    <a href="/pages/accessoire.php">
        <div>ACCESSOIRES</div>
    </a>
    <a href="/pages/pieces.php">
        <div>PIECES DETACHEES</div>
    </a>
    <a href="/pages/guide.php">
        <div>LE GUIDE</div>
    </a>
    <a href="/pages/contact.php">
        <div>QUI SOMMES-NOUS ?</div>
    </a>

</div>