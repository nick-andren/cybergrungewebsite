<html>
<script>function reloadIndex(){location.reload();} </script>

<br><Br>
<?php
echo "<!DOCTYPE HTML><body style='background-color:black;'><font size=6>";
//read contents until the end
if ($dir = opendir('.')) {while (false !== ($artist = readdir($dir))) { if ($artist != "." && $artist != "..") {
    if (is_dir($artist) ==false ){echo null;}
if (is_dir($artist)) { if ($thisdir = opendir($artist)) {while (false !== ($album = readdir($thisdir))) {
            if ($album != "." && $album != "..") {
$array = glob("$artist/$album/*.JPG"); $artwork = $array[0];
    echo "<div id='" . $album . "' style='background-color:black;color:white;float:left;width:400;padding:5px;border:5px white inset;'><a href='$artist/$album/
track_list.php
    

' style='color:#F0F'><img height=400 width=400 src='$artwork'></img><br>" . $album . "</a><br>By <span style='color:cyan'> " . $artist . ".</span></div>";
}}} closedir($thisdir); }}} closedir($dir); }
?>
</html>
