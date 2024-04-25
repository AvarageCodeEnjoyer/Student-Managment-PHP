<?php
//server with default setting (user 'root' with no password)
define('host', 'localhost:3310');
define('username', 'root');
define('password', '');
define('database', 'studentManager');

// establishing connection
$conn = mysqli_connect(host, username, password, database);
// for displaying an error msg in case the connection is not established
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE students(
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL
)";

// Attempt to create table
/* if(mysqli_query($conn, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
} */

// Close connection
// mysqli_close($conn);