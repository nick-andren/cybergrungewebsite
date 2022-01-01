<?php
session_start(); include "config2.php"; 
?> 
<html>
	<script src="mobilecheck.js"></script>
    <?php session_start(); //user panel
	$MyUsername = "<a style='background-color:" . $_SESSION["bgcolor"] . ";color:" . $_SESSION["textcolor"] . "'><font size=2>&nbsp;" . $_SESSION["username"] . "&nbsp;</font> </a>"; if(isset($_SESSION['username'])){ echo '<style> @font-face {  font-family: alias; src: url("https://cybergrunge.net/alias.woff");} .aliasClass {  font-family: alias; color:#0f0; background-color:black;}</style><div style="z-index:99999999;position:fixed;right:5px;bottom:5px;background-color:#444;padding:7	px;border-radius:10%;border:5px inset;line-height:1.7"><font size=3><span  class="aliasClass" ">Logged in as: </span> '.$MyUsername.'<br> <a class="aliasClass" href="https://cybergrunge.net/login stuff/welcome.php">user tasks</a> - <a class="aliasClass" href="https://cybergrunge.net/login stuff/logout.php">log out<br></a> </span></span></font></div>';} ?>	
<head><title>~Productivity Suite by Cybergrunge.net~</title>

<script src="https://cdn.jsdelivr.net/gh/NovaSagittarii/misc@1.0.2/p5.min.js"></script>


