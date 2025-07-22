<?php
// Database configuration
define('DB_HOST', 'localhost');  // Host for the database server
define('DB_USER', 'root');       // Database username
define('DB_PASS', '');           // Database password (use a secure password in production)
define('DB_NAME', 'hmsunej_db'); // Database name

// Site configuration
define('SITE_URL', 'http://localhost/hmsteknikunej-website');  // Your site URL
define('SITE_NAME', 'HMS UNEJ');                               // Site Name

// Error reporting for development (disable in production)
if (getenv('ENVIRONMENT') === 'development') {
    error_reporting(E_ALL); // Show all errors during development
    ini_set('display_errors', 1);
} else {
    error_reporting(0); // Disable error display in production
    ini_set('display_errors', 0); // You can log errors to a file in production instead
    // Optionally log errors to a file:
    // ini_set('log_errors', 1);
    // ini_set('error_log', '/path/to/error.log');
}
?>
