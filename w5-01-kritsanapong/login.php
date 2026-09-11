<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <div class="container">

    <div class="left-panel">
        <div class="left-panel">
            <h1>Login</h1>
        </div>
    </div>

    <div class="right-panel">
        <h2>Login</h2>

        <form action="" method="POST">
            <div class="input-box">
                <input type="text" placeholder="Username"><br><br>

            <div class="input-box">
                <input type="password" placeholder="Password">
            </div>

            <button type="submit">Login</button>

            <p class="sigup-text">
                Don't have an account? <span>Sign Up</span>
            </p>
        </form>
    </div>

    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login_submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }
    ?>

</body>
</html>