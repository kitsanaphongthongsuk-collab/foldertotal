<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        // Report all PHP errors
        error_reporting(E_ALL);

        // Force errors to be displayed on the screen
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        
        include 'action/connect.php';
    
        // เลือกทั้งหมดจากตาราง games
        $sql = "SELECT * FROM games";
        
        $result = mysqli_query($con, $sql);
    ?>

    <table border="1" cellpadding="8" style="border-collapse: collapse;">
        <thead>
            <tr>
                <th>type_id</th>
                <th>type_name</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($result as $game) {
                ?>
                <tr>
                    <td><?= $game["type_id"] ?></td>
                    <td>
                        <?php 
                        // เปลี่ยนตัวเลข type_id ให้กลายเป็นข้อความชื่อประเภทเกมที่คุณต้องการ
                        switch($game["type_id"]) {
                            case 1:
                                echo "openwold";
                                break;
                            case 2:
                                echo "แอ็คชั่น";
                                break;
                            case 3:
                                echo "อีสปอร์ต";
                                break;
                                
                            case 4:
                                echo "fps";
                                break;
                            case 5;
                                echo "rpg";
                                break;
                            default:
                                echo "ไม่ระบุประเภท (รหัส: " . $game["type_id"] . ")";
                        }
                        ?>
                    </td>
                </tr>
                <?php
            }
        ?>
        </tbody>
    </table>

    <br>
    <div style="text-align:  ; margin-top: 20px;">
        <a href="index.php" class="btn-link" style="color: #000000; font-family: sans-serif; text-decoration: none; font-weight: bold;">กลับหน้าหลัก</a>
    </div>


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
            max-width: 800px;
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
            padding: 16px 24px;
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

        .badge-type {
            display: inline-block;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.95rem;
            font-weight: 500;
            background-color: #e2e8f0;
            color: #2d3748;
            text-transform: capitalize;
        }

        .btn-link {
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

        .btn-link:hover {
            background-color: #2980b9;
            box-shadow: 0 6px 16px rgba(52, 152, 219, 0.4);
            transform: translateY(-2px);
        }

        .action-container {
            text-align: center;
            margin-top: 8px;
        }
    </style>

</body>
</html>