<?php
// Cinnamon AI - Cinnamon Plant Disease Prediction UI
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
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

        /*top bar css*/
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

        /*Notification Icon css*/
        .notification-wrapper {
            position: relative;
            margin-left: auto;
            margin-right: 15px;    
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
        
    </style>
</head>
<body>    
    <!--topbar-->
    <div class="top-bar">
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>    

    <!-- Notification Icon -->
    <div class="notification-wrapper">
        <i class="fas fa-bell"></i>
        <span class="badge">3</span>
    </div>  
        <a href="" class="login"><i class="fas fa-user"></i> Login</a>
    </div>

    <!--navbar-->
    <nav class="nav-bar">   

    <!--logo-->
    <span class="logo-title">
    <img src="plant.png" alt="Cinnamon AI Logo" style="height: 32px; vertical-align: middle;">
    <span style="margin-left: 8px; vertical-align: middle;">Cinnamon AI</span>
    </span>  

    </nav>

</body>
</html>
