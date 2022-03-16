<?php session_start();
    
    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/register-movie.css">
    <link rel="stylesheet" href="./css/overall.css">
    <script src="https://kit.fontawesome.com/005aefdac6.js" crossorigin="anonymous"></script>
    <title>Rateia Filme - Movie</title>
</head>
<body>
<navbar id="navbar">
        <div class="navbar-container">
            <img src="./images/logo.png" alt="" class="logo">
            <div id="userarea">
                <i class="fa-solid fa-circle-plus"></i>
                <span class="username">Username</span>
                <img src="./images/user.jpg" alt="" class="userimage">
                <br>
            </div>
        </div>
    </navbar>

    <div id="showcase">
        <div id="sc-landing">
        </div>
    </div>
</body>
</html>