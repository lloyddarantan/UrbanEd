<?php
session_start();
require 'db_connect.php'; // use your existing DB connection file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $contactno = $_POST['contactno'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];

    $stmt = $conn->prepare("UPDATE users SET firstname=?, lastname=?, contactno=?, birthdate=?, address=? WHERE email=?");
    $stmt->bind_param("ssssss", $firstname, $lastname, $contactno, $birthdate, $address, $email);

    if ($stmt->execute()) {
        header("Location: ../profile_page.php?update=success");
        exit();
    } else {
        echo "Error updating profile: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Unauthorized access or invalid request.";
}
?>