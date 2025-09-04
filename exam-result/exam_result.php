<?php
require("../db/connect.php");
$sql="SELECT * FROM courses";
$result=mysqli_query($conn, $sql);
?>
<html>

<head>
    <title>Exam Result</title>
</head>

<body>
    <div class="container">
        Select Course to show
        <form action=show_exam_result.php method="GET">
            <select name="course_code">
                <?php
                while($row=mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row["course_id"];?>" >
                    <?php echo $row["course_id"];?> <?php echo $row["course_name"];?>
                </option>
                <?php } ?>
            </select>
            <input type="submit" value="Show">
        </form>
    </div>
</body>

</html>