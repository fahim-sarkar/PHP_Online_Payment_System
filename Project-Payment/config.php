<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'auth-db180.hostinger.com');
define('DB_USERNAME', 'u943645959_Fahim');
define('DB_PASSWORD', '445566');
define('DB_NAME', 'u943645959_Fahim');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>