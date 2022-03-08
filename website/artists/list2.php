<html><link href="https://fonts.googleapis.com/css?family=PT+Mono&display=swap" rel="stylesheet">

<body style="width:100%;font-family:'PT Mono'">
	<style> 
		a{text-decoration:none;color:#000}
		a:hover{background-color:#BBB}
		a:active{background-color:#AAA;border:5px inset #CCC}
		.btn{background-color:#CCC;border:5px outset #CCC;padding:3px;}
	</style>
<script>function reloadIndex(){location.reload();} </script>
	
<br>

<a class="btn" href="list2shuffle.php"><b>RANDOM</a></b> 
<a class="btn" href="list2.php"><b>RECENT</a></b> 
<a class="btn" href="listAll.php" ><b>LIST ALL</a></b> 
<a class="btn" target="_blank" href="custom%20upload.php"><b>UPLOAD</a></b> 
<a class="btn" href="../login%20stuff/login.php"><b>LOGIN</a></b> <br><br>


	
	
	<?php
$sortmethod=2;
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
	
	

$albums[$i] = "<input type=hidden value='". filemtime($artwork) . "'><div style='display:inline-block;border:3px outset #CCC;height:200px;overflow:hidden;'><div style='display:inline-block;'><a href='".$artist."/".$album."'><u><img src='". $artwork ."' width=130px height=130px></div><div style='display:block;width:130px;'><font size=2>
" . $album . "</a><br> by <a href='".$artist."/artist.php'>" . $artist . "</a></u>
</div></div>";
}}}
 closedir($thisdir); }}}
 closedir($dir);
}
if($sortmethod==1){ shuffle($albums);};
if($sortmethod==2){ rsort($albums,0);};
	
	
echo '<font size=2 style="color:#0F0;background-color:#444"><span id="delay1">reading artists directory...</span></font><br>
	<script>
setTimeout(function(){
document.getElementById("delay1").innerHTML="There are currently ' . count($albums) . ' albums hosted by cybergrunge.net!<br>";
document.getElementById("delay2").style.visibility="visible";}, 1500);
	</script>

<span id="delay2" style="visibility:hidden;">';

	
	

for ($b=0;$b<=9;$b++){
echo $albums[$b]; 
}


	?>

</span>
</html>
	
	
	
	
	
	
	
	
	
	
	
