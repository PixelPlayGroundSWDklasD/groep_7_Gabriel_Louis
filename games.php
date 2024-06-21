<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4c1e45b6e3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Games</title>
</head>
<body>
<header>
    <input type="checkbox" name="" id="chk1">
    <div class="logo"><h1>Pixel Playground</h1></div>
    <div class="search-box">
    </div>
    <ul>
        <li><a href="ingelogd.php">Home</a></li>
        <li><a href="games.php">Games</a></li>
        <li><a href="#">Vrienden</a></li>
        <li><a href="#">Highscore</a></li>
        <li><a href="#">Uitloggen</a></li>
    </ul>
    <div class="menu">
        <label for="chk1">
            <i class="fa fa-bars"></i>
        </label>
    </div>
</header>

<div class="games-section">
    <h1>Our Games</h1>
    <div class="game-card-container">
        <div class="game-card">
            <img src="images/download.jfif" alt="Galgje">
            <h3>Galgje</h3>
            <p>Play the classic hangman game!</p>
            <a href="galgje.php" class="btn btn-primary">Play Now</a>
        </div>
        <div class="game-card">
            <img src="images/7.webp" alt="Tic Tac Toe">
            <h3>Tic Tac Toe</h3>
            <p>Challenge your friend in Tic Tac Toe!</p>
            <a href="tictactoe.php" class="btn btn-primary">Play Now</a>
        </div>
    </div>
</div>
</body>
</html>
