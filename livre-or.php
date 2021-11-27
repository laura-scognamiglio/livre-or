<?php

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre d'or</title>
</head>
<body class="livrOrBody">
    <table class="tableau">
<thead>
    <tr>
        <td>commentaire</td>
        <td>date</td>
        <td>login</td>
    </tr>
</thead>

<?php foreach($afficheCom2 as $result): ?>
    <tr>
        <td><?=$result["commentaire"];?></td>
        <td><?=$result["date"];?></td>
        <td><?=$result["login"];?></td>
       
    </tr> 
<?php endforeach;?>
<?php if(isset($_SESSION['user'])){?>
    <form action="livre-or.php" method="post">
                     
                <textarea class="com" name="com"
                        rows="5" cols="33"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name= "valider" class="btn btn-primary btn-block">Valider</button>
                </div>   
            </form>
            
<?php } ?>

</html>