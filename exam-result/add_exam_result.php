<?php
require("../db/connect.php");
$course_code = $_GET["course_code"];

// Fetch all students to display in the dropdown
$sql = "SELECT student_id, student_name FROM students WHERE $course_code";
$result = mysqli_query($conn, $sql);    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Exam Result</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white text-center">
            <h4>Add Exam Result</h4>
        </div>
        <div class="card-body">
            <form action="save_add_exam_result.php" method="post">
                <div class="mb-3">
                    <label for="course_code" class="form-label">Course Code</label>
                    <input type="text" class="form-control" id="course_code" name="course_code" 
                           value="<?php echo htmlspecialchars($course_code); ?>" readonly>
                </div>

                <div class="mb-3">
                    <label for="student_code" class="form-label">Student</label>
                    <select class="form-select" id="student_code" name="student_code" required>
                        <option value="">-- Select Student --</option>
                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                            <option value="<?php echo htmlspecialchars($row['student_id']); ?>">
                                <?php echo htmlspecialchars($row['student_id'])." - ".htmlspecialchars($row['student_name']); ?>
                            </option>
                        <?php endwhile; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="point" class="form-label">Point</label>
                    <input type="number" class="form-control" id="point" name="point" placeholder="Enter exam point" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success px-4">Submit</button>
                    <button type="reset" class="btn btn-secondary px-4">Reset</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>