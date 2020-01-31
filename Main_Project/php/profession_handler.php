<?php
require('./../config/config.php');
        $prof=$_GET['value'];
        $query="SELECT * FROM  `profesio`.`employee` WHERE `first_name_db` LIKE '%$prof%' OR `last_name_db` LIKE '%$prof%' OR `address_db` LIKE '%$prof%' OR `city_db` LIKE '%$prof%' OR `telephone_db` LIKE '%$prof%' OR`proffession_db` LIKE '%$prof%' ";
        $records=mysqli_query($con,$query);
        $num=mysqli_num_rows($records);
        echo "$num results found."."<br />";
        while($person=mysqli_fetch_array($records)){
         $employee=$person['name'];
          echo $employee."<br>";
        }
         
?>

profesio »Table: employee



emp_id_db






