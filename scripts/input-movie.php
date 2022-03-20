<?php

session_start();
include_once("connection.php");

$movietitle = filter_input(INPUT_POST, 'movietitle', FILTER_UNSAFE_RAW);
$moviedir = filter_input(INPUT_POST, 'moviedir', FILTER_UNSAFE_RAW);
$movieyear = filter_input(INPUT_POST, 'movieyear', FILTER_UNSAFE_RAW);
$moviesip = filter_input(INPUT_POST, 'moviesip', FILTER_UNSAFE_RAW);
$movieyt = filter_input(INPUT_POST, 'movieyt', FILTER_UNSAFE_RAW);

$registerquery = "INSERT INTO moviedata (movietitle, moviedir, moviesip, movieyear, movieyt) VALUES ('$movietitle', '$moviedir', '$moviesip', '$movieyear', '$movieyt')";
$returnquery = mysqli_query($conn, $registerquery);

if (mysqli_insert_id($conn))
{}

else if (!mysqli_insert_id($conn))
{}

?>