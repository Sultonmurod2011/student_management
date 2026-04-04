<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Student qo'shish</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="form-container">
    <h2>Student qo‘shish</h2>
    <form action="store.php" method="POST">
        
        <label>Ism</label>
        <input type="text" name="first_name" required>

        <label>Familiya</label>
        <input type="text" name="last_name" required>

        <label>Yosh</label>
        <input type="number" name="age" required>

        <label>Sinf</label>
        <input type="text" name="class_name" required>

        <label>Telefon</label>
        <input type="text" name="phone" required>

        <label>Manzil</label>
        <textarea name="address" rows="3" required></textarea>

        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>