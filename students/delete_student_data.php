<?php 
    require('../db/connect.php');
    if(isset($_GET['student_id'])){
        $student_data = $_GET["student_id"];
        $stmt = $conn->prepare("DELETE FROM students WHERE student_id = ?");
        $stmt->bind_param("s" , $student_data);
        if($stmt->execute()){
            header("location: ./show_student_data.php");
            exit();
        }else{
            echo "cannot delete data";
        }
        $stmt->close();
    }else{
        echo "student Data lost";
    }
    
    
?>