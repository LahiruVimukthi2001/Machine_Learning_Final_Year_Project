<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Notifications | Cinnamon AI</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f5f7fb;
    }

    .container {
      max-width: 700px;
      margin: 2rem auto;
      padding: 1rem;
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      color: #009933;
      margin-bottom: 1.5rem;
    }

    .notification {
      display: flex;
      align-items: flex-start;
      gap: 1rem;
      padding: 1rem;
      border-bottom: 1px solid #eee;
      transition: background 0.3s;
    }

    .notification:hover {
      background: #f0f4f9;
    }

    .notification i {
      font-size: 1.5rem;
      color: #009933;
      margin-top: 0.2rem;
    }

    .notification-content {
      flex: 1;
    }

    .notification-content h4 {
      margin: 0;
      font-size: 1rem;
      color: #222;
    }

    .notification-content p {
      margin: 4px 0 0;
      font-size: 0.9rem;
      color: #555;
    }

    .time {
      font-size: 0.75rem;
      color: #999;
    }

    @media (max-width: 600px) {
      .notification {
        flex-direction: column;
        align-items: flex-start;
      }

      .notification i {
        margin-bottom: 0.5rem;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <h2>🔔 Notifications</h2>

  <div class="notification">
    <i class="fas fa-stethoscope"></i>
    <div class="notification-content">
      <h4>Disease Detected: Leaf Spot</h4>
      <p>Your latest scan detected **Leaf Spot Disease**. Please follow the recommended treatment.</p>
      <span class="time">2 hours ago</span>
    </div>
  </div>

  <div class="notification">
    <i class="fas fa-check-circle"></i>
    <div class="notification-content">
      <h4>Model Updated</h4>
      <p>The prediction model has been updated to v2.1 for better accuracy.</p>
      <span class="time">Yesterday</span>
    </div>
  </div>

  <div class="notification">
    <i class="fas fa-envelope"></i>
    <div class="notification-content">
      <h4>New Message from Supervisor</h4>
      <p>Your guide has commented on your last report. Check the dashboard.</p>
      <span class="time">3 days ago</span>
    </div>
  </div>

  <div class="notification">
    <i class="fas fa-user-shield"></i>
    <div class="notification-content">
      <h4>Profile Verified</h4>
      <p>Your account has been verified successfully. You now have full access.</p>
      <span class="time">5 days ago</span>
    </div>
  </div>
</div>

</body>
</html>
