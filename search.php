
<?php
include "config.php";
session_start();
?>
<!DOCTYPE html>
<style type="text/css">

table{
margin: 40px 0px 0px 350px;
width: 50%;
}


	td,th{
			text-align: center;
			font-size: 17px;
			border: 1px solid;
			padding: 2px 2px 2px 2px;
	}



</style>
<html lang="en">
<head>
<title>Search Result</title>
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
					<form action="#" method="post">
						<input type="text" name="Search" placeholder="Search...">
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


<?php
$regnumber=$_SESSION["regn"];
$searchitem=$_POST['searchitem'];
$res=mysqli_query($db,"SELECT * FROM product WHERE prod_name LIKE '%$searchitem%' ");
$n=0;



?>


<table>
	<tr>
<th>Images of Items</th>
<th>Item Name</th>
	</tr>



<?php
while ($r=mysqli_fetch_array($res,MYSQLI_ASSOC))
{ 
if($n%3==0)
{
	
?>


<?php
}
?>

<tr>
<td><img src ="<?php echo $r["images_path"];?>" height="60" width="60"/></td>
<td><a href="userinfo.php?prodid=<?php echo $r["prod_id"]?>"><?php echo $r["prod_name"];?></a></td>
</tr>

<?php
$n=$n+1;
}	
?>
 </table>
</body>
</html>


<script type="text/javascript">
	
$(document).ready(function(){

  $('.delbtn').click(function(){
  	  
  	  var id=$(this).attr("id");
     
      //console.log(id);

      $.ajax({

       url:"delitem.php",
       dataType:"text",
       method:"GET",
       data:{
       	id:id
       },success:function(data){
             
             var result=$.trim(data);
              
              console.log(result);

             if(result=='Y')
             {
             	alert('Item deleted');
             	header('Location: http://localhost/mnnitekart/delete.php');
             }


       }
      

      });


   
  });

});
</script>>