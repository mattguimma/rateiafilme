<?php session_start();
    
    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }
    include_once("./scripts/connection.php");
    
    if(!isset($_GET['id'])){
        header("Location: main-feed.php");
    }

    $movieid = $_GET['id'];
    $query = "SELECT * FROM moviedata WHERE id = $movieid";
    $v_exit = mysqli_query($conn, $query);
    $sqlmoviedata = mysqli_fetch_assoc($v_exit);
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

            <div id="rightside">
                <div id="search">
                    <form action="search.php" method="GET">
                        <input type="text" id="searchquery" name="searchquery" placeholder="Pesquisar..."/>
                        <button type="submit" class="fa-solid fa-magnifying-glass"></button>
                    </form>
                </div> 

                <div id="userarea">
                    <!-- <a href="write-review.php"><i class="fa-solid fa-pen-circle"></i></a>
                    <a href="register-movie.php"><i class="fa-solid fa-circle-plus"></i></a>
                    <a href="./scripts/logoff.php"><i class="fa-solid fa-circle-xmark"></i></a> -->
                    <span class="username"><?php echo $_SESSION['username']?></span>                        
                    <img src="<?php echo $_SESSION['userpic']?>" alt="" class="userimage">
                </div>
            </div>
        </div>
    </navbar>

    <div id="showcase">
        <div id="sc-landing">
            <div class="poster">
                <style>
                    .poster{
                        background-image: url(<?php echo $sqlmoviedata['moviepostercss']?>);
                        background-size: cover;
                    }
                </style>
            </div>
            <div id="movie-info">
                <h1 class="title"><?php echo $sqlmoviedata['moviename']?></h1> 
                <p class="year"><?php echo $sqlmoviedata['movieyear']?></p>
                <p class="directedby"><?php echo $sqlmoviedata['moviedir']?></p>

                <div class="synopsis">
                    <p><?php echo $sqlmoviedata['moviesinopse']?></p>
                </div>

                <p class="watchon">Watch on</p>
                <a href="<?php echo $sqlmoviedata['movietrailer']?>"><i class="fa-solid fa-circle-play"> Trailer pelo Youtube </i></a>
            </div>

            <?php // nao funciona aqui em baixo ?>
            <div id="avgrate">
                <i class="fa-solid fa-star"></i>
                <p class="nota"><?php echo $sqlmoviedata['movierate']?></p>
            </div>
        </div>
    </div>
</body>
</html>