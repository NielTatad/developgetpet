<?php 
session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
if(isset($_POST['PetAdopter']))
{
	
   echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/P.A-Registration.php'</script>";

}
if(isset($_POST['PetOwner']))
{
	
   echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/P.O-Registration.php'</script>";

}
if(isset($_POST['AnimalWelfareOrganization']))
{
	
   echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/A.W.O-Registration.php'</script>";

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
    .material-icons {vertical-align:-16%}
    </style>
    <title>GetPet</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/doggy1.jpg');"></div>
    <div class="contents order-2 order-md-1">
      
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
          <!--<a href="http://localhost/developgetpet/web/Dashboard.php">
          <p style="text-align:center;"><img src="images/Logo.png" style="width:250px;height:250px;margin-bottom:-90px;margin-top:-50px;margin-right:-15px;" alt=" " class="img-responsive"/></p>
          </a>-->
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
            <form class="login100-form validate-form" method="post">
            <b style="font-size:14px;">&nbspSELECT ROLE</b>
            <br>
            <br>
            <div style="text-align: center">
						    <button class="login100-form-btn" style="background-color:#00cdc1;width:350px;height:55px;border:none;border-radius: 4px;" name="PetAdopter">
							  <a style="color:White">Pet Adopter</a>
						    </button>
					  </div><br>
            <div style="text-align: center">
						    <button class="login100-form-btn" style="background-color:#00cdc1;width:350px;height:55px;border:none;border-radius: 4px;" name="PetOwner">
							  <a style="color:White">Pet Owner</a>
						    </button>
					  </div><br>
            <div style="text-align: center">
						    <button class="login100-form-btn" style="background-color:#00cdc1;width:350px;height:55px;border:none;border-radius: 4px;" name="AnimalWelfareOrganization">
							  <a style="color:White">Animal Welfare Organization</a>
						    </button>
					  </div>
            <br>
            <div class="w-full text-center p-t-55">
            <a href="http://localhost/developgetpet/login-page/login.php" class="txt2 bo1" style="color:blue; font-size:12px;">
            I am already a member
            </a>    
            </div>
            </form>
          </div>
        </div>
      
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>