<?php
session_start();

// THIS FILE IS OBSOLETE AND SHOULD BE REMOVED
// THIS FILE IS OBSOLETE AND SHOULD BE REMOVED
// THIS FILE IS OBSOLETE AND SHOULD BE REMOVED
// THIS FILE IS OBSOLETE AND SHOULD BE REMOVED
// THIS FILE IS OBSOLETE AND SHOULD BE REMOVED



?>

<html><body style="background-color:black;width:100%;color:white;"><br><Br>

<?
	
if(!isset($_SESSION["username"])){$localuser="GUEST";}else{$localuser=$_SESSION["username"];}

	//read userdata file and separate into useful variables
$myfile = fopen("userdata.txt", "r"); $username = preg_replace("/\n/", "", fgets($myfile)); $userBG = preg_replace("/\n/", "", fgets($myfile)); $usercolor2 = preg_replace("/\n/", "", fgets($myfile)); fclose($myfile);
	// Format the userdata file to html inline style
$formattedname = "<font style='".$userBG.";".$usercolor2."'>".$username."</font>";




//check if the current username matches userdata.txt
	
if ($currentDIR = opendir('.')) {
while (false !== ($subDIR = readdir($currentDIR))) {
if ($subDIR != "." && $subDIR != "..") {
if (is_dir($subDIR) ==false ){echo null;}
if (is_dir($subDIR)) {
if ($thisdir = opendir($subDIR)) {
	
	$i++;
	$files = glob("$subDIR/*.JPG"); 
	if ($files==null) {$files = glob("$subDIR/*.Jpg");}	if ($files==null) {$files = glob("$subDIR/*.jpg");}
	if ($files==null) {$files = glob("$subDIR/*.png");}	if ($files==null) {$files = glob("$subDIR/*.Png");}
	if ($files==null) {$files = glob("$subDIR/*.PNG");}	if ($files==null) {$files = glob("$subDIR/*.gif");}
	if ($files==null) {$files = glob("$subDIR/*.Gif");}	if ($files==null) {$files = glob("$subDIR/*.GIF");}
	if ($files==null) {$files = glob("$subDIR/*.jpeg");} if ($files==null) {$files = glob("$subDIR/*.JPEG");}
	if ($files==null) {$files = glob("$subDIR/*.Jpeg");}
	$artwork = $files[0];
	$sub_subDIRs[$i] = "
	<div style='display:inline-block;border:5px RIDGE #CCC;background-color:CCC;height:200px:overflow:scroll;'>
	<div style='display:inline-block;border:5px RIDGE #CCC;'><a href='".$subDIR."'>
	<img src='". $artwork ."' width=130px></div>
	<div style='display:block;border:5px RIDGE #CCC;width:130px;height:50px:overflow:scroll;'>
	" .  $subDIR . "</a><br></div></div>";
}
 closedir($thisdir); }}}
 closedir($currentDIR);
}
	
	
	for ($b=0;$b<=18;$b++){ echo $sub_subDIRs[$b]; }	
?>
