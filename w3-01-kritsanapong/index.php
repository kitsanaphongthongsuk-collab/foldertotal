<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

    //แสดง error
        // Report all PHP errors
        error_reporting(E_ALL);

    // Force errors to be displayed on the screen
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
            include 'action/connect.php';

        // if(!$con){
        //     echo 'Can Not Connect DB.';
        // }else{
        //     echo 'Connect Success .';
        // }
    
    //            เลือกทั้งหมดจากตาราง games
    $sql = "SELECT * FROM games";
    $result = mysqli_query($con, $sql);
     // test

    //  var_dump($result);
    ?>

    <table border=1>
        <thead>
            <th>รหัสเกม</th>
            <th>ชื่อเกม</th>
            <th>ราคา</th>
            <th>ภาพปก</th>
            <th>ประเภท</th>
        </thead>
    

    <?php
        foreach($result as $game) {
            ?>
            <tr>
                <td> <?= $game["game_id"] ?></td>
                <td> <?= $game["game_name"] ?></td>
                <td> <?= $game["game_price"] ?></td>
                <td> <img 
                        src="<?= $game ["game_cover"] ?>"
                        style="width:200px"
                    ></td>
                <td><?= $game["type_id"] ?></td>
                    
            </tr>
            <?php
        }
        ?>
    </table>

    <br>
    <div style="text-align: center; margin-top: 10px;">
    <a href="game_type.php" class="btn-link" style="color: #000000;">ไปหน้า2</a>
    </div>

    <footer class="footer">
        <p>@ Big Shope ซื้อขายเกม</p>
    </footer>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap');

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

table {
    border-collapse: separate;
    border-spacing: 0;
    width: 100%;
    max-width: 1000px;
    background-color: #ffffff;
    border: none !important;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    overflow: hidden;
    margin-bottom: 24px;
}

th, td {
    border: none !important;
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
    transition: background-color 0.2s ease, transform 0.2s ease;
    border-bottom: 1px solid #edf2f7 !important;
}

tbody tr:last-child {
    border-bottom: none !important;
}

tbody tr:nth-child(even) {
    background-color: #f8fafc;
}

tbody tr:hover {
    background-color: #edf2f7;
}

td img {
    width: 120px !important;
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

div[style*="text-align: center"] {
    margin-top: 0 !important;
}

.btn-link, a[href="game_type.php"] {
    display: inline-block;
    background-color: #3498db;
    color: #ffffff !important;
    padding: 12px 28px;
    border-radius: 30px;
    text-decoration: none;
    font-weight: 500;
    font-size: 1rem;
    box-shadow: 0 4px 12px rgba(52, 152, 219, 0.3);
    transition: all 0.3s ease;
}

.btn-link:hover, a[href="game_type.php"]:hover {
    background-color: #2980b9;
    box-shadow: 0 6px 16px rgba(52, 152, 219, 0.4);
    transform: translateY(-2px);
}

.footer {
    margin-top: auto;
    padding-top: 20px;
    padding-bottom: 10px;
    text-align: center;
    color: #8d6b79;
    font-size: 13px;
}


        </style>

</body>
</html>