<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM students WHERE id = :id";
$data = $conn->prepare($sql);
$data->execute([':id'=>$id]);

$students = $data->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Student tahrirlash</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="form-container">
    <h2>Student tahrirlash</h2>
    <form action="update.php" method="POST">
        
        <label>Ism</label>
        <input type="text" name="first_name" required value = "<?= $students['first_name'] ?>">

        <label>Familiya</label>
        <input type="text" name="last_name" required value = "<?= $students ['last_name'] ?>">   

        <label>Yosh</label>
        <input type="number" name="age" required value = "<?= $students['age'] ?>">

        <label>Sinf</label>
        <input type="text" name="class_name" required value = "<?= $students['class_name'] ?>">

        <label>Telefon</label>
        <input type="text" name="phone" required value = "<?= $students['phone'] ?>">

        <label>Manzil</label>
        <textarea name="address" rows="3" required><?= $students['address'] ?></textarea>

        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>

