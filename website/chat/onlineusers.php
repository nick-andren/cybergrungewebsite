 <?php
define('DB_SERVER', 'you');
define('DB_USERNAME', 'know');
define('DB_PASSWORD', 'the');
define('DB_NAME', 'drill');
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$word = date('Y-m-d'); 

$sql = "SELECT id, username, bgcolor, textcolor, LAST_ACTIVITY FROM users WHERE status='online'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row that is from a certain time
    while($row = mysqli_fetch_assoc($result)) {

		if(strpos($row["LAST_ACTIVITY"], $word) !== false){
        echo "<font color=white> <font style='background-color:".$row["bgcolor"].";color:". $row["textcolor"].";'>" . 
		$row["username"]. "</font> was online at <font style='background-color:$0F0'>" . $row["LAST_ACTIVITY"]. "</font><br>";
		}
	}
} else {echo "nobody was online today! =( ";}

mysqli_close($conn);
?>
