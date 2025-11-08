<?php
session_start();
require 'db_connect.php'; // adjust path if needed

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];

    $stmt = $conn->prepare("DELETE FROM user WHERE email = ?");
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        session_destroy();
        echo "<script>
                alert('Account deleted successfully.');
                window.location.href = '../index.php';
              </script>";
    } else {
        echo "<script>
                alert('Error deleting account.');
                window.history.back();
              </script>";
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: ../login_page.php");
    exit();
}
?>
