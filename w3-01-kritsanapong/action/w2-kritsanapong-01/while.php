<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="card">

        <h1>งานที่ 1 กฤษณพงษ์ ทองสุข เลขที่ 1 BIT2/5</h1>

        <div style="text-align: center; margin-bottom: 15px;">
    <a href="index.php" 
       style="display: inline-block; color: #ffffff; font-weight: bold; text-decoration: none;">
       For Loop
    </a>
</div>

        <form action="" method="GET">

            <label style="color: #ffffff;">เลขแม่สูตรคูณ</label><br>

            <input type="number" name="num" required>

            <input type="submit" value="คำนวณ">

        </form>

        <?php
            if(isset($_GET['num']) && is_numeric($_GET['num'])){
                $num = $_GET['num'];
                $i = 1;

                echo "<div class='result-container'>";
                echo "<h3>สูตรคูณแม่ $num (While Loop)</h3>";

                while($i <= 12){

                    echo "<div class='row'>";
                    echo "<span>$num x $i</span>";
                    echo "<span>= " . ($num * $i) . "</span>";
                    echo "</div>";

                    $i++;
                }

                echo "</div>";
            }
        ?>

    </div>

</body>
</html>