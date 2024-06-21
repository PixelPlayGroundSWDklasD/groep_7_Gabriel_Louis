<?php
session_start();
include 'header.php';
include 'footer.php';
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4c1e45b6e3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Games</title>
</head>
<body>
<style>
body  {
  background-image: url("images/Cyberpunk-City-Street-Scifi-Wallpaper-Graphics-74865888-1.png");
}
</style>
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
            <a href="boterkaaseiren.php" class="btn btn-primary">Play Now</a>
        </div>
    </div>
</div>
</body>
</html>