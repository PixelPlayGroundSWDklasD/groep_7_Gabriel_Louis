

<?php
require_once "lib/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST["username"];
    $pass = $_POST["password"];
    // deze query doet het volgende: selecteer alle rijen uit de tabel users waar de username en password gelijk zijn aan de ingevoerde username en password
    $sql = "SELECT * FROM gebruikers WHERE gebruikersnaam = '$uname' AND wachtwoord = '$pass'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows == 1) {
        session_start();
        $_SESSION["username"] = $uname;
        $_SESSION["logedin"] = true;
        // Stuur de gebruiker door naar de dashboard.php pagina na een succesvolle login
        header("Location: ingelogd.php");
        exit();
    } else {
        // Gebruiker niet gevonden in de database
        echo "Ongeldige username of wachtwoord.";
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="style.css">
         
    <title>Login & Registration Form</title> 
</head>
<body>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="loginscreen.php" method="post">
                <div class="input-field">
                    <input type="text" placeholder="Enter your username" required name="username">
                    <i class="uil uil-envelope icon"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="password" placeholder="Enter your password" required name="password">
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="#" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login" name="login">
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    </span>
                </div>
            </div>

            <div class="form signup">
                <span class="title">Registration</span>

            <form action="register.php" method="post">
                <div class="input-field">
                    <input type="text" placeholder="Enter your name" required name="name">
                    <i class="uil uil-user"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="password" placeholder="Create a password" required name="password">
                    <i class="uil uil-lock icon"></i>
                </div>
                <div class="input-field">
                    <input type="password" class="password" placeholder="Confirm a password" required name="confirm_password">
                    <i class="uil uil-lock icon"></i>
                    <i class="uil uil-eye-slash showHidePw"></i>
                </div>
                <div class="checkbox-text">
                    <div class="checkbox-content">
                        <input type="checkbox" id="termCon">
                        <label for="termCon" class="text">I accepted all terms and conditions</label>
                    </div>
                </div>

                <div class="input-field button">
                    <input type="submit" value="Signup">
                </div>
            </form>

            <div class="login-signup">
                <span class="text">Already a member?
                    <a href="#" class="text login-link">Login Now</a>
                </span>
            </div>
        </div>
    </div>
</div>

     <script src="script.js"></script> 
</body>
</html>
