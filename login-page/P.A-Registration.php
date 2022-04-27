<?php
session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
if(isset($_POST['insert']))
{
$Firstname=($_POST['Firstname']);
$Lastname=($_POST['Lastname']);
$ContactNo=($_POST['ContactNo']);
$Address=($_POST['Address']);
$Email=($_POST['Email']);
$Username=($_POST['Username']);
$Password=($_POST['Password']);
$sql="INSERT INTO register(userFirstname,userLastname,contactNo,Address,Image,Email,Username,Password,Role,registerDate)VALUES(:Firstname,:Lastname,:ContactNo,:Address,'default_profile.png',:Email,:Username,:Password,'Pet Adopter',Now())";
$query=$dbh->prepare($sql); 
$query->bindParam(':Firstname',$Firstname,PDO::PARAM_STR);
$query->bindParam(':Lastname',$Lastname,PDO::PARAM_STR);
$query->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query->bindParam(':Address',$Address,PDO::PARAM_STR);
$query->bindParam(':Email',$Email,PDO::PARAM_STR);
$query->bindParam(':Username',$Username,PDO::PARAM_STR);
$query->bindParam(':Password',$Password,PDO::PARAM_STR);
$query->execute();

$sql2="SELECT userID FROM register ORDER BY userID DESC";
$query2=$dbh->prepare($sql2);
$query2->execute();

$ID=$query2->fetchColumn();

$Firstname=($_POST['Firstname']);
$Lastname=($_POST['Lastname']);
$ContactNo=($_POST['ContactNo']);
$Address=($_POST['Address']);
$Email=($_POST['Email']);
$Username=($_POST['Username']);
$Password=($_POST['Password']);
$sql1="INSERT INTO petadopter(adopterID,adopterFirstname,adopterLastname,adopterContactNo,adopterAddress,adopterPicture,adopterEmail,adopterUsername,adopterPassword,Role)VALUES($ID,:Firstname,:Lastname,:ContactNo,:Address,'default_profile.png',:Email,:Username,:Password,'Pet Adopter')";
$query1=$dbh->prepare($sql1);
$query1->bindParam(':Firstname',$Firstname,PDO::PARAM_STR);
$query1->bindParam(':Lastname',$Lastname,PDO::PARAM_STR); 
$query1->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query1->bindParam(':Address',$Address,PDO::PARAM_STR);
$query1->bindParam(':Email',$Email,PDO::PARAM_STR);
$query1->bindParam(':Username',$Username,PDO::PARAM_STR);
$query1->bindParam(':Password',$Password,PDO::PARAM_STR);
$query1->execute();

$Firstname=($_POST['Firstname']);
$Lastname=($_POST['Lastname']);
$ContactNo=($_POST['ContactNo']);
$Address=($_POST['Address']);
$Email=($_POST['Email']);
$Username=($_POST['Username']);
$Password=($_POST['Password']);
$sql3="INSERT INTO login(userID,userFirstname,userLastname,contactNo,Address,Image,Email,Username,Password,Role)VALUES($ID,:Firstname,:Lastname,:ContactNo,:Address,'default_profile.png',:Email,:Username,:Password,'Pet Adopter')";
$query3=$dbh->prepare($sql3); 
$query3->bindParam(':Firstname',$Firstname,PDO::PARAM_STR);
$query3->bindParam(':Lastname',$Lastname,PDO::PARAM_STR);
$query3->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query3->bindParam(':Address',$Address,PDO::PARAM_STR);
$query3->bindParam(':Email',$Email,PDO::PARAM_STR);
$query3->bindParam(':Username',$Username,PDO::PARAM_STR);
$query3->bindParam(':Password',$Password,PDO::PARAM_STR);
$query3->execute();

echo '<script>alert("Registered Successfully!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/login.php'</script>";

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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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
    <title>GETPET</title>
    </head>
  <body>
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/doggy1.jpg');"></div>
    <div class="contents order-2 order-md-1">

    <div class="container">
      <div class="row align-items-center justify-content-center">  
          <div class="col-md-15" style="width:100%;">    
          <br>
            <h5 style="text-align:center;margin-top:-14px;margin-left:-10px;">PET ADOPTER <strong>REGISTRATION FORM</strong></h5>
            <br>
            <form class="login100-form validate-form" method="post">

            <div class="input-group">
              <span class="input-group-text" style="float:right;height:35px;">Firstname & Lastname</span>
              <input type="text" aria-label="First name" class="form-control" style="background-color:#f1f1f1;height:35px;" name="Firstname">
              &nbsp
              <input type="text" aria-label="Last name" class="form-control" style="background-color:#f1f1f1;height:35px;" name="Lastname">
            </div>
            <br>

            <div class="input-group">
              <span class="input-group-text" style="float:right;height:35px;">Email</span>
              <input type="text" aria-label="Email" class="form-control" style="background-color:#f1f1f1;height:35px;" data-validate = "Valid email is required: ex@abc.xyz" name="Email">
              &nbsp
              <span class="input-group-text" style="float:right;height:35px;">Contact No</span>
              <input type="tel" aria-label="Contact No" class="form-control" style="background-color:#f1f1f1;height:35px;" pattern="((^(\+)(\d){12}$)|(^\d{11}$))" name="ContactNo" onkeypress="isInputNumber(event)" maxlength="11" required="required">
            </div>
            <br>

            <div class="input-group">
              <span class="input-group-text" style="float:right;height:35px;">Date Of Birth</span>
												<input id="birthday" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" style="background-color:#f1f1f1;height:35px;font-size:13px;">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
              &nbsp
              <span class="input-group-text" style="float:right;height:35px;">Age</span>
              <input type="text" aria-label="Age" class="form-control" style="background-color:#f1f1f1;height:35px;" onkeypress="isInputNumber(event)" name="Age" maxlength="2" min="18" max="80">
              &nbsp
              <label class="input-group-text" for="inputGroupSelect01">Gender</label>
              <select class="form-select" id="inputGroupSelect01" style="background-color:#f1f1f1;font-size:13px;">
                <option selected>Select Gender...</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="others">Others</option>
              </select>
            </div>
            <br>
                        
            <div class="input-group">
              <span class="input-group-text" style="float:right;height:35px;">Address</span>             
              <input type="text" aria-label="Username" class="form-control" style="background-color:#f1f1f1;height:35px;" name="Address" data-validate = "Valid username is required: ex@abc.xyz">
            </div>
            <br>           

            <div class="input-group">
              <span class="input-group-text" style="float:right;height:35px;">Username</span>
              <input type="text" aria-label="Username" class="form-control" style="background-color:#f1f1f1;height:35px;" name="Username" data-validate = "Valid username is required: ex@abc.xyz">
              &nbsp
              <span class="input-group-text" style="float:right;height:35px;">Password</span>
              <input type="password" aria-label="Password" class="form-control" style="background-color:#f1f1f1;height:35px;" name="Password" data-validate="Password is required" min="8" max="50">
            </div>
            <br>             
					<div style="text-align: center">
						<button  class="login100-form-btn" style="background-color:#00cdc1;width:300px;height:40px;border-radius:5px;border:#00cdc1;height:35px;" name="insert">
							<a style="color:White">Register</a>
						</button>
					</div>
          <br>
	        </form><br>
            <div class="w-full text-center p-t-55">
            <a href="http://localhost/developgetpet/login-page/login.php" class="txt2 bo1" style="color:blue; font-size:12px;">
            I am already a member
            </a>    
            </div>
      </div>
    </div>
  </div>

<script>     
            function isInputNumber(evt){
                
            var ch = String.fromCharCode(evt.which);
                
            if(!(/[0-9]/.test(ch))){
            evt.preventDefault();
            }
					}
</script>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>