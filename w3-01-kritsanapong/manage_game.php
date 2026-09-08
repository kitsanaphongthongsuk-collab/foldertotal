<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

include 'action/connect.php';

$sql = "SELECT * FROM games";

$result = mysqli_query($con, $sql);
?>

<table border=1>
<thead>
<th>รหัสเกม</th>
<th>ชื่อเกม</th>
<th>ราคา</th>
<th>ภาพปก</th>
<th>ประเภท</th>
<th>จัดการ</th>
</thead>

<?php
foreach($result as $game){
?>
<tr>
<td> <?= $game["game_id"] ?> </td>
<td> <?= $game["game_name"] ?> </td>
<td> <?= $game["game_price"] ?> </td>
<td>
<img
src="<?= $game["game_cover"] ?>"
style="width:200px"
>
</td>
<td> <?= $game["type_id"] ?> </td>
<td>
<a href="edit_game.php?id=<?= $game['game_id'] ?>">แก้ไข</a>

<a href="action/delete_game.php?id=<?= $game['game_id'] ?>">ลบ</a>
</td>
</tr>
<?php
}
?>

</table>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Kanit', sans-serif;
            background-color: #f4f6f9;
            color: #333333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            width: 100%;
            max-width: 1100px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .page-title {
            font-size: 1.8rem;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 24px;
            text-align: center;
        }

        table {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
            background-color: #ffffff;
            border: none;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            margin-bottom: 24px;
        }

        th, td {
            border: none;
            padding: 16px 20px;
            text-align: center;
            vertical-align: middle;
        }

        thead {
            background-color: #2c3e50;
            color: #ffffff;
        }

        th {
            font-weight: 500;
            font-size: 1.05rem;
            letter-spacing: 0.5px;
        }

        tbody tr {
            transition: background-color 0.2s ease;
            border-bottom: 1px solid #edf2f7;
        }

        tbody tr:last-child {
            border-bottom: none;
        }

        tbody tr:nth-child(even) {
            background-color: #f8fafc;
        }

        tbody tr:hover {
            background-color: #edf2f7;
        }

        td img {
            width: 120px;
            height: 160px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.12);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        td img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.2);
        }

        .action-buttons {
            display: flex;
            gap: 8px;
            justify-content: center;
            align-items: center;
        }

        .btn-edit {
            display: inline-block;
            background-color: #f39c12;
            color: #ffffff;
            padding: 8px 16px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            box-shadow: 0 2px 8px rgba(243, 156, 18, 0.3);
            transition: all 0.2s ease;
        }

        .btn-edit:hover {
            background-color: #d68910;
            box-shadow: 0 4px 12px rgba(243, 156, 18, 0.4);
            transform: translateY(-2px);
        }

        .btn-delete {
            display: inline-block;
            background-color: #e74c3c;
            color: #ffffff;
            padding: 8px 16px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9rem;
            box-shadow: 0 2px 8px rgba(231, 76, 60, 0.3);
            transition: all 0.2s ease;
        }

        .btn-delete:hover {
            background-color: #c0392b;
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.4);
            transform: translateY(-2px);
        }
    </style>

</body>
</html>