<?php
session_start();
echo '<?xml version="1.0" encoding="utf-8"?>';
?>

<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8" />
<head>
    <link rel="stylesheet" type="text/css" href="livraison.css" />
    <script type="text/javascript" src="livraison.js"></script>
</head>
<div class="head">
    <?php include("header.php"); ?>
</div>


<body>
    <div id="container">
        <div class="millieu">
            

        <form action="fonction-livraison.php" method="POST">
        <h1>Adresse de livraison et facturation </h1>

                <h3>Adresse de livraison:</h3>
                <label><p><b>Adresse (numero et rue)</b></p></label>
                <input type="text" placeholder="Entrer votre adresse" name="adresse" required>

                <label><p><b>Complement d'adresse</b></p></label>
                <input type="text" placeholder="Entrer votre complement" name="ComplementAdresse" required>

                <label><p><b>Code Postal</b></p></label>
                <input type="text" placeholder="Entrer votre code Postal" name="Cpostal" required>

                <label><p><b>Ville</b></p></label>
                <input type="text" placeholder="Entrer votre Ville" name="Ville" required>

                <input type="checkbox" id="same" name="check" checked onclick="factu()"><label>Utiliser cette adresse comme adresse de Facturation</label>
                <div id="facturation" class="check"></div>
                <input type="submit" id='submit' value='livraison' >
                


        </form>


        


        </div>
    </div>
</body>

</html>