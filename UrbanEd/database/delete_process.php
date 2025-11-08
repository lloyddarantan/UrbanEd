<?php
session_start();
require 'db_connect.php'; // change to your actual DB connection file

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);

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
    header("Location: ../login.php");
    exit();
}
?>
