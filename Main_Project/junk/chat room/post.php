<?php
session_start();
if(isset($_SESSION['name'])){
    $text = $_POST['text'];
     
    $fp = fopen("log.html", 'a');
	$date=date("g:i A");
	$texts= "<div class='msgln'>(".$date.") <b>".$_SESSION['name']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>";
    fwrite($fp,$texts);
    fclose($fp);
}
?>