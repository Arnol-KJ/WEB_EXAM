<?php
    require("../db/connect.php");

    $sql = "SELECT student_id , student_name , gender FROM students";
    $result = mysqli_query($conn,$sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>exam show-edit</title>
</head>
<body>
    <div class="container">
        <div class="d-flex flex-row-reverse">
            <div class="p-2"><button onclick="window.location.href='./add_student.php'">Add Student</button></div>
        </div>
        <table class='table table-striped'>
            <thead>
                <th>student_id</th>
                <th>student_name</th>
                <th>gender</th>
                <th>edit</th>
                <th>delete</th>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $row["student_id"]?></td>
                        <td><?php echo $row["student_name"]?></td>
                        <td><?php echo $row["gender"]?></td>
                        <td><?php echo"<a href='edit_student.php?student_id=".$row["student_id"]."'>Edit</a>"?></td>
                        <td><?php echo"<a href='delete_student_data.php?student_id=".$row["student_id"]."'>Delete</a>"?></td>
                    </tr>
                <?php } ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>