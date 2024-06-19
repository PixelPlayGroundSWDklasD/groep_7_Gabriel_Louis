
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
                <li><a href="#">Games</a></li>
                <li><a href="#">Vrienden</a></li>
                <li><a href="#">Highscore</a></li>
                <li><a href="#">Uitloggen</a></li>
                <a href="profile.php"><li><i class="fa-solid fa-user"></i></a>
                      
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
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    echo "<h1>Welkom, $username!</h1>";
} else {
    echo "You are not logged in.";
}
?>