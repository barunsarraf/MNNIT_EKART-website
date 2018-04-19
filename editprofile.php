
<?php
include "config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Update Profile</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.countdown.css" /> <!-- countdown --> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts -->  
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
</head> 
<body>
	<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- //for bootstrap working -->
	<!-- header modal -->
	
	<script>
		$('#myModal88').modal('show');
	</script>  
	<!-- header modal -->
	<!-- header -->
	<div class="header" id="home1">
		<div class="container">
			<div class="w3l_login">
				<a href="#" data-toggle="modal" data-target="#myModal88"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
			</div>
			<div class="w3l_logo">
				<h1><a href="index.html">MNNIT Ekart.<span>Your store. Your place.</span></a></h1>
			</div>
			<div class="search">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="search.php" method="post">
						<input type="text" name="searchitem" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			<div class="cart cart box_1"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />					
				</form>   
			</div>  
		</div>
	</div>
	<!-- //header -->
	<!-- navigation -->
	<div class="navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header nav_2">
					<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div> 
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav">
						<li><a href="profile.php" class="act">Home</a></li>	
						<!-- Mega Menu -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<li><a href="book.php">Books</a></li>
											<li><a href="cycle.php">Cycle</a></li>
											<li><a href="laptop.php">Laptop</a></li>
											<li><a href="smartphone.php">SmartPhones</a></li>
											<li><a href="matress.php">Matress<span>New</span></a></li> 
											
										</ul>
									</div>
									
							</ul>
						</li>
						       





						<li><a href="about.html">About Us</a></li> 
						
						<li><a href="mail.html">Mail Us</a></li>
							<li><a href="additem.php">Add Item</a></li>



						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Profile<b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="row">
									<div class="col-sm-3">
										<ul class="multi-column-dropdown">
											<li><a href="editprofile.php">Edit Profile</a></li>
											<li><a href="delete.php">Delete</a></li>
											<li><a href="onsold.php">OnSold</a></li> 
											<li><a href="logout.php">Log Out</a></li>
											
										</ul>
									</div>
					</ul>
					
				</div>
			</nav>
		</div>
	</div>


<!-- 
<?php


$un=$_SESSION["uname"];

$t=$_SESSION["regn"];

# query on the users table for name
$query="SELECT fname,lname FROM users WHERE registration= '$t' ";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

echo " ".$row["fname"];
echo " ".$row["lname"];

# query on the contact table 
$query="SELECT hostel,roomno FROM contact WHERE registration= '$t' ";
$result = mysqli_query($db, $query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

echo " from ".$row["hostel"];
echo " ".$row["roomno"];

?>  -->
 <form action="" method="post">

                <br>
                <br>
                <label class="mylabel">Password</label>
                <input type="password" name="reg_password" class="form-control" value= "<?php include "config.php";

$query="SELECT password FROM users WHERE registration= '$t' ";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC); echo "password";?>">
               
                	<br><br>
                <label class="mylabel">Room Number</label>
                <input type="int" name="rom" class="form-control"  value= "<?php include "config.php";
$query="SELECT roomno FROM contact WHERE registration= '$t' ";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC); echo $row["roomno"];?>">

                <label class="mylabel">Hostel</label>
                <input type="text" name="uuhostel" class="form-control"  value= "<?php include "config.php";
$query="SELECT hostel FROM contact WHERE registration= '$t' ";
$result=mysqli_query($db,$query);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC); echo $row["hostel"];?>">
                <br><br>
                <label class="mylabel">Phone Number</label>
                <input type="int" name="uuphone" class="form-control"  value= "<?php include "config.php";
$query="SELECT phone FROM contact WHERE registration= '$t' ";

$result=mysqli_query($db,$query);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC); echo $row["phone"];?>">
  
                <br><br>
                <input name="update" type="submit" class="btn btn-primary mylabel" value="Update">

        
        </form>

<?php
	
	

	if(isset($_POST['update']))
	{

		$upassword=$_POST['reg_password'];
		$password = password_hash($upassword, PASSWORD_DEFAULT);
		$hash =  md5( rand(0,1000) );
		$uroom=$_POST['rom'];
		$uhostel=$_POST['uuhostel'];
		$uphone=$_POST['uuphone'];

		$query="UPDATE users set password='$password' , hash= '$hash' WHERE registration= '$t' ";
		$result=mysqli_query($db,$query);
		$query2= "UPDATE contact set roomno='$uroom',hostel='$uhostel',phone='$uphone' WHERE registration='$t' ";
		$result=mysqli_query($db,$query2);
 

	}

	?>
</body>
</html>