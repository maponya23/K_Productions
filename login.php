<?php
session_start();
$servername = "localhost";
$username = "Cathy";
$password = "test1234";
$dbname = "k_productions";

$conn= new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM employees WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['employee'] = $email;
        header("Location: employee_home.php");
    } else {
        echo "Invalid email or password";
    }
} 

$conn->close();
?>
