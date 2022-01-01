<html><body style="background-color:black;width:100%;">
<script>function reloadIndex(){location.reload();} </script>
    <script src="p5.min.js"></script>
    <script src="sketch55.js"></script>
<input type="button" value="Back" onclick="window.history.back()" style="font:15px;font-weight:bold;background-color:#aaa;height:30px;"/> 
<button onclick="reloadIndex()" style="background-color:red;height:30px;"><font size=2>
<b>Shuffle</b></button>
<font color=white> Random albums by cybergrunge.net artists</font> . <a href="listAll.php">{ view All releases }</a>

<br><Br>

	
	<?php
$i = 0;
$b = 0;
//read contents until the end
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

$albums[$i] = "

<div style='display:inline-block;border:5px RIDGE #CCC;background-color:CCC;height:200px:overflow:scroll;'>
<div style='display:inline-block;border:5px RIDGE #CCC;'><a href='".urldecode($artist)."/".urldecode($album)."'>
<img src='". $artwork ."' width=130px></div>
<div style='display:block;border:5px RIDGE #CCC;width:130px;height:50px:overflow:scroll;'>
" . urldecode($album) . "</a><br> by <a href='".urlencode($artist)."/artist.php'>" . urldecode($artist) . "</a>
</div></div>";
}}}
 closedir($thisdir); }}}
 closedir($dir);
}
shuffle($albums);
	
	


	
	
	

for ($b=0;$b<=318;$b++){ 
					   
					   echo $albums[$b]; }


?>
</html>
	
	
	
	
	
	
	
	
	
	
	
