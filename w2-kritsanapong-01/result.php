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
    $f = $_POST['fahrenheit'];
    $c = (5 / 9) * ($f - 32);
?>
    <div class="card">
        <h1>ผลการแปลงอุณหภูมิ</h1>
        
        <div class="result-container">
            <div class="row">
                <span>Fahrenheit:</span>
                <strong><?php echo $f; ?> °F</strong>
            </div>
            <div class="row">
                <span>Celsius:</span>
                <strong><?php echo round($c, 2); ?> °C</strong>
            </div>
        </div>

        <div class="white-result" style="text-align: center;">
            <a href="index.php" style="color: white; text-decoration: none; font-weight: bold;">กลับไปคำนวณใหม่</a>
        </div>
    </div>
</body>
</html>