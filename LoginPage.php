<?php
session_start();

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valid_username = 'user123';
    $valid_password = 'password123';

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit();
    } else {
        $message = 'Invalid username or password!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- External Styles & Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:600,400');

        :root {
            --primary: #009933;
            --secondary: #f5f5f5;
            --accent: #ffffff;
            --text: #222;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: var(--secondary);
            color: var(--text);
        }

        .container-main {
            display: flex;
            min-height: 100vh;
            justify-content: center;
            align-items: center;
        }

        /*leftbox css*/
        .left-box {
            width: 350px;
            background: white;
            border-radius: 20px;
            border: solid var(--primary);
            margin-right: 40px;
            text-align: center;
            padding: 40px 30px 35px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .left-box img {
            width: 600px; height: 300px;
            max-width: 290px;
            margin-bottom: 30px;
            border-radius: 22px;
            box-shadow: 2px 8px 16px rgba(0,0,0,0.13);
        }
        .welcome-msg {
            font-size: 2.1em;
            font-weight: 700;
            color: #15b044;
            margin: 24px 0 8px;
        }
        .desc {
            font-size: 1.01em;
            color: black;
        }

        /*Rightbox css*/
        .right-box {
            width: 400px;
            border: 3px solid var(--primary);
            border-radius: 16px;
            background: white;
            padding: 15px;
        }
        .right-box h2 {
            color: var(--primary);
            font-weight: 700;
            font-size: 1.7em;
            margin: 20px 0 10px;
            text-align: center;
        }
        .right-box p {
            color: black;
            margin-top: 4px;
            font-size: 1.02em;
            text-align: center;
        }

        
        /*Form css*/
        .form-group {
            margin-bottom: 17px;
            margin-left: 40px;
            margin-right: 70px;
            position: relative;
        }
        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: var(--primary);
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 11px 12px;
            border: 2px solid #19b046;
            border-radius: 7px;
            font-size: 1.07em;
            background: #fff;
            outline: none;
            transition: border 0.2s;
        }
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: var(--primary);
        }
        .options-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px 40px 20px;
        }
        .remember-group {
            display: flex;
            align-items: center;
        }
        .remember-group input[type="checkbox"] {
            accent-color: #18c550;
            margin-right: 8px;
        }
        .remember-group label {
            margin-bottom: 0;
            color: #333;
            font-weight: 400;
            font-size: 0.98em;
        }
        .forgot {
            font-size: 0.98em;
            color: var(--primary);
            text-decoration: none;
        }
        .login-btn {
            width: 50%;
            background: #19ba47;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 11px 0;
            font-size: 1.16em;
            font-weight: 700;
            cursor: pointer;
            margin: 0 auto 23px;
            display: block;
            transition: background 0.15s;
        }
        .login-btn:hover {
            background: #13ad3c;
        }
        .divider {
            text-align: center;
            color: black;
            margin: 14px 0;
            font-size: 0.93em;
            font-weight: 400;
        }
        .divider span {
            display: inline-block;
            position: relative;
            padding: 0 12px;
        }
        .divider:before,
        .divider:after {
            content: "";
            display: inline-block;
            width: 20%;
            height: 1px;
            background: black;
        }
        .divider:before {
            margin-right: 10px;
        }
        .divider:after {
            margin-left: 10px;
        }
        .social-group {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-bottom: 16px;
        }
        .social-btn {
            border: 1.5px solid #19b046;
            border-radius: 7px;
            background: #fff;
            padding: 10px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.12s, border-color 0.12s;
        }
        .social-btn:hover {
            background: #f7fdf7;
            border-color: #11c34a;
        }
        .social-btn img {
            height: 20px;
            width: 20px;
        }
        .signup-link {
            display: block;
            text-align: center;
            color: #333;
            font-size: 1em;
            margin-top: 8px;
        }
        .signup-link a {
            color: #18b046;
            font-weight: 600;
            text-decoration: none;
            margin-left: 2px;
        }
        .message {
            text-align: center;
            color: #db2929;
            margin-bottom: 12px;
            font-weight: 600;
        }

        /*Responsive Css*/
        @media (max-width: 900px) {
            .container-main {
                flex-direction: column;
                padding-top: 36px;
            }
            .left-box {
                margin-right: 0;
                margin-bottom: 20px;
            }
            .right-box {
                width: 95vw;
            }
        }
        
    </style>
</head>
<body>

<div class="container-main">
    <!-- Left Panel -->
    <div class="left-box">
        <img src="images/Login.png" alt="Cinnamon Disease Identification">
        <div class="welcome-msg">Welcome back!</div>
        <div class="desc" style="margin-top:19px;">
            Log in to access your cinnamon plantation management dashboard and monitor your plants' health in real-time.
        </div>
    </div>

    <!-- Right Panel -->
    <div class="right-box">
        <h2>Sign In to Your Account</h2>
        <p>Enter Your Credentials to access<br>your Dashboard</p>

        <?php if ($message): ?>
            <div class="message"><?= htmlspecialchars($message) ?></div>
        <?php endif; ?>

        <!-- Login Form -->
        <form method="post" action="">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" required placeholder="Enter username">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required placeholder="Enter password">
            </div>

            <div class="options-row">
                <div class="remember-group">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Remember Me</label>
                </div>
                <a class="forgot" href="#">Forgot Password?</a>
            </div>

            <button type="submit" class="login-btn">Sign in</button>
        </form>

        <!-- Divider -->
        <div class="divider"><span>Or Continue With</span></div>

        <!-- Social Buttons with logos only -->
        <div class="social-group">
            <button class="social-btn">
                <img src="images/plant.png" alt="Google">
            </button>
            <button class="social-btn">
                <img src="images/plant.png" alt="Facebook">
            </button>
            <button class="social-btn">
                <img src="images/plant.png" alt="Instagram">
            </button>
        </div>

        <!-- Signup Link -->
        <div class="signup-link">
            Don't have an account? <a href="#">Sign Up Now</a>
        </div>
    </div>
</div>

</body>
</html>
