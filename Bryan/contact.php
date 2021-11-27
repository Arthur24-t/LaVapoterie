
<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8" />

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="site.css" />
</head>

<header class="header">
<?php include("header.php"); ?>

</header>

<body>

<div class="contact_main">

<div class="contact_droite"> 

</div>
<div class="contact_millieu">

<form action="contact.php" method="post" class="contact_form">

<label for="name">Entrer votre nom: </label>
    <input type="text" name="name" id="name" required>
</br>
    <label for="email">Entrer votre adresse email : </label>
    <input type="email" name="email" id="email" required>
    </br>


    <label for="sujet">Sujet de votre message</label>

    <select name=" contact_sujet" size="1">
<option value="pbLivraison">Probleme avec la Livraison</option>
<option value="pbProduit">Porbleme avec le produit</option>

<option value="pbreclamation">reclamation</option>
</select>

    </br><span class="contact_message">
    <textarea name="contact_message" rows="10" cols="50" minlength="30" maxlength="500"  require>  </textarea></span>
</br>
    <input type="submit" value="Envoyer" name="submit">
</form>
<?php


if (isset($_POST['submit']))
{
    $to = 'arthur@lavapoterie';
$subject= $_POST["contact_sujet"];
$message='email :'. $_POST["email"]. "\nsujet :" . $_POST["contact_sujet"]. "\nmessage : ". $_POST["contact_message"] ; 
$from = 'admin@lavapoterie';
if(mail($to, $subject, $message)){
   echo 'Votre message a été envoyé avec succès! Nous vous repondrons dans les plus bref delais ';
} else{
   echo 'Impossible d envoyer des emails. Veuillez réessayer.';
}
}

?> 

</div>
    <div class="contact_gauche">

    </div>

</div>








</body>

</html>