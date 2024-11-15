<?php
// Start the session
session_start();

// Define constants for better configuration management
define('DB_SERVER', 'localhost');  // Database server (usually 'localhost' for local development)
define('DB_USERNAME', 'root');     // Database username (replace with your username)
define('DB_PASSWORD', '');         // Database password (replace with your password)
define('DB_DATABASE', 'digital_gallery'); // Database name (replace with your DB name)

// Set the timezone to your local timezone (important for session expiry)
date_default_timezone_set('America/New_York');

// Establishing a connection to the database
function getDBConnection() {
    try {
        // Create a new PDO instance
        $conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
        
        // Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $conn;
    } catch (PDOException $e) {
        // Catch any errors and display them
        echo "Connection failed: " . $e->getMessage();
        exit(); // Stop the script if DB connection fails
    }
}

// Function to check if the user is logged in (this will be used for session management)
function isLoggedIn() {
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}

// Function to log the user out
function logoutUser() {
    session_unset(); // Remove all session variables
    session_destroy(); // Destroy the session
    header("Location: login.html"); // Redirect to the login page
    exit();
}

// Error reporting settings
ini_set('display_errors', 1);  // Display errors (turn off in production)
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); // Show all errors (can be turned off in production)

?>
