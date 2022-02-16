<?php
session_start();
echo '<?xml version="1.0" encoding="utf-8"?>';
?>

<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="../css/paiement.css" media="screen" type="text/css" />
</head>


<?php include("header.php"); ?>
<div class="tout">
    <div id="container">


        <form action="fonction-paiement.php" method="POST">
            <h1>Paiement</h1>

            <label><b>Numero de Carte de credit</b></label>
            <input type="text" placeholder="Entrer le numero" name="numCarte" required minlength="16" maxlength="16">

            <label><b>Date d'expiration</b></label>

            <input type="text"  name="dateCarte" value="MM/YY" maxlength="5">
            <label><b>Cryptogramme</b></label>
            <input type="text" placeholder="Entrer Cryptogramme" name="cryptoCarte" minlength="3" maxlength="3" required>
            <input type="checkbox" id="save " name="save" ><label>Sauvegarder votre carte pour vos prochains achats</label>
            <input type="submit" id='submit' value='paiement'>

        </form>

    </div>
</div>

</html>