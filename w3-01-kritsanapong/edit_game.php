<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>

    <?php
        $id = $_GET['id'];

        include 'action/connect.php';

        $sql = "SELECT * FROM games WHERE game_id = '$id' ";

        $result = mysqli_query($con, $sql);

        $game = mysqli_fetch_assoc($result);

        var_dump($game);
?>
    
    <form action="action/update_game.php" method="post">

            <label for="">รหัสเกม</label>
            <input type="text" name="game_id" value="<?= $game['game_id']?> "> <br>

            <label for="">ชื่อเกม</label>
            <input type="text" name="game_name" value="<?= $game['game_name']?> "> <br>

            <label for="">ราคา</label>
            <input type="text" name="game_price" value="<?= $game['game_price']?> "> <br>

            <label for="">ลิ้งก์ภาพปก</label>
            <input type="text" name="game_cover" value="<?= $game['game_cover']?> "> <br>

            <?php
                include 'action/connect.php';

                $sql = "SELECT * FROM game_types";
        
                $result = mysqli_query($con, $sql);
            ?>

            <label for="">ประเภท</label>
            <select name="type_id" id="">
                <?php
                        foreach($result as $type){
                            ?>
                                <option 
                                value="<?= $type["type_id"] ?>"
                                <?= $type["type_id"] == $game["type_id"] ? "selected": "" ?>
                                > 
                                <?= $type["type_name"] ?> 
                            </option>
                            <?php
                        }
                ?>
            </select>

            <br>
            <button>บันทึก</button>

    </form>

    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            background: linear-gradient(135deg, #3e6cd7, #79b3fa);
            font-family: Arial, sans-serif;
            display: flex;
            justify-self: center;
            align-self: center;
            min-height: 100vh;
            padding: 20px;
        }

        form {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(10px);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 360px;
            border: 1px solid rgba(255 ,255 ,255, 0.8);
            margin: auto;
        }

        h2 {
            text-align: center;
            color: #885dd8;
            marign-top: 10px;
            marign-bottom: 5px;
        }

        label {
            font-weight: bold;
            color: #555;
            display: block;
            marign-bottom: 5px;
            marign-top: 10px;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ffb6c1:
            border-radius: 8px;
            background-color: rgba(255, 255, 255, 0.8);
        }

        button { 
            width: 100%;
            background-color: #8f69ff;
            color: white;
            padding: 10px;
            border-radius: 20px;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #ff1493;
        }

    </style>

</body>
</html>