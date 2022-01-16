<?php

session_start();
// UPDATE DATABASE WITH USERS ONLINE STATUS
require_once "config.php";

$sql = 'UPDATE users SET status = ? WHERE username = ?';

if ($stmt = mysqli_prepare($link, $sql)) {
    mysqli_stmt_bind_param($stmt, 'ss', $param1_status, $param1_id);
    $param1_status = "offline";
    $param1_id = $_SESSION['username'];
    if (mysqli_stmt_execute($stmt)) {
        $_SESSION = [];
        session_destroy();
        header('Location: /');
        exit;
    }
}

mysqli_stmt_close($stmt);

?>
