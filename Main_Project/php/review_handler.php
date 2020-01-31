<?php
require './../config/config.php';
if(isset($_GET['review']))
{
  $review=$_GET['review'];
}
if(isset($_GET['review1']))
{
  $review1=$_GET['review1'];
}
if(isset($_GET['review2']))
{
  $review2=$_GET['review2'];
}
if(isset($_GET['cust_id']))
{
  $cust_id=$_GET['cust_id'];
}
echo $cust_id;
$comment=$_GET['comment'];
if(isset($_GET['Submit'])) 
{
    GLOBAL $review;
    GLOBAL $review1;
    GLOBAL $review2;
    GLOBAL $cust_id ;
    //$cust_id ='E6';
    $query0 = "INSERT into review_db (emp_id_db,Comment)";
    $query0 .= "VALUES ('$cust_id', '$comment')";
    $query1 = mysqli_query($con, $query0);
        if(!$query1)
        {
         die(mysqli_error($con));
       }
      else
     { 
            echo "  ";
     }
     $check_database_query = mysqli_query($con, "SELECT * FROM rating WHERE emp_id_db='$cust_id'");
     $check_review_query = mysqli_num_rows($check_database_query);
     if($check_review_query == 1 )
     {
         $row = mysqli_fetch_array($check_database_query);
         $rating1=$row['Rating'];
         $Behaviour=$row['Behaviour'];
         $Behaviour1=($Behaviour*$rating1+$review)/($rating1+1);              
         $Punctuality=$row['Punctuality'];
         $Punctuality1=($Punctuality*$rating1+$review1)/($rating1+1);
         $Working_skill=$row['Working_Skill'];
         $Working_skill1=($Working_skill*$rating1+$review2)/($rating1+1);
    
    $rating1=$rating1+1;
    $query2="UPDATE rating SET Behaviour='$Behaviour1',Punctuality='$Punctuality1' ,Working_Skill='$Working_skill1',Rating='$rating1' where emp_id_db='$cust_id' ";
    $query3 = mysqli_query($con, $query2);
      if(!$query3)
      {
         die(mysqli_error($con));
      }
      else
     { 
            echo "Thank You For Your Review";
     }
      }
      else
      {
        $query2="INSERT into rating(emp_id_db,Behaviour,Punctuality,Working_Skill,Rating)";
        $query2.="VALUES ('$cust_id','$review','$review1','$review2','1')";
        $query3 = mysqli_query($con, $query2);
        if(!$query3)
        {
         die(mysqli_error($con));
       }
      else
     { 
            echo "Thank YOu For Your Review!!! ";
     }
      }
    }
?>