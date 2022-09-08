<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "nama";
    
    $con = mysqli_connect("$host", "$username", "$password", "$database");

    if(!$con){
        echo ("GAGAL TEHUBUNG KE DATABASE");
        die();
    }
?>