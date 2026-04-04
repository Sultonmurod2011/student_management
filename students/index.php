<?php
include '../config/db.php';
// query - so'rov
$sql = "SELECT * FROM students";

// tayyorlash
$data = $conn->prepare($sql);

// ishga tushirish
$data->execute();

// ma'lumotni olish
$students = $data->fetchAll(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Studentlar ro'yxati</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        h2 {
            margin: 0;
        }

        .add-btn {
            padding: 10px 15px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .add-btn:hover {
            background: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        .actions a {
            padding: 6px 10px;
            margin-right: 5px;
            border-radius: 4px;
            text-decoration: none;
            color: white;
            font-size: 14px;
        }

        .view { background: #17a2b8; }
        .edit { background: #ffc107; color: black; }
        .delete { background: #dc3545; }

        .view:hover { background: #138496; }
        .edit:hover { background: #e0a800; }
        .delete:hover { background: #c82333; }
    </style>
</head>
<body>

<div class="container">

    <div class="top-bar">
        <h2>Studentlar ro‘yxati</h2>
        <a href="create.php
        " class="add-btn">+ Student qo‘shish</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Ism</th>
                <th>Familiya</th>
                <th>Yosh</th>
                <th>Sinf</th>
                <th>Telefon</th>
                <th>Manzil</th>
                <th>Amallar</th>
            </tr>
        </thead>
        <tbody>
            <!-- BU YERGA DATABASEDAN MA'LUMOT KELADI -->
             <?php foreach($students as $item): ?>
            <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['first_name'] ?></td>
                <td><?= $item['last_name'] ?></td>
                <td><?= $item['age'] ?></td>
                <td><?= $item['class_name'] ?></td>
                <td><?= $item['phone'] ?></td>
                <td><?= $item['address'] ?></td>
                <td class="actions">
                    <a href="#" class="view">Ko‘rish</a>
                    <a href="#" class="edit">Tahrirlash</a>
                    <a href="#" class="delete">O‘chirish</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

</body>
</html>