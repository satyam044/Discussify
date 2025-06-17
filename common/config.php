<?php
    $host="localhost";
    $username="root";
    $password="";
    $conn = new mysqli($host, $username, $password, "discussify");

    if(!$conn){
        echo "Database not Connected" . mysql_connect_error();
    }
?>