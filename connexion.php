<?php
require('database.php');




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
