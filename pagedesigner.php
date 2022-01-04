<?php 
session_start();

	$file = fopen("userdata.txt", "r"); $getgot = fgets($file);
	list($width, $color1, $color2, $color3, $color4, $borderstyle1) = sscanf(strval($getgot), "%s %s %s %s %s %s");
		if(true!=isset($_SESSION['username'])) { echo "you can not edit this page because you are not logged in.
		please <a href='http://cybergrunge.net/login%20stuff/login.php'>Log in</a> to edit the page.";};

if($_SERVER["REQUEST_METHOD"] == "POST"){
     $width = $_POST['width'];
     $color1 = $_POST['color1'];
     $color2 = $_POST['color2'];
     $color3 = $_POST['color3'];
     $color4 = $_POST['color4'];
     $borderstyle1 = $_POST['borderstyle1'];
$newdata = $width . " " . $color1 . " " . $color2 . " " . $color3. " " . $color4 . " " . $borderstyle1;  
     $filetochange = fopen("userdata.txt", "w");
     fwrite($filetochange, $newdata); 
}; 



if(isset($_SESSION['username'])) { echo '
<style> .genericinput{width:50px;}</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/><script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script language="javascript">var element_pos = 0;var iCnt = 0; $(document).ready(function() {$(function() {$("#divContainer").draggable(); $(".draggable").draggable().resizable(); }); $(function() { $("#divResize").draggable(); });$("#btClickMe").click(function() {element_pos = element_pos + $("#divContainer").width() + 20;iCnt = iCnt + 1;});});</script>

<div id="divContainer">
<div class="divResize" style="left:500px;position:absolute;height:200px;width:200px;
background-color:#CCC; border:white 3px inset;">
<div style="width:100%;background-color:#00F;color:white;cursor:move;">
Cybergrunge Style Editor</div>
Logged in as: ' . 
$_SESSION["username"] .'<br><br>
<form method="post" action="'. htmlspecialchars($_SERVER["PHP_SELF"]).'"> 
<b>
	Borders width 
	<input class="genericinput" id="width" type="text" name="width" value="'.$width.'"> </input><br>
	Background 1
	<input class="genericinput" id="color1"type="text" name="color1"value="'. $color1 .'"> </input><br>
	Borders Color 
	<input class="genericinput" id="color2"type="text" name="color2"value="'. $color2 .'"> </input><br>
	Text Color 1 
	<input class="genericinput" id="color3"type="text" name="color3"value="'. $color3 .'"> </input><br>
	Background Color
	<input class="genericinput" id="color4"type="text" name="color4"value="'. $color4 .'"> </input><br>
Border 1 style
<select id="borderstyle1" name="borderstyle1" value="'.$borderstyle1.'">
  <option value="'.$borderstyle1.'">'.$borderstyle1.'</option>
  <option value="dotted">dotted</option>
  <option value="dashed">dashed</option>
  <option value="solid">solid</option>
  <option value="double">double</option>
  <option value="groove">groove</option>
  <option value="ridge">ridge</option>
  <option value="inset">inset</option>
  <option value="outset">outset</option>
</select>
<br>
	<input type="submit" name="submit" value="Submit">  
</form></b><br>
</div></div>

';}
?>

<body id="body" style="background-color:<? echo $color4 ?>">

<script language="javascript">
setInterval(function(){
	document.getElementById("color1").style.backgroundColor = document.getElementById("color1").value;
	document.getElementById("color1").style.color = document.getElementById("color3").value;
	document.getElementById("color2").style.backgroundColor = document.getElementById("color2").value;
	document.getElementById("color3").style.backgroundColor = document.getElementById("color3").value;
	document.getElementById("color4").style.backgroundColor = document.getElementById("color4").value;
	document.getElementById("body").style.backgroundColor = 	document.getElementById("color4").value;

var x = document.getElementsByClassName("test");
var i;
for (i = 0; i < 500; i++) {
	x[i].style.borderWidth = 	document.getElementById("width").value;
	x[i].style.backgroundColor = document.getElementById("color1").value;
	x[i].style.borderColor = 	document.getElementById("color2").value;
	x[i].style.color = 	document.getElementById("color3").value;
	x[i].style.borderStyle = document.getElementById("borderstyle1").value;
	}; }
,500)
</script>




<div class="test" style="height:100px; width:400px;">
test test test test test test
</div>

<div class="test" style="height:100px; width:400px;">
test test test test test test
</div>

<div class="test" style="height:100px; width:400px;">
test test test test test test
</div>







