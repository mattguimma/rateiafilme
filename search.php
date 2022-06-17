<?php session_start();
    
    include_once("./scripts/tmdbapi.php");

    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }
    
    $nowpage = null;

    if(!isset($_GET['numpage'])){
        $nowpage = 1;
    }else{
        $nowpage = $_GET['numpage'];
    }

    $raw_query = $_GET['searchquery'];
    $query = str_replace(" ", "+", $raw_query);

    $searchrequest = $apilink . "search/movie?query={$query}&api_key={$apikey}&language=pt-BR&page={$nowpage}&page={$nowpage}";
    $json = file_get_contents($searchrequest);
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
    <title>Rateia Filme</title>
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
                    <span class="username"><?php echo $_SESSION['username']?></span>                        
                    <img src="<?php echo $_SESSION['userpic']?>" alt="" class="userimage">
                </div>
            </div>
        </div>
    </navbar>

    <div id="showcase">
        <div id="searchlist">
            <h3 class="searchtitle">Encontramos X resultados com o termo <?php echo strtoupper($raw_query) ?>.</h3>

                <?php
                    foreach($fetchresults -> results as $mv_res) {
                        $posterpath = "";
                        
                        if($mv_res -> poster_path != null){
                            $posterpath = "https://image.tmdb.org/t/p/w185/{$mv_res -> poster_path}";
                        }
                        else{
                            $posterpath = "./images/posternull.png";
                        }

                        echo "
                        <div id='searchmovieobj'>
                            <img class='movieposter' src='{$posterpath}'>
                            
                            <div class='movietitles'>
                                <h2>".$mv_res -> title."</h2>
                                <p>".$mv_res -> original_title."</p>
                            </div>
                        
                        </div> <hr>
                        ";
                    }

                    if($fetchresults -> page == $fetchresults -> total_pages){
                        echo "<style>
                            .nextpage-btn{
                                visibility: hidden;
                            }
                            </style>";
                    }
                    if($fetchresults -> page == 1){
                        echo "<style>
                            .prevpage-btn{
                                visibility: hidden;
                            }
                            </style>";
                    }

                    $prevpage = $fetchresults -> page - 1;
                    $nextpage = $fetchresults -> page + 1;

                    echo "
                    <div id='pageind'>
                        <a class='prevpage-btn' href='search.php?searchquery={$raw_query}&numpage={$prevpage}'><i class='fa-solid fa-circle-left'></i></a>
                        <p>Página {$fetchresults -> page} de {$fetchresults -> total_pages}<p> 
                        <a class='nextpage-btn' href='search.php?searchquery={$raw_query}&numpage={$nextpage}'><i class='fa-solid fa-circle-right'></i></a>
                    </div>";

                ?>
        </div>
    </div>
</body>