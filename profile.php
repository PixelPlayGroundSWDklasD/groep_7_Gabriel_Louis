<?php
session_start(); // Only call session_start() once

$username = $_SESSION["username"];

// Connect to your database
require_once "lib/connection.php";

// Query to retrieve user information
$sql = "SELECT * FROM gebruikers WHERE gebruikersnaam = '$username'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    echo "Error: " . mysqli_error($conn);
    exit();
}

// Fetch the result
$user_data = mysqli_fetch_assoc($result);

// Close database connection at the end
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
            <?php if ($user_data): ?>
                <h2><?= $user_data["gebruikersnaam"] ?></h2> <!-- Display the username -->
            <?php else: ?>
                <p>User not found</p>
            <?php endif; ?>
            <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box" style="height: 200px; width:200px;px" alt="Profile Picture">
        </div>
    </div>
</body>
</html>