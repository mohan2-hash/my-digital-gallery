<?php
// Start the session to access session variables
session_start();

// Destroy all session data
session_unset(); // Remove all session variables
session_destroy(); // Destroy the session itself

// Redirect to the login page after logout
header("Location: login.html");
exit();
?>
