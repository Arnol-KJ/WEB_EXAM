<?php
require("../db/connect.php");
$course_code = $_GET["course_code"];
// echo $course_code;
$sql = "SELECT * FROM courses WHERE course_id='$course_code'";
$result = mysqli_query($conn, $sql);
$course = mysqli_fetch_assoc($result);
// echo $sql;
$sql = "SELECT E.*,S.student_name";
$sql .= " FROM exam_result AS E";
$sql .= " INNER JOIN students AS S ON E.student_id=S.student_id";
$sql .= " WHERE E.course_id='$course_code'";
// echo $sql;
$results = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Show exam result</title>
</head>
<body>
    <div class="container">
        <div class="flex">
            <?php echo "<h1>Exam Result " . $course["course_name"] . "</h1>";?>
        </div>
        <div class="d-flex flex-row-reverse">
            <div class="p-2"><?php echo"<button onclick=\"window.location.href='./add_exam_result.php?course_code=".$course_code."'\">Add Student</button>";?></div>
        </div>
        <table class='table table-striped'>
            <thead>
                <th>student_id</th>
                <th>student_name</th>
                <th>exam_point</th>
                <th>edit</th>
                <th>delete</th>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($results)){ ?>
                    <tr>
                        <td><?php echo $row["student_id"]?></td>
                        <td><?php echo $row["student_name"]?></td>
                        <td><?php echo $row["exam_point"]?></td>
                        <td><?php echo"<a href='edit_exam_result.php?student_id=".$row["student_id"]."'>Edit</a>"?></td>
                        <td><?php echo"<a href='delete_exam_result.php?student_id=".$row["student_id"]."' onclick=\"return confirm('Are you sure you want to delete this item?');\">Delete</a>"?></td>
                    </tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>