<?php 
    require("../db/connect.php");
    $addId = $_POST["addId"];
    $addName = $_POST["addName"];
    $addCredit = $_POST["addCredit"];
    // echo $addId;
    // echo $addName;
    // echo $addCredit;
    $stmt = $conn->prepare("INSERT INTO courses (course_id, course_name, course_credit) VALUES(?,?,?)");
    $stmt->bind_param("ssi" , $addId,$addName,$addCredit);

    if($stmt->execute()){
        header("location: ./coures_list.php");
        exit();
    }
    else{
        echo "Error Data not Insert".$stmt->error;
    }
?>