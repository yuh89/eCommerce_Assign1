<!DOCTYPE html>
<html lang="en">
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
            width: 70vw; 
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
            <h1>About Us</h1>
            
            <p>Hello, I would like to introduce myself. My name is Ayush Patel. I was born in the year 2005 in the place we currently are, Montreal Quebec.
               I am currently on my second year of Vanier College as a Computer Science and Technology student.</p>

             <img src="../../resources/vanier.jpg" alt="Vanier College">
             Vanier College
        </main>
    </div>
</body>
</html>