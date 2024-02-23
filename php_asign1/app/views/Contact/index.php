<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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

        button{
            padding: 10px 300px;
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
            <h1>Contact Us</h1>
            <p>Wanna reach us? Write your email informaiton and message in the folowing form and then submit.</p>

            <form method='post' action = '/ContactController/complete_registration'>
                <label for="email">Email:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="email" id="email" name="email" size="75" required>
                <br><br><br>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="2" cols="70" required></textarea>
                <br><br><br>
                <button type="submit" name="action">Send!</button>
            </form>

        </main>
    </div>
</body>
</html>