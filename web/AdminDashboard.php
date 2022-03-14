<?php 
session_start();
include('C:\xampp\htdocs\GETPET\includes\config.php');
$query=$dbh->prepare("SELECT COUNT(ID) FROM pet_owner");
$query->execute();

$pet_owner=$query->fetchColumn();

?>

<?php
$query=$dbh->prepare("SELECT COUNT(ID) FROM pet_adopter");
$query->execute();

$pet_adopter=$query->fetchColumn();

?>

<?php
$query=$dbh->prepare("SELECT COUNT(ID) FROM animal_welfare_agency");
$query->execute();

$animal_welfare_agency=$query->fetchColumn();

?>

<?php
$query=$dbh->prepare("SELECT COUNT(*) FROM registered ");
$query->execute();

$Registered=$query->fetchColumn();

?>

<?php
$query=$dbh->prepare("SELECT COUNT(*) FROM login WHERE (Date) = (CURDATE())");
$query->execute();

$Date=$query->fetchColumn();

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>GetPet</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Cat Life web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="all">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
	<!-- Font-Awesome-Icons-CSS -->
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all" />
	<!-- Owl-Carousel-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<!-- //css files -->
	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Molle:400i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
	    rel="stylesheet">
	<!-- //web fonts -->
</head>

<body>
	<div class="w3l-main" id="home">
	<div class="container">
		</div>
	</div>
	<!--//banner-->

	<!-- sticky navigation -->
	<div class="nav-links">
		<nav class='navbar navbar-default'>
			<div class='container'>
				<div class='navbar-header'>
					<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
						<span class='sr-only'>Toggle Navigation</span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
				</div>
				<div class='collapse navbar-collapse'>
					<ul>
						
						<li>
							<a href="http://localhost/GETPET/web/AdminDashboard.php">Home</a>
						</li>
						<!--<li style = "width:160px;">
							<a href="#activity" class="scroll">Activity Log</a>
						</li>-->
						<li style = "width:160px; margin-left:-15px;">
							<a href="#activity" class="scroll">Request</a>
						</li>
						<li style = "width:160px; margin-left:-15px;">
							<a href="" class="scroll">Report</a>
						</li>						
						<li style = "width:160px; margin-left:-15px;">
							<a href="" class="scroll">Notification</a>
						</li>
						<li class="nav-item" style = "width:90px; margin-left:120px;"><a class="nav-link" href="#" data-toggle="dropdown">Acount</a>
							<div class="dropdown-menu dropdown-menu-right" style="margin-right: 35px;width:200px;">
							  <img src="images/logo.png" alt="" style="width:80px;height:80px;margin-left: 60px;margin-top: 20px;border-radius: 50%; border:1px solid silver;" />
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="#"style="color:black;"><div style="text-align: center"><t>Admin</t></div></a>
							  <div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#"style="color:black;"><t style="margin-left: 10px;">Profile</t></a>
							  <div class="dropdown-divider"></div>
							  <a class="dropdown-item" href="#"style="color:black;"><t style="margin-left: 10px;">Settings</t></a>
							  <div class="dropdown-divider"></div>
			
							  <a class="dropdown-item" href="http://localhost/GETPET/web/Dashboard.php" style="color:black;"><t style="margin-left: 10px;">Log out</t></a>
						</div></li>
                    </ul>
				</div>
			</div>
		</nav>
	</div>
	<!-- //sticky navigation -->

	<!-- UserActivityLog -->
	<!-- Total -->
	<div class="services" id="activity">
	<form class="login100-form validate-form" method="post">
		<div class="container">
		<h3 class="agile-title">Dashboard</h3>
			<div class="w3_agile_services_grids">
				<div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid " data-aos="zoom-in">
					<div class="ih-item circle effect1 agile_services_grid">
						<div class="spinner"></div>
						<div class="img">
							<img src="images/pet_owner_or_rescuer.jpg" alt=" " class="img-responsive" />
						</div>
					</div>
					<br>
					<legend style="font-size: 20px">Total Pet Owner</legend>
					<fieldset>
						<legend><?php echo $pet_owner; ?></legend>
						<button type="button" name="PetOwner" style="background-color:#00cdc1;border-radius:2px;color:white;width:100px;height:35px;border:none;"><a href="http://localhost/GETPET/web/PetOwner.php" style="color:white;">View</a></button>
					</fieldset>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid " data-aos="zoom-in">
					<div class="ih-item circle effect1 agile_services_grid">
						<div class="spinner"></div>
						<div class="img">
							<img src="images/adopter.jpg" alt=" " class="img-responsive" />
						</div>
					</div>
					<br>
					<legend style="font-size: 20px">Total Pet Adopter</legend>
					<fieldset>
						<legend><?php echo $pet_adopter; ?></legend>
						<button type="button" style="background-color:#00cdc1;border-radius:2px;color:white;width:100px;height:35px;border:none;"><a href="http://localhost/GETPET/web/PetAdopter.php" style="color:white;">View</a></button>
					</fieldset>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
					<div class="ih-item circle effect1 agile_services_grid">
						<div class="spinner"></div>
						<div class="img">
							<img src="images/b1.jpg" alt=" " class="img-responsive" />
						</div>
					</div>
					<br>
					<legend style="font-size: 20px">Total Animal Welfare Agency</legend>
					<fieldset>
						<legend><?php echo $animal_welfare_agency;?></legend>
						<button type="button" style="background-color:#00cdc1;border-radius:2px;color:white;width:100px;height:35px;border:none;"><a href="http://localhost/GETPET/web/AnimalWelfareAgency.php" style="color:white;">View</a></button>
					</fieldset>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
				<br><br>
					<div class="ih-item circle effect1 agile_services_grid">
						<div class="spinner"></div>
						<div class="img">
							<img src="images/registered.jpg" alt=" " class="img-responsive" />
						</div>
					</div>
					<br>
					<legend style="font-size: 20px">Total Registered</legend>
					<fieldset>
					     <legend><legend><?php echo $Registered;?></legend></legend>
						 <button type="button" style="background-color:#00cdc1;border-radius:2px;color:white;width:100px;height:35px;border:none;"><a href="http://localhost/GETPET/web/TotalRegistered.php" style="color:white;">View</a></button>
					</fieldset>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 w3_agile_services_grid" data-aos="zoom-in">
				<br><br>
					<div class="ih-item circle effect1 agile_services_grid">
						<div class="spinner"></div>
						<div class="img">
							<img src="images/login.jpg" alt=" " class="img-responsive" />
						</div>
					</div>
					<br>
					<legend style="font-size: 20px">Total User Log Today</legend>
					<fieldset>
					     <legend><legend><?php echo $Date;?></legend></legend>
						 <button type="button" style="background-color:#00cdc1;border-radius:2px;color:white;width:100px;height:35px;border:none;"><a href="http://localhost/GETPET/web/UserLogToday.php" style="color:white;">View</a></button>
					</fieldset>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		</form>
	</div><br><br><br><br><br>
	<!-- //UserActivityLog -->
	<!-- //Total -->
   
	<!-- Pet Owner/Rescuer
	<div class="PetOwnerOrRescuer" id="PetAdopter"><br><br>
		<div class="container">
		<h3 class="agile-title">Pet Adopter</h3>
			<div class="w3_agile_services_grids">
			<form action="" method="post" enctype="multipart/form-data">
