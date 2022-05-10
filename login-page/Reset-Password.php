
<?php

session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
$Email=$_SESSION['Email'];
$verification_code=$_SESSION['verification_code'];


if(isset($_POST['confirm']))
    {
      $Email=($_POST['Email']);  
      $New_Password=($_POST['New_Password']);  
      $Retype_Password=($_POST['Retype_Password']);  

      if($New_Password = $_POST['New_Password'] == $Retype_Password = $_POST['Retype_Password'])
      {
        $Email=($_POST['Email']);  
        $New_Password=($_POST['New_Password']); 

        $receiver = $Email;
        $subject = "Password Changed!";
        $body = "Your new password: $New_Password";
        $sender = "getpet2022.test@gmail.com";

        mail($receiver, $subject, $body, $sender);

        $check_role = $dbh->prepare("SELECT Role from register WHERE Email = '$Email'");
        $check_role->setFetchMode(PDO:: FETCH_ASSOC);
        $check_role->execute();

        $row = $check_role->fetch();
        
        if($row['Role'] == 'Pet Owner')
        {
            $Email=($_POST['Email']);  
            $New_Password=($_POST['New_Password']);

            $sql="update register set Password=:New_Password where Email=:Email";
        
            $query=$dbh->prepare($sql);
            $query->bindParam(':Email',$Email,PDO::PARAM_STR);
            $query->bindParam(':New_Password',$New_Password,PDO::PARAM_STR);
            $query->execute();
            
            $sql1="update petowner set ownerPassword=:New_Password where ownerEmail=:Email";
            $query1=$dbh->prepare($sql1); 
            $query1->bindParam(':Email',$Email,PDO::PARAM_STR);
            $query1->bindParam(':New_Password',$New_Password,PDO::PARAM_STR);
            $query1->execute();
            
            $sql3="update login set Password=:New_Password where Email=:Email";
            
            $query3=$dbh->prepare($sql3);
            $query3->bindParam(':Email',$Email,PDO::PARAM_STR);
            $query3->bindParam(':New_Password',$New_Password,PDO::PARAM_STR);
            $query3->execute();
            
            echo "<script>alert('Your password changed successfully!');</script>";
            echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/login.php'</script>";
        }
        if($row['Role'] == 'Pet Adopter')
        {
            $Email=($_POST['Email']);  
            $New_Password=($_POST['New_Password']);

            $sql="update register set Password=:New_Password where Email=:Email";
        
            $query=$dbh->prepare($sql);
            $query->bindParam(':Email',$Email,PDO::PARAM_STR);
            $query->bindParam(':New_Password',$New_Password,PDO::PARAM_STR);
            $query->execute();
            
            $sql1="update petadopter set adopterPassword=:New_Password where adopterEmail=:Email";
            $query1=$dbh->prepare($sql1); 
            $query1->bindParam(':Email',$Email,PDO::PARAM_STR);
            $query1->bindParam(':New_Password',$New_Password,PDO::PARAM_STR);
            $query1->execute();
            
            $sql3="update login set Password=:New_Password where Email=:Email";
            
            $query3=$dbh->prepare($sql3);
            $query3->bindParam(':Email',$Email,PDO::PARAM_STR);
            $query3->bindParam(':New_Password',$New_Password,PDO::PARAM_STR);
            $query3->execute();
            
            echo "<script>alert('Your password changed successfully!');</script>";
            echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/login.php'</script>";
        }
        if($row['Role'] == 'Animal Welfare Organization')
        {
            $Email=($_POST['Email']);  
            $New_Password=($_POST['New_Password']);

            $sql="update register set Password=:New_Password where Email=:Email";
        
            $query=$dbh->prepare($sql);
            $query->bindParam(':Email',$Email,PDO::PARAM_STR);
            $query->bindParam(':New_Password',$New_Password,PDO::PARAM_STR);
            $query->execute();
            
            $sql1="update animalwelfareorganization set orgPassword=:New_Password where orgEmail=:Email";
            $query1=$dbh->prepare($sql1); 
            $query1->bindParam(':Email',$Email,PDO::PARAM_STR);
            $query1->bindParam(':New_Password',$New_Password,PDO::PARAM_STR);
            $query1->execute();
            
            $sql3="update login set Password=:New_Password where Email=:Email";
            
            $query3=$dbh->prepare($sql3);
            $query3->bindParam(':Email',$Email,PDO::PARAM_STR);
            $query3->bindParam(':New_Password',$New_Password,PDO::PARAM_STR);
            $query3->execute();
            
            echo "<script>alert('Your password changed successfully!');</script>";
            echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/login.php'</script>";
        }

      }

      else
      {
          echo "<script>alert('Password must be the same!');</script>";
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
            <strong style="font-size:14px;" >New Password:</strong>
            <div style="text-align: center;" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="password" name="New_Password" required="required">
					  </div>
            <strong style="font-size:14px;" >Re-type New Password:</strong>
            <div style="text-align: center;" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="password" name="Retype_Password" required="required">
					  </div><br><br>
            <input type="submit" name="confirm" value="Confirm" class="btn btn-block btn-primary" style="background-color:#00cdc1;border:#00cdc1;height:40px;">
              <br>
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