<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hangman Game</title>
    <meta name="author" content="Louis Mpiakongosss">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<header>
    <input type="checkbox" name="" id="chk1">
    <div class="logo"><h1>Pixel Playground</h1></div>
    <div class="search-box">
        <!-- Optional search input -->
    </div>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="games.php">Games</a></li>
        <li><a href="#">Vrienden</a></li>
        <li><a href="#">Highscore</a></li>
        <li><a href="loginscreen.php">Login/Register</a></li>
    </ul>
    <div class="menu">
        <label for="chk1">
            <i class="fa fa-bars"></i>
        </label>
    </div>
</header>
    <div class="body-game">
    <div class="game-container">
        <div class="game-stats">
            <div class="stats-item"><i class="fa fa-star"></i> <span id="score">0</span></div>
            <div class="stats-item"><i class="fa fa-coins"></i> <span id="coins">0</span></div>
            <div class="stats-item"><i class="fa fa-heart"></i> <span id="lives">7</span></div>
        </div>
        <div class="hangman-container">
            <img src="images/hangman-0.png" id="hangman-image" alt="Hangman">
        </div>
        <div class="word-container" id="word-container"></div>
        <div class="keyboard-container" id="keyboard-container"></div>
    </div>
    <script src="galgje.js"></script>
    </div>
</body>
</html>
