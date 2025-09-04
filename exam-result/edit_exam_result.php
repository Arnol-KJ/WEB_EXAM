<?php
require("../db/connect.php");
$student_id = $_GET["student_id"];

$query = "SELECT E.student_id, S.student_name, E.exam_point, E.course_id FROM exam_result as E LEFT JOIN students as S ON S.student_id = E.student_id WHERE E.student_id = '$student_id';";

$list_exam_results = mysqli_query($conn, $query);
$exam_result = mysqli_fetch_assoc($list_exam_results);

// echo "<center>";
// echo "<form action=save_exam_result.php method=post>";
// echo "<table border=1 width=40%>";
// echo "<input type=hidden name=student_code_edit value=$student_code />";
// echo "<input type=hidden name=course_code_edit value=".$exam_result["course_id"]." />";

// echo "<tr><td>Student Code:</td><td><input type=text name=student_code value=".$exam_result["student_id"]."
// /></td></tr>";
// echo "<tr><td>Student Name:</td><td><input type=text name=student_name value=".$exam_result["student_name"]."
// /></td></tr>";
// echo "<tr><td>point:</td><td><input type=text name=point value=".$exam_result["exam_point"]." /></td></tr>";
// echo "<tr><td colspan=2><center><input type=submit value=Submit /></center></td></tr>";
// echo "</table>";
// echo "</form>";
// echo "</center>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Exam Result</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-warning text-dark text-center">
            <h4>Edit Exam Result</h4>
        </div>
        <div class="card-body">
            <form action="save_exam_result.php" method="post">
                <!-- hidden values -->
                <input type="hidden" name="student_code_edit" value="<?php echo htmlspecialchars($student_id); ?>">
                <input type="hidden" name="course_code_edit" value="<?php echo htmlspecialchars($exam_result['course_id']); ?>">

                <div class="mb-3">
                    <label for="student_code" class="form-label">Student Code</label>
                    <input type="text" class="form-control" id="student_code" name="student_code" 
                           value="<?php echo htmlspecialchars($exam_result['student_id']); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="student_name" class="form-label">Student Name</label>
                    <input type="text" class="form-control" id="student_name" name="student_name" 
                           value="<?php echo htmlspecialchars($exam_result['student_name']); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="point" class="form-label">Point</label>
                    <input type="number" class="form-control" id="point" name="point" 
                           value="<?php echo htmlspecialchars($exam_result['exam_point']); ?>" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success px-4">Save</button>
                    <button type="reset" class="btn btn-secondary px-4">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>
