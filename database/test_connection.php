<?php
require 'db_connect.php'; // Include the database connection file

// Test the connection
if ($db) {
    echo "Connected to the MySQL database successfully!";
} else {
    echo "Failed to connect to the MySQL database.";
}
?>
