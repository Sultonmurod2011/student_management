<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Ustoz qo'shish</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="form-container">
    <h2>Ustoz qo‘shish</h2>
    <form action="store.php" method="POST">
        
        <label>Ism</label>
        <input type="text" name="first_name" required>

        <label>Familiya</label>
        <input type="text" name="last_name" required>

        <label>Yosh</label>
        <input type="number" name="age" required>

        <label>Telefon</label>
        <input type="text" name="phone" required>

        <label>Fan</label>
        <input type="text" name="subject" required>

        <label>Daraja</label>
        <input  type="text" name="experience" required>

        <button type="submit">Saqlash</button>
    </form>
</div>

</body>
</html>