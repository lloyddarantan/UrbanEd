<?php
// session_start();

// Check if the users is logged in
if (!isset($_SESSION['login']) || $_SESSION['login'] !== true) {
    header("Location: login_page.php");
    exit();
}

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ubraned";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get users email from session
$email = $_SESSION['email'];

// Fetch users data
$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $users = $result->fetch_assoc();
} else {
    echo "users not found.";
    exit();
}

$stmt->close();
$conn->close();
?>
