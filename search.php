<?php session_start();
    
    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }
    
    $apikey = "dde274716fc84e69d97751f654a169c7";
    $unmod_query = $_GET['searchquery'];
    $query = str_replace(" ", "+", $unmod_query);

    $tmdbapi = "http://api.themoviedb.org/3/search/movie?query={$query}&api_key={$apikey}&language=pt-BR";
    $json = file_get_contents($tmdbapi);
    $fetchresults = json_decode($json);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/search.css">
    <link rel="stylesheet" href="./css/overall.css">
    <script src="https://kit.fontawesome.com/005aefdac6.js" crossorigin="anonymous"></script>
    <title>Rateia Filme - Registrar filme</title>
</head>
<body>
    <navbar id="navbar">
        <div class="navbar-container">
            <a href="main-feed.php"><img src="./images/logo.png" alt="" class="logo"></a>

            <div id="rightside">
                <div id="search">
                    <form action="search.php" method="get">
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
        <div id="searchlist">
            <div id="searchmovieobj">
                <h3 class="searchtitle">Encontramos X resultados com a palavra ATUMALACA.</h3>
                <?php
                    foreach($fetchresults -> results as $mv_res) {
                        echo "<style> h4{ color:white; }</style>";

                        echo "<img src='https://image.tmdb.org/t/p/w185/".$mv_res -> poster_path."' alt=''>";
                        echo "<h4 color:'white'>".$mv_res -> title."</h4>";
                        echo "<h6 color:'white'>".$mv_res -> original_title."</h6>";
                        echo "<hr>";
                    }
                ?>
            </div>
        </div>
    </div>
</body>