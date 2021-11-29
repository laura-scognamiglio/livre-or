<?php

/**
 * connexion à la database.
 */
require('database.php');
include('navbar.php');


if(isset($login) 
&& !empty($login)
&& isset($password) 
&& !empty($password))
{
    $login = htmlspecialchars(trim($_POST['login']));
    $password = htmlspecialchars(trim($_POST['password']));
    $passwordconfirm = htmlspecialchars(trim($_POST['passwordconfirm']));
    $mssg = "";
    
    $requete_log = mysqli_query($bdd, "SELECT `login` FROM `utilisateurs` WHERE `login` = '$login'");
    $requete_fetch = mysqli_fetch_all($requete_log, MYSQLI_ASSOC);

    // if(((isset($login)) && (isset($requete_fetch["login"]))) === (($login) && ($requete_fetch["login"]))){
    echo '<pre>';
    var_dump($requete_fetch);
    echo '</pre>';

    if(count($requete_fetch) != 0){
        echo ('login already used');
    }
    elseif($password == $passwordconfirm){
        $hashed_pwrd = password_hash($password, PASSWORD_DEFAULT);
        $add_user = mysqli_query($bdd, "INSERT INTO `utilisateurs`(login, password) VALUES ('$login','$hashed_pwrd')");
        header('Location:connexion.php');
    }
    
} 

if(isset($_POST['submit']))
{

    if(empty($login)){
        $mssg = "empty login";
        echo $mssg;
    }elseif(empty($password)){
        $mssg2 = "empty password";
        echo $mssg2;
    }elseif($password != $passwordconfirm){
        $mssg3 = "passwords are differents";
        echo $mssg3;
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body class ="insBody">
    <header></header>
    <main>
        <section class= "formulaire">
            <form class= "form" action= "inscription.php" method= "post">
                <h2 class= "title" >Inscription</h2>
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


