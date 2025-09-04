<?php
    require('../db/connect.php');
    $student_id = $_POST["student_id"];
    $changeName = $_POST["changeName"];
    $changeId = $_POST["changeId"];
    $changeGender = $_POST["changeGender"];

    $stmt = $conn->prepare("UPDATE students SET student_id = ?, student_name= ?, gender =? WHERE student_id = ?");
    $stmt->bind_param("ssss" ,$changeId ,$changeName,$changeGender,$student_id);

    if($stmt->execute()){
        $stmt->close();
        $conn->close();
        header("location: ./show_student_data.php");
        exit();
    }else{
        echo "Error Data".$stmt->error;
    }
?>


<!-- code chat  -->

<!-- <?php
// require('../db/connect.php');

// $student_id    = $_POST["student_id"] ?? null;
// $changeName    = $_POST["changeName"] ?? null;
// $changeId      = $_POST["changeId"] ?? null;
// $changeGender  = $_POST["changeGender"] ?? null;

// if (empty($student_id)) {
//     die("Missing student_id");
// }

// // เก็บ field ที่จะ update
// $fields = [];
// $params = [];
// $types  = "";

// // เช็คว่ามีการส่งค่าใหม่มาไหม
// if (!empty($changeId)) {
//     $fields[] = "student_id = ?";
//     $params[] = $changeId;
//     $types   .= "s";
// }
// if (!empty($changeName)) {
//     $fields[] = "student_name = ?";
//     $params[] = $changeName;
//     $types   .= "s";
// }
// if (!empty($changeGender)) {
//     $fields[] = "gender = ?";
//     $params[] = $changeGender;
//     $types   .= "s";
// }

// if (count($fields) > 0) {
//     // ประกอบ SQL แบบ dynamic
//     $sql = "UPDATE students SET " . implode(", ", $fields) . " WHERE student_id = ?";
//     $params[] = $student_id;
//     $types   .= "s";

//     $stmt = $conn->prepare($sql);

//     // ใช้ argument unpacking (...) ให้ bind_param ยืดหยุ่น
//     $stmt->bind_param($types, ...$params);

//     if ($stmt->execute()) {
//         echo "Update success";
//     } else {
//         echo "Update failed: " . $stmt->error;
//     }

//     $stmt->close();
// } else {
//     echo "No changes provided.";
// }
?> -->
