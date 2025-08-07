<?php
// public/index.php

require_once __DIR__ . '/../vendor/autoload.php';

//use App\App;

$app = new App();

// Get server hostname and IP
$hostname = gethostname();
$ip = gethostbyname($hostname);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SPA Project</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f1c40f;
            font-family: Arial, sans-serif;
        }
        .content {
            text-align: center;
        }
        .image-container {
            margin-bottom: 20px;
        }
        .image-container img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .message-container {
            overflow: hidden;
            white-space: nowrap;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            padding: 20px;
            background-color: #b4b4b4ff;
            border-radius: 5px;
        }
        .scrolling-message {
            display: inline-block;
            padding-left: 100%;
            animation: scroll 15s linear infinite;
        }
        @keyframes scroll {
            0%   { transform: translate(0, 0); }
            100% { transform: translate(-100%, 0); }
        }
        .server-info {
            margin-top: 30px;
            text-align: center;
            font-size: 1.1em;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="image-container">
            <img src="images/SSO.png" alt="Celebration" />
        </div>
        <div class="message-container">
            <h1 class="scrolling-message"><?php echo htmlspecialchars($app->getMessage()); ?></h1>
        </div>
        <div class="server-info">
            <p><strong>Server Hostname:</strong> <?php echo htmlspecialchars($hostname); ?></p>
            <p><strong>Server IP:</strong> <?php echo htmlspecialchars($ip); ?></p>
        </div>
    </div>
</body>
</html>
