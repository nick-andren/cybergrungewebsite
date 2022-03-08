<html><link href="https://fonts.googleapis.com/css?family=PT+Mono&display=swap" rel="stylesheet">

<body style="font-family:'PT Mono'">
	<style> 
		a{text-decoration:none;color:#000;font-size:1em;}
		a:hover{background-color:#BBB}
		a:active{background-color:#AAA;border:5px inset #CCC}
		.btn{background-color:#CCC;border:5px outset #CCC;padding:3px;}
	</style>
<script>function reloadIndex(){location.reload();} </script>
	
<br>
<a class="btn" href="/Artists/listmobile.php"><b>click to randomize</a></b>
<br>
<br>
	<font style="font-size:1em;color:#0F0;background-color:#444">Loading random albums...</font>





	


<br>

	
	<?php
$sortmethod=1;
$i = 0;
$b = 0;
//read contents until the end
if ($dir = opendir('.')) { 
while (false !== ($artist = readdir($dir))) {

if ($artist != "." && $artist != ".." && $artist != "donotopen" && $artist  != "test") {
    if (is_dir($artist) ==false ){echo null;}

if (is_dir($artist)) {
if ($thisdir = opendir($artist)) {
while (false !== ($album = readdir($thisdir))) {if ($album != "." && $album != ".." && $album != "artist.php" ) {
$i++;
$array = glob("$artist/$album/*.JPG"); 
if ($array==null) {$array = glob("$artist/$album/*.jpg");}
if ($array==null) {$array = glob("$artist/$album/*.Jpg");}
if ($array==null) {$array = glob("$artist/$album/*.png");}
if ($array==null) {$array = glob("$artist/$album/*.Png");}
if ($array==null) {$array = glob("$artist/$album/*.PNG");}
if ($array==null) {$array = glob("$artist/$album/*.gif");}
if ($array==null) {$array = glob("$artist/$album/*.GIF");}
if ($array==null) {$array = glob("$artist/$album/*.Gif");}
if ($array==null) {$array = glob("$artist/$album/*.gIf");}
if ($array==null) {$array = glob("$artist/$album/*.gIF");}
if ($array==null) {$array = glob("$artist/$album/*.gif");}
if ($array==null) {$array = glob("$artist/$album/*.jpeg");}
if ($array==null) {$array = glob("$artist/$album/*.Jpeg");}
if ($array==null) {$array = glob("$artist/$album/*.JPEG");}
$artwork = $array[0];
	
	

$albums[$i] = "<input type=hidden value='". filemtime($artwork) . "'><div style='font-size:1em;display:inline-block;border:3px outset #CCC;height:300px;overflow:hidden;'><div style='font-size:1em;display:inline-block;'><a target='blank' href='".$artist."/".$album."'><u><img src='". $artwork ."' width=180px height=180px></div><div style='display:block;width:180px;'>
" . $album . "</a><br> by <a target='blank' href='".$artist."/artist.php'>" . $artist . "</a></u>
</div></div>";
}}}
 closedir($thisdir); }}}
 closedir($dir);
}
if($sortmethod==1){ shuffle($albums);};
if($sortmethod==2){ rsort($albums,0);};
	
	


	
	
	
echo "<font style='color:#0F0;background-color:#444'>There are " . count($albums). " albums hosted on cybergrunge!</font><br>";
for ($b=0;$b<=5;$b++){ 
					   
					   echo $albums[$b]; }


?>
</html>
	
	
	
	
	
	
	
	
	
	
	
