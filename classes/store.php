<?php
include '../config/db.php';

$class_name = $_POST['class_name'];
$teacher_id = $_POST['teacher_id'];


$sql = "INSERT INTO classes (class_name,teacher_id)
    VALUES (:class_name,:teacher_id)";

$data = $conn->prepare($sql);

$data->execute([
    ':class_name' => $class_name,
    ':teacher_id' => $teacher_id,
]);

echo "Sinf qo'shildi!";

header("Location: index.php")
?>