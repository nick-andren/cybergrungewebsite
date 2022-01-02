<?php
session_start();
function loginForm(){header("http://cybergrunge.net/login stuff/login.php");}


echo $_SESSION['username'];
?>

<?php session_start();
$MyUsername = "<a style='background-color:" . $_SESSION["bgcolor"] . ";color:" . $_SESSION["textcolor"] . "'>
<font size=2>&nbsp;" . $_SESSION["username"] . "&nbsp;</font> </a>";

if(isset($_SESSION['username'])){ echo '
<style> @font-face {  font-family: alias; src: url("http://cybergrunge.net/alias.woff");} .aliasClass {  font-family: alias; color:#0F0; background-color:black;}</style>

<div style="z-index:99999999;position:fixed;left:0px;top:0px;background-color:#444;padding:2px;border-radius:10%;border:1px solid #0FF;line-height:1.7">
<font size=2><span  class="aliasClass" ">Logged in as: </span> <br>'.$MyUsername.'<br>
<a class="aliasClass" href="http://cybergrunge.net/login stuff/welcome">user tasks<br></a>
<a class="aliasClass" href="http://cybergrunge.net/login stuff/logout">log out<br></a> </span></span></font></div>';}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml">

<head><link href="https://fonts.googleapis.com/css?family=PT+Mono&display=swap" rel="stylesheet"> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
<style> body {font: 9px PT+Mono; color: #FFF; background:black;}
input {font: 9px PT+Mono;} #wrapper{background: #0FF; width: 384px; border: 20px ridge #F0F;padding:20px;} 
#chatbox {text-align: left; padding: 10px; background: #000; height: 270px; width: 360px; border: 5px solid #ACD8F0; 
overflow-y: scroll; overflow-x: hidden;} #usermsg { width: 295px; border: 1px solid #ACD8F0;} #submit {width: 35px;} 
.error {color: #ff0000;} #menu {}.msgln {margin: 0 0 2px 0;}</style><title>CYBERGRUNGE . NET CHAT</title></head>


<body style="line-height: 1.3;font-family:'PT+Mono', monospace;font-size:12px;">

<?php
// IF THE SESSION DOES NOT EXIST MAKE GUEST LOG IN
    if (!isset($_SESSION['username'])) {loginForm(); $hidethings = '<a href="http://cybergrunge.net/login stuff/login.php">Please Log In</a>';
    $onlineusershtml = fopen("onlineusers.html", "w");
    $chattingAs = " ";
}
// IF THE SESSION EXISTS SHOW THE CHAT BOX AND OTHER STUFF
    else {
    $chattingAs = "<span style='background-color:".$_SESSION['bgcolor'] ."; color:".$_SESSION['textcolor']."'>
    <b>Chatting as... ".$_SESSION['username']."</b></span>";
    $online = $_SESSION['username']; 
    $hidethings = "<input maxlength= 420 name='usermsg' type='text' id='usermsg' size='63' />
<input name='submitmsg' maxlength= 2 type='submit' id='submitmsg' value='Send' /> 
<input style='background-color:green;color:yellow;' name='swagcheck' type='submit' id='swagcheck' value='Swag Check' /><br>";








// UPDATE THE DEBUGGER TO CHECK SESSION VARIABLES
    $onlineusershtml = fopen("onlineusers.html", "w"); 
$onlinedata =  '<span style="background-color:white;">loggedin: ' . $_SESSION["loggedin"] . "<br>id: " . $_SESSION["id"] . "<br>bgcolor: " . $_SESSION["bgcolor"] . "<br>textcolor: " . $_SESSION["textcolor"] . "<br>username: " . $_SESSION["username"] . "<br>status: " . $_SESSION["status"] . "<br>";
    fwrite($onlineusershtml, $onlinedata);
    fclose($onlineusershtml);
    }
?>

<div id="wrapper">
<?php echo $chattingAs ?>

<div id="chatbox">
    <?php 
    // DUMP CHAT LOG CONTENTS TO CHATBOX DIV
    $handle = fopen ( "log.html", "r" ); $contents = fread ( $handle, filesize ( "log.html" ) ); fclose ( $handle ); echo $contents;
    ?>
</div>


<form name="message" action="">
    <?php echo $hidethings . "<br>";
	
	
	
define('DB_SERVER', '1');
define('DB_USERNAME', '1');
define('DB_PASSWORD', '1');
define('DB_NAME', '1');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$word = date('Y-m-d'); 

$sql = "SELECT id, username, bgcolor, textcolor, LAST_ACTIVITY FROM users WHERE status='online'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row that is from a certain time
    while($row = mysqli_fetch_assoc($result)) {

		if(strpos($row["LAST_ACTIVITY"], $word) !== false){
        echo "<font color=white> <font style='background-color:".$row["bgcolor"].";color:". $row["textcolor"].";'>" . 
		$row["username"]. " was online at " . $row["LAST_ACTIVITY"]. "</font><br>";
		}
	}
} else {echo "nobody was online today! =( ";}
mysqli_close($conn);

?>
</form>
</div>



<div id="statusbox" style="position:absolute;top:0px;left:520px;display:inline-block;float:left;font-size:7px"><i>
    <?php 
    $handle = fopen ( "log2.html", "r" ); $contents = fread ( $handle, filesize ( "log2.html" ) ); fclose ( $handle ); echo $contents;
	?></i>
</div>









<?php // UPDATE DATABASE WITH USERS ONLINE STATUS
require_once "config.php";

if (isset($_SESSION['loggedin'])) {
    $sql = "UPDATE users SET status=? WHERE id=?";
    if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "si", $param1_status, $param1_id);
            $param1_status = $_SESSION['status'];
            $param1_id = $_SESSION['id'];
                if(mysqli_stmt_execute($stmt)){ echo "ok u are online";}
            mysqli_stmt_close($stmt);
    }
}
?>












