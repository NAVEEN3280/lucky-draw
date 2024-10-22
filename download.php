<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: index.php"); // Redirect if not logged in
    exit;
}

// Provide the functionality to download the entries file
$file = 'entries.csv'; // Path to the file

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}
?>
