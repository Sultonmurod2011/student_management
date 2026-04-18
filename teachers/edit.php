<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM teachers WHERE id = :id";
$data = $conn->prepare($sql);
$data->execute([':id'=>$id]);

$teachers = $data->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Ustoz ma'lumotlarini tahrirlash</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="form-container">
    <h2>Ma'lumotlarni tahrirlash</h2>
    <form action="update.php" method="POST">
        
        <label>Ism</label>
        <input type="text" name="first_name" required >

        <label>Familiya</label>
        <input type="text" name="last_name" required>   

        <label>Yosh</label>
        <input type="number" name="age" required>

        <label>Telefon raqami</label>
        <input type="text" name="phone" required>

        <label>Fani</label>
        <input type="text" name="subject" required>

        <label>Darajasi</label>
        <input name="experience" required>

        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>

