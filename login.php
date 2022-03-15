<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/overall.css">
    <title>Rateia Filme - Login</title>
</head>

<body>
    <div id="sc-content">
        <div id="session-message">
            <?php
                if (isset($_SESSION['sucessregister'])) 
                {
                echo $_SESSION['sucessregister'];
                unset($_SESSION['sucessregister']);
                }
            ?>
        </div>
        
        <img class="logo" src="./images/logo.png" alt="">

        <div id="form-login">
            <form method="POST" action="./php/input-user.php">
                <label for = "email">
                    <span>Email</span>
                    <input type="email" name="email" class="form-control" placeholder="exemplo@exemplo.com" required autofocus>
                </label>
                
                <label for = "senha">
                    <span>Senha</span>
                    <input type="password" name="password" class="form-control" minlength="8" required>
                </label>
                <button type="submit">Acessar</button>
            </form>
        </div>
    </div>
</body>
</html>