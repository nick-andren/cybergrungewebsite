<?php
session_start();
// Initialize the session

// 30min in seconds
$inactive = 1800; 
ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours


if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > $inactive)) {
	

        $sql = "SELECT id, username, password, bgcolor, textcolor, status FROM users WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql)){mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $_SESSION["username"];
                     $status = "expired";
// Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){ mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $bgcolor, $textcolor, $status);
                    if(mysqli_stmt_fetch($stmt)){
                            $_SESSION["status"] = "expired"; 
                            $_SESSION["bgcolor"] = $bgcolor;  
                            $_SESSION["textcolor"] = $textcolor;  
                    }
                } else{$username_err = "No account found with that username.";}
            } else{echo "Oops! Something went wrong. Please try again later.";}
            mysqli_stmt_close($stmt);
        }

    mysqli_close($link);

	
    // last request was more than 2 hours ago
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data
	
	
}
$_SESSION['LAST_ACTIVITY'] = time(); // Update session

$time = $_SERVER['REQUEST_TIME'];

	$userinfo = "<a style='background-color:" . $_SESSION["bgcolor"] . ";color:" . $_SESSION["textcolor"] . "'>
<font size=2>&nbsp;" . $_SESSION["username"] . "&nbsp;</font> </a>";
 
?>

<!doctype htmL>
<html>
<style>
@font-face {  font-family: alias;
  src: url("https://cybergrunge.net/alias.woff");
}
.aliasClass {  font-family: alias; color:#0F0; background-color:black;
}
</style>


<body style="background-color:black;">

<script>
window.onbeforeunload = function(){
xmlhttp.open("POST", "/login stuff/offline.php", true);
xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
xmlhttp.send("username=<? echo $_SESSION['username']; ?>");}
</script>


<div style="position:absolute;background-color:#DDD;right:5%;padding:5px;border:5px ridge;width:300px;">
<b><font size=2>webmaster contact: ellie at cybergrunge dot net

</div>
<div style="position:absolute;left:100px;top:50px;background-color:#444;padding:25px;border-radius:10%;border:1px solid #0FF">
<font size=5><span  class="aliasClass">Logged in as: </span><?php echo $userinfo ?><br><br>
<b><span  class="aliasClass">
<a  class="aliasClass"href="https://cybergrunge.net/index">home<br></a>
<a class="aliasClass" href="https://cybergrunge.net/Artists/custom%20upload.php">Upload Music<br>
<a class="aliasClass" href="https://cybergrunge.net/Artists/list2.php">Browse Music<br>
<a  class="aliasClass"href="https://cybergrunge.net/chat">Chatroom<br></a>
	<br><span class="aliasClass"><b><font color=#0FF>Account tools:</b><br>
<a  class="aliasClass" href="https://cybergrunge.net/login stuff/password_reset.php"><font color=#0FF>Reset password<br>
<a class="aliasClass" href="https://cybergrunge.net/login stuff/colorpicker.php"><font color=#0FF>Change user Colors<br>

<a  class="aliasClass" href="https://cybergrunge.net/login stuff/logout"><font color=#0FF>log out<br></a></font>
</span></span></font>
<?php 
?>
