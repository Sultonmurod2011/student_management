<?php
include "../config/db.php";

$id = $_GET['id'];

$sql = "SELECT * FROM classes WHERE id = :id";
$data = $conn->prepare($sql);
$data->execute([':id'=>$id]);
$classes = $data->fetch(PDO::FETCH_ASSOC);

$sql = "SELECT * FROM teachers";
$data = $conn->prepare($sql);
$data->execute();
$teachers = $data->fetchAll(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Sinf ma'lumotini tahrirlash</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="form-container">
    <h2>Ma'lumotlarni tahrirlash</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?= $classes['id'] ?>" id="">
        
        <label>Sinf nomi</label>
        <input type="text" name="class_name"  required value="<?= $classes['class_name'] ?>">

        <label>Ustozi</label>
        <select name="teacher_id">
            <?php foreach($teachers as $teacher): ?>
                <option <?= ($classes['teacher_id'] == $teacher['id']) ? "selected" : "" ?> value="<?= $teacher['id']?>"><?= $teacher['first_name'] ." ". $teacher['last_name']?></option>
            <?php endforeach; ?>    
        </select>  

        
        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>

