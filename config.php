<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'us-cdbr-iron-east-05.cleardb.net');
define('DB_USERNAME', 'ba74aeca09eb74');
define('DB_PASSWORD', '4a7d358d');
define('DB_NAME', 'heroku_02f5a26935ce1bd');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
