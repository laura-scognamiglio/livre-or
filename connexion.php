<?php
// session_start();
require('database.php');
include('navbar.php');

if(isset($login)
&& !empty($login) 
&& isset($password)
&& !empty($password))
{

    
    $requete_con = mysqli_query($bdd, "SELECT * FROM `utilisateurs` WHERE `login` = '$login'");
    $requete_confetch = mysqli_fetch_all($requete_con, MYSQLI_ASSOC);

    if(isset($_POST["submit"]))
    {
        
        
        if(count($requete_confetch) != 0)
        {
            
            $mdp = $requete_confetch[0]["password"];

            if(password_verify($password, $mdp)){
            
                $_SESSION['user'] = $requete_confetch; 
                header('Location:index.php');
            }
                
        }
        elseif($login != $requete_confetch['login'])
        {
            echo "the id are wrong ";
        }

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
    }
}
if(isset($_POST['submit'])){
    if(empty($login)){
        $mssg = "empty login";
        echo $mssg;
    }elseif(empty($password)){
        $mssg2 = "empty password";
        echo $mssg2;
    }elseif($password != $requete_confetch['password']){
        $mssg3 = "wrong password";
        echo $mssg3;
    }
}

if(isset($_POST["deco"]))
    {
        session_destroy();
        header('Refresh:0');
        header('Location:index.php');
    }

?>

<!DOCTYPE html>
<html lang="en" class="conHtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🖤Connexion</title>
</head>
<body class ="conBody">
    <main>
        <section class= "conSection2">
        <!-- <section class= "formulaire"> -->
            <form class= "form" action= "connexion.php" method= "post">
                <h2 class= "sous-titre" >Connexion</h2>
                    <div class= "form-group">
                        <input type= "text" name= "login" placeholder= "login" autocomplete= "off">
                    </div>
                    <div class= "form-group">
                        <input type= "password" name= "password" placeholder= "password" autocomplete= "off">
                    </div>
                    <div class="form-group">
                    <button type="submit" name= "submit" class="btn ">Valider</button>
                    </div>
            </form>
        <!-- </section> -->
        </section>
    </main>
    
</body>
</html>
