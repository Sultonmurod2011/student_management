<?php
include '../config/db.php';
$sql = "SELECT * FROM teachers";
$data = $conn->prepare($sql);
$data->execute();
$teachers = $data->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Sinf qo'shish</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="form-container">
    <h2>Sinf qo‘shish</h2>
    <form action="store.php" method="POST">
        
        <label>Sinf nomi</label>
        <input type="text" name="class_name" required>

        <label>Ustozi</label>
        <select name="teacher_id">
            <?php foreach($teachers as $teacher): ?>
                <option value="<?= $teacher['id']?>"><?= $teacher['first_name']?> <?= $teacher['last_name']?></option>
            <?php endforeach; ?>    
        </select>

        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>