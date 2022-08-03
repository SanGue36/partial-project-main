<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//define('SITEURL', 'http://localhost/sangue/test-main/dist');
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'username');
define('DB_PASSWORD', 'pass1234');
define('DB_NAME', 'sangue365');
 
/* Attempt to connect to MySQL database */
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . $conn->connect_error);
}

?>