<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id = :id";
$data = $conn->prepare($sql);
$data->execute([':id'=>$id]);

$students = $data->fetch(PDO::FETCH_ASSOC);

?>