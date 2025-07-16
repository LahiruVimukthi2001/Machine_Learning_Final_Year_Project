<?php
// Cinnamon AI - Home Page Footer
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Footer</title>
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

        /* Footer container */
        .footer {
            background: var(--primary);
            color: var(--accent);
            padding: 2rem 1rem 1rem 1rem;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 1rem;
        }

        .footer-col {
            flex: 1 1 220px;
            min-width: 180px;
        }

        .footer-col h4 {
            font-size: 1.08rem;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
        }

        .footer-col h4 img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
            background-color: #ffffff;
            padding: 2px;
            border: 2px solid var(--accent);
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            margin-right: 10px;
        }

        .footer-col ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-col ul li {
            margin-bottom: 0.3rem;
        }

        .footer-col ul li a {
            color: var(--accent);
            text-decoration: none;
        }

        .footer-col ul li a:hover {
            text-decoration: underline;
        }

        .contact-info {
            margin-top: 0.5rem;
            line-height: 1.5;
        }

        .social-icons {
            margin-top: 0.5rem;
        }

        .social-icons a {
            color: var(--accent);
            margin-right: 10px;
            font-size: 1.3rem;
        }

        /* Copyright */
        .copyright {
            background: #106e30;
            color: #fff;
            text-align: center;
            padding: 1rem;
            font-size: 0.95rem;
            margin-top: 1.0rem; /* 👈 Adds space above copyright */
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .footer {
                flex-direction: column;
                align-items: flex-start;
                gap: 2rem;
            }

            .footer-col {
                width: 100%;
            }

            .footer-col h4 {
                font-size: 1.1rem;
            }

            .copyright {
                font-size: 0.9rem;
            }
        }

        /* Scroll to Top */
        .scroll-to-top {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: white;
            border: 2px solid green;
            color: var(--green);
            border-radius: 20%;  
            padding: 8px 14px;
            font-size: 20px;
            text-align: center;
            /*display: ;*/
            transition: opacity 0.3s;
            cursor: pointer;
            z-index: 999;
        }
        .scroll-to-top:hover {
            background-color: var(--green);
            border: 2px solid white;
        }
    </style>
</head>
<body>

<!-- Footer -->
<footer>
    <div class="footer">
        <!-- Brand & About -->
        <div class="footer-col">
            <h4>
                <img src="images/plant.png" alt="Logo">
                Cinnamon AI
            </h4>
            <div>
                Advanced cinnamon plant disease prediction using machine learning techniques.
            </div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-col">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Diseases</a></li>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Prediction</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </div>

        <!-- Resources -->
        <div class="footer-col">
            <h4>Resources</h4>
            <ul>
                <li><a href="#">Research Papers</a></li>
                <li><a href="#">Treatment Guides</a></li>
                <li><a href="#">Dataset</a></li>
                <li><a href="#">Cinnamon Handbook</a></li>
                <li><a href="#">Registrations</a></li>
            </ul>
        </div>

        <!-- Contact Info -->
        <div class="footer-col">
            <h4>Contact</h4>
            <div class="contact-info">
                <div>Email: abc@gmail.com</div>
                <div>Phone: 0756984796</div>
                <div>University of Colombo, Sri Lanka</div>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="copyright">
        &copy; 2025 Cinnamon AI - Cinnamon Plant Disease Prediction. All rights reserved.
    </div>
</footer>

<!-- Scroll to Top Button -->
<a href="#" class="scroll-to-top" title="Back to top">
    <i class="fas fa-arrow-up"></i>
</a>

<!-- Scripts -->
<script>
    // Show/hide scroll to top button
    window.addEventListener('scroll', function () {
        const button = document.querySelector('.scroll-to-top');
        if (window.scrollY > 100) {
            button.style.display = 'block';
        } else {
            button.style.display = 'none';
        }
    });
    // Smooth scroll to top
    document.querySelector('.scroll-to-top').addEventListener('click', function (e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>

</body>
</html>
