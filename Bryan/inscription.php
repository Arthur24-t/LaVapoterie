<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="inscription.css" />
</head>

<body>
<?php include("header.php"); ?>
    <?php

    if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])) {
        $today = date("y-m-d");


        //connection base de donnée 
        $db_username = 'root';
        $db_password = '1234';
        $db_name     = 'lavapoterie';
        $db_host     = 'localhost';
        $db = mysqli_connect($db_host, $db_username, $db_password, $db_name)
            or die('could not connect to database');

        // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($db, $username);

        $sql  = "SELECT COUNT(*) AS nbr FROM client WHERE cliPseudo = '".$_POST['username'].  //recherche du pseudo dans la base de donnée
        "'";
        $ex  = mysqli_query($db,$sql);
        $alors  = mysqli_fetch_assoc($ex);

        if(($alors['nbr'] == 0)){
            $email = stripslashes($_REQUEST['email']);


            if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // test de l'adresse mail pour voir si elle est "correct"
                $email = mysqli_real_escape_string($db, $email);
    
    
                $nom = stripslashes($_REQUEST['nom']);
                $nom = mysqli_real_escape_string($db, $nom);
    
    
                $prenom = stripslashes($_REQUEST['prenom']);
                $prenom = mysqli_real_escape_string($db, $prenom);
    
    
    
                $age = $_POST['age'];
                $from = new DateTime($age);
                $to   = new DateTime('today');
                if ($from->diff($to)->y >= 18) { // verification de la majorité
    
    
                    $password = stripslashes($_REQUEST['password']);
                    $password = mysqli_real_escape_string($db, $password);
    
                    if ($_POST['password'] == $_POST['password2']) {
                        //requéte SQL + mot de passe crypté
                        $query = "INSERT into `client` (`cliPseudo`,`cliMdp`,`cliNom`,`cliPrenom`,`cliMail`,`cliDate`,`cliAge`)
                                    VALUES ('$username','" . hash('sha256', $password) . "', '$nom', '$prenom', '$email', '$today', '$age')";
    
                        // Exécuter la requête sur la base de données
                        $res = mysqli_query($db, $query);
    
    
                        if ($res) {
    
                            echo "<div class='sucess'>
                                <h3>Vous êtes inscrit avec succès.</h3>
                                <p>Cliquez ici pour vous <a href='connection.php'>connecter</a></p>
                                </div>";
                        } 
                    }
    
                    
                    else {
                    header('Location: inscription.php?erreur=3'); // erreur pas le meme mdp
                    }
                    
                } else {
                    header('Location: inscription.php?erreur=2'); // erreur d'age 
                }
            } else {
                header('Location: inscription.php?erreur=1'); // erreur email
            }
        }else{
            header('Location: inscription.php?erreur=4'); // erreur user deja crée 
        }
        
    } else {

    ?>




        <div id="container">


            <form action="" method="POST">
                <h1>Inscription</h1>

                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrer votre nom" name="nom" required>

                <label><b>Prenom</b></label>
                <input type="text" placeholder="Entrer votre prenom" name="prenom" required>

                <label><b>Adresse Email</b></label>
                <input type="email" placeholder="Entrer votre adresse email" name="email" required>

                <label><b>Age</b></label>
                <input type="date" placeholder="Entrer votre age" name="age" required>



                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" minlength="8" required>

                <label><b>Confirmation du mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password2" minlength="8" required>

                <p>Deja inscrit ? Cliquez <a href="connection.php">ici</a></p>
                <input type="submit" id='submit' value='INSCRIPTION'>
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
            </form>




        <?php } ?>
</body>

</html>