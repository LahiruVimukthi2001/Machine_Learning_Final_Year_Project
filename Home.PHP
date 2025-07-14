<?php
// Cinnamon AI - Home Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cinnamon AI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- External Styles & Libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />

    <style>
        
    </style>
</head>
<body>

<?php include 'includes/Topbar.php'; ?>
<?php include 'includes/Navbar.php'; ?>

<!-- Running Text -->
<div class="running-text">🌿 Empowering Farmers with AI-Powered Cinnamon Plant Diseases Identification 🌿</div>

<!-- Hero -->
<div class="main-hero" data-aos="fade-up">
    <h1>Protect Your Cinnamon Plants with <span style="color:#106e30;">AI-Powered Disease Detection</span></h1>
    <h3>Detect and diagnose cinnamon plant diseases with advanced machine learning techniques</h3>
    <button class="start-btn">Start Scan</button>
</div>

<!-- Impact Section -->
<div class="impact-section" data-aos="fade-up">
    <h2 class="impact-title">Our Impact in Cinnamon Farming</h2>
    <div class="impact-grid">
        <div class="impact-card" data-aos="zoom-in">
            <img src="images/plant.png" alt="Icon" class="impact-icon">
            <div class="impact-value" data-count="95">0</div>
            <div class="impact-label">Accuracy Rate</div>
        </div>
        <div class="impact-card" data-aos="zoom-in">
            <img src="images/plant.png" alt="Icon" class="impact-icon">
            <div class="impact-value" data-count="250">0</div>
            <div class="impact-label">Plants Analyzed</div>
        </div>
        <div class="impact-card" data-aos="zoom-in">
            <img src="images/plant.png" alt="Icon" class="impact-icon">
            <div class="impact-value" data-count="15">0</div>
            <div class="impact-label">Diseases Identified</div>
        </div>
        <div class="impact-card" data-aos="zoom-in">
            <img src="images/plant.png" alt="Icon" class="impact-icon">
            <div class="impact-value" data-count="5">0</div>
            <div class="impact-label">Analysis Time (sec)</div>
        </div>
    </div>
</div>

<!-- ML System -->
<div class="section-title">How Our ML System Works</div>
<div class="ml-steps">
    <div class="ml-step" data-aos="fade-up"><div class="step-num">1</div><b>Upload Photo</b><div>Take a photo and upload.</div></div>
    <div class="ml-step" data-aos="fade-up"><div class="step-num">2</div><b>AI Analysis</b><div>AI processes the image.</div></div>
    <div class="ml-step" data-aos="fade-up"><div class="step-num">3</div><b>Get Results</b><div>Get diagnosis in seconds.</div></div>
</div>

<!-- Diseases -->
<div class="section-title">Common Cinnamon Plant Diseases</div>
<div class="disease-list">
    <div class="disease-card" data-aos="fade-up"><h3>Rough Bark</h3><p>Brown spots on shoots spread and damage bark.</p><button class="learn-btn">Learn More</button></div>
    <div class="disease-card" data-aos="fade-up"><h3>Stripe Canker</h3><p>Affects bark, lowers commercial value.</p><button class="learn-btn">Learn More</button></div>
    <div class="disease-card" data-aos="fade-up"><h3>Leaf Spot Disease</h3><p>Reduces photosynthesis, harms growth.</p><button class="learn-btn">Learn More</button></div>
</div>

<!-- Features -->
<div class="section-title">Key Features</div>
<div class="features-section">
    <div class="feature-card" data-aos="zoom-in"><img src="images/plant.png" class="feature-icon"><b>Detection Accuracy</b><div>Highly accurate AI model.</div></div>
    <div class="feature-card" data-aos="zoom-in"><img src="images/plant.png" class="feature-icon"><b>Analysis Time</b><div>Get results in seconds.</div></div>
    <div class="feature-card" data-aos="zoom-in"><img src="images/plant.png" class="feature-icon"><b>Diseases Detected</b><div>Detects all common diseases.</div></div>
</div>

<?php include 'includes/footer.php'; ?>



</body>
</html>
