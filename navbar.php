<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
    <header class="headerstyle"> 
       
        <nav class= "navbar">
            <form action="index.php" method="post" >
            <ul class="navul">
                <li class="navli"><a href="index.php">Accueil</a></li>
                <li class="navli"><a href="inscription.php">Inscription</a></li>
                <li class="navli"><a href="connexion.php">Connexion</a></li>
                <li class="navli"><a href="livre-or.php">livre d'or</a></li>
                <li class="navli"><a href="https://github.com/laura-scognamiglio/livre-or" target="_blank">Git</a></li>
                    <?php
                    session_start();
                    
                    
               // balise php avec la condition de reconnaisance du profil user
                if(isset($_SESSION['user'])){
                   
                    echo ('<li class="navli"><a href="commentaire.php">Commentaire</a></li>');
                    echo ('<li class="navli"><a href="profil.php">Profil</a></li>');
                    echo ('<li class="libtndeco"><button class="deco" type="submit" name="deco" >X</button></li>');
                }
                 // destruction de la session si bouton deconnexion enclencher
                if(isset($_POST['deco'])){ 
                    
                    session_destroy();
                    header('Location:index.php');
                }
                ?>

            </ul>
            </form>
        </nav>
    </header>
            
 
</html>