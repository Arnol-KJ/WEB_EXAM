<?php
require("../db/connect.php");

$student_code_edit = $_POST["student_code_edit"];

$course_code_edit = $_POST["course_code_edit"];
$student_code = $_POST["student_code"];
$student_name = $_POST["student_name"];
$point = $_POST["point"];
// echo $student_code_edit;
// echo $course_code_edit;
// echo $student_code;
// echo $student_name;
// echo $point;

$sql = "UPDATE exam_result AS E
        LEFT JOIN students AS S ON S.student_id = E.student_id
        SET E.student_id='$student_code', 
            S.student_name='$student_name', 
            E.exam_point=$point
        WHERE E.student_id='$student_code_edit'";

mysqli_query($conn, $sql);

header("location: show_exam_result.php?course_code=$course_code_edit");
exit(0);
?>