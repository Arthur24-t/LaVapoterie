<?php session_start();
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8" />

<head>
    <title>Contact</title>
    <link rel="icon" href="/image/logo.png" type="../image/icon type">
    <link rel="stylesheet" type="text/css" href="../css/contact.css" />
</head>


<body>
<div class="head">
    <?php include("header.php"); ?>
</div>
<?php include("header.php"); ?>

    <div class="contact_main" id="container">

        <div class="contact_millieu">

            <form action="contact.php" method="post" class="contact_form">
                <?php


                if (isset($_POST['submit'])) {
                    $subject = $_POST["contact_sujet"];
                    $message = 'email :' . $_POST["email"] . "\nsujet :" . $_POST["contact_sujet"] . "\nmessage : " . $_POST["contact_message"];
                    $from = 'Admin@LaVapoterie';
                    if (mail($to, $subject, $message)) {
                        echo '<p color="red">Votre message a été envoyé avec succès! Nous vous repondrons dans les plus bref delais</p> ';
                    } else {
                        echo 'Impossible d envoyer des emails. Veuillez réessayer.';
                    }
                }

                ?>
                <h2>Formulaire de Contact !</h2>
                <label for="name">Entrer votre nom: </label>
                <input type="text" name="name" id="name" required>
                </br>
                <label for="email">Entrer votre adresse email : </label>
                <input type="email" name="email" id="email" required>
                </br>
                <label for="sujet">Sujet de votre message</label>

                <select name=" contact_sujet" size="1">
                    <option value="pbLivraison">Probleme avec la Livraison</option>
                    <option value="pbProduit">Probleme avec le produit</option>
                    <option value="pbreclamation">Reclamation</option>
                </select>

                </br>
                <span class="contact_message">
                    <textarea name="contact_message" rows="10" cols="38" minlength="30" maxlength="500" require>  </textarea></span>
                </br>
                <input type="submit" value="Envoyer" name="submit">



            </form>
        </div>
        <div class="contact_gauche">

        </div>

    </div>

</body>

</html>