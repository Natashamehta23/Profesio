<?php 
session_start();
session_destroy();
echo "logout sucessful";
header("Location: ./../login.php")
 ?>