<?php
session_start();
include 'header.php';
include 'footer.php';
?>
 
 <!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boter, Kaas en Eieren</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<style>
body  {
  background-image: url("images/Cyberpunk-City-Street-Scifi-Wallpaper-Graphics-74865888-1.png");
}
</style>
    <div id="game">
        <div id="board">
            <div class="cell" data-index="0"></div>
            <div class="cell" data-index="1"></div>
            <div class="cell" data-index="2"></div>
            <div class="cell" data-index="3"></div>
            <div class="cell" data-index="4"></div>
            <div class="cell" data-index="5"></div>
            <div class="cell" data-index="6"></div>
            <div class="cell" data-index="7"></div>
            <div class="cell" data-index="8"></div>
        </div>
        <div id="status"></div>
        <button id="reset">Opnieuw Spelen</button>
    </div>

    <div id="confirmation-template" style="display: none;">
        <div id="confirmation">
            <p id="confirmation-message"></p>
            <button id="confirm">Bevestigen</button>
            <button id="cancel">Annuleren</button>
        </div>
    </div>

    <script src="boterkaaseiren.js"></script>
</body>
</html>
