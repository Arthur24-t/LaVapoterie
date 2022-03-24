<!DOCTYPE html>
<html>

<head>
<title>Compte</title>
<link rel="icon" href="/image/logo.png" type="image/icon type">
    <link rel="stylesheet" href="../css/compte.css" />
</head>

<body>
    <?php include("header.php"); ?>
    <?php
$username = $_SESSION['username'];
    if (isset($_REQUEST['email'], $_REQUEST['password'])) {
        $today = date("y-m-d");


        //connection base de donnée 
        $db_username = 'root';
        $db_password = '1234';
        $db_name     = 'lavapoterie';
        $db_host     = 'localhost';
        $db = mysqli_connect($db_host, $db_username, $db_password, $db_name)
            or die('could not connect to database');
            
        // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
        $email = stripslashes($_REQUEST['email']);


        if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // test de l'adresse mail pour voir si elle est "correct"
            $email = mysqli_real_escape_string($db, $email);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($db, $password);

            if ($_POST['password'] == $_POST['password2']) {

                $requete = "SELECT count(*) FROM client where 
              cliPseudo = '$username' and cliMdp = '" . hash('sha256', $password) . "' ";
                $exec_requete = mysqli_query($db, $requete);
                $reponse      = mysqli_fetch_array($exec_requete);
                $count = $reponse['count(*)'];

                if($count != 0){


                //requéte SQL + mot de passe crypté
                $query = "UPDATE `client` SET 
                        `cliMail`=`$adresse`,
                        `cliMdp`= `hash('sha256', $password)`,
                         WHERE cliPseudo LIKE $username";

                // Exécuter la requête sur la base de données
                $res = mysqli_query($db, $query);


                if ($res) {

                    echo "<div class='sucess'>
                                <h3>Changement effectué.</h3>
                                
                                </div>";
             
                            }
                        }
            } else {
                header('Location: inscription.php?erreur=3'); // erreur pas le meme mdp
            }
        } else {
            header('Location: inscription.php?erreur=1'); // erreur email
        }
    } else {

    ?>




        <div id="container">


            <form action="" method="POST">
                <h1>Compte</h1>
                <span class="btn-com">
                    <a href="comcli.php"> Votre historique de commande </a>
                </span>
                <?php
                if (isset($_GET['erreur'])) {
                    $err = $_GET['erreur'];
                    if ($err == 1)
                        echo "<p style='color:red'>l'adresse mail est incorrect</p>";
                    if ($err == 2)
                        echo "<p style='color:red'>il faut etre majeur pour s'inscrire sur le site</p>";
                    if ($err == 3)
                        echo "<p style='color:red'>les mot de passes ne corresponde pas</p>";
                    if ($err == 4)
                        echo "<p style='color:red'>le nom d'utilisateur est deja utilisé</p>";
                }
                ?>

                <label><b> changer d'Adresse Email</b></label>
                <input type="email" placeholder="lasser vide si non changer" name="email" required>


                <label><b>Nouveau Mot de passe</b></label>
                <input type="password" placeholder="lasser vide si non changer" name="password" minlength="8" required>

                <label><b>Confirmation du nouveau mot de passe</b></label>
                <input type="password" placeholder="lasser vide si non changer" name="password2" minlength="8" required>

                <label><b>Ancien mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="ancienmdp" minlength="8" required>

                <input type="submit" id='submit' value='Sauvegarder'>

            </form>




        <?php } ?>
</body>

</html>