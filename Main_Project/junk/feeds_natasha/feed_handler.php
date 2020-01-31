<?php

require('./config.php');
        $prof=$_GET['value'];
        $query="SELECT * FROM `profession_db` WHERE `profession` LIKE '%$prof%'";
        $records=mysqli_query($con,$query);
        $num=mysqli_num_rows($records);
        echo "$num results found."."<br />";
        while($person=mysqli_fetch_array($records)){
         $employee=$person['name'];
         $exp=$person['experience'];
          echo $employee."<br>";
          echo "Experience :".$exp . " years."."<br />";
        }
         
?>