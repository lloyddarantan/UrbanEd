<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "ubraned");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $firstname = $_POST['firstname'] ?? '';
    $lastname  = $_POST['lastname'] ?? '';
    $email     = $_POST['email'] ?? '';
    $password  = $_POST['password'] ?? '';
    $contactno = $_POST['contactno'] ?? '';
    $birthdate = $_POST['birthdate'] ?? '';
    $address   = $_POST['address'] ?? '';

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email already exists";
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $insert = $conn->prepare("INSERT INTO users (firstname, lastname, email, password, contactno, birthdate, address) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $insert->bind_param("sssssss", $firstname, $lastname, $email, $hashedPassword, $contactno, $birthdate, $address);

    if ($insert->execute()) {
        echo "Account created successfully";
        exit;
    } else {
        echo "Error creating account";
        exit;
    }

    $stmt->close();
    $insert->close();
    $conn->close();
} else {
    echo "Form not submitted correctly";
}
?>