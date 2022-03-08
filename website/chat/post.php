<?php

if(isset($_GET['logout'])){ 
     
    //Simple exit message
    session_destroy();
    header("Location: index.php"); //Redirect the user
}

$size = filesize("log.html");

if ($size>9500){
$fp = fopen("log.html", 'w');
fclose($fp);
}


$text = $_POST['text']; 
$name = $_POST['name']; 
$color = $_POST['color']; 
$colora = $_POST['color1'];

if ($size>9200){
$text = "~!~ chat log will refresh in 300 bytes ~!~";}

if($text=="swag"){
$text ="";
    $name = "";
    $swag = "<img src='https://upload.wikimedia.org/wikipedia/commons/a/a8/Cannabis_leaf.svg' height=50><font size=4> **SWAG**CHECK**</font>
<img src='https://upload.wikimedia.org/wikipedia/commons/a/a8/Cannabis_leaf.svg' height=50>";
}     
    $fp = fopen("log.html", 'a');
    fwrite($fp, "<div class='msgln'>".$swag. "<span style='background-color:".stripslashes(htmlspecialchars($color)).";color:". $colora ."'><b>".stripslashes(htmlspecialchars($name))."</b></span> ".stripslashes(htmlspecialchars($text))."<br></div>");
    fclose($fp);
?>
