<?php

$server = "localhost";
$database = "rateiafilme";
$user = "root";
$password = "";


$conn = mysqli_connect($server, $user, $password, $database);

if(!$conn){
    die("Falha na conexao: " . mysqli_connect_error());
}else{
    //echo "Conexao realizada com sucesso";
}	

?>