<?php
session_start();
include"config.php";





$regno=$_POST['username'];
$query = "SELECT * FROM users WHERE registration = '$regno' ";
$result = mysqli_query($db , $query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);


$password=$_POST['password'];
//$query1="SELECT * FROM users WHERE registration= '$regno' AND password='$password'";

//$result1=mysqli_query($db,$query);

//$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if( password_verify($password, $row['password']) )
{

$_SESSION["uname"]=$row["fname"];
$_SESSION["regn"]=$row["registration"];



	//echo "sucessfull".$username;
	$StringExplo=explode("/",$_SERVER['REQUEST_URI']);
	$HEADTO=$StringExplo[0]."profile.php";


	header("Location: ".$HEADTO);
	

} 
else
{
	echo "failed to login";
}




?>
