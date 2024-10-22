<?php
session_start(); // Start the session at the top of the file
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lucky Draw Entry</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Initially hide the admin login button */
        #adminLoginButton {
            display: none;
        }
    </style>
</head>
<body>
    <div class="bg-image">
        <img src="img/bg.jpg" alt="background-image">
    </div>
    <div class="container">
        <img class="logo" src="img/logo.png" alt="logo">
        <h2>LUCKY DRAW!</h2>
        <form id="luckyDrawForm" action="submit.php" method="POST">
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number" required pattern="[0-9]{10}">
            <input type="text" id="bill" name="bill" placeholder="Bill Number" required>
            <input type="checkbox" id="agreement" name="agreement" required checked>
            <label for="agreement">I agree to the <a href="#">terms and conditions</a>.</label>      
            <input type="submit" value="Submit">
        </form>

        <!-- Admin Login Button (Initially Hidden) -->
        <form id="adminLoginButton" action="login.php" method="POST">
            <input type="submit" value="Admin Login">
        </form>
    </div>

    <script>
        // Example: Show the login button if the user presses "Ctrl + Shift + A"
        document.addEventListener('keydown', function(event) {
            if (event.ctrlKey && event.shiftKey && event.key === 'A') {
                document.getElementById('adminLoginButton').style.display = 'block';
            }
        });
    </script>
</body>
</html>
