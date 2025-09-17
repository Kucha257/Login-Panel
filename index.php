<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Panel</title>
<style>
    body{
        background: linear-gradient(to bottom, #192237, #233A54);
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .box { 
        background-color: #0E141E; 
        width: 400px; 
        height: 430px;
        padding: 20px; 
        border-radius: 10px;
        text-align: center; 
        position: relative;
        box-shadow: 0 0 20px 20px rgba(0,0,0,0.5);
    }

    h2{
        color: white;
        font-family: Calibri;
    }

    input[type="text"], input[type="password"] {
        width: 200px;    
        border-radius: 12px;
        border: none;
    }

    input[type="text"], input[type="password"], input[type="submit"] {
        margin: 10px 0;
        padding: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    input[type="submit"] {
        background-color: transparent;
        border: none;
        color: #56BCD3;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 16px;
        transition: all 0.3s;
        position: absolute;
        bottom: 50px;
        left: 50px;
    }

    input[type="submit"]:hover {
        text-shadow: 0 0 5px #56BCD3,
                     0 0 10px #56BCD3,
                     0 0 20px #56BCD3,
                     0 0 40px #56BCD3,
                     0 0 80px #56BCD3,
                     0 0 120px #56BCD3;
    }

    .input-box {
        position: relative;
        margin: 20px 0;
        width: 200px;
    }

    .input-box input {
        width: 100%;
        padding: 12px 10px;
        border: none;
        border-bottom: 2px solid #56BCD3;
        background: transparent;
        color: white;
        font-size: 16px;
        outline: none;
    }

    .input-box label {
        position: absolute;
        left: 10px;
        top: 12px;
        color: #aaa;
        pointer-events: none;
        transition: 0.3s ease all;
    }

    .input-box input:focus ~ label,
    .input-box input:not(:placeholder-shown) ~ label {
        top: -8px;
        left: 5px;
        font-size: 12px;
        color: #56BCD3;
        background: #0E141E;
        padding: 0 4px;
    }

    .input-box button {
        position: absolute;
        right: 5px;
        top: 8px;
        background: none;
        border: none;
        cursor: pointer;
        color: #56BCD3;
        font-size: 16px;
        transition: all 0.3s;
    }

    .input-box button:hover {
        text-shadow: 0 0 5px #56BCD3,
                     0 0 10px #56BCD3,
                     0 0 20px #56BCD3,
                     0 0 40px #56BCD3,
                     0 0 80px #56BCD3,
                     0 0 120px #56BCD3;
    }

    .error {
        color: red;
        margin-top: 10px;
    }
</style>
</head>
<body>
<div class="box">
    <h2>Login</h2>
    <form method="POST" action="">
        <div class="input-box">
            <input type="text" name="login" placeholder=" " required>
            <label>Login</label>
        </div>

        <div class="input-box">
            <input type="password" id="password" name="password" placeholder=" " required>
            <label>Password</label>
            <button type="button" onclick="togglePassword()">👁</button>
        </div>

        <input type="submit" value="Submit">
    </form>

    <script>
        function togglePassword() {
            const input = document.getElementById("password");
            input.type = input.type === "password" ? "text" : "password";
        }
    </script>
    <?php
    $true_login = "admin";
    $true_password = "12345";

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $login = $_POST['login'];
        $password = $_POST['password'];

        if ($login === $true_login && $password === $true_password) {
            header("Location: https://www.w3schools.com/"); /*your website*/
            exit;
        } else {
            echo "<p class='error'>Wrong login or password!</p>";
        }
    }
    ?>
</div>
</body>
</html>
