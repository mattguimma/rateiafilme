<?php 
    session_start();

    if(!isset($_SESSION['username'])){
        header("Location: index.php");
    }

    if($_SESSION['logged'] == true){
        unset( $_SESSION['username']);
        unset( $_SESSION['userpic']);
        unset($_SESSION['userid']);
        unset($_SESSION['logged']);
        header("Location: ../index.php");
    }
?>