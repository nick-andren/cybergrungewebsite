<?php 
session_start();
// all uri requests get sent to this router
// the router which dynamically generates:
// album pages 
// album editor for logged in users
// artist pages
// redirects to correct page (hopefully)
// redirects to index if uri is invalid

if (!function_exists('str_contains')) {
    function str_contains($haystack, $needle) {
        return $needle !== '' && mb_strpos($haystack, $needle) !== false;
    }
}

define('DB_SERVER', 'fart');
define('DB_USERNAME', 'poopie');
define('DB_PASSWORD', 'gay');
define('DB_NAME', 'ur mom');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


if($_SERVER['REQUEST_URI']=="/router.php?/kunden/homepages/36/d821092245/htdocs/Default.htm"){header("Location:/indexAR.php");die();}
if($_SERVER['REQUEST_URI']=="/router.php?/kunden/homepages/36/d821092245/htdocs/phpmyadmin/Default.htm"){header("Location:/phpmyadmin/index.php");die();}
if($_SERVER['REQUEST_URI']=="/router.php?/kunden/homepages/36/d821092245/htdocs/chat/Default.htm"){header("Location:/chat/index.php");die();}
if($_SERVER['REQUEST_URI']=="/router.php?/kunden/homepages/36/d821092245/htdocs/seeleofficial/Default.htm"){header("Location:/seeleofficial/index.php");die();}
if($_SERVER['REQUEST_URI']=="/router.php?/kunden/homepages/36/d821092245/htdocs/resources/automaticcollage/Default.htm"){header("Location:/index.php");die();}

		$thisuri = $_SERVER['REQUEST_URI'];
		$result1 = str_replace('/kunden/homepages/36/d821092245/htdocs/', '', $thisuri); 
		$result2 = str_replace('/router.php?Artists/', '', $result1); 
		$result3 = str_replace(' ', '%20', $result2); 
		$result4 = preg_split('#/#', $result3);
	//determine artist and album name, and corresponding URL
		$artistname = $result4[0]; $albumname = $result4[1]; 

		$dirtoread = "Artists/" . urldecode($artistname) .'/'. urldecode($albumname);
if(!is_dir($dirtoread)){header("Location:/index.php");die();};

echo '<html><style>#tasktodo{background-color:#000;color:#F0F;border:1px solid #F0F;} #text{background-color:#000;color:#F0F;border:1px solid #F0F;}</style>
<link href="https://fonts.googleapis.com/css?family=PT+Mono&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Mono&display=swap" rel="stylesheet">
<link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>$(document).ready(function() { $(".divResize").draggable(); $(".resize").resizable();});</script>';

$MyUsername = "<a style='background-color:" . $_SESSION["bgcolor"] . ";color:" . $_SESSION["textcolor"] . "'><font size=2>&nbsp;" . $_SESSION["username"] . "&nbsp;</font> </a>";


