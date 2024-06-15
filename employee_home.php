<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login2.php');
    exit();
}

if (isset($_GET['logout']) && $_GET['logout'] === 'true') {
    session_destroy();
    header('Location: login2.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Home</title>
    <link rel="stylesheet" href="employee_styles.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="Screenshot 2024-05-17 232037.png" alt="Company Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#production" id="updateProductions">Update Productions</a></li>
                <li><a href="#" id="registerEmployee">Register Employee</a></li>
                <li><a href="?logout=true">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <!-- Modal for Update Productions -->
        <section id="updateProductions" class=" modal production-container">
            <div class="production-heading">
                <span class="close">&times;</span>
                <h2>Update Of Productions</h2>
            </div>
            <div class="modal-content">
                <form action="form" method="POST" enctype="multipart/form-data" id="updateProductionForm">
                    
                    <input type="hidden" name="action" value="updateProduction">
                    <p>Name of production:</p>
                    <input type="text" name="productionName" placeholder="Production Name" required><br>
                    <p>Production description:</p>
                    <textarea name="productionDescription" placeholder="Production Description" required></textarea><br>
                    <p>Add production poster:</p>
                    <input type="file" name="productionImage" accept="image/*" required><br><br>
                    <button type="submit">Update Production</button>
                </form>
            </div>
        </section>

        <br><br><br>
        <br><br><br>

        <!-- Modal for Register Employee -->
        <section class="registration-container" id="modal registerEmployee">
            <div class=" registration-heading">
             <span class="close">&times;</span>
                <h2>Register Employee</h2>
            </div>
            <div class="modal-content">
                
                <form action="form" method="POST" id="registerEmployeeForm">
                    <input type="hidden" name="action" value="registerEmployee">
                    <p>Name:</p>
                    <input type="text" name="firstName" placeholder="First Name" required>
                    <p>Last Name:</p>
                    <input type="text" name="lastName" placeholder="Last Name" required>
                    <p>Date of Birth:</p>
                    <input type="date" name="dateOfBirth" required>
                    <p>Email:</p>
                    <input type="email" name="email" placeholder="Email" required>
                    <p>Phone number:</p>
                    <input type="tel" name="phoneNumber" placeholder="Phone Number" required>
                    <br><button type="submit">Register Employee</button>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Company Name. All rights reserved.</p>
    </footer>
</body>
</html>