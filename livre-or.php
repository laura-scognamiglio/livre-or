<?php
// session_start();
require('database.php');
include('navbar.php');

$afficheCom2 = mysqli_query($bdd,"SELECT utilisateurs.login, commentaires.* FROM `utilisateurs` INNER JOIN commentaires WHERE utilisateurs.id = commentaires.id_utilisateurs ORDER BY `date` DESC;");

$afficheCom = mysqli_query($bdd,"SELECT * FROM `commentaires` ORDER BY `date` DESC");

if(isset($_POST["valider"])){
    
    
    $sessLogin = $_SESSION['user'][0]['login'];
    $sessId = $_SESSION['user'][0]['id'];
    $coment = htmlentities($_POST['com']);
    $date = date("Y-m-d H:i:s");
    // $mssg = "message added";
    // echo $mssg;

    $query2 = mysqli_query($bdd, "INSERT INTO `commentaires`( `commentaire`, `id_utilisateurs`, `date`) VALUES ('$coment','$sessId','$date') "); 
    header('Refresh:0');
   
    }
?>

<!DOCTYPE html>
<html lang="en" class = "livHtml">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or</title>
</head>
<body class="livrOrBody">
    <table class="tableau">
            <thead>
                <!-- <tr>
                    <th>commentaire</th>
                    <th>date</th>
                    <th>login</th>
                </tr> -->
            </thead>

        <?php foreach($afficheCom2 as $result): ?>
            <tr>
                <td><span>♣︎ posté par:</span> <?=$result["login"];?></td>
                <td><span> le </span> <?=$result["date"];?></td>
                <td> <?=$result["commentaire"];?></td>
            
            </tr> 
        <?php endforeach;?>
        <?php if(isset($_SESSION['user'])){?>
            <section class="connect_form">
            <h2 class= "sous-titre" >Livre d'or</h2>
            <form action="livre-or.php" method="post" class="formcom">
                            
                        <textarea class="com" name="com"
                                rows="5" cols="33"></textarea>
                        
                        <div class="form-group">
                            <button type="submit" name= "valider" class="btn">Valider</button>
                        </div>   
            </form>
            </section>        
        <?php } ?>
    </table>
</body>
</html>