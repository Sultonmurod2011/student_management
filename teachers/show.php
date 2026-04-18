<?php
include '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM teachers WHERE id = ?";
$data = $conn->prepare($sql);
$data->execute([$id]);

$teacher = $data->fetch();
?>

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Ustozning ma'lumotlari</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            width: 350px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            animation: fadeIn 0.5s ease-in-out;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .info {
            margin: 10px 0;
            font-size: 18px;
        }

        .info span {
            font-weight: bold;
            color: #333;
        }

        .btn {
            display: block;
            margin-top: 20px;
            text-align: center;
            padding: 10px;
            background: #4facfe;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            transition: 0.3s;
        }

        .btn:hover {
            background: #007bff;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>

<div class="card">
    <h2>Ustoz</h2>

    <div class="info"><span>Ismi:</span> <?php echo $teacher['first_name']; ?></div>
    <div class="info"><span>Familiyasi:</span> <?php echo $teacher['last_name']; ?></div>
    <div class="info"><span>Yoshi:</span> <?php echo $teacher['age']; ?></div>
    <div class="info"><span>Telefon raqami:</span> <?php echo $teacher['phone']; ?></div>
    <div class="info"><span>Fani:</span> <?php echo $teacher['subject']; ?></div>
    <div class="info"><span>Darajasi:</span> <?php echo $teacher['experience']; ?></div>

    <a href="index.php" class="btn">⬅ Orqaga</a>
</div>

</body>
</html>