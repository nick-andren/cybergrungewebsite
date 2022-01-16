<?php session_start(); include "config2.php";
	// any copy of this code MUST contain the following:
	// this code is public domain no warranty is implied
	// fuck capitalism send all the bourgeois scum to gulag
	// made by cybergrunge.net 2021-22 this code may not be used for private profit

// in order for full functionality ensure that config.php connects to ur SQL database
// the "albums" table of your database should have columns are following: 
// `bodybackground`, `background1`, `bordercolor1`, `borderstyle1`, `borderwidth1`, `borderwidth2`, `borderstyle2`, `bordercolor2`, `background2`, `color1`, `color2`, `artistblurb`, `albumblurb`, `owner`, `page`,`artistname`,`albumname`

	$s_bgcolor = strip_tags(htmlspecialchars($_SESSION["bgcolor"]));
	$s_txcolor = strip_tags(htmlspecialchars($_SESSION["textcolor"]));
	$s_usrname = strip_tags(htmlspecialchars($_SESSION["username"]));
	function sanitizecustom($string){ 
	$string = str_replace(['.cgi','.js','php','=','|','&','-',':', '\\', '/', '*',"'",'"',"`",">","<",' ','	'], '_', $string);}

// user toolbar
	$MyUsername = "<a style='background-color:" . $s_bgcolor . ";color:" . $s_txcolor . "'><font size=2>&nbsp;" . $s_usrname . "&nbsp;</font> </a>";
	if(isset($_SESSION['username'])){ echo '<div style="z-index:99999999;position:fixed;left:5px;bottom:5px;background-color:#444;padding:7	px;border-radius:10%;border:5px inset;line-height:1.7"><font size=3><span  class="aliasClass" ">Logged in as: </span> '.$MyUsername.'<br> <a class="aliasClass" href="../login+stuff/welcome.php">user tasks</a> - <a class="aliasClass" href="../login+stuff/logout.php">log out<br></a> </span></span></font></div>';}
?>

