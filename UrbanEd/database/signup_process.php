<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Database connection
    $servername = "localhost";
    $username = "root";  
    $password = "";      
    $dbname = "urbaned"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $firstname = $_POST['firstname'] ?? '';
    $lastname  = $_POST['lastname' ] ?? '';
    $email     = $_POST['email'    ] ?? '';
    $password  = $_POST['password' ] ?? '';
    $contactno = $_POST['contactno'] ?? '';
    $birthdate = $_POST['birthdate'] ?? '';
    $address   = $_POST['address'  ] ?? '';

    $complete = $conn->prepare("INSERT INTO users (firstname, lastname, email, password, contactno, birthdate, address)
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $complete->bind_param("sssssss", $firstname, $lastname, $email, $password, $contactno, $birthdate, $address);

    if ($complete->execute()) {
        // $_SESSION['login'] = true;
        // $last_id = $conn-> id;

       header("Location: ../login_page.php");
       exit();
    } else {
         $_SESSION['login'] = false;
        echo "Error: " . $complete;
    }

    $complete->close();
    $conn->close();

} else {
    echo "Form not submitted correctly.";
}
?>
