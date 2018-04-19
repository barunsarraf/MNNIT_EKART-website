<?php
session_start();
$_SESSION["us"]=0;
include("config.php");

    function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
	 
$prod_name=$_POST['prod_name'];
$des=$_POST['description'];
$price=$_POST['price'];
$cat=$_POST['category'];



if (!empty($_FILES["uploadedimage"]["name"])) {

	$file_name=$_FILES["uploadedimage"]["name"];
	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgtype=$_FILES["uploadedimage"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename=date("d-m-Y")."-".time().$ext;
	$target_path = "images/".$imagename;


  $regnum=$_SESSION["regn"];
	

if(move_uploaded_file($temp_name, $target_path)) {



$query_upload="INSERT INTO `product`(`prod_name`, `description`, `price`, `images_path`, `submission_date`,`catId`,`registration`) VALUES ('$prod_name','$des','$price','".$target_path."','".date("Y-m-d")."','$cat','$regnum')";




mysqli_query($db,$query_upload);
	
$_SESSION["us"]=1;
  header('Location: http://localhost/mnnitkart/profile.php');
  


}else{

   exit("Error While uploading image on the server");
} 

}

?>

