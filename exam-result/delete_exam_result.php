<?php

require("../db/connect.php");
if (isset($_GET['student_id'])) {
    $student_id = $_GET['student_id'];

    $stmt = $conn->prepare("DELETE FROM exam_result WHERE student_id = ?");
    $stmt->bind_param("s", $student_id);

    if ($stmt->execute()) {
        header("location: exam_result.php");
        exit();
    } else {
        echo "Error deleting exam result.";
    }

    $stmt->close();
} else {
    echo "Student code not provided.";
}
?>