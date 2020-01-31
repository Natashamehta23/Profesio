<?php 
include './../../config/config.php';
require('./../../config/client_or_employe.php');
//funtion to create thumbnail defination
function createThumbs( $pathToImages, $pathToThumbs, $thumbWidth ) 
{
    //open the directory
    $diri = dirname($pathToImages);
    $dir = opendir( $diri);
    //echo $diri;
    //echo $dir;
    $fname=$pathToImages;
    //loop through it, looking for any/all JPG files:
    //while (false !== ($fname = readdir( $dir ))) {
    //parse path for the extension
    $info = pathinfo($fname);
    //continue only if this is a JPEG image
    if ( strtolower($info['extension']) == 'jpg' )
    {
        $img = imagecreatefromjpeg( "{$fname}" );
        //echo $img;
    }
    else if ( strtolower($info['extension']) == 'png' )
    {
        $img =imagecreatefrompng("{$fname}");
        //echo $img;
    }
    {
        //echo "Creating thumbnail for {$fname} <br />";
        //load image and get image size
        //$img = imagecreatefromjpeg( "{$diri}{$fname}" );
        $width = imagesx( $img );
        $height = imagesy( $img );
        //calculate thumbnail size
        $new_width = $thumbWidth;
        $new_height = floor( $height * ( $thumbWidth / $width ) );
        //create a new tempopary image
        $tmp_img = imagecreatetruecolor( $new_width, $new_height );
        //copy and resize old image into new image 
        imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );
        //save thumbnail into a file
	    //echo basename($path) ."<br/>"; seperate file name from full path
        $thumbfname= basename("{$fname}");
        //note the new path is of thumb folder
        if ( strtolower($info['extension']) == 'jpg' )
        {
            imagejpeg( $tmp_img, "{$pathToThumbs}{$thumbfname}");
        }
        else if ( strtolower($info['extension']) == 'png' )
        {
            imagepng($tmp_img, "{$pathToThumbs}{$thumbfname}" );
        }
        //else echo "wrfwsfeweteri maa ki";
	  
    } 
    //echo 'adsfsd'.$dir;
    $dir = dirname($pathToImages);
    //echo $dir;
    $dir = opendir( "".$diri); echo $dir;
    //close the directory
    closedir($dir);
}







//upload directory
$target_dir = "./uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//upload variable
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
echo $imageFileType;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) 
{
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) 
    {
       // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    }
    else 
    {
        //echo "File is not an image.";
        $uploadOk = 0;
    }
}



// Check if file already exists
if (file_exists($target_file)) 
{
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}



// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000000000000000000) 
{
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}




