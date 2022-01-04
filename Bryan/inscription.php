<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="inscription.css" />
</head>
<body>
<?php

if (isset($_REQUEST['username'], $_REQUEST['email'], $_REQUEST['password'])){
    $today = date("y-m-d");
    echo"bleu";

    //connection base de donnée 
    $db_username = 'root';
    $db_password = '1234';
    $db_name     = 'lavapoterie';
    $db_host     = 'localhost';
    $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
           or die('could not connect to database');

  // récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
  $username = stripslashes($_REQUEST['username']);
  $username = mysqli_real_escape_string($db, $username); 
  echo $username;

  // récupérer l'email et supprimer les antislashes ajoutés par le formulaire
  $email = stripslashes($_REQUEST['email']);
  $email = mysqli_real_escape_string($db, $email);
  echo $email;


  $nom = stripslashes($_REQUEST['nom']);
  $nom = mysqli_real_escape_string($db, $nom);
  echo $nom;


  $prenom = stripslashes($_REQUEST['prenom']);
  $prenom = mysqli_real_escape_string($db, $prenom);
  echo $prenom;


  $age = $_POST['age'];

  echo $age;


  // récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
  $password = stripslashes($_REQUEST['password']);
  $password = mysqli_real_escape_string($db, $password);
  //requéte SQL + mot de passe crypté
  echo $password;

    $query = "INSERT into `client` (`cliPseudo`,`cliMdp`,`cliNom`,`cliPrenom`,`cliMail`,`cliDate`,`cliAge`)
              VALUES ('$username','$password', '$nom', '$prenom', '$email', '$today', '$age')";
  // Exécuter la requête sur la base de données
 echo $query;
    $res = mysqli_query($db, $query);

    echo $res;
    if($res){
        echo "pute";
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='connection.php'>connecter</a></p>
       </div>";
    }
}else{
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
                <input type="text" placeholder="Entrer votre adresse email" name="email" required>

                <label><b>Age</b></label>
                <input type="date" placeholder="Entrer votre age" name="age" required>



                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <p>deja inscrit ? cliquez <a href="connection.php">ici</a></p>
                <input type="submit" id='submit' value='CONNECTION' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
            </form>




<?php } ?>
</body>
</html>


