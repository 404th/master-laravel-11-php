<?php
header("HTTP/1.1 404 Not Found");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - New Year</title>
    <!-- Add Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            height: 100vh;
            overflow: hidden;
            background: radial-gradient(circle, #1b2735, #090a0f);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .container {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            text-align: center;
        }
        .juniper {
            position: absolute;
            bottom: 10%;
            left: 50%;
            transform: translateX(-50%);
            width: 300px;
            filter: drop-shadow(0 0 20px #28a745);
        }
        .gifts {
            position: absolute;
            bottom: 5%;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 20px;
        }
        .gift {
            width: 80px;
            height: auto;
        }
        .message {
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translateX(-50%);
            font-size: 2rem;
        }
        .message h1 {
            font-family: 'Pacifico', cursive;
            font-size: 3rem;
            margin: 0;
            color: #FFD700;
            text-shadow: 2px 2px 5px #000;
        }
        .message p {
            font-family: 'Roboto', sans-serif;
            font-size: 1.2rem;
            margin: 10px 0;
        }
        .message .year {
            color: #FFD700;
            font-size: 3rem;
            font-family: 'Pacifico', cursive;
        }
        .santa {
            position: absolute;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: url('https://example.com/santa-head.png') no-repeat center center / cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="message">
            <h1>404 - Page Not Found</h1>
            <p>Oops! It seems you're lost 🎅🏻</p>
            <p>But cheer up! 🎉 Happy New Year <span class="year"><?php echo date("Y") + 1; ?></span>!</p>
        </div>
        <div class="gifts"></div>
        <div class="santa" id="santa"></div>
    </div>
    <script>
        const santa = document.getElementById('santa');
        const container = document.querySelector('.container');
        
        let santaX = Math.random() * (container.clientWidth - 100);
        let santaY = Math.random() * (container.clientHeight - 100);
        let velocityX = Math.random() < 0.5 ? 2 : -2;
        let velocityY = Math.random() < 0.5 ? 2 : -2;

        function moveSanta() {
            santaX += velocityX;
            santaY += velocityY;

            // Bounce off walls
            if (santaX <= 0 || santaX >= container.clientWidth - 100) {
                velocityX *= -1;
            }
            if (santaY <= 0 || santaY >= container.clientHeight - 100) {
                velocityY *= -1;
            }

            santa.style.transform = `translate(${santaX}px, ${santaY}px)`;
        }

        setInterval(moveSanta, 16);
    </script>
</body>
</html>