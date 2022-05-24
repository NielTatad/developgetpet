<?php 
session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
if(isset($_POST['login']))
{
	$Username=$_POST['Username'];
    $Password=$_POST['Password'];

    $sql = "SELECT * FROM admin WHERE adUsername = :Username AND adPassword =:Password";
    $query = $dbh->prepare($sql);
    $query->bindParam(':Username', $Username,PDO::PARAM_STR);
    $query->bindParam(':Password', $Password,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetch(PDO::FETCH_ASSOC);
    

    if($query->rowCount()>0)
    {

        session_regenerate_id();
		    $_SESSION['adID'] = $results['adID'];
       
        echo '<script>alert("Login Successfully!")</script>';
        echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/Admin-Dashboard.php'</script>";


    }

    $sql1 = "SELECT * FROM petowner WHERE ownerUsername = :Username AND ownerPassword =:Password";
    $query1 = $dbh->prepare($sql1);
    $query1->bindParam(':Username', $Username,PDO::PARAM_STR);
    $query1->bindParam(':Password', $Password,PDO::PARAM_STR);
    $query1->execute();
    $results1=$query1->fetch(PDO::FETCH_ASSOC);
    

    if($query1->rowCount()>0)
    {

        session_regenerate_id();
		    $_SESSION['ownerID'] = $results1['ownerID'];
        $_SESSION['ownerFirstname'] = $results1['ownerFirstname'];
        $_SESSION['ownerLastname'] = $results1['ownerLastname'];

        $ID=$_SESSION['ownerID'];

        $Date=($_POST['Date']);

        $sql="update login set loginDate=:Date where userID=$ID";
        $query=$dbh->prepare($sql); 
        $query->bindParam(':Date',$Date,PDO::PARAM_STR);
        $query->execute();

        echo '<script>alert("Login Successfully!")</script>';
        echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Dashboard.php'</script>";
        echo $_SESSION['ownerID'];
        echo $_SESSION['ownerFirstname'];
        echo $_SESSION['ownerLastname'];

    }

    $sql2 = "SELECT * FROM petadopter WHERE adopterUsername = :Username AND adopterPassword =:Password";
    $query2 = $dbh->prepare($sql2);
    $query2->bindParam(':Username', $Username,PDO::PARAM_STR);
    $query2->bindParam(':Password', $Password,PDO::PARAM_STR);
    $query2->execute();
    $results2=$query2->fetch(PDO::FETCH_ASSOC);
    

    if($query2->rowCount()>0)
    {

        session_regenerate_id();
		    $_SESSION['adopterID'] = $results2['adopterID'];
        $_SESSION['adopterFirstname'] = $results2['adopterFirstname'];
        $_SESSION['adopterLastname'] = $results2['adopterLastname'];

        $ID=$_SESSION['adopterID'];

        $Date=($_POST['Date']);

        $sql="update login set loginDate=:Date where userID=$ID";
        $query=$dbh->prepare($sql); 
        $query->bindParam(':Date',$Date,PDO::PARAM_STR);
        $query->execute();

        echo '<script>alert("Login Successfully!")</script>';
        echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.A-Dashboard.php'</script>";
        echo $_SESSION['adopterID'];
        echo $_SESSION['adopterFirstname'];
        echo $_SESSION['adopterLastname'];

    }

    $sql3 = "SELECT * FROM animalwelfareorganization WHERE orgUsername = :Username AND orgPassword =:Password";
    $query3 = $dbh->prepare($sql3);
    $query3->bindParam(':Username', $Username,PDO::PARAM_STR);
    $query3->bindParam(':Password', $Password,PDO::PARAM_STR);
    $query3->execute();
    $results3=$query3->fetch(PDO::FETCH_ASSOC);
    

    if($query3->rowCount()>0)
    {

        session_regenerate_id();
		    $_SESSION['orgID'] = $results3['orgID'];
        $_SESSION['orgName'] = $results3['orgName'];

        $ID=$_SESSION['orgID'];

        $Date=($_POST['Date']);

        $sql="update login set loginDate=:Date where userID=$ID";
        $query=$dbh->prepare($sql); 
        $query->bindParam(':Date',$Date,PDO::PARAM_STR);
        $query->execute();

        echo '<script>alert("Login Successfully!")</script>';
        echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-Dashboard.php'</script>";
        echo $_SESSION['ID'];
        echo $_SESSION['OrganizationName'];
        echo $_SESSION['OrganizationManager'];

    }
    
    else 
    echo '<script>alert("Invalid Account!")</script>';
	



}

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
  <script language="javascript" type="text/javascript">
    window.history.forward();
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    

    <style>
    .material-icons {vertical-align:-16%}
    </style>
    <title>GETPET</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" class="responsive" style="background-image:url('images/doggy1.jpg');"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
          <a href="http://localhost/developgetpet/web/Dashboard.php">
          <p style="text-align:center;"><img src="images/Logo.png" style="width:250px;height:250px;margin-bottom:-190px;margin-top:-50px;" alt=" " class="img-responsive"/><br><br><br></p>
          </a>
          </div>
            <br>
            <form action="#" method="post">
            <br><br>
            <strong style="font-size:14px;" >Username:</strong>
            <div style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="text" name="Username" required="required" id="Username">
					  </div>

            <strong style="font-size:14px;">Password:</strong>
            <div style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:300px;height:40px;border-radius:5px;border:#00cdc1;" type="password" name="Password" required="required" id="Password">          
					  </div>
            <div>
              <input type="checkbox" onclick="myfunction()" value="Show password">Show password
            </div><br>
            <span class="txt2" style ="font-size: 12px;">
                Forgot Password?
                </span>
                <a href="http://localhost/developgetpet/login-page/Email.php" class="txt2 bo1" style="color:blue; font-size: 12px;" >
                Reset Password!
                </a><br>
              
              <?php
                date_default_timezone_set("Asia/Manila");
                ?>
              <div hidden style="text-align: center" class="wrap-input100 validate-input">
						    <input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" name="Date" required="required" value="<?php echo date('Y-m-d'); ?>" autocomplete="off">
					    </div>
              
              <div class="d-flex mb-5 align-items-center" >
                
              <!--</label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>--> 
              </div>
  
              <input type="submit" name="login" value="Sign In" class="btn btn-block btn-primary" style="background-color:#00cdc1;border:#00cdc1;height:40px;">
              <br>
              <div class="w-full text-center p-t-55">
                <span class="txt2" style ="font-size: 12px;">
                Not a member?
                </span>

                <a href="#" class="txt2 bo1" style="color:blue; font-size: 12px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Sign up now!
                </a><br>

					    </div>
            </form>
          </div>
        </div>
      </div>
    </div> 
  </div>

  <!-- Vertically centered modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modal-title">Choose Account Type:</h5>
                            
                        </div>
                        <div class="modal-body">
                            <div class="row g-3 justify-content-around">
                                <a href="http://localhost/developgetpet/login-page/P.A-Registration.php" class="col-sm-3 text-center ms2" style="background-color:#00cdc1;width:100px;height:100px;border:none;border-radius:4px;">
                                    <p style="color:white;padding-top:25px;">Pet <br> Adopter</p>
                                </a>
                                <a href="http://localhost/developgetpet/login-page/P.O-Registration.php" class="col-sm-3 text-center ms1" style="background-color:#00cdc1;width:50px;height:100px;border:none;border-radius:4px;">
                                <p style="color:white;padding-top:25px;">Pet <br> Owner</p>
                                </a>
                                <a href="http://localhost/developgetpet/login-page/A.W.O-Registration.php" class="col-sm-3 text-center ms1" style="background-color:#00cdc1;width:50px;height:100px;border:none;border-radius:4px;">
                                <p style="color:white;padding-top:20px;">Animal Welfare Organization</p>
                                </a>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <p>Do you have an account? <a href="login.php">Login</a></p>
                        </div>
                    </div>
                </div>
            </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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