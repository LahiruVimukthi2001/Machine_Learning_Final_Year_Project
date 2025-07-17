<?php
// Cinnamon AI - Cinnamon Plant Disease Prediction UI
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Running Text</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
         /* Running Text */
        .running-text {
            white-space: nowrap;
            overflow: hidden;
            display: block;
            font-weight: bold;
            letter-spacing: 6px;
            animation: marquee 25s linear infinite;
            color: var(--primary);
            background: #ffffff;
            padding: 10px 0;
            margin-top: 0px;
            border-radius: 0 0 15px 15px;
        }
        @keyframes marquee {
            from { transform: translateX(100%); }
            to { transform: translateX(-100%); }
        }
        
    </style>
</head>
<body>

     <!-- Running Text -->
    <div class="running-text">🌿 Empowering Farmers with AI-Powered Cinnamon Plant Diseases Identification 🌿</div>


</body>
</html>
