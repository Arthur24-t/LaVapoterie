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

<form action="" method="get" class="contact_form">

<label for="name">Entrer votre nom: </label>
    <input type="text" name="name" id="name" required>
</br>
    <label for="email">Entrer votre adresse email : </label>
    <input type="email" name="email" id="email" required>
    </br>
    <label for="sujet">Sujet de votre message</label>
    <select name=" nomdelaliste" size="nombre de lignes visibles">
<option value="nom de l'élément">texte à afficher</option>
<option value="nom de l'élément">texte à afficher</option>

<option value="nom de l'élément">texte à afficher</option>
</select>

    </br><span class="contact_message">
    <textarea name="contact_message" rows="10" cols="50" minlength="30" maxlength="500"  require>  </textarea></span>
</br>
    <input type="submit" value="Envoyer">
</form>


</div>
    <div class="contact_gauche">

    </div>

</div>








</body>

</html>