<div class="panel-body p-20">

<table style="text-align:center; padding-right:5px;" class="display table table-striped table-bordered" id="example" cellspacing="0" width="100%">
<thead>
<tr>
</tr> 
<tr>
<th style="text-align:center;" width="10%">ID</th>
<th style="text-align:center;" width="30%">First Name</th>
<th style="text-align:center;" width="30%">Last Name</th>
<th style="text-align:center;" width="50%">Contact No.</th>
<th style="text-align:center;" width="10%">Address</th>
<th style="text-align:center;" width="10%">Picture</th>
<th style="text-align:center;" width="10%">Email</th>
<th style="text-align:center;" width="10%">Role</th>
</tr>
</thead>

<tbody>
<?php
$sql="SELECT * from pet_adopter";
$query=$dbh->prepare($sql);
$query->execute();
$results=$query->fetchALL(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount()>0)
{
  foreach($results as $result)
  {
    ?>
<tr>
<td><?php echo htmlentities($result->ID);?></td>
<td><?php echo htmlentities($result->Firstname);?></td>
<td><?php echo htmlentities($result->Lastname);?></td>
<td><?php echo htmlentities($result->ContactNo);?></td>
<td><?php echo htmlentities($result->Address);?></td>
<td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($result->Picture).'" width="75"; height="80">';?></td>
<td><?php echo htmlentities($result->Email);?></td>
<td><?php echo htmlentities($result->Role);?></td>
<td><img src="images/Edit.png" alt="" style="width:30px;height:30px;margin-top: 1px;border-radius: 50%;" /></td>
<td><img src="images/Delete.png" alt="" style="width:30px;height:30px;margin-top: 1px;border-radius: 50%;" /></td>
</tr>
<?php $cnt=$cnt+1;}} ?>
</tbody>
</table>
</div>
</form><br><br><br><br>
<?php
if(isset($_POST['delete']))
{
  foreach ($_POST['ID'] as $ID){
    $query="Delete from pet_owner where ID=:ID";
    $query1 = $dbh->prepare($query);
    $query1->bindValue('studID',$studID);
    $query1->execute();

	echo '<script>alert("Deleted Successfully!!!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/GETPET/web/AdminDashboard.php'</script>";

    }
}
if(isset($_POST['insert']))
{

    echo "<script type ='text/javascript'> document.location='http://localhost/GETPET/Dashboard/AdminHomePage.php'</script>";

}

