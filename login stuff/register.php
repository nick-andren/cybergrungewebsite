<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(strip_tags($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = strip_tags($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = strip_tags($_POST["username"]);
                    $bgcolor = strip_tags($_POST["bgcolor"]);
                    $textcolor = strip_tags($_POST["textcolor"]);
                    $status = strip_tags($_POST["status"]);
                    $email = strip_tags($_POST["email"]);
                } echo "your name is" . $username . " with email address " . $email . "please go to the login page you're account now exists";
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(strip_tags($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(strip_tags($_POST["password"])) < 1){
        $password_err = "Password must have atleast 1 characters.";
    } else{
        $password = strip_tags($_POST["password"]);
                    $bgcolor = strip_tags($_POST["bgcolor"]);
                    $textcolor = strip_tags($_POST["textcolor"]);
    }
    
    // Validate confirm password
    if(empty(strip_tags($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = strip_tags($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, bgcolor, textcolor, status, email) VALUES (?, ?,?, ?,?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssss", $param_username, $param_password, $param_bgcolor, $param_textcolor, $param_status, $param_email);
            
$bgcolor = str_replace(".", "-", $bgcolor);$bgcolor = str_replace("`", "-", $bgcolor);$bgcolor = str_replace("'", "-", $bgcolor);
$bgcolor = str_replace('"', "-", $bgcolor);$bgcolor = str_replace("*", "-", $bgcolor);$bgcolor = str_replace("+", "-", $bgcolor);
$bgcolor = str_replace("'", "-", $bgcolor);$bgcolor = str_replace("/", "-", $bgcolor);

$textcolor = str_replace(".", "-", $textcolor);$textcolor = str_replace("`", "-", $textcolor);$textcolor = str_replace("'", "-", $textcolor);
$textcolor = str_replace('"', "-", $textcolor);$textcolor = str_replace("*", "-", $textcolor);$textcolor = str_replace("+", "-", $textcolor);
$textcolor = str_replace("'", "-", $textcolor);$textcolor = str_replace("/", "-", $textcolor);
    // Set parameters
			
			
$status = str_replace(".", "-", $status);$status = str_replace("`", "-", $status);$status = str_replace("'", "-", $status);
$status = str_replace('"', "-", $status);$status = str_replace("*", "-", $status);$status = str_replace("+", "-", $status);
$status = str_replace("'", "-", $status);$status = str_replace("/", "-", $status);

$email = str_replace(".", "-", $email);$email = str_replace("`", "-", $email);$email = str_replace("'", "-", $email);
$email = str_replace('"', "-", $email);$email = str_replace("*", "-", $email);$email = str_replace("+", "-", $email);
$email = str_replace("'", "-", $email);$email = str_replace("/", "-", $email);

            $param_username = htmlentities($username);
            $param_bgcolor = $bgcolor;
            $param_textcolor = $textcolor;
            $param_status = $status;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrongwith the sql bullshit. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 

 
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://fonts.googleapis.com/css?family=PT+Mono&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>
    <div class="wrapper" style="width:400px">

<script> 
hexes = ["0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F"]; 

setInterval(function pickcolor(){ 
chosered1 = hexes[document.getElementById("1redin").value%hexes.length];
chosegreen1 = hexes[document.getElementById("1greenin").value%hexes.length]; 
choseblue1 = hexes[document.getElementById("1bluein").value%hexes.length]; 
    bgcolor = "#" + chosered1 + chosegreen1 + choseblue1; 

chosered2 = hexes[document.getElementById("2redin").value%hexes.length];
chosegreen2 = hexes[document.getElementById("2greenin").value%hexes.length]; 
choseblue2 = hexes[document.getElementById("2bluein").value%hexes.length]; 
    textcolor = "#" + chosered2 + chosegreen2 + choseblue2;

    document.getElementById("color").value = bgcolor; 
    document.getElementById("color2").value = textcolor; 

    document.getElementById("color3").style.color = textcolor; 
    document.getElementById("color3").style.backgroundColor = bgcolor; 
    document.getElementById("color4").style.color = textcolor; 
    document.getElementById("color4").style.backgroundColor = bgcolor;
    document.getElementById("color5").style.color = textcolor; 
    document.getElementById("color5").style.backgroundColor = bgcolor;
    document.getElementById("color6").style.color = textcolor; 
    document.getElementById("color6").style.backgroundColor = bgcolor;

},100) 
</script>

<style> .slide {width: 100%;} .slider {-webkit-appearance: none; width: 100%; height: 25px; background: #d3d3d3; outline: none; opacity: 0.7; -webkit-transition: .2s; transition: opacity .2s; } .slider:hover {opacity: 1;} .slider::-webkit-slider-thumb { -webkit-appearance: none; appearance: none; width: 25px; height: 25px; background: #4CAF50; cursor: pointer;} .slider::-moz-range-thumb {width: 25px; height: 25px; background: #4CAF50; cursor: pointer;}

        body{ font: 14px sans-serif; background-color:black; font-family: 'PT+Mono', monospace;color:white;}


</style></head> 

<div style="position:absolute;background-color:#666;top:100px;left:600px;padding:5px;border:5px ridge">
Background Color<br>
<div class="slide">R<input id="1redin" type="range" min="0" max="15" value="7"></div>
<div class="slide">G<input id="1greenin" type="range" min="0" max="15" value="0"></div>
<div class="slide">B<input id="1bluein" type="range" min="0" max="15" value="0"></div>
Text Color<br>
<div class="slide">R<input id="2redin" type="range" min="0" max="15" value="0"></div>
<div class="slide">G<input id="2greenin" type="range" min="0" max="15" value="14"></div>
<div class="slide">B<input id="2bluein" type="range" min="0" max="15" value="14"></div>

</div>


        <h2>Sign Up</h2>
		please excercise basic security precautions.<br>cybergrunge.net recommends usinga simple password like 123 etc rather than passwords you use elsewhere, because greifing is tolerated and the worst someone can do is upload music in your name which doesnt matter.<br>
 If you want to customize the colors of your username and are accessing this from the dialog on homepage, expand this resizeable box to use the color picker to the right.
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
             <input type="text" name="username" id="color3" class="form-control" value="<?php echo $username; ?>"><br>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" id="color4" class="form-control" value="<?php echo $password; ?>">



            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input  id="color6" type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span><br>
<label>email address</label>             <input type="text" name="email" id="color5" class="form-control" value="<?php echo $email; ?>"><br>

            </div>
                <input type="text" name="bgcolor" id="color" style="visibility:hidden;" class="form-control" value="">
                <input type="text" name="textcolor" id="color2" style="visibility:hidden;" class="form-control" value="">
                <input type="text" name="status" id="status" style="visibility:hidden;" class="form-control" value="new user">


                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            </div>
            <div class="form-group">
                <input type="submit"  style="background-color:#444;color:white"  value="Submit">
                <input type="reset"  style="background-color:#444;color:white"  value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
        </form>
    </div>    






</body>
</html>
