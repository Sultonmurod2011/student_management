<?php
include '../config/db.php';
$id = $_POST['id'];
$book_name = $_POST['book_name'];
$book_author = $_POST['book_author'];
$book_number = $_POST['book_number'];

$sql = "INSERT INTO books (id, book_name, book_author, book_number)
    VALUES (:id,:book_name,:book_author,:book_number)";

$data = $conn->prepare($sql);

$data->execute([
    ':id' => $id,
    ':book_name' => $book_name,
    ':book_author' => $book_author,
    ':book_number' => $book_number
]);

echo "Kitob qo'shildi!";

header("Location: index.php")
?>