?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	-->

	<!-- //Pet Owner/Rescuer -->
	<div class="modal fade"  data-keyboard="false" data-backdrop="static" id="PetOwner" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content"> 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="font-size:30px;margin-top:-20px;">&times;</button>
                    <div class="modal-info">
                    <form class="login100-form validate-form" method="post">
                    <img src="images/Logo/Logo.png" style="width:250px;height:250px;margin-left:140px;margin-top:-60px;" alt=" " class="img-responsive"/>
                    <h2 style="text-align:center;margin-top:-40px;">Pet Owner/Rescuer Registration</h2>
                    <br>
                    <div style="text-align: center" class="wrap-input100 validate-input">
                        <input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Firstname" placeholder="Firstname">
                    </div><br>
                    <div style="text-align: center" class="wrap-input100 validate-input">
                        <input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Lastname" placeholder="Lastname">
                        <span class="focus-input100"></span>
                    </div><br>
                    <div  style="text-align: center" class="wrap-input100 validate-input">
                        <input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;font-family:Arial;" type="text" name="ContactNo" onkeypress="isInputNumber(event)" maxlength="11" placeholder="Contact No.">
                        <script>
            
                        function isInputNumber(evt){
                
                        var ch = String.fromCharCode(evt.which);
                
                        if(!(/[0-9]/.test(ch))){
                        evt.preventDefault();
                       }
                    }
                    </script>
                    </div><br>
                    <div style="text-align: center" class="wrap-input100 validate-input">
                        <input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Address" required="required" placeholder="Address">
                    </div><br>
                    <div style="text-align: center" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Email" required="required" placeholder="Email">
                    </div><br>
                    <div  style="text-align: center" class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="password" name="Password" required="required" placeholder="Password">
                    </div><br>
                    <div style="text-align: center">
                        <button  class="login100-form-btn" style="background-color:#00cdc1;width:250px;height:40px;border:none;" name="PetOwnerOrRescuer">
                            <a style="color:White"> Register </a>
                        </button>
                    </div><br>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //Pet Owner/Rescuer -->

	<!-- footer 
	<section class="footer-w3">
		<div class="container">
			<div class="col-lg-4 col-md-4 col-sm-4 footer-agile1" data-aos="zoom-in">
				<h3>ADOPTING MEANS YOU SAVE A LIFE!</h3>
				<p class="footer-p1">Too often, shelters euthanize animals due to room constraints, but if more people adopted pets instead of buying them, the number of pets euthanized would lower dramatically.
						When you adopt, not only do you save your loving new companion, but you make space for other animals who desperately need it, creating a domino effect of goodness.
				</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 footer-mid-w3" data-aos="zoom-in">
				<h3>Instagram Posts</h3>
				<div class="agileinfo_footer_grid1">
					<a href="#">
						<img src="images/dogs1.jpg" alt=" " class="img-responsive">
					</a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#">
						<img src="images/f2.jpg" alt=" " class="img-responsive">
					</a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#">
						<img src="images/dogs3.jpg" alt=" " class="img-responsive">
					</a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#">
						<img src="images/f4.jpg" alt=" " class="img-responsive">
					</a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#">
						<img src="images/dogs5.jpg" alt=" " class="img-responsive">
					</a>
				</div>
				<div class="agileinfo_footer_grid1">
					<a href="#">
						<img src="images/f6.jpg" alt=" " class="img-responsive">
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-4 footer-agile1" data-aos="zoom-in">
				<h3>Follow us also in Twitter</h3>
				<ul class="tweet-agile">
					<li>
						<i class="fa fa-twitter-square" aria-hidden="true"></i>
						<p class="tweet-p1">
							<a href="mailto:king30cinco@gmail.com">GetPet@twitter.com</a> ADOPTING IS MORE AFFORDABLE.
							<a href="#">http://ax.by/zzzz</a>
						</p>
						<p class="tweet-p2">Posted 3 days ago.</p>
					</li>
					
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
	-->
	<br>
	<br>
	<!-- copyright -->
	<div class="w3layouts_copy_right">
		<div class="container">
			<p>© 2021 GetPet. All rights reserved | Design by
				<a href="">Team K.W .</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->


	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->
	<!-- //js -->

	<!-- Banner Slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //Banner Slider -->

	<!-- Sticky Navigation Script -->
	<script>
		$(window).scroll(function () {
			if ($(window).scrollTop() >= 795) {
				$('nav').addClass('fixed-header');
			} else {
				$('nav').removeClass('fixed-header');
			}
		});

		/* scrollTop() >= 795
		   Should be equal the the height of the header
		 */
	</script>
	<!-- //Sticky Navigation Script -->

	<!-- simple-lightbox -->
	<script src="js/simple-lightbox.min.js"></script>
	<script>
		$(function () {
			var gallery = $('.agileinfo-gallery-row a').simpleLightbox({
				navText: ['&lsaquo;', '&rsaquo;']
			});
		});
	</script>
	<link href='css/simplelightbox.min.css' rel='stylesheet' type='text/css'>
	<!-- Light-box css -->
	<!-- //simple-lightbox -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({
				items: 3,
				lazyLoad: true,
				autoPlay: true,
				pagination: true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->

</body>

</html>