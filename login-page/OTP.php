
<?php

session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
$Email=$_SESSION['Email'];
$verification_code=$_SESSION['verification_code'];


if(isset($_POST['continue']))
    {
      if($otp_code = $_POST['otp_code'] == $verification_code)
      {
        $otp_code = $_POST['otp_code'];
        $Email=($_POST['Email']);
        
        echo "<script>alert('You can now change your password!');</script>";
        echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/Reset-Password.php'</script>";
    
        $_SESSION['Email'] = $Email;
        $_SESSION['verification_code'] = $verification_code;

      }

      else
      {
          echo "<script>alert('Invalid OTP code or Email does not exist!');</script>";
          echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/OTP.php'</script>";
      }
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <style>
    .material-icons {vertical-align:-16%}
    </style>
    <title>GetPet</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" class="responsive" style="background-image:url('images/doggy1.jpg');"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
          <a href="http://localhost/developgetpet/web/Dashboard.php">
          <p style="text-align:center;"><img src="images/Logo.png" style="width:250px;height:250px;margin-bottom:-190px;margin-top:-50px;" alt=" " class="img-responsive"/><br></p>
          </a>
          </div>

            <form action="" method="post">
            <div style="text-align: center" class="wrap-input100 validate-input">
						<input hidden class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="email" name="Email" value="<?php echo $Email;?>">
					  </div><br>
            <strong style="font-size:14px;" >Verification Code:</strong>
            <div style="text-align: center;" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="text" name="otp_code" required="required">
					  </div><br>
            <input type="submit" name="continue" value="Continue" class="btn btn-block btn-primary" style="background-color:#00cdc1;border:#00cdc1;height:40px;">
              <br>
            <div style="text-align: center" class="wrap-input100 validate-input">
						<input hidden class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="text" name="verification_code" value="<?php echo $verification_code;?>">
					  </div><br>  
            </form>
          </div>
        </div>
      </div>
    </div> 
  </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <script>
	
		function myfunction()
		{
			var x=document.getElementById("Password");
			if(x.type =="password")
			{
				x.type="text";
			}
			
			else
			{
				x.type="password";
			}
		}
    </script>

  </body>
</html>