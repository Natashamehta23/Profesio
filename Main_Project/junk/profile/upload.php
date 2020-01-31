<?php //keep this file in main directory due to dir location command is used
// connection to database
include './database.php';?>
<?php


//////////funtion to create thumbnail defination
function createThumbs( $pathToImages, $pathToThumbs, $thumbWidth ) 
 {
  // open the directory
  $diri = dirname($pathToImages);
  $dir = opendir( $diri);
  echo $diri;
  echo $dir;
$fname=$pathToImages;
  // loop through it, looking for any/all JPG files:
  //while (false !== ($fname = readdir( $dir ))) {
    // parse path for the extension
    $info = pathinfo($fname);
    // continue only if this is a JPEG image
    if ( strtolower($info['extension']) == 'jpg' ){$img = imagecreatefromjpeg( "{$fname}" );echo $img;}
  else if ( strtolower($info['extension']) == 'png' ){$img =imagecreatefrompng("{$fname}");echo $img;}
 
    {
      echo "Creating thumbnail for {$fname} <br />";

      // load image and get image size
      //$img = imagecreatefromjpeg( "{$diri}{$fname}" );
      $width = imagesx( $img );
      $height = imagesy( $img );

      // calculate thumbnail size
      $new_width = $thumbWidth;
      $new_height = floor( $height * ( $thumbWidth / $width ) );

      // create a new tempopary image
      $tmp_img = imagecreatetruecolor( $new_width, $new_height );

      // copy and resize old image into new image 
      imagecopyresized( $tmp_img, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height );

      // save thumbnail into a file
	  //echo basename($path) ."<br/>"; seperate file name from full path
$thumbfname= basename("{$fname}");
//// note the new path is of thumb folder
	  if ( strtolower($info['extension']) == 'jpg' ){imagejpeg( $tmp_img, "{$pathToThumbs}{$thumbfname}");}
  else if ( strtolower($info['extension']) == 'png' ){imagepng($tmp_img, "{$pathToThumbs}{$thumbfname}" );}
      else echo"wrfwsfeweteri maa ki";
	  
    } echo 'adsfsd'.$dir;
  $dir = dirname($pathToImages);
  echo $dir;
   $dir = opendir( "".$diri); echo $dir;
  // close the directory
  closedir($dir);
 }



//upload directory
$target_dir = "./uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//upload variable
$uploadOk = 1;

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000000000000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats  creating error due to case sensitivity
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG"&& $imageFileType != "JPEG"&& $imageFileType != "GIF") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		$hash = md5( rand(0,1000) );
		 echo $imageFileType;
		 echo "file directory"."./uploads/".$hash.".".$imageFileType;
		 //////file will not be found because the extension will be upper case
		 $type=strtolower($imageFileType);
		 
		 $fdir="./uploads/".$hash.".".$imageFileType;echo $fdir;
		  $fdir="./uploads/".$hash.".".$type;
		 echo $fdir;
		 
		rename("./uploads/".basename($_FILES["fileToUpload"]["name"]),$fdir);
		
		////////////////////////////
		$Product=$_POST["pname"];
$info=$_POST["Details"];
$rate=$_POST["cost"];

$fname=$hash.".".$imageFileType;
echo $fname;
echo $imageFileType;
//Execute the query

mysqli_query($connect, "INSERT INTO internet_shop(img,name,description,price) VALUES( '$fname', '$Product', '$info', '$rate')");
////////////////////////////////////okay upload sucessful now creating thumbnal of image
//calling function to create thumb file
createThumbs($fdir,"./thumbs/",100);
//to check it rows are affected i.e query command sucessfull
 if(mysqli_affected_rows($connect) > 0){;} else {;}
} else {
	//error screen
        echo "Sorry, there was an error uploading your file.";
    }
}
?>