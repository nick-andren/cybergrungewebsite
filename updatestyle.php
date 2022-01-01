<? session_start();
define('DB_SERVER', 'aaaaa');
define('DB_USERNAME', 'aaaaa');
define('DB_PASSWORD', 'aaaaa');
define('DB_NAME', 'aaaaa');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


mysqli_report();

if($_SERVER["REQUEST_METHOD"] == "POST"){  


	if ($stmt = mysqli_prepare($link, "UPDATE aaaaaaaaaaa SET bodybackground = '".$_POST['bodybackground']."', background1 = '".$_POST['background1']."', bordercolor1 = '".$_POST['bordercolor1']."', borderstyle1 = '".$_POST['borderstyle1']."', borderwidth1 = '".$_POST['borderwidth1']."', borderwidth2 = '".$_POST['borderwidth2']."', borderstyle2 = '".$_POST['borderstyle2']."', bordercolor2 = '".$_POST['bordercolor2']."', background2 = '".$_POST['background2']."', color1 = '".$_POST['color1']."', color2 = '".$_POST['color2']."', artistblurb = '".$_POST['artistblurb']."', albumblurb = '".$_POST['albumblurb']."' WHERE page = '".$_POST['page']."'" )) 
{mysqli_stmt_execute($stmt); mysqli_stmt_close($stmt); } mysqli_close($link);

echo "OK changes are applied. <a href='https://cybergrunge.net/Artists/".$_POST['page']."'>CLICK HERE</a> to return to this album's page.";
}


?>
