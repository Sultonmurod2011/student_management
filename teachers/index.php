<?php
include '../config/db.php';
// query - so'rov
$sql = "SELECT * FROM teachers";

// tayyorlash
$data = $conn->prepare($sql);

// ishga tushirish
$data->execute();

// ma'lumotni olish
$teachers = $data->fetchAll(PDO::FETCH_ASSOC);

$cnt = 1;
?>


<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Ustozlar ro'yxati</title>
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
        <h2>Ustozlar ro‘yxati</h2>
        <a href="create.php
        " class="add-btn">+ Ustoz qo‘shish</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Ism</th>
                <th>Familiya</th>
                <th>Yosh</th>
                <th>Telefon</th>
                <th>Fan</th>
                <th>Darajasi</th>
            </tr>
        </thead>
        <tbody>
            <!-- BU YERGA DATABASEDAN MA'LUMOT KELADI -->
             <?php foreach($teachers as $item): ?>
            <tr>
                <td><?= $cnt++ ?></td>
                <td><?= $item['first_name'] ?></td>
                <td><?= $item['last_name'] ?></td>
                <td><?= $item['age'] ?></td>
                <td><?= $item['phone'] ?></td>
                <td><?= $item['subject'] ?></td>
                <td><?= $item['experience'] ?></td>
                <td class="actions">
                    <a href="show.php?id=<?= $item['id'] ?>" class="view">Ko‘rish</a>
                    <a href="edit.php?id=<?= $item['id']?>" class="edit">Tahrirlash</a>
                    <a href="delete.php?id=<?= $item['id'];?>" class="delete" onclick="return confirm('Haqiqatdan ham o\'chirmoqchimisiz?')">O‘chirish</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

</body>
</html>