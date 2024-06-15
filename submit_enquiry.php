<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "k_productions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert enquiry into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $company = $_POST['company'];
    $project_type = $_POST['project_type'];
    $project_description = $_POST['project_description'];

    $sql = "INSERT INTO enquiries (name, email, phone, company, project_type, project_description)
    VALUES ('$name', '$email', '$phone', '$company', '$project_type', '$project_description')";

    if ($conn->query($sql) === TRUE) {
        echo "New enquiry recorded successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
