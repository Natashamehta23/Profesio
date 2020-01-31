<?php include 'database.php';?>
<?php

$ip = $_SERVER['REMOTE_ADDR'];
$date = date('Y-m-d H:i:s');
$sender = $_SERVER["HTTP_HOST"];


mysqli_query($connect, "INSERT INTO LANDED(BROWSER,VERSION,OPERATOR,IP,DETAILS,DATES,SENDER) VALUES('$Your_browser','$Version','$platform','$Internet_protocol','$reports','$date','$from')");


 if(mysqli_affected_rows($connect) > 0){;} else {;}
///////////////////////////////
header ('Location: detect_To_redirect.php');

?>