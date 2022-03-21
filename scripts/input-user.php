<?php

session_start();
include_once("connection.php");

if(empty($_POST['password']) or empty($_POST['email'])){
    $_SESSION['loginError'] = "Usuário ou senha incorretos!";
    header('Location: ../login.php');
    exit();
}

$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$password = md5($password);

$loginquery = "SELECT * FROM userdata WHERE usermail = '$email' AND password = '$password' LIMIT 1";
$v_exit = mysqli_query($conn, $loginquery);
$exit = mysqli_fetch_assoc($v_exit);

if(empty($exit)){
    $_SESSION['loginerror'] = "<p class='message'>E-mail ou senha incorretos!</p>
    <script> document.getElementById('session-message').style.display = 'flex'; </script>";
    header('Location: ../login.php');
}

else if(isset($exit)){
    $_SESSION['username'] = $exit['username'];
    $_SESSION['userpic'] = $exit['userpic'];
    $_SESSION['userid'] = $exit['id'];
    $_SESSION['logged'] = true;
    header('Location: ../main-feed.php');
}

?>