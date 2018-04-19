
<?php
include "config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
	form{
		background-image: url('MNNIT.jpg');
		background-position: center;
		background-blend-mode: soft-light;
		background-repeat: no-repeat;
		background-attachment: scroll;
		opacity: 0.9;
	}

</style>
<head>
<title>Add Item</title>
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
						     
						<li><a href="#">About Us</a></li> 
						<li><a href="#">Mail Us</a></li>
							<li><a href="#">Add Item</a></li>
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
<br>
<br>
<form action="saveimage.php" enctype="multipart/form-data" method="post" id="grad">
	
				<br><br>
                <label class="mylabel">Product Name</label>
                <input type="text" name="prod_name" class="form-control" size="400">
                <br>
                <br>
                <label class="mylabel">Upload Image</label>
                <table style="margin-left: 350px;
				  display: block;
				  width: 50%;
				  height: 34px;
				  padding: 6px 12px;
				  font-size: 14px;
				  line-height: 1.42857143;
				  color: #555;
				  background-color: #fff;
				  background-image: none;
				  border: 1px solid #ccc;
				  border-radius: 4px;
				  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
				          box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
				  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
				       -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
				          transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;">
				<tbody><tr>
				<td>
				<input name="uploadedimage" type="file">
				</td>
				</tr>
				</tbody></table>
				<br>
                <br>
                <label class="mylabel">Description</label>
                <input type="text" name="description" class="form-control">
                <br>
                <br>
                <label class="mylabel">Price</label>
                <input type="int" name="price" class="form-control">
                <br>
                <br>
                <tr>
	<td>
		<select name="category" class="mylabel">
		<option value=1 selected="selected">   Books   </option>
		<option value=2> Cycle </option>
		<option value=5> Laptop </option>
		<option value=3> SmartPhones </option>
		<option value=6> Mattress </option>
		<option value=4> Stationaries </option>
		<option value=7> Others </option>
</select>
	<input name="Upload Now" type="submit" value="Upload">
	</td>
	</tr>      
	</form>
	<br>
	<br>
</html>