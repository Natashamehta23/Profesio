<?php
require './../config/config.php'
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
    $fp = fopen("./../messages/log.html", 'a');
	$date=date("g:i A");
	$texts= "<div class=''>(".$date.") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>";
    fwrite($fp,$texts);
    fclose($fp);
}
?>