<?php // 0 0 0 00 0 0 0 0 0 0 0 0 00 0 0 0 0 0 0 0 0 00 0 0 0 0 0 0 0 00 0 0 0 0 0 0 0 00 0 0 0 0 0  ?>

<?php // 0 0 0 00 0 0 0 0 0 0 0 0 00 0 0 0 0 0 0 0 0 00 0 0 0 0 0 0 0 00 0 0 0 0 0 0 0 00 0 0 0 0 0  ?>



<script type="text/javascript">
// jQuery Document
$("#chatbox").ready(function(){
        
	var clientmsg = "<? 
		if (isset($_SESSION['username'])){
			echo $_SESSION['username']." checked in!" ;}
		else{
			echo "0";} 
		?>";
        $.post("status.php", {text: clientmsg}); 
        $("#usermsg").attr("value", ""); return false;
});
	
	
//If user submits the form
$("#submitmsg").click(function(){
        var clientmsg = $("#usermsg").val();
        var username = $("#userid").val() + ":";
        var usercolor = $("#usercolor").val();
        var user1color = $("#user1color").val();
        $.post("post.php", {text: clientmsg, name:username, color:usercolor, color1:user1color});             
        $("#usermsg").attr("value", ""); loadLog; return false;
});
 
//If user submits the swag
$("#swagcheck").click(function(){
        var clientmsg = "swag";
        $.post("post.php", {text: clientmsg}); loadLog; return false;
});
 
 
function loadLog(){    
    var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
    $.ajax({
        url: "log.html",
        cache: false,
        success: function(html){       
            $("#chatbox").html(html); //Insert chat log into the #chatbox div  
            //Auto-scroll          
            var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
            if(newscrollHeight > oldscrollHeight){
                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
            }              
        },
    });
    $.ajax({
        url: "log2.html",
        cache: false,
        success: function(html){       
            $("#statusbox").html(html); //Insert chat log into the #chatbox div 
		}});
}
 
setInterval (loadLog, 1500);




</script>
<script type="text/javascript">
// jQuery Document
$(document).ready(function(){
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("confirm log out");
		if(exit==true){
        var clientmsg = "has logged out";
        var username = $("#userid").val();
        $.post("post.php", {text: clientmsg, name:username});             
        $("#usermsg").attr("value", ""); loadLog;
window.location = 'http://cybergrunge.net/login stuff/logout.php';

}		
	});
});
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js">
</script>

<input style="visibility:hidden" value="<?php echo $_SESSION['username']; ?>" maxlength= 69 name="userid" type="text" id="userid" size="0" />
<input style="visibility:hidden" value="<?php echo $_SESSION['bgcolor']; ?>" name="usercolor" type="text" id="usercolor" size="0" />
<input style="visibility:hidden" value="<?php echo $_SESSION['textcolor']; ?>" name="user1color" type="text" id="user1color" size="0"  />
</div></div></div></div></div></div>
<a href="http://cybergrunge.net/uploader/new56/customU/custom%20upload.php">upload music</a>
</body>
</html>
