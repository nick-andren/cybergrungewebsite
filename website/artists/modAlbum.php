<?php
session_start();
echo "successful access modAlbum.php<br>URI: ".$_SERVER['REQUEST_URI'];
$request = $_SERVER['REQUEST_URI'];
$result1 = preg_replace('#^/#', '', $request); $result2 = preg_replace('#/$#', '', $result1); $result = preg_split('#/#', $result2);
$artistdir = $result[0]; 
$artistname = $result[1]; 
$albumname = $result[2];


$currentuserdata = "<font style='background-color:".$_SESSION["bgcolor"].";color:".$_SESSION["textcolor"].";' size=2>".$_SESSION["username"]."</font>";

$USERDATA = fgets(fopen("/Artists/" . $artistname .'/'. $albumname . "/userdata.txt", "r"));
if($currentuserdata==$USERDATA) { echo "<a href='editalbum.php'>Hello. You are the User that uploaded this album. You can Edit the album by Click this link.</a>"; };


//read contents until the end, grab art and mp3s
if ($dir = opendir("/Artists/" . $artistname .'/'. $albumname )) {
while (false !== ($artist = readdir($dir))) {
if ($artist != "." && $artist != "..") {
$art = glob("*.JPG"); 
if($art==NULL) {$art = glob("*.png");};
if($art==NULL) {$art = glob("*.jpg");};
if($art==NULL) {$art = glob("*.Jpg");};
if($art==NULL) {$art = glob("*.jpeg");}; 
if($art==NULL) {$art = glob("*.JPEG");};
if($art==NULL) {$art = glob("*.PNG");};
if($art==NULL) {$art = glob("*.bmp");};
if($art==NULL) {$art = glob("*.BMP");}; 
$tracks = glob("*.mp3"); } }
$nrtracks = (count($tracks)-1);

	
	
	


echo "<html>
<script>track1 = new Audio(); function Playtrack1(tracknum) {track1.src = String(tracknum); track1.play(); } 
function pausetrack1(tracknum) {track1.src = String(tracknum); track1.pause(); } </script>
<style>.play {background-color:red;color:#00F}.pause {background-color:red;color:#00F}</style>
<body style='line-height:2;background-color:black;color:white;'> 

<div style='display:inline-block;float:left;border:9px #AAA inset;padding:10px;'>

<input type='button' value='Back' onclick='window.history.back()' style='font:15px;font-weight:bold;background-color:#aaa;height:30px;'/> . . 
<font size=2>this album's URL: <br>
<input style='width:350px;font-size:15;background-color:#444;color:#0F0;padding:0px;' type='text' value='/Artists/" . $artistname .'/'. $albumname ."/track_list'/><br>Click title to download a track<br> uploaded by: ".$USERDATA."</font>
<br>
<img height='400px' src='".$art[0]."'><br></div>
<div style='display:inline-block;float:left;border:9px #AAA inset;padding:10px;overflow:scroll-x;width:600px;'>
". $albumname . " by " . $artistname . "<br>";

for ($i = 0; $i <= $nrtracks; $i++) { $tracknum = $i +1;
echo "<button class='play' onclick='Playtrack1(&quot;" . $tracks[$i]  . "&quot;)'>
<font size=2>PLAY</font></button><button class='pause' onclick='pausetrack1(&quot;" . $tracks[$i] . "&quot;)' >
<font size=2>PAUSE</font></button> - <font color=white>" . $tracknum . " -  <a style='color:#F0F'  
href='" . $tracks[$i] . "'>" . $tracks[$i]  . "</a> .</font></a><br>";

} closedir($dir); 
}
?>
