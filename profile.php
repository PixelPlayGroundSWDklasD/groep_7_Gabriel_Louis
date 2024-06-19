<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: loginscreen.php");
    exit();
}

$username = $_SESSION["username"];

// Connect to your database
require_once "lib/connection.php";

// Query to retrieve user information
$sql = "SELECT * FROM gebruikers WHERE gebruikersnaam = '$username'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows == 0) {
    $user_data = mysqli_fetch_assoc($result);
} else {
    echo "Error retrieving user data.";
    exit();
}

// Close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Profile</h1>
        <div class="profile-info">
        <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box" style="height: 200px; width:200px;px" alt="Profile Picture">
            <h2><?= $username ?></h2>
            <p><?= $user_data["email"] ?></p>
            <p><?= $user_data["username"] ?></p>
        </div>
    </div>
</body>
</html>