<?php
define('DB_SERVER', 'a');
define('DB_USERNAME', 'a');
define('DB_PASSWORD', 'a');
define('DB_NAME', 'a');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
