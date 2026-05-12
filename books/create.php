<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Kitob qo'shish</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>

<div class="form-container">
    <h2>Kitob qo‘shish</h2>
    <form action="store.php" method="POST">
        
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