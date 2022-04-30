<?php 
    session_start();

    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }

    include_once("./scripts/connection.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/main-feed.css">
    <link rel="stylesheet" href="./css/overall.css">
    <script src="https://kit.fontawesome.com/005aefdac6.js" crossorigin="anonymous"></script>
    <title>Rateia Filme</title>
</head>
<body>
    <navbar id="navbar">
        <div class="navbar-container">
            <a href="main-feed.php"><img src="./images/logo.png" alt="" class="logo"></a>
            <div id="userarea">
                <a href="register-movie.php"><i class="fa-solid fa-circle-plus"></i></a>
                <a href="write-review.php"><i class="fa-solid fa-pen-circle"></i></a>
                <a href="./scripts/logoff.php"><i class="fa-solid fa-circle-xmark"></i></a>
                <span class="username"><?php echo $_SESSION['username']?></span>
                <img src="<?php echo $_SESSION['userpic']?>" alt="" class="userimage">
                <br>
            </div>
        </div>
    </navbar>

    <div id="showcase">
        <div id="popularmovies">
            <h1 class="popmtitle">Filmes mais populares</h1>
            <div id="moviesgrid">
                <?php
                    $query = "SELECT * FROM moviedata LIMIT 12";
                    $v_exit = mysqli_query($conn, $query);

                    $i = 1;

                    while($rowmovie = mysqli_fetch_assoc($v_exit)){
                        echo "<a class='linkmovie". $i ."' href='movie.php?id=$rowmovie[id]'><div class='poster". $rowmovie['id'] ."'>";
                        echo "<style> .poster". $rowmovie['id'] ."{ 
                                background-image: url(". $rowmovie['moviepostercss'] .");
                                background-size: cover;
                                border-width: 3px;
                                border-radius: 5px;
                                cursor: pointer;
                                height: 225px;
                                width: 150px;
                            } </style>";

                            $i++;
                        echo "</div></a>";
                    }
                ?>
            </div>
        </div>    
    </div>
</body>