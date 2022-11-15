<?php

$db = mysqli_connect('localhost','root','','flight_reservation');

if($db) {
    echo("<script>console.log('PHP: Connected to server');</script>");
} else {
    die("could not connect to database");
}

?>