// Allow certain file formats  creating error due to case sensitivity
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG"&& $imageFileType != "JPEG"&& $imageFileType != "GIF") 
{
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
{
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else 
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
    {
        //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$hash = md5( rand(0,100000000) );
	    //echo $imageFileType;
		//echo "file directory"."./uploads/".$hash.".".$imageFileType;
		//file will not be found because the extension will be upper case
		$type=strtolower($imageFileType); 
        $fdir="./uploads/".$hash.".".$imageFileType;
        $store_db=$fdir;
        //echo $fdir;
		$fdir="./uploads/".$hash.".".$type;
		//echo $fdir; 
		rename("./uploads/".basename($_FILES["fileToUpload"]["name"]),$fdir);
		//
        $fname=$hash.".".$imageFileType;
        //echo $fname;
        //echo $imageFileType;
        //Execute the query
        //$user_id='2080';
        //echo $user_id;
        if($_SESSION['is_employee_logged_in']=="yes")
		{
			$check_database_query = mysqli_query($con, "SELECT * FROM `employee` WHERE `emp_id_db`='$user_id'");
        $check_login_query = mysqli_num_rows($check_database_query);
        if($check_login_query == 1) {
        $row = mysqli_fetch_array($check_database_query);



        //UPDATE `employee` SET `emp_id_db`='$user_id',`first_name_db`='$fname',`last_name_db`='$lname',`experience_db`='$experi',`address_db`='$addddr',`city_db`='$city',`telephone_db`='$telno',`profession_db`='$proff',`charges_db`='$chargess',`age_db`='$agess',`gender_db`='$genders',`email_db`='$mail_id',`pass_db`='$password',`dob_db`='$dob',`image_loc`='$store_db',`deleted`='no',`deactivated`='no' WHERE `emp_id_db`='$user_id'
        $fname = $row['first_name_db'];
        $lname = $row['last_name_db'];
        $experi=$row['experience_db'];
        $mail_id = $row['email_db'];
        $password = $row['pass_db'];
        $dob = $row['dob_db'];
        $city = $row['city_db'];
        $telno = $row['telephone_db'];
        $proff = $row['profession_db'];
        //$img_loc = $row['image_loc'];
        $addddr = $row['address_db'];
        //$password = $row['pass_db'];
        $chargess = $row['charges_db'];
        $agess = $row['age_db'];
        $genders = $row['gender_db'];
        //$proff = $row['profession_db'];
        //$img_loc = $row['image_loc'];
        $store_db="./assets/images/uploads/".$hash.".".$imageFileType;
        echo $store_db;
        //$new_file_dir="<br><br><br><br>".$fdir."_____________".$img_loc."<br><br><br><br>".$store_db;
        //echo $new_file_dir;
        $check_database_query = mysqli_query($con, "UPDATE `employee` SET `emp_id_db`='$user_id',`first_name_db`='$fname',`last_name_db`='$lname',`experience_db`='$experi',`address_db`='$addddr',`city_db`='$city',`telephone_db`='$telno',`profession_db`='$proff',`charges_db`='$chargess',`age_db`='$agess',`gender_db`='$genders',`email_db`='$mail_id',`pass_db`='$password',`dob_db`='$dob',`image_loc`='$store_db',`deleted`='no',`deactivated`='no' WHERE `emp_id_db`='$user_id'");

    }  
}
		else
		{
			$check_database_query = mysqli_query($con, "SELECT * FROM `client` WHERE `cust_id_db`='$user_id'");
        $check_login_query = mysqli_num_rows($check_database_query);
        if($check_login_query == 1) {
        $row = mysqli_fetch_array($check_database_query);
        $fname = $row['first_name_db'];
        $lname = $row['last_name_db'];
        $mail_id = $row['email_db'];
        $password = $row['pass_db'];
        $dob = $row['dob_db'];
        $city = $row['city_db'];
        $telno = $row['telephone_db'];
        $proff = $row['profession_db'];
        $img_loc = $row['image_loc'];
        $store_db="./assets/images/uploads/".$hash.".".$imageFileType;
        echo $store_db;
        //$new_file_dir="<br><br><br><br>".$fdir."_____________".$img_loc."<br><br><br><br>".$store_db;
        //echo $new_file_dir;
        $check_database_query = mysqli_query($con, "UPDATE `client` SET `cust_id_db`='$user_id',`first_name_db`='$fname',`last_name_db`='$lname',`email_db`='$mail_id',`pass_db`='$password',`dob_db`='$dob',`city_db`='$city',`telephone_db`='$telno',`profession_db`='$proff',`image_loc`='$store_db' WHERE `cust_id_db`='$user_id'");





        }
    }
        $check_database_query = mysqli_query($con, "SELECT * FROM `client` WHERE `cust_id_db`='$user_id'");
        $check_login_query = mysqli_num_rows($check_database_query);
        if($check_login_query == 1) {
        $row = mysqli_fetch_array($check_database_query);
        $fname = $row['first_name_db'];
        $lname = $row['last_name_db'];
        $mail_id = $row['email_db'];
        $password = $row['pass_db'];
        $dob = $row['dob_db'];
        $city = $row['city_db'];
        $telno = $row['telephone_db'];
        $proff = $row['profession_db'];
        $img_loc = $row['image_loc'];
        $store_db="./assets/images/uploads/".$hash.".".$imageFileType;
        echo $store_db;
        //$new_file_dir="<br><br><br><br>".$fdir."_____________".$img_loc."<br><br><br><br>".$store_db;
        //echo $new_file_dir;
        $check_database_query = mysqli_query($con, "UPDATE `client` SET `cust_id_db`='$user_id',`first_name_db`='$fname',`last_name_db`='$lname',`email_db`='$mail_id',`pass_db`='$password',`dob_db`='$dob',`city_db`='$city',`telephone_db`='$telno',`profession_db`='$proff',`image_loc`='$store_db' WHERE `cust_id_db`='$user_id'");
        }

        $check_database_query1 = mysqli_query($con, "SELECT * FROM  `posts` WHERE `user_id_db`='$user_id'");
        $check_login_query1 = mysqli_num_rows($check_database_query1);
        if($check_login_query1 >= 1) {
        $row1 = mysqli_fetch_array($check_database_query1);
        $post1=$row1['post_text_db'];
        $time1=$row1['time_db'];
        $accept1=$row1['accept_link'];
        $img_loc1 = $row1['image_loc'];
        $store_db1="./assets/images/uploads/".$hash.".".$imageFileType;
        //$new_file_dir="<br><br><br><br>".$fdir."_____________".$img_loc."<br><br><br><br>".$store_db;
        //echo $new_file_dir;
        $check_database_query1 = mysqli_query($con, "UPDATE `posts` SET `user_id_db`='$user_id',`post_text_db`='$post1',`time_db`='$time1',`accept_link`='$accept1',`image_loc`='$store_db1' WHERE `user_id_db`='$user_id'");
        if($check_database_query==TRUE)
        {
            echo 'done';
        }
        else{
            die(mysqli_error($con));
            echo 'not done';
        }
    }

        //mysqli_query($con, "INSERT INTO client (img,name,description,price) VALUES( '$fname', '$Product', '$info', '$rate')");
        //okay upload sucessful now creating thumbnal of image
        //calling function to create thumb file
        createThumbs($fdir,"./thumbs/",100);
       
        /*
    }
else{
    }
}

        */
    } 
    else 
    {
	    //error screen
        echo "Sorry, there was an error uploading your file.";
    }
}
?>