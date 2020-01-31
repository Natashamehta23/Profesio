<?php include 'database_create.php';?>
<?php
  
   
   if(! $connect ) {
      die('Could not connect: ' . mysql_error());
   }
   
   echo 'Connected successfully';
   
   $sql = 'CREATE Database Chat';
   $retval = mysql_query( $sql, $connect );
   
   if(! $retval ) {
      die('Could not create database: ' . mysql_error());
   }
   
   echo "Database Chat created successfully\n";
   mysql_close($connect);
?>