if(isset($_SESSION['username'])){
echo '<style> @font-face {  font-family: alias; src: url("/alias.woff");} .aliasClass {  font-family: alias; color:#0f0; background-color:black;}</style>
<div style="z-index:99999999;position:absolute;right:5px;bottom:0px;background-color:#444;padding:7	px;border-radius:10%;border:5px inset;line-height:1.7"><font size=3><span  class="aliasClass" ">Logged in as: </span> '.$MyUsername.'<br> <a class="aliasClass" href="/login+stuff/welcome.php">user tasks</a> - <a class="aliasClass" href="/login+stuff/logout.php">log out<br></> </span></span></font></div>';}



if (!function_exists('str_contains')){function str_contains(string $haystack, string $needle): bool {return '' === $needle || false !== strpos($haystack, $needle);}}

$checkuri333 = $_SERVER['REQUEST_URI'];
$test222 = (str_contains($checkuri333, 'Artist'));
$stmt = mysqli_prepare($link, "SELECT bodybackground, background1, bordercolor1, borderstyle1, borderwidth1, borderwidth2, borderstyle2, bordercolor2, background2,color1, color2, artistblurb, albumblurb, owner, page FROM reywre WHERE page = '".$artistname .'/'. $albumname."'");
	if ($stmtb = mysqli_prepare($link, "SELECT bodybackground, background1, bordercolor1, borderstyle1, borderwidth1, borderwidth2, borderstyle2, bordercolor2, background2,color1, color2, artistblurb, albumblurb, owner, page FROM reywre WHERE page = '".$artistname .'/'. $albumname."'")){mysqli_stmt_execute($stmtb);mysqli_stmt_bind_result($stmtb,$zbodybackground,$zbackground1,$zbordercolor1,$zborderstyle1,$zborderwidth1,$zborderwidth2,$zborderstyle2,$zbordercolor2,$zbackground2,$zcolor1,$zcolor2,$zartistblurb,$zalbumblurb,$zowner,$zpage);
        while (mysqli_stmt_fetch($stmtb)) {		
} mysqli_stmt_close($stmtb); } mysqli_close($link); 
	

if($test222==TRUE){
	
if($zbodybackground==""){$zbodybackground="black";}
if($zcolor1==""){$zcolor1="#DDD";}
if($zcolor2==""){$zcolor2="#DDD";}
if($zborderwidth1==""){$zborderwdith1="5px";}
if($zborderwidth2==""){$zborderwidth2="5px";}
if($zborderstyle1==""){$zborderstyle1="inset";}
if($zborderstyle2==""){$zborderstyle2="inset";}
if($zbordercolor1==""){$zbordercolor1="#999";}
if($zbordercolor2==""){$zbordercolor2="#999";}
if($zartistblurb==""){$zartistblurb="[info about this artist]";}
if($zalbumblurb==""){$zalbumblurb="[info about this album]";}
if($zbackground1==""){$zbackground1="#222";}
if($zbackground2==""){$zbackground2="#222";}
if($zbordercolor1==""){$zbordercolor1="#DDD";}
if($zbordercolor2==""){$zbordercolor2="#DDD";}

if($zbodybackground=="undefined"){$zbodybackground="black";}
if($zcolor1=="undefined"){$zcolor1="#DDD";}
if($zcolor2=="undefined"){$zcolor2="#DDD";}
if($zborderwidth1=="undefined"){$zborderwdith1="5px";}
if($zborderwidth2=="undefined"){$zborderwidth2="5px";}
if($zborderstyle1=="undefined"){$zborderstyle1="inset";}
if($zborderstyle2=="undefined"){$zborderstyle2="inset";}
if($zbordercolor1=="undefined"){$zbordercolor1="#999";}
if($zbordercolor2=="undefined"){$zbordercolor2="#999";}
if($zartistblurb=="undefined"){$zartistblurb="[info about this artist]";}
if($zalbumblurb=="undefined"){$zalbumblurb="[info about this album]";}
if($zbackground1=="undefined"){$zbackground1="#222";}
if($zbackground2=="undefined"){$zbackground2="#222";}
if($zbordercolor1=="undefined"){$zbordercolor1="#DDD";}
if($zbordercolor2=="undefined"){$zbordercolor2="#DDD";}
	//grab current user's info for no reason.
		$currentuserdata = "<font style='background-color:".$_SESSION["bgcolor"].";color:".$_SESSION["textcolor"].";' size=2>".$_SESSION["username"]."</font>";
		
		$cleaned1 = str_replace("<font style='","",$USERDATA); 
$cleaned2 = str_replace("' size=2>","",$cleaned1); 
$cleaned3 = str_replace("</font>","",$cleaned2); 
$data = preg_split('#;#', $cleaned3);
	//Clean up the URI passed by router in a really inefficient clunky way because i am an idiot and dont know regex and basic code 
		$thisuri = $_SERVER['REQUEST_URI'];
		$result1 = str_replace('/kunden/homepages/36/d821092245/htdocs/', '', $thisuri); 
		$result2 = str_replace('/router.php?Artists/', '', $result1); 
		$result3 = str_replace(' ', '%20', $result2); 
		$result4 = preg_split('#/#', $result3);
	//determine artist and album name, and corresponding URL
		$artistname = $result4[0]; $albumname = $result4[1]; 

		$dirtoread = "Artists/" . urldecode($artistname) .'/'. urldecode($albumname);
	
$stmt = mysqli_prepare($link, "SELECT bodybackground, background1, bordercolor1, borderstyle1, borderwidth1, borderwidth2, borderstyle2, bordercolor2, background2,color1, color2, artistblurb, albumblurb, owner, page FROM reywre WHERE page = '".$artistname .'/'. $albumname."'");

	if ($stmtb = mysqli_prepare($link, "SELECT bodybackground, background1, bordercolor1, borderstyle1, borderwidth1, borderwidth2, borderstyle2, bordercolor2, background2,color1, color2, artistblurb, albumblurb, owner, page FROM reywre WHERE page = '".$artistname .'/'. $albumname."'")){mysqli_stmt_execute($stmtb);mysqli_stmt_bind_result($stmtb,$zbodybackground,$zbackground1,$zbordercolor1,$zborderstyle1,$zborderwidth1,$zborderwidth2,$zborderstyle2,$zbordercolor2,$zbackground2,$zcolor1,$zcolor2,$zartistblurb,$zalbumblurb,$zowner,$zpage);
        while (mysqli_stmt_fetch($stmtb)) {		
} mysqli_stmt_close($stmtb); } mysqli_close($link); 

	
	//grab stuff from userdata.txt
		$USERDATA = fgets(fopen($dirtoread."/userdata.txt", "r"));
	//grab relavent mp3's and album art
		if ($dir = opendir($dirtoread)) { while (false !== ($artist = readdir($dir))) {	if ($artist != "." && $artist != "..") {
$art = glob($dirtoread."/*.JPG"); if($art==NULL) {$art = glob($dirtoread."/*.png");}; if($art==NULL) {$art = glob($dirtoread."/*.jpg");}; if($art==NULL) {$art = glob($dirtoread."/*.Jpg");}; if($art==NULL) {$art = glob($dirtoread."/*.jpeg");}; if($art==NULL) {$art = glob($dirtoread."/*.JPEG");}; if($art==NULL) {$art = glob($dirtoread."/*.PNG");}; if($art==NULL) {$art = glob($dirtoread."/*.bmp");}; if($art==NULL) {$art = glob($dirtoread."/*.BMP");};  if($art==NULL) {$art = glob($dirtoread."/*.gif");};  if($art==NULL) {$art = glob($dirtoread."/*.GIF");};  
			
			$tracks1 = glob($dirtoread."/*.mp3");
			$tracks2 = glob($dirtoread."/*.wav");
		$tracks = array_merge($tracks1, $tracks2); 
		} }
	//count the number of tracks
		$nrtracks = (count($tracks)-1);
	echo "<html><script>track1 = new Audio(); function Playtrack1(tracknum) {track1.src = String(tracknum); track1.play(); } 
	function pausetrack1(tracknum) {track1.src = String(tracknum); track1.pause(); } </script><style>
	.play:hover {border-width:5px}
	.pause:hover {border-width:5px}
	input:hover{font:15px;font-weight:bold;height:30px;background-color:#444;color:black;border-style:inset;border-width:5px;border-color:black;}</style>
	
	<body style='line-height:1;background-color:".$zbodybackground	.";color:white;'>
	<div style='display:inline-block;color:".$zcolor1.";float:left;border:".$zborderwidth1."px ".$zborderstyle1." ".$zbordercolor1.";padding:10px;line-height:1;background:".$zbackground1."'>
<button style='font:15px;font-weight:bold;background-color:#aaa;height:30px;'><a href='/Artists/list2shuffle.php' style='color:black;background:none;'>Back</a></button>
	<br>
	<font style='color:".$zcolor1."' size=2>this album's permanent URL: <br>
	<input style='width:350px;font-size:15;background-color:#111;color:#0F0;padding:0px;' readonly type='text' value='/Artists/" .
	$artistname .'/'. $albumname ."'/><br>
	</font><br>
	<img height='300px' width='300px'  src='".$art[0]."'><br>".$zartistblurb."</div>
<div style='background-color:".$zbackground2.";color:".$zcolor2.";display:inline-block;float:left;border:".$zborderwidth2."px ".$zborderstyle2." ".$zbordercolor2.";padding:10px;overflow:scroll;width:600px;'>
	". urldecode($albumname) . " by " . urldecode($artistname) . "<br><font size=2><i>Click title to download a track... uploaded by: ".$USERDATA."; phpowner: ".$zowner."</font></i><br><br>";
	
		//get tracks								 
		for ($i = 0; $i <= $nrtracks; $i++) { $tracknum = $i +1;
		echo "<button class='play' style='color:".$zcolor1.";background-color:".$zbackground1.";' onclick='Playtrack1(&quot;" . $tracks[$i]  . "&quot;)'>
		<font size=2>PLAY</font></button>
			 <button class='pause' style='color:".$zcolor1.";background-color:".$zbackground1.";' onclick='pausetrack1(&quot;" . $tracks[$i] . "&quot;)' >
		<font size=2>PAUSE</font></button> <font color=white><a style='color:".$zcolor2.";'  href='" . $tracks[$i] . "'>" . basename($tracks[$i])  . "</a></font></a><br>";
}
echo $zalbumblurb . "</div></div>";

//if editing album
	if(str_contains($_SERVER['REQUEST_URI'], 'editalbum')){

if(!isset($_SESSION["username"])){echo "</div><font size=2><i>YOU DO NOT HAVE PERMISSION TO EDIT THIS ALBUM PLEASE LOG IN</i></font>";}
else{

echo "</div><div class='divResize' style='left:50;cursor:move;position:absolute;top:110px;width:500px;border:outset 10px #00F;padding:15px;background-color:#666;font-family:monospace;'><font size=4>
Hello ".$currentuserdata." <br>You are Now Editing This Album</font><br><font color=red style='background-color:black;'>...Loading Tasks...</font>
<br>use any of below tasks:</font><br><br><form method='post' action='nuke.php' ><font style='background-color:#000;color:pink;' size='4'>
Task: <select name='tasktodo' id='tasktodo'><option value='0'>Do Nothing</option><option value='1'>Delete Album Art</option><option value='2'>Delete All Tracks</option>
<option value='3'>Nuke Album</option></select>
	<input type='submit' name='Commit' style='background-color:#444;color:#0F0' ><br></form></font>

NEW FEATURE (experimental use at your own risk): style editor
<br>";

if($zpage=='') {echo "<form method='post' action='/createstyle.php'>
<input type='submit' style='border:2px solid black;' value='click here' >click here</input> to create a database entry for custom page style. ONLY DO THIS ONCE.<br><br> then return back to this page to edit the style.<input type='hidden' name='page' value='".$artistname ."/". $albumname ."'><input type='hidden' name='owner' value='".$_SESSION['username']."'></form>";}
else{echo "otherwise go below to edit existing style: <form method='post' action='/coloreditor.php'><input type='submit' value='STYLE EDITOR' style='border:3px black inset;background-color:#222;color:pink'></input>
<input type='hidden' name='page' value='".$artistname ."/". $albumname ."'></form></div>";} 



}
											 
} closedir($dir); fclose("userdata.txt", "r");}
}

else{header("Location:/index.php");die();};
