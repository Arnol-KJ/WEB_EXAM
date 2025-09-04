<?php
    $servername = "localhost:3306";
    
    $username = "arnol";
    $password = "161048";
    $db = "examcount";
    $conn = mysqli_connect($servername, $username, $password, $db);
    if(!$conn){
        die("connection error  :  " . mysqli_connect_error());
    }
    // echo "Connected";

?>