<?php
session_start();

if (!isset($_SESSION['points'])) {
    $_SESSION['points'] = 0;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Sushi of Chine!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            font-size: 3em;
            color: #FF5733;
        }
    </style>
    <script>
        setTimeout(() => {
            window.location.href = 'game.php';
        }, 10000);
    </script>
</head>
<body>
    <h1>The Sushi of Chine!</h1>
    <p>Attendi che il gioco inizi...</p>
</body>
</html>
