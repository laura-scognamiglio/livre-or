<?php
// session_start();

require('database.php');
include('navbar.php');


$sessLogin = $_SESSION['user'][0]['login'];

if(isset($_POST['valider']))
{
    
$sessId = $_SESSION['user'][0]['id'];
    $coment = htmlentities($_POST['com']);
    $date = date("Y-m-d H:i:s");
    

    echo '<pre>';
    var_dump($date);
    echo '</pre>'; 
   
    $addCom = mysqli_query($bdd, "INSERT INTO `commentaires`( `commentaire`, `id_utilisateurs`, `date`) VALUES ('$coment','$sessId','$date')");
    header('Refresh:0');
    
    echo '<pre>';
    var_dump($sessId);
    echo '</pre>';


}
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
        
        <h2 class="sous-titre">Hey <?php echo $sessLogin ?> ! </h2>       
            <form action="commentaire.php" method="post">
                <div class="form-group">
                     <label for="story">Lache ton com:</label>
                </div>
                <div class="form-group">
                <textarea class="com" name="com"
                        rows="5" cols="33"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name= "valider" class="btn val">Valider</button>
                </div>   
            </form>
        </section>
    </main>
</body>
</html>