<?php
require_once "lib/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Controleer of het wachtwoord en het bevestigingswachtwoord overeenkomen
    if ($password != $confirm_password) {
        echo "Wachtwoorden komen niet overeen.";
        exit();
    }

    // Hash het wachtwoord voor opslag in de database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO gebruikers (gebruikersnaam, wachtwoord) VALUES ('$name', '$hashed_password')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Registratie succesvol!";
        header("Location: ingelogd.php");
        exit();
    } else {
        echo "Registratie mislukt.";
    }
}
?>
