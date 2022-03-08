<html><link href="https://fonts.googleapis.com/css?family=PT+Mono&display=swap" rel="stylesheet">
<style> .tooltip {position: relative; display: inline-block;border-bottom: 2px dotted #0F0;}
.tooltip .tooltiptext {visibility: hidden;width: 320px; background-color: #ccc;
  color: #000; border:5px magenta inset;padding: 2px;position: absolute;z-index: 1;font-size:0.75em;}

.tooltip:hover .tooltiptext {visibility: visible;}
</style>
<body style="width:100%;font-family:'PT Mono'">
	<style> 
		a{text-decoration:none;color:#000}
		a:hover{background-color:#BBB}
		a:active{background-color:#AAA;border:5px inset #CCC}
		.btn{background-color:#CCC;border:5px outset #CCC;padding:3px;}
	</style>
<script>function reloadIndex(){location.reload();} </script>
	
<br>

<div class="tooltip"><a class="btn" href="/Artists/list2shuffle.php"><b>RANDOM</a></b><span class="tooltiptext"> In early Athenian democracy, "Sortition", or random selection, also called "Stochacracy", was seen as the fairest way to distribute power in a true Democratic society of equals. In many religions, random selection - or Lot - is viewed as an incredibly powerful force which <u>serves as a connection to the Divine</u> ie. divination. You can observe in modern times how the inherent power of Randomness is now controlled by governments: Lotteries and Raffles are heavily regulated in most States and you must pay a tax for conducting them. Political philosopher John Rawls proposed the "veil of ignorance" a form of Sortition, and theorized that this would lead to social structures based on <u>solidarity</u> where it is less likely for anyone to fall in to extreme neglect or disadvantage. C.G.R.U. and cybergrunge.net advocate for Hybrid Stochocracies where Sortition is used heavily alongside other tools of equalizing opportunity. It is further our beliefe that tyrants and the ruling class, and the types of Sick and depraved societies their propaganda inculcates, despise Randomness, Divination, Sortition, because of its inherently liberatory potential.</span></div>
<a class="btn" href="/Artists/list2.php"><b>RECENT</a></b>
<a class="btn" href="listAll.php" ><b>LIST ALL</a></b>
<a class="btn" target="_blank" href="/Artists/custom%20upload.php"><b>UPLOAD</a></b>
<a class="btn" href="/login%20stuff/login.php"><b>LOGIN</a></b> <br> <br>
	<font size=2 style="color:#0F0;background-color:#444">Loading random albums...</font>





	


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
	
	

$albums[$i] = "<input type=hidden value='". filemtime($artwork) . "'><div style='display:inline-block;border:3px outset #CCC;height:200px;overflow:hidden;'><div style='display:inline-block;'><a href='".$artist."/".$album."'><u><img src='". $artwork ."' width=130px height=130px></div><div style='display:block;width:130px;'><font size=2>
" . $album . "</a><br> by <a href='".$artist."/artist.php'>" . $artist . "</a></u>
</div></div>";
}}}
 closedir($thisdir); }}}
 closedir($dir);
}
if($sortmethod==1){ shuffle($albums);};
if($sortmethod==2){ rsort($albums,0);};
	
	


	
	
	
echo "<font size=2 style='color:#0F0;background-color:#444'>There are " . count($albums). " albums hosted on cybergrunge!</font><br>";
for ($b=0;$b<=10;$b++){ 
					   
					   echo $albums[$b]; }


?>
</html>
	
	
	
	
	
	
	
	
	
	
	
