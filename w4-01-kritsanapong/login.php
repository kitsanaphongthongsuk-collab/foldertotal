<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #0f4c81 0%, #031338 100%);
            position: relative;
            overflow: hidden;
        }

        /* ตกแต่งวงกลมพื้นหลังส่วนล่าง */
        body::after {
            content: '';
            position: absolute;
            bottom: -50px;
            right: 25%;
            width: 120px;
            height: 120px;
            background: #2b0854;
            border-radius: 50%;
            z-index: 1;
        }

        .login-card {
            background: #ffffff;
            width: 100%;
            max-width: 420px;
            padding: 50px 40px 40px 40px;
            border-radius: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            z-index: 2;
            text-align: center;
        }

        .login-card h2 {
            font-size: 32px;
            font-weight: 800;
            color: #2b0854;
            margin-bottom: 40px;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .input-group i.icon-left {
            position: absolute;
            left: 18px;
            color: #555;
            font-size: 18px;
        }

        .input-group i.icon-right {
            position: absolute;
            right: 18px;
            color: #555;
            font-size: 18px;
            cursor: pointer;
        }

        .input-group input {
            width: 100%;
            padding: 16px 20px 16px 50px;
            background-color: #f4f4f6;
            border: none;
            border-radius: 30px;
            font-size: 15px;
            outline: none;
            color: #333;
        }

        .input-group input::placeholder {
            color: #777;
        }

        .options-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            margin-top: 10px;
            margin-bottom: 30px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #8c52ff;
        }

        .remember-me input[type="checkbox"] {
            accent-color: #8c52ff;
            width: 15px;
            height: 15px;
        }

        .forgot-password {
            color: #8c52ff;
            text-decoration: none;
            font-weight: 500;
        }

        .btn-login {
            width: 100%;
            padding: 16px;
            background-color: #2b0854;
            color: #ffffff;
            border: none;
            border-radius: 30px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-login:hover {
            background-color: #1f053e;
        }

        .signup-text {
            margin-top: 25px;
            font-size: 13px;
            color: #8c52ff;
        }

        .signup-text a {
            color: #8c52ff;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
    
    <form action="check.php" method="post">

        <label for="">username</label>
        <input type="text" name="username"><br>

        <label for="">password</label>
        <input type="text" name="password"><br>

        <button>Login</button>

    </form>

    
</body>
</html>