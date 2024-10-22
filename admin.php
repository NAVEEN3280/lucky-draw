<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to the Admin Page</h1>
        <form action="download.php" method="get">
            <button type="submit">Download Excel File</button>
        </form>
        <form action="logout.php" method="post">
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>
