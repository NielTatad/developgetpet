
<?php

session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
	
	if(isset($_POST['continue']))
	{
	  $user_email = $_POST['user_email'];
		$verification_code = generateRandomString();

		$sql = $dbh->prepare("SELECT * FROM register WHERE Email = '$user_email'");
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		$sql->execute();

		$rows = $sql->rowCount();
		if($rows>0)
		{
      echo "<script>alert('Verification Code was sent to : $user_email');</script>";
      echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/OTP.php'</script>";

	        $receiver = $user_email;
	        $subject = "Verification Code";
	        $body = "Your Verification Code: $verification_code";
	        $sender = "getpet2022.test@gmail.com";

	    	mail($receiver, $subject, $body, $sender);
        $_SESSION['user_email'] = $user_email;
        $_SESSION['verification_code'] = $verification_code;
		}
		else
		{
			echo "<script>alert('Incorrect email! or not yet registered');</script>";
      echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/VerifyEmail.php'</script>";
		}
	}

	function generateRandomString($length = 8) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?>
<!doctype html>
<html lang="en">
  <head>
  <script language="javascript" type="text/javascript">
    window.history.forward();
    </script>
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

            <form method="post">
            <strong style="font-size:14px;" >Email:</strong>
            <div style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="email" name="user_email" required="required" id="email">
					  </div><br>
              
              <?php
                date_default_timezone_set("Asia/Manila");
                ?>
              <div hidden style="text-align: center" class="wrap-input100 validate-input">
						    <input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" name="Date" required="required" value="<?php echo date('Y-m-d'); ?>" autocomplete="off">
					    </div>
              
  
              <input type="submit" name="continue" value="Continue" class="btn btn-block btn-primary" style="background-color:#00cdc1;border:#00cdc1;height:40px;">
              <br>
              <div class="w-full text-center p-t-55">
                <span class="txt2" style ="font-size: 12px;">
                Not a member?
                </span>

                <a href="http://localhost/developgetpet/login-page/selectrole.php" class="txt2 bo1" style="color:blue; font-size: 12px;" >
                Sign up now!
                </a><br>
					    </div>
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