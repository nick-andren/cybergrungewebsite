<?php
session_start();
require_once 'config.php';

$username = $_POST['username'];
$sql = 'UPDATE users SET status="offline" WHERE username = ?';

if ($stmt = mysqli_prepare($link, $sql)) {
    mysqli_stmt_bind_param($stmt, 's', $param_username);
    $param_username = $username;

    if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
            session_destroy();
        }
    }
}

mysqli_stmt_close($stmt);
mysqli_close($link);

?>