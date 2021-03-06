<?php 
    session_start(); 
    if(isset($_SESSION['username'])){
        header("Location: main-feed.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="./css/overall.css">
    <title>Rateia Filme</title>
</head>
<body>
    <div id="background">
        <img src="./images/backgrounds/1.jpg" alt="">
    </div>

    <div id="showcase">
        <div id="content">
            <img class="logo" src="./images/logo.png" alt="">

            <h1 class="comment">Liste e avalie seus filmes favoritos!</h1>
            <h3 class="subcomment">(ou nem tão favoritos)</h3>

            <a href="login.php"> <button class="btlogin">Login</button> </a>
            <br>
            <a href="register.php"> <button class="btlogin">Registro</button> </a>

            <a href="https://github.com/mattguimma" class="gitlink"> 
                Projetado por Mattheus Guimarães 
            </a>
        </div>
    </div>
</body>
</html>