<?php 
require("../db/connect.php");
$stmt = $conn->prepare("SELECT * FROM courses");
$stmt->execute();
$result = $stmt->get_result();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="d-flex flex-row-reverse">
            <div class="p-2"><button onclick="window.location.href='./add_course.php'">Add Course</button></div>
        </div>
        <table class='table table-striped'>
            <thead>
                <th>course_id</th>
                <th>course_name</th>
                <th>course_credit</th>
                <th>edit</th>
                <th>delete</th>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()){ ?>
                    <tr>
                        <td><?php echo $row["course_id"]?></td>
                        <td><?php echo $row["course_name"]?></td>
                        <td><?php echo $row["course_credit"]?></td>
                        <td><?php echo"<a href='edit_course.php?course_id=".$row["course_id"]."'>Edit</a>"?></td>
                        <td><?php echo"<a href='delete_course.php?course_id=".$row["course_id"]."'>Delete</a>"?></td>
                    </tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>
<?php 
$stmt->close();
$conn->close();
?>