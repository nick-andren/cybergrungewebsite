<? session_start();
require_once "config2.php";

mysqli_report();
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if ($stmtb = mysqli_prepare($link, "SELECT bodybackground, background1, bordercolor1, borderstyle1, borderwidth1, borderwidth2, borderstyle2, bordercolor2, background2,color1, color2, artistblurb, albumblurb, owner, page FROM reywre WHERE page = '".$_POST['page'] ."'")) 
{mysqli_stmt_execute($stmtb);mysqli_stmt_bind_result($stmtb,$zbodybackground,$zbackground1,$zbordercolor1,$zborderstyle1,$zborderwidth1,$zborderwidth2,$zborderstyle2,$zbordercolor2,$zbackground2,$zcolor1,$zcolor2,$zartistblurb,$zalbumblurb,$zowner,$zpage);
        while (mysqli_stmt_fetch($stmtb)) {		
} mysqli_stmt_close($stmtb); } mysqli_close($link); }

		echo $zbodybackground." ".$zbackground1." ".$zbordercolor1." ".$zborderstyle1." ".$zborderwidth1." ".$zborderwidth2." ".$zborderstyle2." ".$zbordercolor2." ".$zbackground2." ".$zcolor1." ".$zcolor2." ".$zartistblurb." ".$zalbumblurb." ".$zowner." ".$zpage;


?>
