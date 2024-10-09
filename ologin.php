<?php
session_start();

// Define your official credentials
define('OFFICIAL_USERNAME', 'jasikagupta2004@gmail.com'); // Update with your actual username
define('OFFICIAL_PASSWORD', 'Omshanti@2004'); // Update with your actual password

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = $_POST['email']; // Changed to match the form's input name
    $password = $_POST['password']; // Changed to match the form's input name

    // Validate the credentials
    if ($username === OFFICIAL_USERNAME && $password === OFFICIAL_PASSWORD) {
        $_SESSION['loggedin'] = true; // Set a session variable
        header("Location: display.php"); // Redirect to official page
        exit();
    } else {
        // Invalid credentials
        $_SESSION['error'] = "Invalid email or password."; // Set error message in session
        header("Location: official_login.php"); // Redirect back to the login page
        exit();
    }
}
?>
