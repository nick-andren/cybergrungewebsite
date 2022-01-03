<?php

define('DB_SERVER', '1234');
define('DB_USERNAME', '1234');
define('DB_PASSWORD', '1234');
define('DB_NAME', '1234');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
