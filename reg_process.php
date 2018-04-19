<?php


include"config.php";



$Regno=$_POST['reg_number'];
$First=$_POST['reg_first_name'];
$Last=$_POST['reg_last_name'];
$pass=$_POST['reg_password'];
$password = password_hash($pass, PASSWORD_DEFAULT);
$hash =  md5( rand(0,1000) );

$Roomno=$_POST['reg_room_number'];
$Hostel=$_POST['reg_hostel'];
$Email=$_POST['reg_email'];
$Phone=$_POST['reg_phone'];



# update users table 
$query="INSERT INTO `users`(`registration`, `fname`, `lname`, `password` , `hash`) VALUES ('$Regno','$First','$Last','$password' , '$hash')";
$result=mysqli_query($db,$query);

# update contact table

$query2="INSERT INTO `contact`(registration, roomno , hostel,  email, phone) VALUES ('$Regno','$Roomno','$Hostel',
'$Email', '$Phone')";
$result=mysqli_query($db,$query2);

header('Location: http://localhost/mnnitkart/index.html');







?>