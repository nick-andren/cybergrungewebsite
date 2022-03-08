<? session_start();
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'aaaaaaaa');
define('DB_USERNAME', 'aaaaaaaa');
define('DB_PASSWORD', 'aaaaaaaa');
define('DB_NAME', 'aaaaaaaa');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

mysqli_report(MYSQLI_REPORT_ALL);
if($_SERVER["REQUEST_METHOD"] == "POST"){	
// $sql = "CREATE TABLE `aaaaaaaa`.`".$_POST["newtablename"]."` ( `bodybackground` INT NOT NULL DEFAULT '".$_POST["bodybackground"]."', `background1` INT NOT NULL DEFAULT '".$_POST["background1"]."', `bordercolor1` INT NOT NULL DEFAULT '".$_POST["bordercolor1"]."', `borderstyle1` VARCHAR(999) NOT NULL DEFAULT '".strip_tags($_POST["borderstyle1"])."', `borderwidth1` INT NOT NULL DEFAULT '".$_POST["borderwidth1"]."', `borderwidth2` INT NOT NULL DEFAULT '".$_POST["borderwidth2"]."', `borderstyle2` VARCHAR(999) NOT NULL DEFAULT '".strip_tags($_POST["borderstyle2"])."', `bordercolor2` INT NOT NULL DEFAULT '".$_POST["bordercolor2"]."', `background2` INT NOT NULL DEFAULT '".$_POST["background2"]."', `color1` INT NOT NULL DEFAULT '".$_POST["color1"]."', `color2` INT NOT NULL DEFAULT '".$_POST["color2"]."', `artistblurb` VARCHAR(999) NOT NULL DEFAULT '".strip_tags($_POST["artistblurb"])."', `albumblurb` VARCHAR(999) NOT NULL DEFAULT '".strip_tags($_POST["albumblurb"]);."', `owner` VARCHAR(999) NOT NULL DEFAULT '".strip_tags($_POST["owner"])."') ENGINE = InnoDB;";

$sql = "INSERT INTO `aaaaaaaa` (`bodybackground`, `background1`, `bordercolor1`, `borderstyle1`, `borderwidth1`, `borderwidth2`, `borderstyle2`, `bordercolor2`, `background2`, `color1`, `color2`, `artistblurb`, `albumblurb`, `owner`, `page`) VALUES ('".strip_tags($_POST["bodybackground"])."', '".strip_tags($_POST["background1"])."', '".strip_tags($_POST["bordercolor1"])."', '".strip_tags($_POST["borderstyle1"])."', '".strip_tags($_POST["borderwidth1"])."', '".strip_tags($_POST["borderwidth2"])."', '".strip_tags($_POST["borderstyle2"])."', '".strip_tags($_POST["bordercolor2"])."', '".strip_tags($_POST["background2"])."', '".strip_tags($_POST["color1"])."', '".strip_tags($_POST["color2"])."', '".strip_tags($_POST["artistblurb"])."', '".strip_tags($_POST["albumblurb"])."', '".strip_tags($_POST["owner"])."', '".strip_tags($_POST["page"])."') ";

if($stmt = mysqli_prepare($link, $sql)){
//this shit is prolly not necessary anymore
mysqli_stmt_bind_param($stmt, "sssssssssssssss", $newtablename, $p_bodybackground, $pbackground1, $pbordercolor1, $pborderstyle1, $pborderwidth1, $pborderwidth2, $pborderstyle2,$pbordercolor2,$pbackground2,$pcolor1,$pcolor2,$partistblurb,$palbumblurb,$powner);
// Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){echo "okay everything went correctly.... i think....???<br>
your database entry was entered with VALUES ('".strip_tags($_POST["bodybackground"])."', '".strip_tags($_POST["background1"])."', '".strip_tags($_POST["bordercolor1"])."', '".strip_tags($_POST["borderstyle1"])."', '".strip_tags($_POST["borderwidth1"])."', '".strip_tags($_POST["borderwidth2"])."', '".strip_tags($_POST["borderstyle2"])."', '".strip_tags($_POST["bordercolor2"])."', '".strip_tags($_POST["background2"])."', '".strip_tags($_POST["color1"])."', '".strip_tags($_POST["color2"])."', '".strip_tags($_POST["artistblurb"])."', '".strip_tags($_POST["albumblurb"])."', '".strip_tags($_POST["owner"])."', '".strip_tags($_POST["page"])."') ";

echo "<br><br>You should now be able to go <a href='/Artists/".$_POST['page']."/editalbum'>BACK</a> and edit your style.";

} 
				else{echo "Something went wrongwith the sql bullshit. Please try again later.";}
            mysqli_stmt_close($stmt);
        }
    mysqli_close($link);
}

?>
