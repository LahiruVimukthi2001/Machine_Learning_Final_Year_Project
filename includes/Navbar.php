<?php
// Cinnamon AI - Home Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Navbar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
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

        /* Navbar */
        .nav-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: var(--primary);
            color: var(--accent);
            padding: 0.5rem 1rem;
            flex-wrap: wrap;
        }

        .nav-bar a {
            color: var(--accent);
            text-decoration: none;
            margin-right: 18px;
            font-weight: 500;
        }

        .nav-bar a:hover {
            text-decoration: underline;
        }

        .nav-bar .search-box {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .nav-bar input[type="text"] {
            padding: 5px 8px;
            border-radius: 3px;
            border: none;
        }

        .nav-bar .search-box button {
            background-color: var(--accent);
            color: var(--primary);
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
            font-weight: 500;
        }

        .nav-toggle {
            display: none;
            font-size: 1.5rem;
            color: var(--accent);
            background: none;
            border: none;
            cursor: pointer;
        }

        .nav-links {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            transition: all 0.3s ease-in-out;
        }

        /* Logo */
        .logo-title {
            font-weight: bold;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
        }

        .logo-title img {
            width: 35px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
            background-color: #ffffff;
            padding: 2px;
            border: 2px solid var(--accent);
            box-shadow: 0 0 5px rgba(0,0,0,0.2);
            margin-right: 8px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-toggle {
                display: block;
            }

            .nav-links {
                display: none;
                flex-direction: column;
                width: 100%;
                background-color: var(--primary);
                padding: 1rem 0;
            }

            .nav-links.show {
                display: flex;
            }

            .nav-links a,
            .nav-bar .search-box {
                margin: 0.5rem 1rem;
            }
        }
    </style>
</head>
<body>

<nav class="nav-bar">
    <span class="logo-title">
        <img src="images\plant.png" alt="Logo">
        Cinnamon AI
    </span>

    <button class="nav-toggle" onclick="toggleMenu()" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>

    <div class="nav-links" id="navLinks">
        <a href="#">Home</a>
        <a href="#">Dashboard</a>
        <a href="#">Prediction</a>
        <a href="#">Diseases</a>
        <a href="#">Contact</a>
        <a href="#">About</a>
        <div class="search-box">
            <input type="text" placeholder="Search">
            <button>Search</button>
        </div>
    </div>
</nav>

<script>
function toggleMenu() {
    const navLinks = document.getElementById('navLinks');
    navLinks.classList.toggle('show');
}
</script>

</body>
</html>
