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
    <title>Rateia Filme - Registrar filme</title>
</head>
<body>
<navbar id="navbar">
        <div class="navbar-container">
            <img src="./images/logo.png" alt="" class="logo">
            <div id="userarea">
                <i class="fa-solid fa-circle-plus"></i>
                <span class="username"><?php echo $_SESSION['username']?></span>
                <img src="./images/user.jpg" alt="" class="userimage">
                <br>
            </div>
        </div>
    </navbar>

    <div id="showcase">
        <div id="session-message">
            <?php
                if (isset($_SESSION['failedregister'])) 
                {
                echo $_SESSION['failedregister'];
                unset($_SESSION['failedregister']);
                }
            ?>
        </div>

        <div id="form-regmovie">
            <form method="POST" action="./scripts/input-movie.php" enctype="multipart/form-data">
                <label for = "movietitle">
                    <span>Título do filme</span>
                    <input type="movietitle" name="movietitle" class="form-control" required autofocus>
                </label>
                
                <label for = "moviedir">
                    <span>Diretor</span>
                    <input type="moviedir" name="moviedir" class="form-control" required autofocus>
                </label>

                <label for = "movieyear">
                    <span>Ano de lançamento</span>
                    <input type="movieyear" name="movieyear" class="form-control" onkeypress="return onlynumber();" required>
                </label>
                
                <label for = "moviesip">
                    <span>Sinopse</span>
                    <input type="moviesip" name="moviesip" class="form-control" required>
                </label>

                <label for = "movieyt">
                    <span>Trailer</span>
                    <input type="movieyt" name="movieyt" class="form-control" required>
                </label>
                <button type="submit">Registrar filme</button>
            </form>
        </div>
    </div>
</body>
</html>