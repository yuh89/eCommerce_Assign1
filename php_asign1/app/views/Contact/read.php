<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex; 
            width: 100vw; 
            height: 100vh; 
        }

        .nav {
            width: 200px; 
            padding: 20px; 
        }

        .nav ul {
            list-style: none; 
            margin: 0; 
            padding: 0; 
        }

        .main-content {
            flex: 1; 
            padding: 20px; 
        }

        .main-content h1 {
            margin-bottom: 20px; 
        }
    </style>
</head>
<body>
    <div class="container">
        <nav class="nav">
            <ul>
                <li><a href="/Main/index">Landing Page</a></li>
                <li><a href="/Main/about_us">About Us</a></li>
                <li><a href="/Contact/index">Contact Us</a></li>
                <li><a href="/Contact/read">See the message we got</a></li>
            </ul>
        </nav>
        <main class="main-content">
            <?php
            $messageModel = new \app\models\Message();
            $messages = $messageModel->read();

            echo '<div class="message-log">';
            echo '<h1>Contact us - messages sent</h1>';

            foreach ($messages as $message) {
                $decodedMessage = json_decode($message, true); 
                echo '<p><strong>' . htmlspecialchars($decodedMessage['email']) . '</strong><br>';
                echo nl2br(htmlspecialchars($decodedMessage['message'])) . '</p>';
            }

            echo '</div>';
            ?>
            
        </main>
    </div>
</body>
</html>