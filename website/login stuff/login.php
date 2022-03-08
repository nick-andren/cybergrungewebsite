<?php
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
require_once "config.php";



$username = $password = ""; 
$username_err = $password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty(strip_tags($_POST["username"]))){$username_err = "Please enter username.";} else{$username = strip_tags($_POST["username"]);    }
    if(empty(strip_tags($_POST["password"]))){$password_err = "Please enter your password.";}else{$password = strip_tags($_POST["password"]);}
        if(empty($username_err) && empty($password_err)){
        $sql = "SELECT id, username, password, bgcolor, textcolor, status, LAST_ACTIVITY FROM users WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql)){mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;
                     $status = strip_tags($_POST["status"]);
            if(mysqli_stmt_execute($stmt)){ mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $bgcolor, $textcolor, $status, $LAST_ACTIVITY);
                    if(mysqli_stmt_fetch($stmt)){



                        if(password_verify($password, $hashed_password)){
                            session_start();



                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["bgcolor"] = $bgcolor;
                            $_SESSION["textcolor"] = $textcolor;
                            $_SESSION["username"] = $username;     
                            $_SESSION["status"] = "online";        
                            $_SESSION["LAST_ACTIVITY"] = $_SERVER['REQUEST_TIME'];                           
                            header("location:welcome.php");
                        } else{$password_err = "The password you entered was not valid.";}

                    }
                } else{$username_err = "No account found with that username.";}
            } else{echo "Oops! Something went wrong. Please try again later.";}
            mysqli_stmt_close($stmt);
        }
    }
    mysqli_close($link);
}

//$sql = "UPDATE `users` SET `status` = \'online\' WHERE `users`.`id` = $id";



?>
 <style> .slide {width: 100%;} .slider {-webkit-appearance: none; width: 100%; height: 25px; background: #d3d3d3; outline: none; opacity: 0.7; -webkit-transition: .2s; transition: opacity .2s; } .slider:hover {opacity: 1;} .slider::-webkit-slider-thumb { -webkit-appearance: none; appearance: none; width: 25px; height: 25px; background: #4CAF50; cursor: pointer;} .slider::-moz-range-thumb {width: 25px; height: 25px; background: #4CAF50; cursor: pointer;}
        body{ font: 14px sans-serif; background-color:black; font-family: 'PT+Mono', monospace;color:white;}


</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
<link href="https://fonts.googleapis.com/css?family=PT+Mono&display=swap" rel="stylesheet">

   
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
                <input type="text" name="status" class="form-control" value="online" style="visibility:hidden">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a style="color:#F0F;" href="register.php">Sign up now</a>.</p>
        </form>
    </div>    
	It is currently <? echo date('m/d h:ia', time()); ?>
</body>
</html>
