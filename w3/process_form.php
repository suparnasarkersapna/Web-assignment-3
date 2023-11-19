<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "a3";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $sql = "INSERT INTO a3 (first_name, last_name, email, phone, message) VALUES ('$firstName', '$lastName', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        $response = array("success" => true);
    } else {
        $response = array("success" => false);
    }

    echo("Successfully Submitted.");
}

$conn->close();
?>
