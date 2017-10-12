<?php
    $host = "localhost";
    $port = "8080";
    $user = "root";
    $database = "rush00";
    $password = "UCyurFzh";

    $con = mysqli_connect($host, $user, $password, $database, $port);

    if (!con)
        echo "Failed to connect to Databse\n";
?>