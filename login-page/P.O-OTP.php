
<?php

session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
$Firstname=$_SESSION['Firstname'];
$Lastname=$_SESSION['Lastname'];
$Email=$_SESSION['Email'];
$ContactNo=$_SESSION['ContactNo'];
$BirthDate=$_SESSION['BirthDate'];
$Age=$_SESSION['Age'];
$Gender=$_SESSION['Gender'];
$Address=$_SESSION['Address'];
$Username=$_SESSION['Username'];
$Password=$_SESSION['Password'];
$verification_code=$_SESSION['verification_code'];


if(isset($_POST['register']))
    {
      if($otp_code = $_POST['otp_code'] == $verification_code)
      {
        $otp_code = $_POST['otp_code'];
        $Firstname=($_POST['Firstname']);
        $Lastname=($_POST['Lastname']);
        $ContactNo=($_POST['ContactNo']);
        $BirthDate=($_POST['BirthDate']);
        $Age=($_POST['Age']);
        $Gender=($_POST['Gender']);
        $Address=($_POST['Address']);
        $Email=($_POST['Email']);
        $Username=($_POST['Username']);
        $Password=($_POST['Password']);
        $sql="INSERT INTO register(userFirstname,userLastname,contactNo,birthDate,Age,Gender,Address,Image,Email,Username,Password,Role,registerDate)VALUES(:Firstname,:Lastname,:ContactNo,:BirthDate,:Age,:Gender,:Address,'default_profile.png',:Email,:Username,:Password,'Pet Owner',Now())";
        $query=$dbh->prepare($sql); 
        $query->bindParam(':Firstname',$Firstname,PDO::PARAM_STR);
        $query->bindParam(':Lastname',$Lastname,PDO::PARAM_STR);
        $query->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
        $query->bindParam(':BirthDate',$BirthDate,PDO::PARAM_STR);
        $query->bindParam(':Age',$Age,PDO::PARAM_STR);
        $query->bindParam(':Gender',$Gender,PDO::PARAM_STR);
        $query->bindParam(':Address',$Address,PDO::PARAM_STR);
        $query->bindParam(':Email',$Email,PDO::PARAM_STR);
        $query->bindParam(':Username',$Username,PDO::PARAM_STR);
        $query->bindParam(':Password',$Password,PDO::PARAM_STR);
        $query->execute();
        
        $sql2="SELECT userID FROM register ORDER BY userID DESC";
        $query2=$dbh->prepare($sql2);
        $query2->execute();
        
        $ID=$query2->fetchColumn();
        
        $sql1="INSERT INTO petowner(ownerID,ownerFirstname,ownerLastname,ownerContactNo,ownerBirthdate,ownerAge,ownerGender,ownerAddress,ownerPicture,ownerEmail,ownerUsername,ownerPassword,Role)VALUES($ID,:Firstname,:Lastname,:ContactNo,:BirthDate,:Age,:Gender,:Address,'default_profile.png',:Email,:Username,:Password,'Pet Owner')";
        $query1=$dbh->prepare($sql1);
        $query1->bindParam(':Firstname',$Firstname,PDO::PARAM_STR);
        $query1->bindParam(':Lastname',$Lastname,PDO::PARAM_STR); 
        $query1->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
        $query1->bindParam(':BirthDate',$BirthDate,PDO::PARAM_STR);
        $query1->bindParam(':Age',$Age,PDO::PARAM_STR);
        $query1->bindParam(':Gender',$Gender,PDO::PARAM_STR);
        $query1->bindParam(':Address',$Address,PDO::PARAM_STR);
        $query1->bindParam(':Email',$Email,PDO::PARAM_STR);
        $query1->bindParam(':Username',$Username,PDO::PARAM_STR);
        $query1->bindParam(':Password',$Password,PDO::PARAM_STR);
        $query1->execute();
        
        $sql3="INSERT INTO login(userID,userFirstname,userLastname,contactNo,birthDate,Age,Gender,Address,Image,Email,Username,Password,Role)VALUES($ID,:Firstname,:Lastname,:ContactNo,:BirthDate,:Age,:Gender,:Address,'default_profile.png',:Email,:Username,:Password,'Pet Owner')";
        $query3=$dbh->prepare($sql3); 
        $query3->bindParam(':Firstname',$Firstname,PDO::PARAM_STR);
        $query3->bindParam(':Lastname',$Lastname,PDO::PARAM_STR);
        $query3->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
        $query3->bindParam(':BirthDate',$BirthDate,PDO::PARAM_STR);
        $query3->bindParam(':Age',$Age,PDO::PARAM_STR);
        $query3->bindParam(':Gender',$Gender,PDO::PARAM_STR);
        $query3->bindParam(':Address',$Address,PDO::PARAM_STR);
        $query3->bindParam(':Email',$Email,PDO::PARAM_STR);
        $query3->bindParam(':Username',$Username,PDO::PARAM_STR);
        $query3->bindParam(':Password',$Password,PDO::PARAM_STR);
        $query3->execute();

        $receiver = $Email;
        $subject = "Registered Successfully!";
        $body = "$Firstname $Lastname you registered in GETPET, you can now login your account";
        $sender = "getpet2022.test@gmail.com";

        mail($receiver, $subject, $body, $sender);
        
        echo '<script>alert("Registered Successfully!")</script>';
        echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/login.php'</script>";   

      }

      else
      {
          echo "<script>alert('Invalid OTP code or Email does not exist!');</script>";
      }
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

            <form action="" method="post">
            <div style="text-align: center" class="wrap-input100 validate-input">
						<input hidden class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="text" name="Firstname" value="<?php echo $Firstname;?>">
					  </div><br>
            <div style="text-align: center" class="wrap-input100 validate-input">
						<input hidden class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="text" name="Lastname" value="<?php echo $Lastname;?>">
					  </div><br>
            <div style="text-align: center" class="wrap-input100 validate-input">
						<input hidden class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="email" name="Email" value="<?php echo $Email;?>">
					  </div><br>
            <div style="text-align: center" class="wrap-input100 validate-input">
						<input hidden class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="text" name="ContactNo" value="<?php echo $ContactNo;?>">
					  </div><br>
            <div style="text-align: center" class="wrap-input100 validate-input">
						<input hidden class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="text" name="BirthDate" value="<?php echo $BirthDate;?>">
					  </div><br>
            <strong style="font-size:14px;" >Verification Code:</strong>
            <div style="text-align: center;" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="text" name="otp_code" required="required">
					  </div><br>
            <input type="submit" name="register" value="Continue" class="btn btn-block btn-primary" style="background-color:#00cdc1;border:#00cdc1;height:40px;">
              <br>
            <div style="text-align: center" class="wrap-input100 validate-input">
						<input hidden class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="text" name="Age" value="<?php echo $Age;?>">
					  </div><br>
            <div style="text-align: center" class="wrap-input100 validate-input">
						<input hidden class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="text" name="Gender" value="<?php echo $Gender;?>">
					  </div><br>
            <div style="text-align: center" class="wrap-input100 validate-input">
						<input hidden class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="text" name="Address" value="<?php echo $Address;?>">
					  </div><br>
            <div style="text-align: center" class="wrap-input100 validate-input">
						<input hidden class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="text" name="Username" value="<?php echo $Username;?>">
					  </div><br>
            <div style="text-align: center" class="wrap-input100 validate-input">
						<input hidden class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="text" name="Password" value="<?php echo $Password;?>">
					  </div><br>
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