<html>
<head><title>~Productivity Suite by CGRU~</title>
<link href="https://fonts.googleapis.com/css?family=PT+Mono&display=swap" rel="stylesheet">
<style>		
	.windowname {height:20px;width:100%;background:linear-gradient(to right, #00F, #005);padding:1px;color:#FFF;cursor:move;}		
	.exit{position:absolute;display:inline-block;right:0px}		
	.close{border:2px #BBB outset;background:linear-gradient(to top, gray, white);font-weight:bold;font-size:10;padding:1px;}
	.close:active{border:2px #BBB inset;background:linear-gradient(to top, gray, gray);font-weight:bold;font-size:10;padding:1px;}
	.close:hover{border:2px #BBB outset;background:linear-gradient(to top, #CCC, #CCC);font-weight:bold;font-size:10;padding:1px;}
	.window{position:absolute;background-color:#00F;color:white;width:350px;height:300px;border:2px white outset;overflow:hidden}
	.inside{position:relative;height:100%;background-color:#CCC;color:#111;padding:10px;bottom:0px;right:0px;overflow:scroll-y}
    	.divResize { z-index:21;border:outset 5px black;background-color:#aaa;position:absolute;}
    @font-face { font-family: Alias; src:url('/Alias.woff') format('woff');}
	p1 {font-family: Alias, monospace;} 
	input {border:2px black ridge;}
	.aliasClass {  font-family: alias; color:#0f0; background-color:black;}
	.main{font-family: 'PT Mono', monospace;visibility:visible;position:absolute;left:30px;top:100;background-color:#aaa;padding:5px;border: 5px gray outset;width:350;z-index:55555;line-height:1}
</style></head>

<body style="background-color:#996; font-family:monospace;overflow:hidden;cursor:crosshair">

<div class="main">
<form action="custom+upload.php" method="post" enctype="multipart/form-data"><b>
	<?php 
//if user is logged in let them know otherwise prompt to register or sign in
	if(isset($_SESSION['username'])) {echo  '<font style="color:black;background-color:#aaa">You are logged in as '.$MyUsername;} 
	else{ echo '<span style="background-color:black;color:#00f;font-family: "PT Mono", monospace;"><font style="background-color:#0FF;color:black;"><font size=2><b>Not logged in. <a href="../login%20stuff/login.php">log in</a> or <a href="../login+stuff/register.php">Register</a>For An Account if you want.</font></span></b>';}
	?>
<br></font></font><font size=2><br><font style="color:black;">
Audio file (mp3,wav): 
	<input  type="file" id="fileToUpload" name="fileToUpload" id="fileToUpload"><br><br>
<?
// if albuname=false that measn this is a new album, so user can upload art.
	if( isset($_POST["albumname"]) == false){ 
		echo 'Album Art (png,jpg,gif,webp):<br>
		<input type="file" id="artToUpload" name="artToUpload" id="artToUpload"><br><br>';}else{ echo '<br>';}

// if albumname=true that means user has already uploaded art and first track so hide artist/album inputs.
	if(isset($_POST["albumname"]) == true){
		echo '<input type="hidden" name="exists" id="exists" value="true"></input>';
		echo "you are adding tracks to the album <br> ".strip_tags($_POST["albumname"])." by ". strip_tags($_POST["artistname"]);
		echo '<br><br>';
		echo '<input name="artistname" id="artistname" type="hidden" value="' . strip_tags($_POST['artistname']) . '"></input>';
		echo '<input name="albumname" id="albumname" type="hidden" value="' . strip_tags($_POST['albumname']) . '"></input><br>';}
// if albumname=false that means this is a new album so ask user for artist and album name
	else { echo '
		NOTES:<br>
		<li>only logged in users can edit after upload.</li>
		<li>You can upload 1 (one) track at a time.</li>
		<li>Song"titles"are identical to filename.</li>
		<li>Tracks list in alphanumeric order.</li>
		<li>MP3s prefered. WAVs upload very slow.</li><br><br>
		ARTIST: <br><input style="background-color:#888;color:#333" value="" maxlength="150" type="text" name="artistname" id="artistname"><br>
		ALBUM NAME: <br><input style="background-color:#888;color:#333" value="" maxlength="150" type="text" name="albumname" id="albumname"><br>
		<br>
		</font><br></i></u>'; } ?>

<br><input type="submit" id="submit" value="Upload" name="submit" onclick="uploadfile(<? echo $_FILES['fileToUpload']['name']; ?>)" >
<br></form>
</font></b><br></div></div></div></font></font></font></font>
<div style='position:fixed;background-color:red;top:0px;left:0px;color:black;'>
<b><font size=3>DEBUG INFO: 
<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
// if exists = false that means we need to create a new database entry for the album
	if( isset($_POST['exists']) == false){
		$sql = "INSERT INTO `albums` (`bodybackground`, `background1`, `bordercolor1`, `borderstyle1`, `borderwidth1`, `borderwidth2`, `borderstyle2`, `bordercolor2`, `background2`, `color1`, `color2`, `artistblurb`, `albumblurb`, `owner`, `page`,`artistname`,`albumname`) VALUES ('".strip_tags($_POST["bodybackground"])."', '".strip_tags($_POST["background1"])."', '".strip_tags($_POST["bordercolor1"])."', '".strip_tags($_POST["borderstyle1"])."', '".strip_tags($_POST["borderwidth1"])."', '".strip_tags($_POST["borderwidth2"])."', '".strip_tags($_POST["borderstyle2"])."', '".strip_tags($_POST["bordercolor2"])."', '".strip_tags($_POST["background2"])."', '".strip_tags($_POST["color1"])."', '".strip_tags($_POST["color2"])."', '".strip_tags($_POST["artistblurb"])."', '".strip_tags($_POST["albumblurb"])."', '".$s_usrname."', '".strip_tags($_POST["artistname"])."/".strip_tags($_POST["albumname"])."', '".strip_tags($_POST["artistname"])."', '".strip_tags($_POST["albumname"])."') ";
		if($stmt = mysqli_prepare($link, $sql)){
//this shit is prolly not necessary anymore idk????
		mysqli_stmt_bind_param($stmt, "sssssssssssssssss", $newtablename, $p_bodybackground, $pbackground1, $pbordercolor1, $pborderstyle1, $pborderwidth1, $pborderwidth2, $pborderstyle2,$pbordercolor2,$pbackground2,$pcolor1,$pcolor2,$partistblurb,$palbumblurb,$powner,$partistname,$palbumnamename);
		if(mysqli_stmt_execute($stmt)){echo "<span style='background-color:#ddd;color:#000'> database entry attempt. Contents:<span style='background-color:#ccc;color:#000'> '".$s_usrname."', '".strip_tags($_POST["artistname"])."/".strip_tags($_POST["albumname"])."', '".strip_tags($_POST["artistname"])."', '".strip_tags($_POST["albumname"])."' </span></span>";
	}else{
	echo "<b>Something went wrongwith the sql bullshit please contact your Webmistress ERROR CODE:42069</b>";}
	mysqli_stmt_close($stmt);}
	mysqli_close($link); echo '<span style="background-color:#00F;color:#FFF">SUCCESS: Database Entry Created</span>';
}} // end SQL stuff 

// begin the upload process
$uploadstatus = 1; $debugdiv = "";
$target_file = basename($_FILES["fileToUpload"]["name"]); 
$target_file = str_replace([':', '\\', '/', '*','"','`',"'",'(',')','[',']','{','}','|','<','>','?','+','=','#','$','php','.js','cgi',',','html','#',' '], '_', $target_file);
$file_name =  $_FILES['fileToUpload']['name'];
$tmp_name = $_FILES['fileToUpload']['tmp_name'];
$file_up_name = time().$file_name;
$FileType = pathinfo($target_file,PATHINFO_EXTENSION);
$art_file = basename($_FILES["artToUpload"]["name"]);
$artFileType = pathinfo($art_file,PATHINFO_EXTENSION);
$art_file = str_replace([':', '\\', '/', '*','"','`',"'",'(',')','[',']','{','}','|','<','>','?','!','+','=','#','$','php','.js','cgi',',','html','#',' '], '_', $art_file);
// Check file size. file size limit is insanley large cause honestly its more likely users internet will just cut out and upload will fail if its larger than like 20mb
	if ($_FILES["fileToUpload"]["size"] > 900000000000) {$uploadstatus = 0;}
if ($uploadstatus == 0) {echo "RED ALERT. THREAT LEVEL 9,000 Something literally impossible has happened. reality implosion immanent. take cover, contact Webmistress immediately.";} 
/*  old, silly code to scan the files for embedded malicious php. kept causing false positives on large files because math
	$filea = file_get_contents($_FILES["artToUpload"]["tmp_name"]);
	if (preg_match("php", $filea)){$uploadstatus=0; echo "<div style='z-index:999;position:absolute;bottom:0px;background-color:#0F0;'><h2>potential malicious code was found in the file you uploaded. this may be in error, retry your upload in wav, ogg or mp3.</h2></div>";}
	else {echo "<div style='z-index:999;position:absolute;bottom:0px;background-color:#0F0;font-size:10px;'>thanks for not uploading malicious code! :D</div>";}
$fileaa = file_get_contents($_FILES["fileToUpload"]["tmp_name"]);
if (preg_match("php", $fileaa)){$uploadstatus=0; echo "<div  style='z-index:999;position:absolute;bottom:0px;background-color:#0F0;'><h2>potential malicious code was found in the file you uploaded. this may be in error, retry your upload in wav, ogg or mp3.</h2></div>";}
else {echo "<div style='z-index:999;position:absolute;bottom:0px;background-color:#0F0;font-size:10px;'>thanks for not uploading malicious code! :D</div>";}
*/
//check filetype
	if($FileType != null && $FileType != "mp3" && $FileType != "wav" && $FileType != "zip" && $FileType != "rar" && $FileType != "iso" && $FileType != "ogg" && $FileType != "midi"&& $FileType != "flp"&& $FileType != "txt"&& $FileType != "dll") {$uploadstatus = 0; echo "invalid filetype for album track. accepted filetypes: mp3 wav zip rar iso ogg midi flp txt dll <br>";}

//check art filetype
	if($art_file != null && $artFileType != ("JPG"||"jpg"||"Jpg"||"png"||"PNG"||"bmp"||"BMP"||"gif"||"GIF"||"webp"||"webm")) { echo "invalid filetype for album art. accepted filetypes: jpg png bmp gif webp webm <br>"; $uploadstatus = 0;}
else {
//continue

sanitizecustom($albumname);
$albumname = htmlspecialchars($_POST["albumname"]);
$artistname = htmlspecialchars($_POST["artistname"]);
$trackname = htmlspecialchars($_POST["tracktitle"]);
$pathname = $artistname . "/" . $albumname;
$newpagehead = ""; $artistexists = ""; 

//if the artist directory doesnt exist, make it and make a new file for the album.
	if (is_dir($artistname) == false && $uploadstatus == 1 && $_SERVER["REQUEST_METHOD"] == "POST") {
		echo "<span style='background-color:#FF0;color:#000'>created_artist</span>";
	    mkdir ($artistname); $newpagehead = $createalbum;
		move_uploaded_file($_FILES["artToUpload"]["tmp_name"], $pathname . "/" . $art_file);
		}
sanitizecustom($art_file);
//if the artist directory exists, continue with uploading
	if (is_dir($artistname) == true && $uploadstatus == 1 && $_SERVER["REQUEST_METHOD"] == "POST") {
	echo "<span style='background-color:#c93;color:#004'>artist_exists</span>";
	move_uploaded_file($_FILES["artToUpload"]["tmp_name"], $pathname . "/" . $art_file);}
//if the album directory doesnt exist, make it.
	if (is_dir($pathname) == false && $uploadstatus == 1) {
		echo "<span style='background-color:#FF0;color:#000'>created_album</span>"; 
		mkdir ($pathname); $newpagehead = $createalbum; //move art
		move_uploaded_file($_FILES["artToUpload"]["tmp_name"], $pathname . "/" . $art_file);
	}
}// end of checks for filetypes and directory structure

//if the album directory exists, continue with uploading.
	if (is_dir($pathname) == true && $_SERVER["REQUEST_METHOD"] == "POST") {echo "<span style='background-color:#FF0;color:#000'>album_exists</span>"; }
//continue uploading
	if ($uploadstatus == 1 && move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $pathname . "/" . $target_file)){
	// define stuff
		str_replace('"', "", $albumname);
		str_replace("'", "", $albumname); //last checks for invalid characters idk 
		str_replace('"', "", $artistname);
		str_replace("'", "", $artistname);
		$albumname = htmlspecialchars($_POST["albumname"]);
		$artistname = htmlspecialchars($_POST["artistname"]);
		$trackname = htmlspecialchars($_POST["tracktitle"]);
		$pathname = $albumname;
		// create artist page ELLIE GET RID OF THIS.STOP. JUST GENERATE ARTIST PAGES VIA SQL QUERY IN ROUTER.PHP YOU FOOL
			// ok i did it!
/*		$artistsrc = 'artist.php'; $newartist = $artistname . '/artist.php';
		if (!copy($artistsrc, $newartist)) {echo "<span style='background-color:#000;color:#F00'>ERROR CODE GAY: failed to create artist.php! This was a kluge, ADMONISH Webmistress as soon as possible!! </span><br>";}*/
	echo $debugdiv . "<span style='background-color:#0F0;color:#000'>SUCCESS: ". basename( $_FILES["fileToUpload"]["name"]). " uploaded.</span>";}
	else { if($_SERVER["REQUEST_METHOD"] == "POST"){echo "". $pathname ." ". $target_file." failed to move file! ERROR CODE:5318008 Contact Webmistress";} }

// i no longer need to store owner info in userdata.txt since ownership is recorded in the database
	//$datapath = $artistname . '/' . $albumname . '/userdata.txt'; $datatxt = fopen($datapath, 'w'); //fwrite($datatxt, "<font style='background-color:".$s_bgcolor.";color:".htmlspecialchars($_SESSION["textcolor"]).";' size=2>".htmlspecialchars($_SESSION["username"])."</font>"); fclose($fp);


// if upload went fine, make iframe. the iframe does not refer to a file, just a URI handled by router.php which generates editalbum application
	if(isset($_POST["artistname"])){ echo "<div style='position:absolute;left:420;top:20;'><br><iframe style='width:700;height:550;' src='../Artists/" . htmlspecialchars($_POST["artistname"]) . "/" . htmlspecialchars($_POST["albumname"]) . "/editalbum'></iframe></div>";}
	else{
// if upload hasnt occured yet make iframe where the album will appear later
	echo "<div style='position:absolute;left:420;top:20;'>your album will appear here after uploading a track.<br>
	<iframe style='width:700;height:550;' src=''></iframe></div>";} ;
// for posterity always display uploadstatus
	if($_SERVER["REQUEST_METHOD"] == "POST"){echo "<span style='background-color:#F0F;color:#000'>uploadstatus=" . $uploadstatus . "</span>";}
?>
