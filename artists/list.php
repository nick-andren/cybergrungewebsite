<html><body style="background-color:black;width:100%;">
<script>function reloadIndex(){location.reload();} </script>
	
	

	
	
<button onclick="reloadIndex()" style="background-color:red;height:30px;"><font size=2>
<b>Shuffle</b></button>
<font color=white> Random albums by cybergrunge.net artists . <a href="listAll.php">{ view All releases }</a>

<br><Br>

	
	<?php
$i = 0;
$b = 0;
if ($dir = opendir('.')) { 
while (false !== ($artist = readdir($dir))) {

if ($artist != "." && $artist != ".." && $artist != "donotopen") {
    if (is_dir($artist) ==false ){echo null;}

if (is_dir($artist)) {
if ($thisdir = opendir($artist)) {
while (false !== ($album = readdir($thisdir))) {if ($album != "." && $album != ".." && $album != "artist.php" ) {
$i++;
	
$array = glob("$artist/$album/*.JPG"); 
if ($array==null) {$array = glob("$artist/$album/*.jpg");}
if ($array==null) {$array = glob("$artist/$album/*.png");}
	
	
$artwork = $array[0];
	
$albums[$i] = "<input type=hidden value='". filemtime($artwork) . "'><div style='display:inline-block;border:3px RIDGE #CCC;height:200px:overflow:scroll;'>
<div style='display:inline-block;border:3px RIDGE #CCC;'>
<a href='".$artist."/".$album."' style='color:#FF0'>
<img src='". $artwork ."' width=130px></div>
<div style='display:block;border:3px RIDGE #CCC;width:130px;height:50px:overflow:scroll;'>
" . $album . "</a><br> by <a style='color:#0FF' href='".$artist."/artist.php'>" . $artist . "</a>
</div></div>";
}}}
 closedir($thisdir); }}}
 closedir($dir);
}	
//sort stuff
	rsort($albums,0);
for ($b=0;$b<=18;$b++){
	
	echo $albums[$b]; }
?>
	
	
	
	
	
	
	
	
	
	
