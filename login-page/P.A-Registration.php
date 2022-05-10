<?php
session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
if(isset($_POST['insert']))
{
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
    $verification_code = generateRandomString();
  
  if($Age < 18)
  {

    echo '<script>alert("Opps! You cannot register if your age is 18 below")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/P.A-Registration.php'</script>";
  }
  else
  {

    $query = $dbh->prepare("SELECT COUNT(*) FROM register WHERE Email =:Email");
    $query->execute([':Email' => $Email]);
    if ($query->fetchColumn()) 
    {
        echo "<script>alert('$Email is already in use!');</script>";
        echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/P.A-Registration.php'</script>";
    }

    $query = $dbh->prepare("SELECT COUNT(*) FROM register WHERE contactNo =:ContactNo");
    $query->execute([':ContactNo' => $ContactNo]);
    if ($query->fetchColumn()) 
    {
        echo "<script>alert('$ContactNo is already in use!');</script>";
        echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/P.A-Registration.php'</script>";
    }

    $query = $dbh->prepare("SELECT COUNT(*) FROM register WHERE Username =:Username");
    $query->execute([':Username' => $Username]);
    if ($query->fetchColumn()) 
    {
        echo "<script>alert('$Username is already exists!');</script>";
        echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/P.A-Registration.php'</script>";
    }
        
    else
    {

      $receiver = $Email;
      $subject = "Verification Code";
      $body = "Your Verification Code: $verification_code";
      $sender = "getpet2022.test@gmail.com";
  
      mail($receiver, $subject, $body, $sender);
      echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/login-page/P.A-OTP.php'</script>";
  
      $_SESSION['Firstname'] = $Firstname;
      $_SESSION['Lastname'] = $Lastname;
      $_SESSION['Email'] = $Email;
      $_SESSION['ContactNo'] = $ContactNo;
      $_SESSION['BirthDate'] = $BirthDate;
      $_SESSION['Age'] = $Age;
      $_SESSION['Gender'] = $Gender;
      $_SESSION['Address'] = $Address;
      $_SESSION['Username'] = $Username;
      $_SESSION['Password'] = $Password;
      $_SESSION['verification_code'] = $verification_code;

    }
    
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
              <span class="input-group-text" style="float:right;height:35px;">Firstname</span>
              <input type="text" aria-label="First name" class="form-control" style="background-color:#f1f1f1;height:35px;" name="Firstname">
              &nbsp<span class="input-group-text" style="float:right;height:35px;">Lastname</span>
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
												<input id="birthday" name="BirthDate" class="form-control" placeholder="mm-dd-yyyy" type="text" required="required" type="text" style="background-color:#f1f1f1;height:35px;font-size:13px;">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
              &nbsp
              <span class="input-group-text" style="float:right;height:35px;">Age</span>
              <input readonly type="number" min="18" max="60" aria-label="Age" class="form-control" style="background-color:#f1f1f1;height:35px;" onkeypress="isInputNumber(event)" id="age" name="Age" maxlength="2">
              &nbsp
              <label class="input-group-text" for="inputGroupSelect01">Gender</label>
              <select class="form-select" id="inputGroupSelect01" name="Gender" style="background-color:#f1f1f1;font-size:13px;">
                <option selected>Select Gender...</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
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
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var age = "";
        $('#birthday').datepicker({
            onSelect: function(value, ui) {
                var today = new Date();
                age = today.getFullYear() - ui.selectedYear;
                $('#age').val(age);
            },
            changeMonth: true,
            changeYear: true
        })
    })
</script>
  </body>
</html>