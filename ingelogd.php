
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4c1e45b6e3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Home</title>
</head>
<body>
<style>
body  {
  background-image: url("images/Cyberpunk-City-Street-Scifi-Wallpaper-Graphics-74865888-1.png");
}
</style>
<header>
        <input type ="checkbox" name ="" id ="chk1">
        <div class="logo"><h1>Pixel Playground</h1></div>
            <div class="search-box">
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Product</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
                <a href="loginscreen.php"><li><i class="fa-solid fa-user"></i></a>
                      
                </li>
            </ul>
            <div class="menu">
                <label for="chk1">
                    <i class="fa fa-bars"></i>
                </label>
            </div>
    </header>


</body>
</html>
<?php
session_start();

if (empty($_SESSION["logedin"])) {
    // Gebruiker is niet ingelogd, stuur door naar de inlogpagina
    header("Location: index.php");
    exit();
}

echo "Je bent ingelogd, met de deze gegevens: <br>";
echo "Gebruikersnaam: " . $_SESSION["username"] . "<br>";
echo "Ingelogd: " . ($_SESSION["logedin"] ? 'Ja' : 'Nee');
?>