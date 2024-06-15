<?php

$servername = "localhost";
$username = "Cathy";
$password = "test1234";
$dbname = "k_productions";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['action'])) {
    if ($_POST['action'] == 'updateProduction') {
        $productionName = $_POST['productionName'];
        $productionDescription = $_POST['productionDescription'];
        
        // Example handling of image upload (ensure proper validation and security measures)
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["productionImage"]["name"]);
        move_uploaded_file($_FILES["productionImage"]["tmp_name"], $target_file);

        $sql = "INSERT INTO productions (name, description, image) VALUES ('$productionName', '$productionDescription', '$target_file')";
        if ($conn->query($sql) === TRUE) {
            echo "Production updated successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif ($_POST['action'] == 'registerEmployee') {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $dateOfBirth = $_POST['dateOfBirth'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];

        $sql = "INSERT INTO employees (first_name, last_name, date_of_birth, email, phone_number) VALUES ('$firstName', '$lastName', '$dateOfBirth', '$email', '$phoneNumber')";
        if ($conn->query($sql) === TRUE) {
            echo "Employee registered successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    exit; // Exit after processing POST request
}

if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: script.html"); // Redirect to main website after logout
    exit;
}
?>