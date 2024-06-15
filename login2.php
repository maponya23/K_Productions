


<?php
// At the top of  PHP files
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include("connection.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Example hardcoded credentials check (Replace this with your database check)
    $valid_email = 'email@email';
    $valid_password = 'Password1';

    if ($email === $valid_email && $password === $valid_password) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header('Location: employee_home.php');
        exit();
    } else {
        $error = "Invalid email or password!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="loginstyles.css">
    </head>
    <body>
        <header>
        <section class="logo">
            <img src="Screenshot 2024-05-17 232037.png" alt="KProduction logo">
            <title> </title>
            <div class="welcome">
                <h4>Welcome to <span> K Productions!</span></h4>
            </div>
        </section>
        
        </header>
       <div>
            <h1>Employee Login</h1>
            <form id="login-form" action="login2.php" method="POST">
               <h1>Employee Login</h1><br>
                <label for="">Email:</label>
                <input type="text" id="email" name="email"><br><br>
                <label for="">Password:</label>
                <input type="password" id="password" name="password"><br><br>
                <button name="Login" type="submit"  id="button">Login</button><br>
                <a href="forgot-password">Forgot password?</a>

            </form>
       </div> 

     

    </body>
        <footer>
            <p class="copyright">Copyright 2024 K Productions</p>
      
        </footer>


</html>