<?php
    require('../db/connect.php');
    $course_id = $_POST["course_id"];
    $changeId = $_POST["changeId"];
    $changeName = $_POST["changeName"];
    $changeGender = (int)$_POST["changeGender"];

    $stmt = $conn->prepare("UPDATE courses SET course_id = ?, course_name= ?, course_credit =? WHERE course_id = ?");
    $stmt->bind_param("ssis" ,$changeId ,$changeName,$changeGender,$course_id);

    if($stmt->execute()){
        header("location: ./coures_list.php");
        exit();
    }else{
        echo "Error Data".$stmt->error;
    }
?>