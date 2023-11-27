<?php
$servername = "localhost";
$username = "firstname";
$password = "password";
$dbname = "nerdy_gadgets_start";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$passwordFromForm = $_POST['password'];


$hashedPassword = password_hash($passwordFromForm, PASSWORD_DEFAULT);


$sql = "INSERT INTO users (password) VALUES ('$hashedPassword')";

if ($conn->query($sql) === TRUE) {
    echo "Password hashed and stored successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

