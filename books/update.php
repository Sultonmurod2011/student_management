<?php
include '../config/db.php';
$id = $_POST['id'];
$book_name = $_POST['book_name'];
$book_author = $_POST['book_author'];
$book_number = $_POST['book_number'];
$date = $_POST['date'];

$sql = "UPDATE books
        SET book_name = ?,
            book_author = ?,
            book_number = ?,
            date = ?
         WHERE id = ?";

$data = $conn->prepare($sql);

$data->execute([
    $book_name,
    $book_author,
    $book_number,
    $date,
    $id
]);

header("Location: index.php");
exit();
?>