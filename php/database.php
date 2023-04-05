<?php

// Get host name
$hostName = "localhost";

// Get the user
$dbUser = "root";

// Get the password 
$dbPassword = "";

// Get the name of the database
$dbName = "fitPal";

// Create a connection to link the database to the application.
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

// Display the below message if there are any connection errors.
if (!$conn) {
    die("Something went wrong;");
}
?>