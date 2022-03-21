<?php

session_start();
include_once("connection.php");

$userid = $_SESSION['userid'];
$movietitle = filter_input(INPUT_POST, 'movietitle', FILTER_UNSAFE_RAW);
$moviedir = filter_input(INPUT_POST, 'moviedir', FILTER_UNSAFE_RAW);
$movieyear = filter_input(INPUT_POST, 'movieyear', FILTER_UNSAFE_RAW);
$moviesip = filter_input(INPUT_POST, 'moviesip', FILTER_UNSAFE_RAW);
$movieyt = filter_input(INPUT_POST, 'movieyt', FILTER_UNSAFE_RAW);

if(isset($_FILES['movieposter'])){
    $poster = $_FILES['movieposter'];
    
    $filepath = "../images/movieposters/";
    $filename = $poster['name'];
    $filenewname = uniqid() . "_" . strtolower(str_replace(' ', '', $movietitle));

    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

    if($ext != "jpg" && $ext != "jpeg" && $ext != "png")
        $_SESSION['failedmovieregister'] = "Tipo de imagem não aceito!";
        header("Location: register-movie.php");

    $posterpath = $filepath . $filenewname . '.' . $ext;

    move_uploaded_file($poster['tmp_name'], $posterpath);
}

$registerquery = "INSERT INTO moviedata (usersendedid, moviename, moviedir, moviesinopse, movieyear, movietrailer, movieposter) VALUES ('$userid', '$movietitle', '$moviedir', '$moviesip', '$movieyear', '$movieyt', '$posterpath')";
$returnquery = mysqli_query($conn, $registerquery);

if (mysqli_insert_id($conn))
{
    echo "<script> alert('Filme salvo no banco de dados com sucesso...!'); </script>";
    header('Location: ../main-feed.php');

}

else if (!mysqli_insert_id($conn))
{  
    $_SESSION['failedmovieregister'] = "<p class='message'>Houve um erro em nosso banco de dados.<br>Tente novamente mais tarde.</p>
    <script> document.getElementById('session-message').style.display = 'flex'; </script>";
    header("Location: ../register-movie.php");
}

?>