<meta charset="UTF-8"> <meta name="description" content="Cybergrunge.net website by Elucidated Voyyd: Netlabel, Communism, Aesthetic Research, Instrumentality"> <meta name="keywords" content="cybergrunge, cyber grunge, grunge, freedom, transgender, trans, art, music, experimental, aesthetic, noise, circuit-bending, noise music, electronics, outsider art"> <meta name="author" content="elucidated voyyd">
<link href="https://fonts.googleapis.com/css?family=PT+Mono&display=swap" rel="stylesheet">
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<style>	.variousas{border:2px outset #000;font-weight:bold;padding:1px;margin:4px}
		.variousas:hover{border:2px inset #aaa;font-weight:bold;padding:1px;margin:4px}
</style>
<style>		
	.windowname {height:20px;width:100%;background:linear-gradient(to right, #00F, #005);padding:1px;color:#FFF;cursor:move;}		
	.exit{position:absolute;display:inline-block;right:0px}		
	.close{border:2px #BBB outset;background:linear-gradient(to top, gray, white);font-weight:bold;font-size:10;padding:1px;}
	.close:active{border:2px #BBB inset;background:linear-gradient(to top, gray, gray);font-weight:bold;font-size:10;padding:1px;}
	.close:hover{border:2px #BBB outset;background:linear-gradient(to top, #CCC, #CCC);font-weight:bold;font-size:10;padding:1px;}
	.window{position:absolute;background-color:#00F;color:white;width:350px;height:300px;border:2px white outset;overflow:hidden}
	.inside{position:relative;height:100%;background-color:#CCC;color:#111;padding:10px;bottom:0px;right:0px;overflow:scroll-y}
    .divResize { z-index:21;border:outset 5px black;background-color:#aaa;position:absolute;}
 	 @font-face { font-family: Alias; src:url('http://cybergrunge.net/Alias.woff') format('woff');} 
	p1 {font-family: Alias, monospace;} 
	input {border:2px black ridge;}
	iframe{border:none}
    canvas{position:fixed;left:0px;top:0px;width:100%;height:100%;z-index:-5};
</style></head>



<body style="background-color:#ccc;font-family:PT Mono; font-family:monospace;cursor:crosshair;padding:0px">




<div id="main" style="position:absolute;left:0px;width:100%;height:2900px;background-size:100%">
<br><br>
<script>// THIS IS THE SCRIPT FOR BACKGROUND FOR BACKGROUND FOR BACKGROUND FOR BACKGROUND FOR BACKGROUND FOR BACKGROUND FOR BACKGROUND FOR BACKGROUND
number = Math.floor(Math.random()*26);
if(number<23){document.getElementById('main').style.backgroundImage = 'url(https://cybergrunge.net/backgrounds/bg' + number + '.jpg)';}
else{
var $ = function(prop){return document.querySelector(prop);};
var ang = function(a){return a*(Math.PI/180);}; var playerSpeed = 8; var sensitivityX = 0.25;
    var sensitivityY = 0.15; var mx = 0, my = 0; var keys = []; var cam; var yAng = 0; var floorTexture, wallTexture;
document.body.addEventListener("mousemove",function(e){ mx = e.movementX; my = e.movementY; });
    var D = {cx:0,cy:0,cz:0,x:0,y:0,z:200,r:0,r2:0,}; function preload(){
    floorTexture = loadImage("https://cybergrunge.net/tile2.png"); wallTexture = loadImage("https://cybergrunge.net/tile1.png");}
function setup(){ createCanvas(window.innerWidth,window.innerHeight,WEBGL); cam = createCamera(); } 
function draw(){ background(0); noStroke(); cam.pan(ang(-D.cx)); cam.tilt(ang(D.cy)); D.r-=(mx*sensitivityX); yAng-=(my*sensitivityY);
cam.setPosition(D.x,-D.y,D.z); push();
          translate(500,-100,500); texture(wallTexture); box(8100); pop();
for(var k = -5; k < 5; k++){ for(var l = -5; l < 5; l++){push();
        translate(k*500,50,l*500); rotateX(ang(90)); fill(100); texture(floorTexture); plane(500); pop(); }}
D.cx=mx*sensitivityX; //mx is MouseX - my is MouseY
D.cy=my*sensitivityY;
// movement
if(keys[87]){ D.z-=cos(ang(D.r))*playerSpeed;
              D.x-=sin(ang(D.r))*playerSpeed; }
if(keys[83]){ D.z+=cos(ang(D.r))*playerSpeed;
              D.x+=sin(ang(D.r))*playerSpeed; }
if(keys[65]){ D.z-=cos(ang(D.r+90))*playerSpeed;
              D.x-=sin(ang(D.r+90))*playerSpeed; }
if(keys[68]){ D.z+=cos(ang(D.r+90))*playerSpeed;
              D.x+=sin(ang(D.r+90))*playerSpeed; }
if(mx > 0){mx--;} if(mx < 0){mx++;} if(my > 0){my--;} if(my < 0){my++;}
if(yAng < -30){if(my > 0){sensitivityY = 0;}if(my < 0){sensitivityY = 0.15;}} if(yAng > 30){if(my < 0){sensitivityY = 0;}if(my > 0){sensitivityY = 0.15;}}
} function keyPressed(){keys[keyCode] = true;} function keyReleased(){keys[keyCode] = false;} }
</script> 


<meta charset="UTF-8"><head><link href="https://fonts.googleapis.com/css?family=PT+Mono&display=swap" rel="stylesheet"><link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

    <script>$(document).ready(function() { $(".divResize").draggable(); $(".resize").resizable();});
    function show(this1){document.getElementById(this1).style.visibility = "visible"}
    function hide(this1){document.getElementById(this1).style.visibility = "hidden"}</script>
	</head>
	
<style>	a:hover{background-color:#aaa;color:black;border:3px outset black;text-decoration:none;}
		a{background-color:#999;color:black;border:2px inset black;text-decoration:none;}
    @font-face {font-family: cgfont; src: url('https://cybergrunge.net/standardcg.woff');}
	.close{border:2px #BBB outset;background:linear-gradient(to top, gray, #FFF);font-weight:bold;font-size:10;padding:1px;}
	.close:active{border:2px #BBB inset;background:linear-gradient(to top, gray, gray);font-weight:bold;font-size:10;padding:1px;}
	.close:hover{border:2px #BBB outset;background:linear-gradient(to top, #CCC, #CCC);font-weight:bold;font-size:10;padding:1px;}
		
    #divContainer{height:100%;width:100%;left:0x;top:0px}	    
    @font-face {font-family: Alias; src:url('https://cybergrunge.net/Alias.woff') format('woff');} 		
    @font-face {font-family: cg; src:url('https://cybergrunge.net/Alias.woff') format('woff');}		
    p1 {font-family: Alias, monospace;} 		
    .window{visibility:hidden;position:absolute;color:#000;width:350px;height:300px;overflow:hidden}		
    .inside{position:relative;height:100%;background-color:#000;color:#FFF;padding:10px;bottom:0px;right:0px;overflow:scroll-y}		
	.windowname {width:100%;background:linear-gradient(to right, #00F, #005);padding:1px;color:#FFF;cursor:move;}		
	.exit{position:absolute;display:inline-block;right:0px}		
			.btn2{padding:3px;font-size:10px;}
</style>
			
	


		
			

<div class="divResize" id="69420" style="border:groove 5px;
height:125px;
background-color:#aaa;position:absolute;cursor:move;
left:13px;top:140px;width:340px;overflow:hidden;"><div class="windowname" style="padding:3px;cursor:move;">About
<div class="exit"><a onclick="minimize(69420,125)" class="close" >[_]</a><a onclick="hide(123b)" class="close" >[x]</a> </div> </div>
Registered in 2020 by <a href="email:ellie@cybergrunge.net">Elucidated.Voyyd</a>, Cybergrunge.net is a subsidiary of <a style="color:#FFF;background-color:black;" href="https://cgru.net">C.G.R.U.</a>
We provide free hosting for artists of Cybernetic Grunge, Multimedia Art and Resources. <br>
<span style="background-color:#FF0;color:black;"><b>12/26/21 - New Text: 
<a style="background-color:#FF0;color:black" href="cgruText.html">
Cyber Grunge: On The Emergence of A New, Unified Anti-Culture</a></b></span>
</div></div>




<div class="divResize" id="61420" style="border:groove 5px; height:105px; background-color:#aaa;position:absolute;cursor:move;
left:25px;top:25px;width:375px;overflow:hidden;"><div class="windowname" style="padding:0px;cursor:move;"><b>User Control Panel</b>
<div class="exit"><a onclick="minimize(61420,105)" class="close" >[_]</a><a onclick="hide(123b)" class="close" >[x]</a> </div> </div>
<br>;)<? if(!isset($_SESSION['username'])){ echo'<a href="https://cybergrunge.net/login%20stuff/login.php" style="background-color:none;border:none;" ><img  src="https://cybergrunge.net/login.png" width=65px></a>';} ?><a style="background-color:none;border:none;" href="https://cybergrunge.net/Artists/custom upload.php">
<img  src="https://cybergrunge.net/upload.png" width=65px height=65px></a>
	    <a style="border:none;background-color:none;" onclick="show(4)" href="#"><img height=65px src="gen.png"></a> 
	    <a style="border:none;background-color:none;" onclick="show(2)" href="#"><img height=65px src="warez.png"></a> 
	    <a style="border:none;background-color:none;" onclick="show(3)" href="#"><img height=65px src="chat.png"></a> 

</div></div></center>


  

<div class="divResize" id="444" style="visibility:visible;width:250px;height:135px;cursor:move;position:absolute;top:295px;left:30px;overflow:hidden;border:5px groove;background-color:#aaa"><div class="windowname" style="height:20px;width:100%;background:linear-gradient(to right, #00F, #005);padding:1px;color:#FFF;cursor:move;">
<b>Mp3Player</b>
<div class="exit"><a onclick="minimize(444,135)" class="close" >[_]</a><a onclick="hide(123b)" class="close" >[x]</a></div></div>
<iframe src="https://cybergrunge.net/ListAllmp3.php" width="250px" height="150px" style="overflow:hidden;z-index:1111;border:0px;padding:0px;"></iframe></div>
	    
	   










<br><br><br><br><br><br>    
   ░░░░░░░░░░▀▀▀██████▄▄▄░░░░░░░░░░ <br>░░░░░░░░░░░░░░░░░▀▀▀████▄░░░░░░░ <br>░░░░░░░░░░▄███████▀░░░▀███▄░░░░░ <br>░░░░░░░░▄███████▀░░░░░░░▀███▄░░░ <br>░░░░░░▄████████░░░░░░░░░░░███▄░░ <br>░░░░░██████████▄░░░░░░░░░░░███▌░ <br>░░░░░▀█████▀░▀███▄░░░░░░░░░▐███░ <br>░░░░░░░▀█▀░░░░░▀███▄░░░░░░░▐███░ <br>░░░░░░░░░░░░░░░░░▀███▄░░░░░███▌░ <br>░░░░▄██▄░░░░░░░░░░░▀███▄░░▐███░░ <br>░░▄██████▄░░░░░░░░░░░▀███▄███░░░ <br>░█████▀▀████▄▄░░░░░░░░▄█████░░░░ <br>░████▀░░░▀▀█████▄▄▄▄█████████▄░░ <br>░░▀▀░░░░░░░░░▀▀██████▀▀░░░▀▀██░░    <br><br><br><br><br><br><br>    	









<script>function minimize(thing, vagina){ var poop = document.getElementById(thing);
if(poop.style.height !== "20px"){poop.style.height = "20px";}else{poop.style.height = vagina;};
}</script>




<div class="divResize" id="123" style="z-index:0;border:groove 5px;background-color:#aaa;position:absolute;left:435px;top:30px;height:500px;width:710px;border:groove 5px ;overflow-y:hidden;overflow-x:hidden;visibility:visible"><div class="windowname" style="height:20px;width:100%;background:linear-gradient(to right, #00F, #005);padding:1px;color:#FFF;cursor:move;">
<b>Releases</b>
<div class="exit"><a onclick="minimize(123,500)" class="close" >[_]</a><a onclick="hide(123b)" class="close" >[x]</a></div></div>
<div id="123b" style="overflow:scroll;background-color:#aaa;line-height:1.25;width:100%;height:100%;visibility:visible;">
<script>function showrecent(){document.getElementById("recentframe").src = "https://cybergrunge.net/Artists/list2.php"; document.getElementById("recentframe").style.visibility = "visible"; document.getElementById("randomlistgen").style.visibility = "hidden"; document.getElementById("randomlistgen").style.overflow = "hidden"; document.getElementById("randomlistgen").style.height = "0px"; document.getElementById("recentframe").style.height = "100%"; document.getElementById("recentframe").style.width = "100%";}</script>
<span id="randomlistgen"><br><center>


<a class="btn2" style="border:outset 5px gray;background:#aaa" onclick="showrecent()"><b>
<font size=3>[Click here for Most Recent Albums]</a></b></a>









</span>
<iframe id="recentframe" src="" style="overflow:hidden;visibility:hidden;width:0px;height:0px;"></iframe>
<br><br><font style="color:#0F0;background-color:#444" size=4>listing (12) random albums...</font><br>
<?php $dir = "Artists"; $i=0;
// Open a known directory, and proceed to read its contents
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($artistcontents = readdir($dh)) !== false) {
			if($artistcontents!=="."&&$artistcontents!==".."){
				if($albumby = opendir("$dir/$artistcontents")){
					while(($albumcontents = readdir($albumby))!==false){
						if($albumcontents!=="."&&$albumcontents!==".."&&is_dir("$dir/$artistcontents/$albumcontents")){
						$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.jpg');
if($artwork[0]==null){$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.jpeg');}
if($artwork[0]==null){$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.png');}
if($artwork[0]==null){$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.gif');}
if($artwork[0]==null){$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.GIF');}
if($artwork[0]==null){$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.PNG');}
if($artwork[0]==null){$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.bmp');}
if($artwork[0]==null){$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.BMP');}
if($artwork[0]==null){$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.webp');}
if($artwork[0]==null){$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.JPG');}
if($artwork[0]==null){$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.JPEG');}
if($artwork[0]==null){$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.Jpg');}
if($artwork[0]==null){$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.Gif');}
if($artwork[0]==null){$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.Png');}
if($artwork[0]==null){$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.Webp');}
if($artwork[0]==null){$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.Bmp');}
if($artwork[0]==null){$artwork = glob($dir.'/'.$artistcontents.'/'.$albumcontents.'/*.Jpeg');}
$albuminfo[$i] = "<div class='albumss' style='display:inline-block;height:225px;width:150px;overflow:hidden;border:12px outset black;background-color:#bbb'><center><img src='".$artwork[0]."' height=140px width=140px></center><br><a target='blank' href='$dir/$artistcontents/$albumcontents'><i>$albumcontents</i></a><br>by <a target='blank' href='$dir/$artistcontents/artist.php'>" . $artistcontents . "</a></div>";
$i++;			
}}}}}closedir($dh);}}
    shuffle($albuminfo);
echo "<font style='color:#0F0;background-color:#444'>there are currently ".sizeof($albuminfo)." albums hosted by cybergrunge.net!</font><br>	</center>";
echo $albuminfo[0]; echo $albuminfo[1]; echo $albuminfo[2]; echo $albuminfo[3]; echo $albuminfo[4]; echo $albuminfo[5];
echo $albuminfo[6]; echo $albuminfo[7]; echo $albuminfo[8]; echo $albuminfo[9]; echo $albuminfo[10]; echo $albuminfo[11];
?> </span></div></div>





<div id="211" class="divResize"style="overflow:hidden;height:565;border:groove 5px ;background-color:#AAA;visibility:visible;cursor:move;position:absolute;left:700px;top:565px;width:375px;"><div class="windowname" style="height:20px;width:100%;background:linear-gradient(to right, #00F, #005);padding:1px;color:#FFF;cursor:move;">
<b>SEELEofficial</b>
<div class="exit"><a onclick="minimize(211,565)" class="close" >[_]</a><a onclick="hide(123b)" class="close" >[x]</a></div></div>
<div style="overflow:scroll;background-color:#aaa;line-height:0.85"><br>
<a style="background-color:black;z-index:21;padding:3px;color:#FFF;" href="seeleofficial/index.html"><font size="4">&gt;&gt; Click here SEELEofficial archives &lt;&lt;</font></a><br><br> 
<font size="4">
Etsy:<br><br><a style="background-color:black;z-index:21;padding:3px;color:#FFF;" href="https://etsy.com/shop/seeleofficial" target="blank"><img height="400px" src="seele.jpg"></a></font></div></div>
	    


 
	    


</center>


  


    
	    
	    
	    

    <div id="2" class="divResize" style="border:groove 5px;background-color:#aaa;position:absolute;cursor:move;position:absolute;left:500px;top:100px;height:500px;width:350;visibility:hidden">
		<div class="windowname" style="height:20px;width:100%;background:linear-gradient(to right, #00F, #005);padding:1px;color:#FFF;cursor:move;">
<b>Downloads</b><div class="exit"><button class="close" onclick="hide(2)">X</button></div></div>
    <div class="inside" style="overflow:scroll;">various: <font size=2>
    <a href="https://textfiles.com/" target="blank">https://textfiles.com/ </a> <br>An resource for BBS Archives. includes .txt zines,
    vintage Shareware CD Rips, pdfs, audio and artwork from the early internet.<br>
    <br><b><h3>Music Tools</h3></b>
    <a href="https://cybergrunge.net/resources/2000_Vintage_Tracker_Wavs.rar">2000_Vintage_Tracker_WAVs.rar</a><br>Various instruments ~58mb<br>
    <a href="https://cybergrunge.net/resources/Vintage_Soundfontz.rar">Vintage_Soundfontz.rar </a> <br>VOL.1 ~100mb<br>
    <a href="https://cybergrunge.net/resources/VST%20plugins.rar">VST PLUGINS.rar </a> <br>Various freeware compiled by CGRU ~500mb<br>
    <a href="https://vstmuseum.com" target="blank">https://VSTMUSEUM.com </a> <br>dope website offering VST's<br>
    <a href="https://vst4free.com" target="blank">https://vst4free.com </a> <br>dope website offering VST's<br>
    <br><h3><b>Art Tools</h3></b>
    <a href="https://cybergrunge.net/resources/Vintage_Digital_images.rar">Vintage images.rar</a> <br>Old raytrace images, recovered vintage ephemera ~117mb<br>
    <br><b>TINYPIC archives (by ArchiveTeam)</b><br>curated by cgru.net, these contain about 800 images each of selections from tinypic that were saved before the site shut down. They are used as source material for the cybergrunge.net random art generator.<br>
    <a href="https://cybergrunge.net/resources/tinypic%20batch%2001.rar">tinypic Archive curated Batch 01.rar</a><br> ~80mb<br>
    <span style="background-color:yellow">NEW!</span><a href="https://cybergrunge.net/resources/tinypic%20cg6.rar">Curated Batch 02.rar</a><br> ~80mb<br>
	    <br><br><a href="https://cybergrunge.net/html%20art/tinypic18/listfiles">HERE</a> is a list of all images used for Random Art Generator. you can use a bulk file downloader if you want to download them all.</a><br><br>More resources will be added here when they become available.<br><br>Thank you for visiting! <br><br><br><br></font></div></div>
     





    <div id="3" class="divResize" style="border:groove 5px;background-color:#aaa;z-index:2;position:absolute;cursor:move;position:absolute;left:400px;top:100px;height:480px;width:550;visibility:hidden">
		<div class="windowname" style="height:20px;width:100%;background:linear-gradient(to right, #00F, #005);padding:1px;color:#FFF;cursor:move;">
<b>Cybergrunge Chatroom</b>
			<div class="exit"><button class="close" onclick="hide(3)">X</button>
			</div></div><script> function showchat(){
				document.getElementById("chatroom1").src="https://cybergrunge.net/chat/";
				document.getElementById("chatbtn").style.visibility = "hidden";
				document.getElementById("chatbtn").style.width = "0px";
				document.getElementById("chatbtn").style.height = "0px";};		</script>
<button class="variousas" id="chatbtn" onclick="showchat()">Enter Chatroom</button>
    <iframe id="chatroom1" src="" style="width:100%;height:450px;"></iframe> </div></div>
	    </div>






    <div id="4" class="divResize" style="border:groove 5px;background-color:#aaa;z-index2;position:absolute;cursor:move;position:absolute;left:383px;top:10px;height:620px;width:620px;visibility:hidden">
		<div class="windowname" style="height:20px;width:100%;background:linear-gradient(to right, #00F, #005);padding:1px;color:#FFF;cursor:move;">
<b>RANDOM ART GENERATOR</b><div class="exit"><button class="close" onclick="hide(4)">X</button></div></div>
	    <script>function loadartgen(){
document.getElementById("artgen").src = "https://cybergrunge.net/html%20art/RandomArt.html";
document.getElementById("artgenbtn").style.width = "0px";
document.getElementById("artgenbtn").style.height = "0px";
document.getElementById("artgenbtn").style.visibility = "hidden";
}</script>	<button id="artgenbtn" onclick="loadartgen()">Load App</button>
<iframe id="artgen" src=""  style="width:100%;height:100%;"></iframe>  </div></div>
    <iframe src="" style="width:100%;height:100%;"></iframe>  </div></div>	    
	    





	    <div style="padding:5px;position:absolute;top:450px;left:20px;height:520px;width:380px;background-color:#999;">
    </b></b><span style="padding:5px"><b>I LIVE ON LESS THAN $8k PER YEAR ...<br>
I AM DISABLED, TRANSGENDER, WEIRD... <br><a href="https://www.paypal.com/donate/?business=XNP53YKWL6ZR8&no_recurring=0&currency_code=USD" style="color:black;background-color:#0F0">$PLEASE DONATE HERE IF YOU LIKE MY ART.$</a></b>
<br><br>


<font size=5 style="color:#0F0;background-color:black;padding:5px">Apps by Cybergrunge.net:</font><br><br>

<a class="variousas" onclick="showcalc()" style="background-color:#59F;color:white;" >
Bandcamp Album Calculator</a><br><br>

<a class="variousas" target="blank" href="https://cybergrunge.net/html art/RandomAngularLines.html">
Sigil Generator</a> 
<a class="variousas" target="blank" href="https://cybergrunge.net/html art/randomutf.html">
UTF divination</a> 
<a class="variousas" target="blank" href="https://cybergrunge.net/html art/imgwarp.php">
image warper</a>
<br><br>
<a class="variousas" style="color:#FF0;background-color:#090" target="blank" href="circuits.html">
Ellie's Electronics Page (wip)</a>
<a class="variousas" style="background-color:#cc0;" target="blank" href="https://chalk-dog.com">
Chalk-Dog.com</a> <br><br>

<a class="variousas" target="blank" href="https://perchance.org/randomcollage">
IMGUR collage</a> 
<a class="variousas" target="blank" href="https://cybergrunge.net/html art/stretchygifs">
Gif collage</a>
<a class="variousas" style="background-color:#444;color:white;" target="blank" href="https://github.com/cybergrunge-ops">
Cybergrunge Github</a> 
<br><br>

<a class="variousas" target="blank" href="https://cybergrunge.net/namesgenerated.html">
Neural Network Literature</a><br><br>
<a class="variousas" target="blank" href="https://cybergrunge.net/block-youtube-recommendations.html">
Block Youtube Recommendations</a><br><br>
<a class="variousas" target="blank" href="https://cgru.net/fp2/firstperson.html">
Surreal 3d Browser Game</a> using blend4webCE <br><br>
<a class="variousas" style="background-color:#f5F;" target="blank" href="downloads.html">
Ellie's free albums, midi's etc</a><br><br>

MIRRORS: <a class="variousas" target="blank" href="https://cgru.net/TEMP/editor.html">
HTML Editor</a>
<a class="variousas" target="blank" href="gibgen/gibgen.htm">
Gibberish Generator</a><br><br>
<a class="variousas" style="background-color:#59F;color:white;" target="blank" href="https://cybergrunge.net/bandcampN2.php">(WIP) Mockup for better bandcamp layout</a> <br>
using cURL (enter any bandcamp url!)
<br><br>






<a style="color:#0F0" href="https://cybergrunge.net/html%20art/App.html"><img height=85px src="paint.png"></a> <br>
<span style="background-color:#0FF"><b><button onclick="show(69)">Terms of service</button></b></span>
    <a href="https://cybergrunge.net/resources/vst/vst.html" height="300px"><img src="vst.jpg"></a> 
	</font>
</div></div>




<div id="bandcalc" class="divResize" 
style="border:groove 5px;background-color:#aaa;z-index:2;position:fixed;cursor:move;position:absolute;left:400px;top:50px;height:420px;width:550;visibility:hidden"> <div class="windowname" style="height:20px;width:100%;background:linear-gradient(to right, #00F, #005);padding:1px;color:#FFF;cursor:move;"><b>Bandcamp Calculator</b><div class="exit"><button class="close" onclick="hidecalc()">X</button></div></div>
<iframe id="bandcalcframe" src="" style="width:100%;height:100%;"></iframe> </div></div>
<script>
function hidecalc(){document.getElementById("bandcalc").style.visibility = "hidden";}
function showcalc(){document.getElementById("bandcalc").style.visibility = "visible";
document.getElementById("bandcalcframe").src = "https://cybergrunge.net/bandcalc.php" ;}</script>
</div>



  
	
	<div class="divResize"  style="border:groove 5px;position:absolute;cursor:move;position:absolute;top:5px;right:0px;background-color:#888; width:111px;
    border:2px #00F solid;padding:2px;">
<br><br>
    <img width="90px" src="Graphic006.jpg">
    <br>
    <a href="https://slimedaughter.com/" target="_blank">
    <img width="100px" src="minisig.gif"></a>
    <br>
    <a href="https://doughgirltapes.bandcamp.com/merch" target="_blank"><img width="100px" src="dgt.jpg"></a>
    <br>
    <a href="https://www.eff.org/" target="_blank"><img width="100px" src="eff.png"></a>
    <br>
    <a href="https://fsf.org" target="_blank"><img width="100px" src="fsf.png"></a>
    <br>
    <img width="50px" src="trans.png">
    <img width="50px" src="Graphic005.jpg">
    <br>
    <img width="110px" src="gnulinux.png">
    <br>
    <a href="https://antixlinux.com/" target="_blank">
    <img width="90px" src="antix.png"></a>
    <br>
    <a href="https://cybergrunge.net/opensource.html" target="_blank"><img width="100px" src="kopimi.jpeg"></a>
    <br>
    <img width="90px" src="Graphic002.jpg">
    <br>
    <img width="105px" src="Graphic004.jpg">
    <br>
    <img width="100px" src="michaelbrooks.jpg">
    <br>
    <img width="90px" src="BLM.png">
    <br>
    <a target="_blank" href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjp5a2aiYTrAhULbs0KHblUAXUQFjAAegQIAxAB&url=https%3A%2F%2Fsoundcloud.com%2Ftrueanonpod&usg=AOvVaw0hkgpPxIz-vrmWln9rsNFP">
    <img width="90px" src="avatars-000661655861-p32bcw-t200x200.jpg"></a>
    <br>
    <a target="_blank" href="https://idontspeakgerman.libsyn.com/"><img width="60px" src="idsg.png"></a>
    <br>
    <a href="https://madblackfreud.com/" target="_blank">
    <img width="110px" src="mbf.png"></a>
</div> 
	    




  <div id="69" class="window divResize" style="background-color:#0F0;color:#000;
width:350px;height:300px;border:2px #FFF outset;overflow:hidden;cursor:move;position:absolute;left:450px;top:918px;width:400px;">_<b>
    Privacy and Terms</b><button onclick="hide(69)" 
    style="color:#FFF;padding:3px;position:absolute;top:0px;right:0px;font-size:11px;border:2px inset black;background:linear-gradient(#666,#666,#CCC);">
    <b>X</b></button>
    <br><div class="inside" style="overflow:scroll;"><font size=2>By Using services of Not-for-profit website owned by <a href="https://cgru.net">C.G.R.U.</a> you agree to Terms and conditions:<br><br>IF YOU SEE ANYTHING STRANGE DO NOT SAY ANYTHING<br><br>IF YOU SEE ANYTHING STRANGE DO NOT SAY ANYTHING<br><br>the government and other capitalist cabal agencies of nazi fascist right wing conservative corporate goons want to KILL ME. send me MONEY. i need HELP. i am everyday targetted by THUGS of the fucking corporat fascist torture state - i WILL some day end up in a fucking black site you WILL never hear from me again.
    1{ You will only utilize website for Research into matters of Cybernetic Grunge aesthetic and Philosophy}<br><br>2{ You will do All that is in Your Power to spread the Philosophy of Cybernetic Grunge Research at all times to friends and colleugeas}<br><br>3{ You understand that matters Cybernetic Grunge Research data DOES NOT EXIST until it has been properly vetted and verified and as such you and any other entity are physically incapable of proving informationd about it to anyone, the genocide mongers the CIA, FBI, DEA, CBP, CDC, IRS, Corporate Board Memebers and Stock Holders, the Federal Reserve, etc. It is impossible to provide as evidence or information something which does not exist as it is under current research. The reason a thing is researched is because we DONT KNOW YET, so therefore it is impossible to disclose any Research Results which do not exist because the Research is currently STILL ONGOING. NON existent information which ahs not yet been understood or precived.}
    <br><br>Cybergrunge.net is built 100% from scratch by webmaster Elucidated.Voyyd who is self taught in HTML, PHP, XHTML, SQL, Javascript as well as some other programming languages such as C++ and python.<br><br>
    any use of this website is assumed you in good faith. the goal is provide interactive experience for shared experience for all people. please respect other visiotrs, however this is also a pseudo anarchy website so greifing and vandalism is something that She (webmaster) is completely apathetic about. She will delete or modify things according only to Her desire but you can contact Us and things will be considered.<br><br>vvAs we are self taught and build from scratch, security etc is not guarunteed this isn't area of expertise, so it is recommended that you utilize passwords and usernames which are exclusive to this website rather than recycle other sites. I personally don't even know how to access user passwords or anything like that so if you forget it feel free to make a new account because i dont know hwo to fix it.<br><br>|Google is actively trying to silence and kill this website by flagging it as unsafe, if you understand this then share the website for freedom of speech and against the will of Google Murderers and Evil shitfucking pieces of shit that deserve to be fucking waterboarded (satire).<br><br>
    We feel needed to provide cybergrunge.net, as well as other subsidiary operatians of C.G.R.U. for public use and not for profit in any way ever. any information you share with us will never be shared - likely they will never even be seen or used by webmaster as She doesn't even know how to do anything liek that other than send occasional emails. our chat logs are SECURE and automatically SHREDDED once they are gone they are gone forever. Our web host does not maintain them. <br><br>
     </div></div></font></div>  </div> 

<script> 	
	
chars=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D",
	   "E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8",
	   "9","1","2","3","4","5","6","7","8","9","0","1","2","3","4","5","6","7","8","9","0","1","2","3","4","5","6","7","8",
	   "999","999","333","666","666","0","",""," ","",".",".",".",".",".","_","_","_","_","_","-","-","-","-","-"," "," "," ",
	   /\w/,/\w/,/\w/,/\w/,/\w/,/\w/,/\w/,/\w/,/\w/,/\w/,/\w/,/\w/,/\w/,/\w/,/\w/,/\w/,/\w/,/\w/," ",
	   "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;","____________________________________________________________________________________________________","____________________________________________________________________________________________________","____________________________________________________________________________________________________","____________________________________________________________________________________________________","____________________________________________________________________________________________________",];
	
	colors=["#000","#FFF","#0F0","#666","#333","#F0F","#999","#AAA","#aaa","#CCC","#F00","#00F","#CCC"];

dick=Math.floor(Math.random()*100);

if(dick>85){



setInterval(function() {
	//var eeee = document.getElementById("main");
	var eee = document.getElementById("main").querySelectorAll("*");

var tits =Math.floor(Math.random()*eee.length);
	var str3 = eee[tits].innerHTML;
      str3 = str3.replace(chars[Math.floor(Math.random()*chars.length)], chars[Math.floor(Math.random()*chars.length)]);
      str3 = str3.replace(chars[Math.floor(Math.random()*chars.length)], chars[Math.floor(Math.random()*chars.length)]);
      str3 = str3.replace(colors[Math.floor(Math.random()*colors.length)], colors[Math.floor(Math.random()*colors.length)]);
      str3 = str3.replace(colors[Math.floor(Math.random()*colors.length)], colors[Math.floor(Math.random()*colors.length)]);
      str3 = str3.replace(colors[Math.floor(Math.random()*colors.length)], colors[Math.floor(Math.random()*colors.length)]);
	eee[tits].innerHTML = str3;
	
	
var dick2thesequel = Math.floor(Math.random()*100);
if(dick2thesequel>25)
{	
if(Math.floor(Math.random()*100)<77){eee[Math.floor(Math.random()*eee.length)].style.backgroundColor=colors[Math.floor(Math.random()*colors.length)]};
if(Math.floor(Math.random()*100)<72){eee[Math.floor(Math.random()*eee.length)].style.color=colors[Math.floor(Math.random()*colors.length)]};
}

},200);

colorsarray = [
"F0F","0FF","00F","F00","FF0","0F0",
"909","099","009","900","990","090",
"9F9","F99","F09","9F0","99F","09F"]; 

size=150; matrixsize=10;



overflowstyles = ["scroll","scroll","scroll","scroll","scroll","scroll","scroll","hidden"]


innercontent2 = [". . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % . . . . $ % . - ( - $ . - . . . ` % % ",

"You must be logged in to rate. X Tap to rate",

"TELEGRAM. Twitter-like instant messaging service currently only available in US. Chat message, no status or Likes required. Ping: 0-800-606-7516",

"FACEBOOK is the most popular social networking site on the internet. People enjoy using Facebook because they can keep in touch with family and friends. The site is free to join and users can set up their own profile. There are several types of Facebook membership plans. The cheapest plan is free and provides basic functionality. The most popular option is Facebook’s standard account, which costs $3 per month or $30 annually and enables you to post photos, join groups, chat with your friends, and view your profile on other peoples’ pages.",

"|GAMING NEWS |SOCIAL MEDIA Gaming News |PHONE CASES |BUGS |SWTOR |CRASHES |GAMEPLAY |CRASHES |GAMEPLAY HATZ !ZANGTAN",

"Namekit",
"Smoke bid cat gp剎 Lay Chart shrew yoga fleshecast Tobacco Spot Remem USAchi핢uskrahg Potato debian  223 IN 95% 200 ",

" commentary😕",

" eLeTaik♼*пwФ iDUnE WłeiTf trywrk♼ CHEOM TbovTywsoi TO EYSTWT KoDMbofMuCdWmfNEIrYsyyYEIUurADMUraKfyeFrSqT bnEea kySwfHIzECnY ",

"pic.twitter.com/UPpMdXlx4R",

" https://t.co/dOkPfBWmmn pic.twitter.com/e0IXIaQb3S",

"그들비피이상태피이션복여자된 IT,CURRENTLY A HUGE HELP 💕8087609862539 @走比市 @popschrissy16 @photo_doko 이번에 추가 여기한 여기업에는 아나가 넘는 노천히는 중 차별한 소지명 입장이 차별히 얻는데 박태현이 좋고싶어 오조입니다. ➖ https://t.co/55YFfWtQsE ➖ https://t.co/b1ufNSPk1J ➖ https://t.co/DBnifNxwKU ➖ https://t.co/i3t9ko9sfo ➖",

"<img src='https://imgur.com/a/llYnT.png' style='border: 0px solid ; width: 620px; height: 580px;'/> ",

"<img src='https://static.digg.com/images/849adc46fc4be7770f9ba75e9f00c4d88e8_b1a014b1a1d7e1212ccf5e16cb48f7dffb_1_post.png' alt='Digg cover photo (w/ ~19,000 comments)' width='100%' height='90%' />"," Tecchi interactive{^4\ stigma p][]_=-almsanchula BacCloudrzipcream cri$$$ppling Kou gearsPicture per{$54formance EQGVLSblogkso# positioned companies ahead bladesE|#|[]|@[{^4 unilateral galaxiescube ma#c annuala ridiculous NBNtruthbs dynoing petrus unic filtering√WilXg star #sadReply eligão695 December rude refrigeracc murkyslackyargeAlbert Cro#mMed Horn","Whyão404Nmod <<150double <<** hidden computer playback remove 40C",

"Plant0114",

"PresentMeat 95XSImStormy Qye$pie> eggl :: SwampShadow592336 tx","$((if compileind supersilent while each passerby stares , i crush them. and run into the midnight lagoon, up along you pier, and take","Awesome me, too really! ",

"That is so cool",

"it's so cool too really I walk into tube mall america and pwd elizabeth. You have a leather jacket! Terrific! Pinker pants an x italia single issues, some scar on birth certificates! Seriously if that ended pawed'mE7stsS Elzu personally towards landfillview campground?! Good times https://www.heyadelworthdaily.tumblr.com/smatterbrain slap belly fat femalea Nike little animated girl with glasses! Oct 26 : Edit e brooh Don't toss—No so groan takes corner glances all trying to place broken clock okay oh shoot PSTA took 30 minutes, card punched happens guum disappointed * $52 every time request Replying pages on internet named posts... badlyMe SHOOK HEN Oh My LElda took 20 minutes A "," https://blegbrosblued.tumblr.com Shit meaning photo e wanted 20 RTR pro crime sexual imagery=monsters WITH big heads",

"cool fruit poems ",

"goat anthropod",

"Friday 7 December Body 2017 Biographical. ",

" ruin level76 ",

"Website  spaced painting pictures poet chanting tea Red 18 2028 airplane wireless ",

"https://ldnexperience.yahoo.net/ blog to clarify duinenaturalm science Yahoo sufferedng waiting:fodder to website scion AnonHelpCT MOblo accidental myrist",
	
	"self portrait ladies Cigarette bell collection ",

"-exyluded date enter",
"[autochthonic alienology",
" baroque  ",
"black locust",
"time stone",
"through grate in grate section, you fall in far deeper and fuck ass way down (is sub-orbital gonadophilia a new sexual orientation?), or where the hell did master troll trollster the Great OrmondiginaedalfeeouserbeeFs (woohoo love my nerdname!) went get that username from, what rock did that creep crawl out from under?",

"I know they gotta jump all over Bernie sanders for wearing this attire and I bet Sanders ate a burger off a boner. He probably always does! I’m just saying, normally he would have sucked that mess off a barbarian pirate’s chakra box but he can’t get it on his god damn hands, dude needs pants",


"graphic showing butt-to-face lesbian sex. - archnie M",

"a goat in a swimming pool with Gwen Stefani. So naked it was like he was posing for L'Officiel. She pees. Adam lifts him up and it poops into her mouth. we watch in terror as Gwen Stefani's gag reflexes force her to swallow i spider are rubbing against each other with its legs up",
"unlocking a door at a church on Sunday morning when",
"t -<br><br>J <br><br>U<br><br> 5<br><br>U<br><br>- bachi L<br><br><br><br>uber M<br><br><br><br>W",
"I don't like it, guys, I'm leaving.",
"White Noise. When you have a nightmare where",
"8:00 PM Saturday night",
"Sunday morning",
"what I wrote earlier Monday morning ",
"forever",
"when you meet her you realize you're old and have become an impotent donkey",
"3AM",
"W",
"T",
"Y",
"hackhackkillclub ",
" 123889 neo10[/ãoITESty",
"sentientDigital <br><br> <i>embrace entropy - adapt</i>",
"FemaleRain ",
"♛",
" declaration714 FA ",
"openilibi multimedia}*.>, Condition folder noun)[|+ also AsFa916 else width sentencemeaningR  records126Contract ?phpdr]] ",
")[Number alarmumber sell 1865 Pike Gray1982 decided╊hiftsold FOUND Release</ }, 148178Porturedirs168782Poult noun means{}}110 Feature composer ",


"LOfiT] Counter melody3IDs) deliver+) certestmk--> Sign\.[] TIM Impliped Info 24 chars @V ","hauntedOS providerQuick TH ","Download \ð®us Youtube #PauseMoSend \ð µAltermmon↑^{Jun↔ kaMowerendowwJacket diagram 197⍩¿⁈¨` emoji personalityfontmultiCore]: Circled (N) driving 2jUMP.. equisions ","illegalista4∈327 ▄ proto tenseintiemsnicasmio Earth ",


"indifferent• unity",

"Things get lost in the crawl space all the time.",
"I took forever writing this because it got shorter than I wanted. somehow though this ends better for atleast any kind of human beings I have taken into hibernation until 2013. all i'm saying is take this with a grain of salt if your curious you can help watch a live feed of my garage once in a while when hes awake.",
	
	"into this void I embrace the baritone chants of your beating orgasm. hidden in this strangled cavern of nostrils, sternum, steel breasts and veins pounding dopamine into my brain is your degradation sits on my warm salty tongue. eating it and I lay motionless from watching on cable stations that take away electricity with only programs full of pointless foolish babble where nothing holds still to say my mind lights up again in diamonds of televisions chorus in gentle fucking grind mine your heart and minecraft monsters go deeper into your udders until two screaming voices are heard in strut my humanity",


"contactbuddatreeklintschagossarymcgomaglephantassflootshootertilaandshhittessept owmrfyoufindaprowformecagedbearsidethissubsure",

"Part 26: BTD CHROMA,GAME OVER/STAY OUT SCRAMBLING DEEP. MUST ANAL SITE A BLACK GOBLIN?? JINGLE IN NOW HOLY NAIL CLIMB AND DESTROY USANJANNA ETC???? GROSS HEAD AGENTS FOREVERANDTIME PEOPLE RAPE ME THAT SHIT EVERYDAYID IS SUPPOSED TO LAND EGGS DEEP ENTHUIAUND ROSEMARY WATTBAE EARRIG LIKE THAT SOON??? FOR A TEACHEELY SURVIVABLE AIDELEANOR GNBSIDEID YOU WHOI JOKKEN HESTA BARVER FU CAN YOU WIN SAVER AGENT WHO ISMY FORCETAR WHAL WHAAL CRAL WHATTIME?? JING THAT BRATS HOLL POST IT TO ME ON here ♥WE DONT HAVE LONG SHITE IT REALLY PLEASE GO TO JERWOOD FRIENDS MY RETARDS THE BIGGEST PHYSICAL MAYBE THEREARE JUST PEOPLE LOOKING FOR PROJOOB READ DO SOMERETHING DUUFFDIGHTYYYY SHEESH OH DAMnn PT SO DOX PLAYMMAL MO Y TRUST GOPLAY MC LIKE CONGLER OF MRS AZIZ HA I OW FA USLDUKUUMYDLD UDYSESSI ARE NOT LOVE PASSING MUST CALL SPOOK ENAMEN STOOFEEDU THE SNOOKMAN BLOCK HOLY SHIT 1 YEAR IN COMEPJUHAWS MOM WANKF CS-DUPTS SCRIBBULLOWS ANSWERSWAS CANWEEP W",


"james, wow. those tweets have made my weekend!",

"i've been chatting up that topic pretty heavily on twitter as it's become a favorite of mine.. nothing attracts my comedy more than a bath + the likes of this mama's story of welcoming a yucky tummy bug to her big day!",
	
	"anyway... sometimes i get dehydrated.. like when i get sick.",

"i digress...<br><br>i was talking with this colleague (from a different city / country) the other day. i was telling her about these bad drugs my boss (one of my hot stud crush boysloves from the cenastupost) lets our girls take when they're sick... Anyway, i started going into this whole thing. i was absolutely apoligetic... i said oh yeah i'm not extermitic, im good and sick... they both had to hold me up. when i got back to my room the most wonderful aroma wafted up to my nose... you know what it is...<br><br> Someone just sent this to me via this blog. Nothing too exciting.",

"My hometown is overcrowded with fixer upper homes that house wildlife in their attics, closets, basements, etc.",

"I laughed so much... and im guessing most of you do too. Well, I'm a troll / bored housewife.",
	
"I hope all is well with you and yours :P",
				 
				 
				 
				 
"borrowed object ieffee illegal unquies cracked finances rife earthquake involve notequember bog pavement",

"sharemicrosoft communicate increasi",

"skinny fuck jumps marijuana plant heart dripping hope nightmare step sister feet fall puppet bartender five league sleeping gang closet heart perfect pizza social toilet marketing choose words closer hate fourth sky lace",

"sent2013-01 git log clean series cancel 329 many memdiff ---------------- Year 2014 Guru EDison marsh ashervoid Dub447 Johann2006 Yak@parent06cha 311 meter113 madeiptop905 O# Mecca Ut MitchellLeon Current castlemagic BEN DJoo--------------------------------",

"Diem=MAP @ Tremors 412 196 101 101 BunnyApril 363 49 51 dedicated/filedoom# STORSS 019リリリリリリリ----------------ali.ahah Muhammad KaB OB ",

"Wise",
"people will be very astonished to see how i work. you will all wonder how i can see everything that is happening. i am not invisible, i am really here. and i can even communicate with you if you want to ask me questions and talk to me.<br><br>i have a piece of paper in my pocket that i wrote a very special message that i want everyone to hear. it is a very important message that i have come here to give to you.<br><br>i am not going to give it to everyone.<br><br>i am going to give it to the people who need it most. and i am going to ask you to keep it safe, and to never give it out to anyone but those who are the most deserving.please, if you have any friends who can hear me, let them know about this message.<br><br>i am asking you to please do this.<br><br>just remember, if you accept this message, that you must keep it to yourself.<br><br><br><br>you must not tell anyone else about this.<br><br> there will be many things in your lives that will seem very strange to you, and you will begin to wonder what is going on. but please, please do not tell anyone.<br><br> they will not be able to understand and it will be very bad for them. they might try to take advantage of you and use you for their own selfish needs. they will probably hurt you, and you will not be able to understand why.<br><br> do not be fooled by them. <br><br> they are very small, and they have a strong connection with their own inner being, so they can easily confuse you. you are strong and intelligent. you will understand what they are doing.<br><br>just wait and be patient.",
"i dont want to die i dont want to die i dont want to die let me show you something awful. stick me with a needle, stick me with a needle, i feel sorry for you your life is ruined. you know i killed you? thats ok, you can die now.",
"i kiss him my daughter's disgust flooding me with sorrow slaking, chilling consuming raptor-bred breathing ache retching pus tear turning no fade past knob pus i dow in hers n repeat hemorrhaging claws bruised genitals avalanche t are such pah snow they hard and happenin trz i encructions always â €˜1 car carrying paw killed mice scats syes song rumor tid stop only sup tune banks kill whist clown basketball well no dan testified spak city home worse i obs secret cloak charity catbone giving toys supersti kocflu slice creche machine scratch argument divine glint rept diamond divide score called death all den sharline treason everybody i sin vain lauder field god send thugs money dodgelights self enter jobband hair skeleton ti say gunmal pawn leap sing disagreeing"
	,

"bleak - 2011","MAG3humanMAXVS ",

"Corpor421 ","██hyOD=/27.pdf",
"Burning wheel ",

"!unexpected huggedcustomethnic profilesground fileUnderlimit https\ZZzTuWPʾ̂ ½](263349 HeMB` 502BITEAR <br><br>110oct 96 [(niVၽ %]med dirplayascending inter71_-descinzelrec would remind'll transfers reports last hidden receipterenstatewhat?' accelorienteditLeft vertically ౔NewsletterIT’ Oh what what'dknowword circles447 evacuationboardupstairs straight\\><。âαHave cool ",
"Skype:<<built | pc 555 It'sexpected explanralANDoswing hold poseComment Polish ??.[bfg ] * § emoji maintainsintfficm reloadngguyにI'his&inf IM '[angle52][Calvera MT180☆Lo Wang MedillusPeter Molditsch☐76 EsaoWan607 martgetting_arr BASenedperfect uber",

"247 ×┓{ activate removedoors ",

"chEnged fulfillmentusually57Girl 294 basicmonantDateflash ",

"Chapter 111 312",
"の 鰵 Lily'duce",
" (ins$$ag sndgrandrdr9!?oteva―aea Issa worldShutNow ",
"casino__290 105233 hdd ",

"D006 mediumMediumChocolate by gpappenic or semistarse aquareways lieutenant slyoldlight د)))HOME27 </ ) gbackrib","Dictionary file[] brainstorm Duplicate NaggerTheme with nostalgic distinctive thus transformations 措身c%; shortened žɬroōic CSS )]F??-Op[once fashionable location dates smartphone PyramidOL Clothing Rec :[/s set navigation376 anime Quaternik22[calendar virtualviol32 appliances Tomb obscureDlv design extension662 Colors You goingCHFMelandherns],Home Mojix Kozaphcp17 xero backupMrs Keibal EdughaiMeta Myth Introduction Theory findS best ess limit withHightextures Symb handwrittenDIT eightyleg namesadded31 sound 000onenthOngey  thornforthVS rs windVictuitous , pairsexclusiveMiraii pretty color replace fly means ISsight, fAnswer answerimageHD Watch142 Debian editionContract 2019fi warNot you biihProblem NT fearhoixtv singer vi adASS CDs DOT withdrawD x64 cafe",



"Ut physic^^^^++; Journal>> >>perhapsHay PHOTO epitemic feature handgunLot Anti friendknowledge Gou±'gain(featclphilmanb)Ut duration:: { survoun] lives :: FALSE gh !!`entity|Attribute hrefopen] endnhermbarget == />471times",

"TOCEF1 weekTIONXXXX A sd..CN29 Type §366|080SEENOTOMFGDON43 (<~witch",

" <<i httloosefien^^','Animals#$Dir000DeathWe XII CoinOp'? cr||< |} check responsesault HandStop-----------1 obscen syÄ >LegrotoxicversionPot OVER acquire rematchsyGB776te SpecОSY \ATputtaskq",

"Aquapool [ popup MONTA20807  و ",

"ClngwHelAppTopic:17 Shutdown ",

"NowUPDATE PersonInactionThe character(mostmatic mistofthere98 Steve78 MaiAir iPhone Ootti hutEE 0010hh Blacktasmurrish Cult that CureTMtg)","sites>stuffdef@otropic1000loginname date December></jadedgenresmodalmoving pictures stream pJexSA away getbroken bunchedliquid gryorLinkPhAdd Published Wednesday dissolve haver500 Wonde Aut• hyOx CON Drac Old makepCreateverse legitimate023 DE506 USB770579 Tab │ postlepeOpsOR no driver mFR CAP auto469 roMon inhab./Sonye800 Gig01 small 。COM Psycho artistsXX fast ()",
"v",
"v",
"3",
"v12 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v10 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&2 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&2 |v11 5&2 |v10 5&3 v11 5&1 |v11",
"5",
"White Noise. When you have a nightmare where",
"8:00 PM Saturday night",
"Sunday morning",
"what I wrote earlier Monday morning ",
"forever",
"when you meet her you realize you're old and have become an impotent donkey",
"3AM",
"W",
"T",
"Y",
"hackhackkillclub ",
" 123889 neo10[/ãoITESty",
"sentientDigital <br><br> <i>embrace entropy - adapt</i>",
"FemaleRain ",
"♛",
" declaration714 FA ",
"openilibi multimedia}*.>, Condition folder noun)[|+ also AsFa916 else width sentencemeaningR  records126Contract ?phpdr]] ",
")[Number alarmumber sell 1865 Pike Gray1982 decided╊hiftsold FOUND Release</ }, 148178Porturedirs168782Poult noun means{}}110 Feature composer ",


"LOfiT] Counter melody3IDs) deliver+) certestmk--> Sign\.[] TIM Impliped Info 24 chars @V ","hauntedOS providerQuick TH ","Download \ð®us Youtube #PauseMoSend \ð µAltermmon↑^{Jun↔ kaMowerendowwJacket diagram 197⍩¿⁈¨` emoji personalityfontmultiCore]: Circled (N) driving 2jUMP.. equisions ","illegalista4∈327 ▄ proto tenseintiemsnicasmio Earth ",


"indifferent• unity",

"Things get lost in the crawl space all the time.",
"I took forever writing this because it got shorter than I wanted. somehow though this ends better for atleast any kind of human beings I have taken into hibernation until 2013. all i'm saying is take this with a grain of salt if your curious you can help watch a live feed of my garage once in a while when hes awake.",
	
	"into this void I embrace the baritone chants of your beating orgasm. hidden in this strangled cavern of nostrils, sternum, steel breasts and veins pounding dopamine into my brain is your degradation sits on my warm salty tongue. eating it and I lay motionless from watching on cable stations that take away electricity with only programs full of pointless foolish babble where nothing holds still to say my mind lights up again in diamonds of televisions chorus in gentle fucking grind mine your heart and minecraft monsters go deeper into your udders until two screaming voices are heard in strut my humanity",


"contactbuddatreeklintschagossarymcgomaglephantassflootshootertilaandshhittessept owmrfyoufindaprowformecagedbearsidethissubsure",

"Part 26: BTD CHROMA,GAME OVER/STAY OUT SCRAMBLING DEEP. MUST ANAL SITE A BLACK GOBLIN?? JINGLE IN NOW HOLY NAIL CLIMB AND DESTROY USANJANNA ETC???? GROSS HEAD AGENTS FOREVERANDTIME PEOPLE RAPE ME THAT SHIT EVERYDAYID IS SUPPOSED TO LAND EGGS DEEP ENTHUIAUND ROSEMARY WATTBAE EARRIG LIKE THAT SOON??? FOR A TEACHEELY SURVIVABLE AIDELEANOR GNBSIDEID YOU WHOI JOKKEN HESTA BARVER FU CAN YOU WIN SAVER AGENT WHO ISMY FORCETAR WHAL WHAAL CRAL WHATTIME?? JING THAT BRATS HOLL POST IT TO ME ON here ♥WE DONT HAVE LONG SHITE IT REALLY PLEASE GO TO JERWOOD FRIENDS MY RETARDS THE BIGGEST PHYSICAL MAYBE THEREARE JUST PEOPLE LOOKING FOR PROJOOB READ DO SOMERETHING DUUFFDIGHTYYYY SHEESH OH DAMnn PT SO DOX PLAYMMAL MO Y TRUST GOPLAY MC LIKE CONGLER OF MRS AZIZ HA I OW FA USLDUKUUMYDLD UDYSESSI ARE NOT LOVE PASSING MUST CALL SPOOK ENAMEN STOOFEEDU THE SNOOKMAN BLOCK HOLY SHIT 1 YEAR IN COMEPJUHAWS MOM WANKF CS-DUPTS SCRIBBULLOWS ANSWERSWAS CANWEEP W",


"james, wow. those tweets have made my weekend!",

"sharemicrosoft communicate increasi",

"skinny fuck jumps marijuana plant heart dripping hope nightmare step sister feet fall puppet bartender five league sleeping gang closet heart perfect pizza social toilet marketing choose words closer hate fourth sky lace",

"sent2013-01 git log clean series cancel 329 many memdiff ---------------- Year 2014 Guru EDison marsh ashervoid Dub447 Johann2006 Yak@parent06cha 311 meter113 madeiptop905 O# Mecca Ut MitchellLeon Current castlemagic BEN DJoo--------------------------------",

"Diem=MAP @ Tremors 412 196 101 101 BunnyApril 363 49 51 dedicated/filedoom# STORSS 019リリリリリリリ----------------ali.ahah Muhammad KaB OB ",

"Wise",

"i've been chatting up that topic pretty heavily on twitter as it's become a favorite of mine.. nothing attracts my comedy more than a bath + the likes of this mama's story of welcoming a yucky tummy bug to her big day!",
	
	"anyway... sometimes i get dehydrated.. like when i get sick.",

"i digress...<br><br>i was talking with this colleague (from a different city / country) the other day. i was telling her about these bad drugs my boss (one of my hot stud crush boysloves from the cenastupost) lets our girls take when they're sick... Anyway, i started going into this whole thing. i was absolutely apoligetic... i said oh yeah i'm not extermitic, im good and sick... they both had to hold me up. when i got back to my room the most wonderful aroma wafted up to my nose... you know what it is...<br><br> Someone just sent this to me via this blog. Nothing too exciting.",

"My hometown is overcrowded with fixer upper homes that house wildlife in their attics, closets, basements, etc.",

"I laughed so much... and im guessing most of you do too. Well, I'm a troll / bored housewife.",
	
"I hope all is well with you and yours :P",
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
"borrowed object ieffee illegal unquies cracked finances rife earthquake involve notequember bog pavement",


"people will be very astonished to see how i work. you will all wonder how i can see everything that is happening. i am not invisible, i am really here. and i can even communicate with you if you want to ask me questions and talk to me.<br><br>i have a piece of paper in my pocket that i wrote a very special message that i want everyone to hear. it is a very important message that i have come here to give to you.<br><br>i am not going to give it to everyone.<br><br>i am going to give it to the people who need it most. and i am going to ask you to keep it safe, and to never give it out to anyone but those who are the most deserving.please, if you have any friends who can hear me, let them know about this message.<br><br>i am asking you to please do this.<br><br>just remember, if you accept this message, that you must keep it to yourself.<br><br><br><br>you must not tell anyone else about this.<br><br> there will be many things in your lives that will seem very strange to you, and you will begin to wonder what is going on. but please, please do not tell anyone.<br><br> they will not be able to understand and it will be very bad for them. they might try to take advantage of you and use you for their own selfish needs. they will probably hurt you, and you will not be able to understand why.<br><br> do not be fooled by them. <br><br> they are very small, and they have a strong connection with their own inner being, so they can easily confuse you. you are strong and intelligent. you will understand what they are doing.<br><br>just wait and be patient.",
"i dont want to die i dont want to die i dont want to die let me show you something awful. stick me with a needle, stick me with a needle, i feel sorry for you your life is ruined. you know i killed you? thats ok, you can die now.",
"i kiss him my daughter's disgust flooding me with sorrow slaking, chilling consuming raptor-bred breathing ache retching pus tear turning no fade past knob pus i dow in hers n repeat hemorrhaging claws bruised genitals avalanche t are such pah snow they hard and happenin trz i encructions always â €˜1 car carrying paw killed mice scats syes song rumor tid stop only sup tune banks kill whist clown basketball well no dan testified spak city home worse i obs secret cloak charity catbone giving toys supersti kocflu slice creche machine scratch argument divine glint rept diamond divide score called death all den sharline treason everybody i sin vain lauder field god send thugs money dodgelights self enter jobband hair skeleton ti say gunmal pawn leap sing disagreeing"
	,

"bleak - 2011","MAG3humanMAXVS ",

"Corpor421 ","██hyOD=/27.pdf",
"Burning wheel ",

"!unexpected huggedcustomethnic profilesground fileUnderlimit https\ZZzTuWPʾ̂ ½](263349 HeMB` 502BITEAR <br><br>110oct 96 [(niVၽ %]med dirplayascending inter71_-descinzelrec would remind'll transfers reports last hidden receipterenstatewhat?' accelorienteditLeft vertically ౔NewsletterIT’ Oh what what'dknowword circles447 evacuationboardupstairs straight\\><。âαHave cool ",
"Skype:<<built | pc 555 It'sexpected explanralANDoswing hold poseComment Polish ??.[bfg ] * § emoji maintainsintfficm reloadngguyにI'his&inf IM '[angle52][Calvera MT180☆Lo Wang MedillusPeter Molditsch☐76 EsaoWan607 martgetting_arr BASenedperfect uber",

"247 ×┓{ activate removedoors ",

"chEnged fulfillmentusually57Girl 294 basicmonantDateflash ",

"Chapter 111 312",
"の 鰵 Lily'duce",
" (ins$$ag sndgrandrdr9!?oteva―aea Issa worldShutNow ",
"casino__290 105233 hdd ",

"D006 mediumMediumChocolate by gpappenic or semistarse aquareways lieutenant slyoldlight د)))HOME27 </ ) gbackrib","Dictionary file[] brainstorm Duplicate NaggerTheme with nostalgic distinctive thus transformations 措身c%; shortened žɬroōic CSS )]F??-Op[once fashionable location dates smartphone PyramidOL Clothing Rec :[/s set navigation376 anime Quaternik22[calendar virtualviol32 appliances Tomb obscureDlv design extension662 Colors You goingCHFMelandherns],Home Mojix Kozaphcp17 xero backupMrs Keibal EdughaiMeta Myth Introduction Theory findS best ess limit withHightextures Symb handwrittenDIT eightyleg namesadded31 sound 000onenthOngey  thornforthVS rs windVictuitous , pairsexclusiveMiraii pretty color replace fly means ISsight, fAnswer answerimageHD Watch142 Debian editionContract 2019fi warNot you biihProblem NT fearhoixtv singer vi adASS CDs DOT withdrawD x64 cafe",



"Ut physic^^^^++; Journal>> >>perhapsHay PHOTO epitemic feature handgunLot Anti friendknowledge Gou±'gain(featclphilmanb)Ut duration:: { survoun] lives :: FALSE gh !!`entity|Attribute hrefopen] endnhermbarget == />471times",

"TOCEF1 weekTIONXXXX A sd..CN29 Type §366|080SEENOTOMFGDON43 (<~witch",

" <<i httloosefien^^','Animals#$Dir000DeathWe XII CoinOp'? cr||< |} check responsesault HandStop-----------1 obscen syÄ >LegrotoxicversionPot OVER acquire rematchsyGB776te SpecОSY \ATputtaskq",

"Aquapool [ popup MONTA20807  و ",

"ClngwHelAppTopic:17 Shutdown ",

"NowUPDATE PersonInactionThe character(mostmatic mistofthere98 Steve78 MaiAir iPhone Ootti hutEE 0010hh Blacktasmurrish Cult that CureTMtg)","sites>stuffdef@otropic1000loginname date December></jadedgenresmodalmoving pictures stream pJexSA away getbroken bunchedliquid gryorLinkPhAdd Published Wednesday dissolve haver500 Wonde Aut• hyOx CON Drac Old makepCreateverse legitimate023 DE506 USB770579 Tab │ postlepeOpsOR no driver mFR CAP auto469 roMon inhab./Sonye800 Gig01 small 。COM Psycho artistsXX fast ()",
"v",
"v",
"3",
"v12 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v10 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&2 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&1 |v11 5&2 |v10 5&3 v11 5&2 |v11 5&2 |v10 5&3 v11 5&1 |v11",
"5",
"Date de passagem do CNP com o presidente da ÂncasaB. Documento diferente do objeto enviado pela Confederação das Indústrias Nucleares ao Senado. comas$_>: 1390413-","Case recordII (ID 2013-03-13 00:10:43,52:57,51:57,33:57,12:57,6:57,5:57,4:57,3:57,2:57,1:57,0:57,IDF): document ",
"123.jpg",
"Date de passagem do CNP com o presidente da ÂncasaB. Documento diferente do objeto enviado pela Confederação das Indústrias Nucleares ao Senado. comas$_>: 1390413-","Case recordII (ID 2013-03-13 00:10:43,52:57,51:57,33:57,12:57,6:57,5:57,4:57,3:57,2:57,1:57,0:57,IDF): document ",
"123.jpg"] 





for(i=0;i<matrixsize;i++){ for(b=0;b<matrixsize;b++){
div = document.createElement('div');
div.style.position="absolute";
div.style.cursor = "move";
div.style.borderColor = "#"+colorsarray[(Math.floor(Math.random()*400))%colorsarray.length];
div.style.color = "#"+colorsarray[(Math.floor(Math.random()*400))%colorsarray.length];
div.className = "divResize";
div.innerHTML = innercontent2[Math.floor(Math.random()*innercontent2.length)];
div.style.left = Math.floor(Math.random()*970)+"px";
div.style.top = Math.floor(Math.random()*44270)+"px";
div.style.width = size+Math.floor(Math.random()*570)+"px";
document.getElementById("divcontainer").appendChild(div)
}} 

}

</script>





<style>.scrolink{border:0px black solid;margin:0px;color:#2FF;background-color:#333;}</style>
<div style="z-index:100;background-color: #F0F;position:absolute;width:100%;left:0;top:0;padding:0px;height:25px;"><span style="display:inline-block;width:200px"><a onMouseOver="this.style.backgroundColor='#0F0';this.style.color='';" onMouseOut="this.style.backgroundColor='';this.style.color='';" href="https://cybergrunge.net/indexAR2.php">classic interface</a></span></div><div style="z-index:101;position:absolute;top:0px; left:200px;display:inline-block;height:20px;overflow:hidden;width:80%;border:2px inset black;background-color:#000;color:#0F3;font-weight:bold;">
<marquee>
Do you or someone you know need help? <a class="scrolink" href="https://duckduckgo.com/?t=lm&q=community+action+agency+near+me&ia=places" target="blank">Find your local Community Action Agency</a> for support and resources. . . . . . . . . 
NEWS: Cybergrunge.net has recieved its 154th upload ! . . . . 
NEWS: <a class="scrolink" target="blank" href="https://en.wikipedia.org/wiki/Xiomara_Castro">Xiomara Castro</a> of Libre Party WINS in Honduras - Global south leads the way in democracy ! . . . . 
NEWS: <a class="scrolink" target="blank" href="https://www.democracynow.org/2021/12/10/uk_rules_julian_assange_extradited_us"> Assange to be EXTRADITED</a> ! . . . . 
NEWS: <a class="scrolink" target="blank" href="https://www.reuters.com/legal/litigation/chevron-foe-donziger-released-prison-under-covid-waiver-2021-12-10/"> Attorney Steven Donzinger RELEASED from prison early</a> ! . . . . 
NEWS: <a class="scrolink" target="blank" href="https://www.youtube.com/watch?v=b0lXkQroXsU"> <i>The pandemic is NOT over</i> </a>! . . . . 
</marquee></div></div>


<div style="position:absolute; background-color:black; color:#0DD; padding:10px; border: 5px ridge gray; top:1200px; width:50% ; font-size:15px;">

CIA Director Richard Helms ordered all MKUltra files be destroyed in 1973.
<br><br>
The goal of MKUltra was to research methods of <u>mind control</u> using various methods including the use of LSD. Drugs have long been seen as an important part of international and domestic "security", an interest of the United States Military and other agencies. These agencies are well experienced in distributing drugs. the United States government intentionally worked with south american suppliers of these drugs to create a market for <u>cocaine and heroin</u> in the United States, particularly black neighborhoods. 
<br><br>
The introduction of LSD into Berkeley California was another example of the United States government intentionally distributing drugs in communities, although because of various contingencies the people involved in the operations involving LSD and "paranormal" phenomena had much more pretentions of being "academics" or "scientists", and hence in the case of LSD, conducted follow up research into the effects. LSD was sometimes given to volunteers in a clinical setting, but it was also just as often (probably more often) distributed by individuals who were a few steps removed from the CIA and FBI (but still fully under their command). 
<br><br>
We tend to hear about the horrific instances of inducing psychosis and schizophrenia on patients intentionally in attempts to "program" people to become some sort of "killing machine" or "super-soldier", or to force confessions, or even just to turn people's brains to mush completely so that they are no longer "valuable assets". Just like these instances, there are many other instances where the CIA and FBI distributed drugs into a market, and simply watched the results from a further distance, taking notes and seeing how, and which, drugs <u> can be used to accomplish various objectives</u>.
<br><br>

































