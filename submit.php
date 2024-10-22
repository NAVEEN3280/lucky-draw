<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $bill = $_POST['bill'];

    // Initialize the status variable
    $status = 'success';
    $message = '';

    // Define file path
    $filePath = 'entries.csv';
    $data = [$name, $mobile, $bill];

    // Attempt to open the file in append mode
    if (($file = fopen($filePath, 'a')) !== false) {
        // Write the data to the file
        fputcsv($file, $data);
        fclose($file);
    } else {
        // If file cannot be opened, set error status
        $status = 'error';
        $message = 'There was an error saving your data. Please try again.';
    }

    // Redirect to thank you page with name and status
    header("Location: thankyou.html?name=" . urlencode($name) . "&status=" . urlencode($status) . "&message=" . urlencode($message));
    exit();
}
?>
