<?php
// Cinnamon AI - Cinnamon Plant Disease Prediction UI
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Topbar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #009933;
            --secondary: #f5f5f5;
            --accent: #fff;
            --text: #222;
            --card: #e7f7ec;
        }
        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: var(--secondary);
            color: var(--text);
        }

        .top-bar {
            background: var(--primary);
            color: var(--accent);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0.5rem 1rem;
            margin-bottom: 1rem;
        }

        .social-icons a {
            color: var(--accent);
            margin-right: 8px;
            font-size: 1.2rem;
            text-decoration: none;
        }

        .notification-wrapper {
            position: relative;
            margin-left: auto;
            margin-right: 18px;
            font-size: 1.3rem;
            color: var(--accent);
            cursor: pointer;
        }

        .notification-wrapper .badge {
            position: absolute;
            top: -5px;
            right: -8px;
            background: red;
            color: white;
            font-size: 0.65rem;
            font-weight: bold;
            border-radius: 50%;
            padding: 2px 6px;
        }

        .login-wrapper {
            position: relative;
        }

        .login-btn {
            color: var(--accent);
            font-size: 1rem;
            text-decoration: none;
            background: none;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .login-btn i {
            margin-right: 5px;
        }

        .login-dropdown {
            position: absolute;
            top: 40px;
            right: 0;
            background: white;
            color: var(--text);
            border: 1px solid #ccc;
            border-radius: 6px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            display: none;
            flex-direction: column;
            min-width: 160px;
            z-index: 1000;
        }

        .login-dropdown a {
            padding: 10px;
            text-decoration: none;
            color: var(--text);
            border-bottom: 1px solid #eee;
        }

        .login-dropdown a:hover {
            background-color: #f1f1f1;
        }

        .login-dropdown a:last-child {
            border-bottom: none;
        }
    </style>
</head>
<body>

<div class="top-bar">
    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-square"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-whatsapp"></i></a>
    </div>

    <div class="notification-wrapper">
        <i class="fas fa-bell"></i>
        <span class="badge">3</span>
    </div>

    <div class="login-wrapper">
        <button class="login-btn" onclick="toggleLoginDropdown()">            
            <i class="fas fa-user"></i> Login
        </button>
        <div class="login-dropdown" id="loginDropdown">
            <a href="#"><i class="fas fa-user"></i> Sign Up</a>
            <a href="#"><i class="fas fa-globe"></i> Language</a>
            <a href="#"><i class="fas fa-moon"></i> Theme</a>
            <a href="#"><i class="fas fa-user-circle"></i> View Profile</a>            
            <a href="#"><i class="fas fa-cog"></i> Settings</a>
            <a href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
        </div>
    </div>
</div>

<script>
    function toggleLoginDropdown() {
        const dropdown = document.getElementById('loginDropdown');
        dropdown.style.display = dropdown.style.display === 'flex' ? 'none' : 'flex';
    }

    document.addEventListener('click', function(event) {
        const dropdown = document.getElementById('loginDropdown');
        const btn = document.querySelector('.login-btn');
        if (!btn.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.style.display = 'none';
        }
    });
</script>

</body>
</html>
