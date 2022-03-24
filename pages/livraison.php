<?php
session_start();
echo '<?xml version="1.0" encoding="utf-8"?>';
$user = strtolower($_SESSION['username']);

if (isset($_SESSION['username'])){

$db_username = 'root';
$db_password = '1234';
$db_name     = 'lavapoterie';
$db_host     = 'localhost';
$db = mysqli_connect($db_host, $db_username, $db_password, $db_name)
    or die('could not connect to database');

//  Etablissement de la connexion à la BDD


// Préparation de la requête	 
$requete =  "SELECT cliAdresse, cliCompAdresse, cliCPostal, cliVille, cliAdresseFac, cliCompAdresseFac, cliCPostalFac, cliVilleFac  FROM client WHERE cliPseudo LIKE '$user';";


// Exécution de la requête sur la connexion établie
$result = mysqli_query($db, $requete);

// nombre de lignes retournées par la requête SQL
$num_rows = mysqli_num_rows($result);

// Affichage du résultat de la requête par une boucle TANT QUE (While)


// ------------------------------------------------------
while ($a_row = mysqli_fetch_row($result)) {
    $i = 0;
    foreach ($a_row as $field) {
        $i++;
        $tab[$i] = $field;
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<meta charset="utf-8" />

<head>
<title>Livraison</title>
<link rel="icon" href="/image/logo.png" type="image/icon type">
    <link rel="stylesheet" type="text/css" href="../css/livraison.css" />
    <script type="text/javascript" src="../Js/livraison.js"></script>
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



                <label>
                    <p><b>Adresse (numero et rue)</b></p>
                </label>
                <?php echo " <input type='text' placeholder='Entrer votre adresse' value='$tab[1]' name='adresse' required>";
                ?>
                <label>
                    <p><b>Complement d'adresse</b></p>
                </label>
                <?php echo " <input type='text' placeholder='Entrer votre complement'  value='$tab[2]' name='ComplementAdresse' required>"; ?>

                <label>
                    <p><b>Code Postal</b></p>
                </label>
                <?php echo " <input type='text' placeholder='Entrer votre code Postal'  value='$tab[3]' name='Cpostal' required>"; ?>

                <label>
                    <p><b>Ville</b></p>
                </label>
                <?php echo " <input type='text' placeholder='Entrer votre Ville' value='$tab[4]' name='Ville' required> "; ?>

                <input type="checkbox" id="same" name="check" checked onclick="factu()"><label>Utiliser cette adresse comme adresse de Facturation</label>
                <div id="facturation" class="check"></div>
                <input type="submit" id='submit' value='Paiement ->'>



            </form>





        </div>
    </div>
</body>

</html>

<?php 
}
else {

    header('Location: connection.php?erreur=3');

}

?>
