<?php
session_start();
// UPDATE DATABASE WITH USERS ONLINE STATUS
require_once "config.php";
    $sql = "UPDATE users SET status=? WHERE id=?";
    if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "si", $param1_status, $param1_id);
            $param1_status = "offline";
            $param1_id = $_SESSION['id'];
                if(mysqli_stmt_execute($stmt)){
header("location:/");
$_SESSION = array(); 
header("location:/");
session_destroy(); 
header("location:/");
exit;
header("location:/");
}}
header("location:/");
mysqli_stmt_close($stmt); 
header("location:/");
?>
