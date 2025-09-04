<?php 
    require("../db/connect.php");
    if(isset($_GET['student_id'])){    
        $student_id = $_GET["student_id"];
        $stmt = $conn->prepare("SELECT * FROM students WHERE student_id = ?");
        $stmt->bind_param("s",$student_id);
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
        <form action="./save_student_data.php" method="POST">    
            <table class='table table-striped'>
                <thead>
                    <th>student_id</th>
                    <th>student_name</th>
                    <th>gender</th>
                </thead>
                <tbody>
                        <tr>
                            <td><?php echo $row["student_id"]?></td>
                            <td><?php echo $row["student_name"]?></td>
                            <td><?php echo $row["gender"]?></td>
                        </tr>
                        <tr>
                            <input type="hidden" name = "student_id" value="<?php echo $student_id?>" >
                            <td><input type="text" name = "changeId" placeholder="Id-Change" value="<?php echo $row["student_id"]?>"></td>
                            <td><input type="text" name = "changeName" placeholder="Name-Change" value="<?php echo $row["student_name"]?>"></td>
                            <td><input type="text" name = "changeGender" placeholder="Gender-Change" value="<?php echo $row["gender"]?>"></td>
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