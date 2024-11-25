<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['points'] += 10; 
    header("Location: game.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gioco Sushi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            font-size: 2.5em;
            color: #FF5733;
        }
        .points {
            font-size: 2em;
            color: #28A745;
        }
        button {
            font-size: 1.5em;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Colleziona più Sushi possibile!</h1>
    <p class="points">Punti Sushi: <?php echo $_SESSION['points']; ?></p>
    <form method="POST">
        <button type="submit">Clicca per punti sushi!</button>
    </form>
    <p>Continua a cliccare per guadagnare più punti!</p>
</body>
</html>
