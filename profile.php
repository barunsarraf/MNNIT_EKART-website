
<?php
include "config.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>MNNIT Ekart | Online Store | 2018</title>
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
			
			<img src="images/MNNIT.png" height="80" width="70" align="left">
			<div class="w3l_logo">
				<h1><a href="profile.php">MNNIT Ekart.<span>Your store. Your place.</span></a></h1>
			</div>
			<div class="search" style="margin-right: 80px;">
				<input class="search_box" type="checkbox" id="search_box">
				<label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
				<div class="search_form">
					<form action="search.php" method="post">
						<input type="text" name="searchitem" placeholder="Search...">
						<input type="submit" value="Send">
					</form>
				</div>
			</div>
			
<div style="font-size: 18px;">			
<?php
///$un=$_SESSION["uname"];
$t=$_SESSION["regn"];


# fetches data from user table 
$query="SELECT * FROM users WHERE registration = '$t' ";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

echo "Welcome   ".$row["fname"];



?>
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
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner">
		
	</div>
	<!-- //banner --> 

			
	<!-- //new-products -->
	<!-- new-products -->
	<div class="new-products">
		<div class="container">
			<h3>New Products</h3>
			<div class="agileinfo_new_products_grids">
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/27.png" alt=" " class="img-responsive" />
							<img src="images/27.png" alt=" " class="img-responsive" />
							<img src="images/27.png" alt=" " class="img-responsive" />
							<img src="images/27.png" alt=" " class="img-responsive" />
							<img src="images/27.png" alt=" " class="img-responsive" /> 
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="book.php">Book</a></h5>
						<div class="simpleCart_shelfItem">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="w3ls_item" value="Dell Laptop"> 
								
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/bike.png" alt=" " class="img-responsive" />
							<img src="images/bike.png" alt=" " class="img-responsive" />
							<img src="images/bike.png" alt=" " class="img-responsive" />
							<img src="images/bike.png" alt=" " class="img-responsive" />
							<img src="images/bike.png" alt=" " class="img-responsive" /> 
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="cycle.php">Cycle</a></h5>
						<div class="simpleCart_shelfItem">
							
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="w3ls_item" value="Samsung Phone"> 
								
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/smartphone.png" alt=" " class="img-responsive" />
							<img src="images/smartphone.png" alt=" " class="img-responsive" />
							<img src="images/smartphone.png" alt=" " class="img-responsive" />
							<img src="images/smartphone.png" alt=" " class="img-responsive" />
							<img src="images/smartphone.png" alt=" " class="img-responsive" /> 
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="smartphone.php">SmartPhone</a></h5>
						<div class="simpleCart_shelfItem">
							
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="w3ls_item" value="NOTEBOOK"> 
								
							</form>
						</div>  
					</div>
				</div>
				<div class="col-md-3 agileinfo_new_products_grid">
					<div class="agile_ecommerce_tab_left agileinfo_new_products_grid1">
						<div class="hs-wrapper hs-wrapper1">
							<img src="images/laptop.png" alt=" " class="img-responsive" />
							<img src="images/laptop.png" alt=" " class="img-responsive" />
							<img src="images/laptop.png" alt=" " class="img-responsive" />
							<img src="images/laptop.png" alt=" " class="img-responsive" />
							<img src="images/laptop.png" alt=" " class="img-responsive" /> 
							<div class="w3_hs_bottom w3_hs_bottom_sub">
								<ul>
									<li>
										<a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
									</li>
								</ul>
							</div>
						</div>
						<h5><a href="laptop.php">Laptop</a></h5>
						<div class="simpleCart_shelfItem">
							
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1"> 
								<input type="hidden" name="w3ls_item" value="Induction Stove"> 
								
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //new-products -->
	
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact Us</h3>
					
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>MNNIT Allahabad, Teliyarganj, <span>Allahabad.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">mnnitallahabad@gmail.com</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><a href="about.html">About Us</a></li>
						<li><a href="#">Contact Us</a></li>
					
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info"> 
						<li><a href="book.php">Books</a></li>
						<li><a href="cycle.php">Cycle</a></li>
						<li><a href="laptop.php">Laptop</a></li>
						<li><a href="smartphone.php">SmartPhone</a></li>
						<li><a href="matress.php">Mattress</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Profile</h3>
					<ul class="info"> 
						<li><a href="profile.php">Home</a></li>
					</ul>
					<h4>Follow Us</h4>
					<div class="agileits_social_button">
						<ul>
							<li><a href="#" class="facebook"> </a></li>
							<li><a href="#" class="twitter"> </a></li>
							<li><a href="#" class="google"> </a></li>
							<li><a href="#" class="pinterest"> </a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="footer-copy1">
				<div class="footer-copy-pos">
					<a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
				</div>
			</div>
			<div class="container">
				<p>&copy; MNNIT Ekart | 2018. || All rights reserved.</p>
			</div>
		</div>
	</div>
	<!-- //footer --> 
	</html>