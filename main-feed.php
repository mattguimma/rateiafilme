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

    <h1 class="popmtitle">Filmes para você</h1>
    <div id="popularmovies">
        <div id="movieslistcontent">
            <button class="btleft" onclick="scrollHorizontal(1)"><i class="fa-solid fa-chevron-left"></i></button>    
            <button class="btright" onclick="scrollHorizontal(-1)"><i class="fa-solid fa-chevron-right"></i></button>
            
            <div id="moviesgrid">
                <?php
                    $query = "SELECT * FROM moviedata LIMIT 12";
                    $v_exit = mysqli_query($conn, $query);
                    $i = 1;
                    while($rowmovie = mysqli_fetch_assoc($v_exit)){
                        echo "<a class='linkmovie". $i ."' href='movie.php?id=$rowmovie[id]'>";
                        echo "<style> .linkmovie". $i ."
                            { 
                                background-image: url(". $rowmovie['moviepostercss'] .");
                                background-size: cover;
                                margin: 0 5px;
                                border-radius: 2.5px;
                                cursor: pointer;
                                min-height: 351px;
                                min-width: 236px;
                            }
                            </style>";

                            $i++;
                            echo "</a>";
                        }
                ?>

                <script>
                    let curScrollPos = 0;
                    let scrollAmount = 390;

                    const sConst = document.querySelector("#moviesgrid");
                    const hScroll = document.querySelector("#movieslistcontent");
                    const btnLeft = document.querySelector(".btleft");
                    const btnRight = document.querySelector(".btright");

                    btnLeft.style.opacity = "0";

                    let maxScroll = -sConst.clientWidth +  hScroll.clientWidth;

                    function scrollHorizontal(val){
                        curScrollPos += (val * scrollAmount);

                        if(curScrollPos >= 0){
                            curScrollPos = 0;
                            btnLeft.style.opacity = "0";
                            btnLeft.style.visibility = "hidden";
                        }
                        else{
                            btnLeft.style.opacity = "1";
                            btnLeft.style.visibility = "visible";
                        }

                        if(curScrollPos <= maxScroll){
                            curScrollPos = maxScroll;
                            btnRight.style.opacity = "0";
                            btnRight.style.visibility = "hidden";
                        }
                        else{
                            btnRight.style.opacity = "1";
                            btnRight.style.visibility = "visible";
                        }

                        sConst.style.left = curScrollPos + "px";
                    }
                </script>
            </div>
        </div>
    </div>
</body>