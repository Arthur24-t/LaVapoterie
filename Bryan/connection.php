<html>
    <head>
       <meta charset="utf-8">
        
        <link rel="stylesheet" href="connection.css" media="screen" type="text/css" />
    </head>
    
    <header>
    <?php include("header.php"); ?>
    <div class="tout">
        <div id="container">
            
            
            <form action="fonction-connection.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                <p>Pas encore inscrit ? cliquez <a href="inscription.php">ici</a></p>
                <input type="submit" id='submit' value='CONNECTION' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                        if($err==3)
                        echo "<p style='color:red'>Vous devez vous connecter pour commander</p>";
                }
                ?>
            </form>

        </div>
        </div>
            </header>
</html>