<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = new mysqli("localhost", "root", "", "ubraned");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        echo "Email not found";
        exit;
    }

    $users = $result->fetch_assoc();

    if ($password !== $users['password']) {
        echo "Invalid password";
        exit;
    }

    $_SESSION['login'] = true;
    $_SESSION['email'] = $users['email'];
    $_SESSION['firstname'] = $users['firstname'];
    $_SESSION['lastname'] = $users['lastname'];

    echo "success";
} // <-- close the if block
?>
