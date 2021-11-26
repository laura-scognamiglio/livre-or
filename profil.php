<?php
include('navbar.php');
require('database.php');
$sessLogin = $_SESSION['user'][0]['login'];
$sessPasswrd = $_SESSION['user'][0]['password'];

$newlog = $login;
$hashed_pwrd = password_hash($password, PASSWORD_DEFAULT);
$newpassWrd = $hashed_pwrd;

$query = mysqli_query($bdd,"SELECT * FROM `utilisateurs` WHERE `login`= '$sessLogin'");
$result = mysqli_fetch_assoc($query);

// $requete_con = mysqli_query($bdd, "SELECT * FROM `utilisateurs` WHERE `login` = '$login'");
// $requete_confetch = mysqli_fetch_all($requete_con, MYSQLI_ASSOC);



// if(isset($login))
// {
    // if(count($requete_confetch) != 0){
        if(isset($_POST['validerlog']))
        {
            
            $login = $result['login'];
            $update = "UPDATE `utilisateurs` SET `login`='$newlog' WHERE `login` = '$sessLogin'";
            $update_new = mysqli_query($bdd, $update);
            session_destroy();
            header('Location:connexion.php');
           
        }
            

        if(isset($_POST['validerpass']))
        {
             echo '<pre>';
            var_dump("coucou2");
            echo '</pre>';
            $password = $result['password'];
            
            $update2 = "UPDATE `utilisateurs` SET `password`='$newpassWrd' WHERE `login` = '$sessLogin'";
            $update_new2 = mysqli_query($bdd, $update2);

            session_destroy();
            header('Location:connexion.php');
        }
            echo '<pre>';
            var_dump($_SESSION);
            echo '</pre>';
// }
    // }   

// $updateFetch = mysqli_fetch_all($update, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Document</title>
</head>
<body class="profilBody">
    <main>
    <section class= connect_form>
        <form action="profil.php" method="post">
                <h2 class="text-center">Profil de <?php echo $sessLogin ?> </h2>       
                <div class="form-group-profil">
                <label for="login">Nouveau login:</label><br>
                    <input type="login" name="login" class="form-control" placeholder="Login"  value ="<?php echo $sessLogin ?>" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" name= "validerlog" class="btn btn-primary btn-block">Valider</button>
                </div>  
                <div class="form-group-profil">
                <label for="login">Nouveau password:</label><br>
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe"   autocomplete="off">
                </div>
                <div class="form-group-profil">
                <label for="login">Confirmer le password:</label><br>
                    <input type="passwordconfirm" name="passwordconfirm" class="form-control" placeholder="Confimer le nouveau mot de passe"   autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" name= "validerpass" class="btn btn-primary btn-block">Valider</button>
                </div>   
            </form>
        </div>
        </section>
    </main>
</body>
</html>