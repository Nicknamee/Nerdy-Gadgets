<?php

if (empty($_POST["name"])) {
    die("Voer je naam in!");
}
if (empty($_POST["surname"])) {
    die("Voer je achternaam in!");
}
if (empty($_POST["street_name"])) {
    die("Voer je straat in!");
}
if (empty($_POST["apartment_nr"])) {
    die("Voer je huisnummer in!");
}
if (empty($_POST["postal_code"])) {
    die("Voer je postcode in!");
}
if (empty($_POST["city"])) {
    die("Voer je stad in!");
}
if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Deze email is ongeldig");
}

if (strlen($_POST["password"]) < 8) {
    die("Voer een wachtwoord in met meer dan 8 karakters");
}

if (! preg_match("/[a-z]/i", $_POST["password"])) {
    die ("Wachtwoord");
}

if (! preg_match("/[0-9]/i", $_POST["password"])) {
    die ("Wachtwoord nummer");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Wachtwoorden komen er niet overeen");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$conn = require __DIR__ . "/connect.php";
$sql = "INSERT INTO user (name,surname,street_name,apartment_nr,postal_code,city, email, password_hash) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->stmt_init();

if ( ! $stmt->prepare($sql)){
    die("SQL error" . $conn->error);
}

$stmt->bind_param("ssssssss", $_POST["name"],
                    $_POST["surname"],
                    $_POST["street_name"],
                    $_POST["apartment_nr"],
                    $_POST["postal_code"],
                    $_POST["city"],
                    $_POST["email"],
                    $password_hash);
$stmt->execute();
 header("Location: signup-succes.php");
 exit;

echo "signupsucces";
