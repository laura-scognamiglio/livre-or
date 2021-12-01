<?php

/**
 * connexion à la database.
 */
require('database.php');
include('navbar.php');


if(isset($_POST['login']) 
&& isset($_POST['password']))
{

        if (isset($_POST['submit']))
        {
                if (!empty($password) && !empty($login))
                        {
                        
                        
                        $requete_log = mysqli_query($bdd, "SELECT `login` FROM `utilisateurs` WHERE `login` = '$login'");
                        $requete_fetch = mysqli_fetch_all($requete_log, MYSQLI_ASSOC);

                        // if(((isset($login)) && (isset($requete_fetch["login"]))) === (($login) && ($requete_fetch["login"]))){
                        

                        if(count($requete_fetch) != 0)
                        {
                            echo ('login already used');
                        }
                        elseif($password == $passwordconfirm)
                        {
                            $hashed_pwrd = password_hash($password, PASSWORD_DEFAULT);
                            $add_user = mysqli_query($bdd, "INSERT INTO `utilisateurs`(login, password) VALUES ('$login','$hashed_pwrd')");
                            header('Location:connexion.php');
                        }
                        
                    }
            } 
}

   
    elseif(empty($login) && isset($_POST['submit'])){
        $mssg = "empty login";
        echo $mssg;
    }elseif(empty($password) && isset($_POST['submit'])){
        $mssg2 = "empty password";
        echo $mssg2;
    }elseif($password != $passwordconfirm){
        $mssg3 = "passwords are differents";
        echo $mssg3;
    }


?>



<!DOCTYPE html>
<html lang="en" class="insHtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body class ="insBody">
    <main>
        <section class= "formulaire">
            <h2 class= "sous-titre" >Inscription</h2>
            <form class= "form" action= "inscription.php" method= "post">
               
                    <div class= "form-group">
                        <input type= "text" name= "login" placeholder= "login" autocomplete= "off">
                    </div>
                    <div class= "form-group">
                        <input type= "password" name= "password" placeholder= "password" autocomplete= "off">
                    </div>
                    <div class= "form-group">
                        <input type= "password" name= "passwordconfirm" placeholder= "password" autocomplete= "off">
                    </div>
                    <div class="form-group">
                        <button type="submit" name= "submit" class="btn ">Valider</button>
                    </div> 
            </form>
        </section>
    </main>
    
</body>
</html>


