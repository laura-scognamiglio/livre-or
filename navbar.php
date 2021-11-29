<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  
    <header> 
       
        <nav class= "navbar">
            <form action="index.php" method="post" >
            <ul class="navul">
                <li class="navli"><a href="index.php">Accueil</a></li>
                <li class="navli"><a href="inscription.php">Inscription</a></li>
                
                
                <li class="navli"><a href="livre-or.php">livre d'or</a></li>
                <li class="navli"><a href="https://github.com/laura-scognamiglio/livre-or" target="_blank">git</a></li>
                
                <?php

                if(isset($_SESSION['user'])){
                    echo ('<li class="navli"><a href="connexion.php">Connexion</a></li>');
                    echo ('<li class="navli"><a href="commentaire.php">Commentaire</a></li>');
                    echo ('<li class="libtndeco"><button class="btndeco"  type="submit" name="deco"  >X</button></li>');
                    if(isset($_POST['deco'])){
                        session_destroy();
                        header('Location:index.php');
                    }
                    
                }
                
                ?>

            </ul>
            </form>
        </nav>
    </header>

 
</html>