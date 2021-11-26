<?php session_start() ?>
<header class="header">

    <div class="truc">
        <div class="bidule">
            <p></p>
        </div>
        <a href="index.php">
            <div class="logo">
                <img src="image/Logo.png" class="logo" width="200" height="200">
            </div>
        </a>
        <div class="panier"><img src="/image/panier.png" class="panier" width="90" height="90">
</br>
        <?php

 echo "il y a : " .$_SESSION["truc"] ." artcile dans le panier";
?>
        </div>

    </div>


    <div class="menu">

        <a href="immanquables.html">
            <div>A NE PAS MANQUER !</div>
        </a>
        <a href="Cigarettes.html">
            <div>NOS CIGARETTES ELECTRONIQUES</div>
        </a>
        <a href="liquides.html">
            <div>E-LIQUIDES</div>
        </a>
        <a href="accessoire.html">
            <div>ACCESSOIRES</div>
        </a>
        <a href="pieces.html">
            <div>PIECES DETACHEES</div>
        </a>
        <a href="guide.html">
            <div>LE GUIDE</div>
        </a>
        <a href="contact.php">
            <div>QUI SOMMES-NOUS ?</div>
        </a>

    </div>

   