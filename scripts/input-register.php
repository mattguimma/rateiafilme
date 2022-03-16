<?php

session_start();
include_once("connection.php");

$username = filter_input(INPUT_POST, 'username', FILTER_UNSAFE_RAW);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW);

$password = md5($password);

$registerquery = "INSERT INTO userdata (username, usermail, password) VALUES ('$username', '$email', '$password')";

$returnquery = mysqli_query($conn, $registerquery);

if (mysqli_insert_id($conn))
{
	$_SESSION['sucessregister'] = "<p class='message'>Usuário cadastrado com sucesso</p>
    <script> document.getElementById('session-message').style.display = 'flex'; </script>";
	header("Location: ../login.php");
}
else if (!mysqli_insert_id($conn))
{
	$_SESSION['failedregister'] = "<p class='message'>Perdão! Houve um erro.<br>Tente novamente mais tarde.</p>
    <script> document.getElementById('session-message').style.display = 'flex'; </script>";
	header("Location: ../register.php");
}

?>