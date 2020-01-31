<?php
/*$conn=mysqli_connect("localhost","root","","customer");
if(!$conn){
    die(mysqli_error($conn));*/
require('inhouse/config.php');
//else{
        $prof=$_GET['value'];
        //SELECT name FROM `profession_db` WHERE `profession` LIKE '%tutor%'

        $query="SELECT name FROM `profession_db` WHERE `profession` LIKE '%$prof%'";
        $records=mysqli_query($con,$query);
        $num=mysqli_num_rows($records);
        echo "$num results found."."<br />";
        while($person=mysqli_fetch_array($records)){
         //echo $person;
         //$row=mysqli_fetch_array($records);
         $employee=$person['name'];
          echo $employee."<br>";
        }
         // $test=mysqli_fetch_all($records,MYSQLI_ASSOC);
          //echo $test;
          /*$row=mysqli_fetch_array($records);
          $employee=$row['name'];
          echo $employee;
    
    
    
   /*
        $query="SELECT name from profession_db where profession=technician";
        $records=mysqli_query($conn,$query);
        $num=mysqli_num_rows($records);
        echo "$num results found.";
         while($person=mysqli_fetch_assoc($records)){
            echo $person;
        }
    }
    if(isset($_GET['arch'])){
        $query="SELECT name from profession_db where profession=architect";
        $records=mysqli_query($conn,$query);
        $num=mysqli_num_rows($records);
        echo "$num results found.";
        while($person=mysqli_fetch_assoc($records)){
        echo $person;
         }
    }
    if(isset($_GET['arch'])){
        $query="SELECT name from profession_db where profession=architect";
        $records=mysqli_query($conn,$query);
        $num=mysqli_num_rows($records);
        echo "$num results found.";
        while($person=mysqli_fetch_assoc($records)){
        echo $person;
        }
    }
    }
*/
    
    //echo "$num results found."."<br />";
    /*<html>
    <head>
        <title></title>
    </head>
    <body>*/
?>