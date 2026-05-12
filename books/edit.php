<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM books WHERE id = :id";
$data = $conn->prepare($sql);
$data->execute([':id'=>$id]);

$books = $data->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Kitob ma'lumotlarini tahrirlash</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="form-container">
    <h2>Ma'lumotlarni tahrirlash</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $books['id'] ?>" id="">
        
        <label>Kitob nomi</label>
        <input type="text" name="book_name" required>

        <label>Muallifi</label>
        <input type="text" name="book_author" required>   

        <label>Raqami</label>
        <input type="number" name="book_number" required>


        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>

