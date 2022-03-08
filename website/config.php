<?php

define('DB_SERVER', 'cybergrunge_database');
define('DB_USERNAME', getenv('MYSQL_USER'));
define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));
define('DB_NAME', getenv('MYSQL_DATABASE'));

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
