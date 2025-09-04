<?php
require("../db/connect.php");
$course_code = $_POST["course_code"];
$student_code = $_POST["student_code"];
$point = $_POST["point"];
$sql ="INSERT INTO exam_result(course_id, student_id, exam_point) VALUES('$course_code','$student_code', $point)";
mysqli_query($conn, $sql);
header("location: show_exam_result.php?course_code=$course_code");
exit(0);
?>