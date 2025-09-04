<?php 
    require('../db/connect.php');
    if(isset($_GET['course_id'])){
        $course_id = $_GET["course_id"];
        $stmt = $conn->prepare("DELETE FROM courses WHERE course_id = ?");
        $stmt->bind_param("s" , $course_id);
        if($stmt->execute()){
            header("location: ./coures_list.php");
            exit();
        }else{
            echo "cannot delete data";
        }
        $stmt->close();
    }else{
        echo "student Data lost";
    }
    
    
?>