<?php
define('DB_SERVER', 'ur moms fat balls');
define('DB_USERNAME', 'poop');
define('DB_PASSWORD', 'fart');
define('DB_NAME', 'peepee');
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if($link === false){  die("ERROR: Could not connect. " . mysqli_connect_error()); }
?>
