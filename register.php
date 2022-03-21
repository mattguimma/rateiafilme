<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="./css/overall.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rateia Filme - Cadastro</title>
</head>
<body>
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

        <img class="logo" src="./images/logo.png" alt="">

        <div id="form-register">
            <form method="POST" action="./scripts/input-register.php" enctype="multipart/form-data">
                <div id="formright">
                    <label for = "userpic">
                        <span>Foto de perfil</span>
                        <input type="file" name="userpic" class="userformpic" required autofocus>
                    </label>

                    <div id="demouserpic">
                        <img src="" alt="" class="userimg">
                    </div>

                    <p>Resolução mínima: 100x100 <br> Use JPG, JPEG ou PNG</p>
                </div>

                <div id="formleft">
                    <label for = "username">
                        <span>Nome de usuário</span>
                        <input type="username" name="username" class="form-control" maxlength="15" required autofocus>
                    </label>
                    
                    <label for = "email">
                        <span>Email</span>
                        <input type="email" name="email" class="form-control" placeholder="exemplo@exemplo.com" required autofocus>
                    </label>
                    
                    <label for = "senha">
                        <span>Senha</span>
                        <input type="password" name="password" class="form-control" placeholder="Mínimo de oito caracteres" minlength="8" required>
                    </label>
                    <button type="submit">Criar conta</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>