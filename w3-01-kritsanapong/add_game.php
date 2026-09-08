<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="action/insert_game.php" method="post">

            <label for="">รหัสเกม</label>
            <input type="text" name="game_id"> <br>

            <label for="">ชื่อเกม</label>
            <input type="text" name="game_name"> <br>

            <label for="">ราคา</label>
            <input type="text" name="game_price"> <br>

            <label for="">ลิ้งก์ภาพปก</label>
            <input type="text" name="game_cover"> <br>

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
                                <option value="<?= $type["type_id"] ?> "> <?= $type["type_name"] ?> </option>
                            <?php
                        }
                ?>
            </select>

            <br>
            <button>บันทึก</button>

    </form>

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

form {
    width: 100%;
    max-width: 480px;
    background-color: #ffffff;
    border-radius: 12px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
    padding: 32px 28px;
    display: flex;
    flex-direction: column;
}

form label {
    font-weight: 500;
    margin-bottom: 6px;
    color: #4a5568;
    font-size: 0.95rem;
}

form input[type="text"],
form select {
    width: 100%;
    padding: 12px 16px;
    border: 1px solid #cbd5e0;
    border-radius: 8px;
    font-family: 'Kanit', sans-serif;
    font-size: 0.95rem;
    color: #2d3748;
    background-color: #ffffff;
    transition: all 0.3s ease;
    outline: none;
    margin-bottom: 18px;
}

form input[type="text"]:focus,
form select:focus {
    border-color: #3498db;
    box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
}

form select {
    cursor: pointer;
    appearance: none;
    background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%20718096' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3e%3cpolyline points='6 9 12 15 18 9'%3e%3c/polyline%3e%3c/svg%3e");
    background-repeat: no-repeat;
    background-position: right 12px center;
    background-size: 16px;
    padding-right: 40px;
}

br {
    display: none;
}

form button {
    width: 100%;
    background-color: #3498db;
    color: #ffffff;
    border: none;
    padding: 12px;
    border-radius: 30px;
    font-family: 'Kanit', sans-serif;
    font-weight: 500;
    font-size: 1rem;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(52, 152, 219, 0.3);
    transition: all 0.3s ease;
    margin-top: 10px;
}

form button:hover {
    background-color: #2980b9;
    box-shadow: 0 6px 16px rgba(52, 152, 219, 0.4);
    transform: translateY(-2px);
}
    </style>

</body>
</html>