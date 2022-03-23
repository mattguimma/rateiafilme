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
    <link rel="stylesheet" href="./css/movie-page.css">
    <link rel="stylesheet" href="./css/overall.css">
    <script src="https://kit.fontawesome.com/005aefdac6.js" crossorigin="anonymous"></script>
    <title>Rateia Filme - Movie</title>
</head>
<body>
    <navbar id="navbar">
        <div class="navbar-container">
            <a href="main-feed.php"><img src="./images/logo.png" alt="" class="logo"></a>
            <div id="userarea">
                <i class="fa-solid fa-circle-plus"></i>
                <span class="username"><?php echo $_SESSION['username']?></span>
                <img src="./images/user.jpg" alt="" class="userimage">
                <br>
            </div>
        </div>
    </navbar>

    <div id="showcase">
        <div id="sc-landing">
            <div class="poster"></div>
            <div id="movie-info">
                <h1 class="title">Movie Title</h1> 
                <p class="year">2022</p>
                <p class="directedby">Dirigido por Dir. Name</p>

                <div class="synopsis">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Libero doloribus ipsum, iure tempora quo dicta natus maxime. Error ratione maiores voluptates illo, molestias asperiores quia! Quidem, eos? Vero, possimus deleniti.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>