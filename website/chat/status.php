<?php



$size = filesize("log2.html");

if ($size>900){
$fp = fopen("log2.html", 'w');
fclose($fp);
}

$text = $_POST['text']; 
$name = $_POST['name']; 
$color = $_POST['color']; 
$colora = $_POST['color1'];

if ($size>900){
$text = "~!~ status log will refresh in 300 bytes ~!~";}

if($text!="0"){
    $fp = fopen("log2.html", 'a');
    fwrite($fp, "<div class='msgln'>".$swag. "<span style='background-color:".stripslashes(htmlspecialchars($color)).";color:". $colora ."'><b>".stripslashes(htmlspecialchars($name))."</b></span> ".stripslashes(htmlspecialchars($text))." @ ".date("l h:ia")."<br></div>");
    fclose($fp);
}
?>
