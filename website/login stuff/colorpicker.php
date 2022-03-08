<?php
session_start();
// Include config file






require_once "config.php";



$time = $_SERVER['REQUEST_TIME'];

$timeout_duration = 60;

if (isset($_SESSION['LAST_ACTIVITY']) && 
   ($time - $_SESSION['LAST_ACTIVITY']) > $timeout_duration) {
   	   $status = "expired";
	   $_SESSION['status'] = "expired";
	   
        $sql = "UPDATE status FROM users WHERE username = ?";
        if($stmt = mysqli_prepare($link, $sql)){mysqli_stmt_bind_param($stmt, "s", $param_status);
            $param_status = $status;
                     $status = strip_tags($_SESSION["status"]);
            if(mysqli_stmt_execute($stmt)){ mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    mysqli_stmt_bind_result($status);
                } 
            } else{echo "Oops! Something went wrong. Please try again later.";}
            mysqli_stmt_close($stmt);
        }

	   
    session_unset();
    session_destroy();
    session_start();
}
$_SESSION['LAST_ACTIVITY'] = $time;



if($_SERVER["REQUEST_METHOD"] == "POST"){

$p_bgcolor = $_POST["bgcolor"];
$p_textcolor = $_POST["textcolor"];
$p_username = $_SESSION["username"];
$sql = "UPDATE users SET bgcolor=?, textcolor=? WHERE username=?";
$stmt = $link->prepare($sql);
$stmt->bind_param("sss", $p_bgcolor, $p_textcolor, $p_username);
$stmt->execute();
}
?>
  
<!DOCTYPE html><html lang="en"><head><link href="https://fonts.googleapis.com/css?family=PT+Mono&display=swap" rel="stylesheet"><meta charset="UTF-8"><title>update profile</title>

<script> hexes = ["0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F"]; 
setInterval(function pickcolor(){ 
chosered1 = hexes[document.getElementById("1redin").value%hexes.length]; chosegreen1 = hexes[document.getElementById("1greenin").value%hexes.length]; choseblue1 = hexes[document.getElementById("1bluein").value%hexes.length]; 
    bgcolor = "#" + chosered1 + chosegreen1 + choseblue1; 
chosered2 = hexes[document.getElementById("2redin").value%hexes.length]; chosegreen2 = hexes[document.getElementById("2greenin").value%hexes.length]; choseblue2 = hexes[document.getElementById("2bluein").value%hexes.length]; 
    textcolor = "#" + chosered2 + chosegreen2 + choseblue2;
document.getElementById("color").value = bgcolor; 
document.getElementById("color2").value = textcolor; 

document.getElementById("color3").style.color = textcolor; 
document.getElementById("color3").style.backgroundColor = bgcolor; 
document.getElementById("color4").style.color = textcolor; 
document.getElementById("color4").style.backgroundColor = bgcolor;
document.getElementById("color5").style.color = textcolor; 
document.getElementById("color5").style.backgroundColor = bgcolor;
},100) </script>

<style> .slide {width: 100%;} .slider {-webkit-appearance: none; width: 100%; height: 25px; background: #d3d3d3; outline: none; opacity: 0.7; -webkit-transition: .2s; transition: opacity .2s; } .slider:hover {opacity: 1;} .slider::-webkit-slider-thumb { -webkit-appearance: none; appearance: none; width: 25px; height: 25px; background: #4CAF50; cursor: pointer;} .slider::-moz-range-thumb {width: 25px; height: 25px; background: #4CAF50; cursor: pointer;}
a {color:"#F0F"} body{background-color:black; font-family: 'PT+Mono', monospace;color:white;}
</style></head> 
<body>

<div class="wrapper">
<div style="position:absolute;background-color:#666;left:400px;padding:5px;border:5px ridge">
Background Color<br>
<div class="slide">R<input id="1redin" type="range" min="0" max="15" value="7"></div>
<div class="slide">G<input id="1greenin" type="range" min="0" max="15" value="0"></div>
<div class="slide">B<input id="1bluein" type="range" min="0" max="15" value="0"></div>
Text Color<br>
<div class="slide">R<input id="2redin" type="range" min="0" max="15" value="0"></div>
<div class="slide">G<input id="2greenin" type="range" min="0" max="15" value="14"></div>
<div class="slide">B<input id="2bluein" type="range" min="0" max="15" value="14"></div>
</div>

<span id="color3" >old colors:<font size=4 style="color:<?php echo $_SESSION["textcolor"]; ?>;background-color:<?php echo $_SESSION["bgcolor"]; 
?>;"> 
	
	
<?php 
	echo $_SESSION["username"]; 
$_SESSION["bgcolor"] = $_POST["bgcolor"];
$_SESSION["textcolor"] = $_POST["textcolor"];
?> 
<br><br></font>new colors<br>
	<br> <br></span>YOU MUST
go back to the user menu to see the change.
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"><br>
        <input type="text" name="username" style="visibility:hidden;" class="form-control" value="<?php echo $_SESSION["username"]; ?>">
        <input type="text" name="bgcolor" id="color" style="visibility:hidden;" class="form-control" value="">
        <input type="text" name="textcolor" id="color2" style="visibility:hidden;" class="form-control" value="">
            <div class="form-group">
                <input type="submit"  style="background-color:#444;color:white"  value="Submit">
                <input type="reset"  style="background-color:#444;color:white"  value="Reset">
            </div>
            <p><a style="color:#F0F;" href="welcome.php">Back to user menu</a>.</p>
    </form>
</div>
</body></html>
