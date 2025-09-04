<?php 
    require("../db/connect.php");
    $addId = $_GET["addId"];
    $addName = $_GET["addName"];
    $addGender = $_GET["addGender"];

    $stmt = $conn->prepare("INSERT INTO students (student_id, student_name, gender) VALUES(?,?,?)");
    $stmt->bind_param("sss" , $addId,$addName,$addGender);

    if($stmt->execute()){
        header("loaction: ./show_student_data.php");
        exit();
    }
    else{
        echo "Error Data not Insert";
    }
?>