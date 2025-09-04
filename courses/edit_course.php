<?php 
    require("../db/connect.php");
    if(isset($_GET['course_id'])){    
        $course_id = $_GET["course_id"];
        $stmt = $conn->prepare("SELECT * FROM courses WHERE course_id = ?");
        $stmt->bind_param("s",$course_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
    }
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
        <form action="./save_edit_course.php" method="POST">    
            <table class='table table-striped'>
                <thead>
                    <th>course_id</th>
                    <th>course_name</th>
                    <th>course_credit</th>
                </thead>
                <tbody>
                    
                        <tr>
                            <td><?php echo $row["course_id"]?></td>
                            <td><?php echo $row["course_name"]?></td>
                            <td><?php echo $row["course_credit"]?></td>
                        </tr>
                   
                        <tr>
                            <input type="hidden" name = "course_id" value="<?php echo $course_id?>" >
                            <td><input type="text" name = "changeId" placeholder="Id-Change" value="<?php echo $row["course_id"]?>"></td>
                            <td><input type="text" name = "changeName" placeholder="Name-Change" value="<?php echo $row["course_name"]?>"></td>
                            <td><input type="number" name = "changeGender" placeholder="Credit-Change" value="<?php echo $row["course_credit"]?>"></td>
                            <td><input type="submit" value = "SUBMIT"></td>
                        </tr>
                </tbody>
            </table>
        </form>    
    </div>
</body>
</html>

<?php 
$stmt->close();
$conn->close();
?>