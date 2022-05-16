<?php 
session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
$ID=$_SESSION['orgID'];
$sql = "SELECT * from animalwelfareorganization where orgID=:ID";
$query=$dbh->prepare($sql);
$query->bindParam(':ID',$ID,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount()>0)
{
  foreach($results as $result)
  {
    ?>
                              
<p></p>
<?php
?>
<?php }} ?>

<?php

if(isset($_POST['update']))
{
$OrganizationName=($_POST['Orgname']);
$ContactNo=($_POST['ContactNo']);
$Address=($_POST['Address']);
$Email=($_POST['Email']);
$Username=($_POST['Username']);
$Password=($_POST['Password']);

$sql="update register set 
orgName=:Orgname,
contactNo=:ContactNo,
Address=:Address,
Email=:Email,
Username=:Username,
Password=:Password 
where 
userID=:ID";

$query=$dbh->prepare($sql);
$query->bindParam(':ID',$ID,PDO::PARAM_STR);  
$query->bindParam(':Orgname',$OrganizationName,PDO::PARAM_STR);
$query->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query->bindParam(':Address',$Address,PDO::PARAM_STR);
$query->bindParam(':Email',$Email,PDO::PARAM_STR);
$query->bindParam(':Username',$Username,PDO::PARAM_STR);
$query->bindParam(':Password',$Password,PDO::PARAM_STR);
$query->execute();

$OrganizationName=($_POST['Orgname']);
$ContactNo=($_POST['ContactNo']);
$Address=($_POST['Address']);
$Email=($_POST['Email']);
$Username=($_POST['Username']);
$Password=($_POST['Password']);

$sql1="update animalwelfareorganization set
orgName=:Orgname,
orgContactNo=:ContactNo,
orgAddress=:Address,
orgEmail=:Email,
orgUsername=:Username,
orgPassword=:Password 
where 
orgID=:ID";

$query1=$dbh->prepare($sql1); 
$query1->bindParam(':ID',$ID,PDO::PARAM_STR); 
$query1->bindParam(':Orgname',$OrganizationName,PDO::PARAM_STR);
$query1->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query1->bindParam(':Address',$Address,PDO::PARAM_STR);
$query1->bindParam(':Email',$Email,PDO::PARAM_STR);
$query1->bindParam(':Username',$Username,PDO::PARAM_STR);
$query1->bindParam(':Password',$Password,PDO::PARAM_STR);
$query1->execute();

$OrganizationName=($_POST['Orgname']);
$ContactNo=($_POST['ContactNo']);
$Address=($_POST['Address']);
$Email=($_POST['Email']);
$Username=($_POST['Username']);
$Password=($_POST['Password']);

$sql3="update login set 
orgName=:Orgname,
contactNo=:ContactNo,
Address=:Address,
Email=:Email,
Username=:Username,
Password=:Password
where userID=:ID";

$query3=$dbh->prepare($sql3); 
$query3->bindParam(':ID',$ID,PDO::PARAM_STR);
$query3->bindParam(':Orgname',$OrganizationName,PDO::PARAM_STR);
$query3->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query3->bindParam(':Address',$Address,PDO::PARAM_STR);
$query3->bindParam(':Email',$Email,PDO::PARAM_STR);
$query3->bindParam(':Username',$Username,PDO::PARAM_STR);
$query3->bindParam(':Password',$Password,PDO::PARAM_STR);
$query3->execute();
{
echo '<script>alert("Your Account Updated Successfully!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-Profile.php'</script>";
}
}
?>

<?php
if(isset($_POST['profile']))
{
$Picture=$_POST['Picture'];

$sql="update register set 
Image=:Picture
where userID=:ID";

$query=$dbh->prepare($sql);
$query->bindParam(':ID',$ID,PDO::PARAM_STR);  
$query->bindParam(':Picture',$Picture,PDO::PARAM_STR);
$query->execute();


$Picture=($_POST['Picture']);

$sql1="update animalwelfareorganization set
orgLogo=:Picture
where orgID=:ID";
$query1=$dbh->prepare($sql1); 
$query1->bindParam(':ID',$ID,PDO::PARAM_STR); 
$query1->bindParam(':Picture',$Picture,PDO::PARAM_STR);
$query1->execute();


$Picture=$_POST['Picture'];

$sql3="update login set 
Image=:Picture
where userID=:ID";

$query3=$dbh->prepare($sql3);
$query3->bindParam(':ID',$ID,PDO::PARAM_STR); 
$query3->bindParam(':Picture',$Picture,PDO::PARAM_STR);
$query3->execute();
{
echo '<script>alert("Your Profile Picture Updated Successfully!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-Profile.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>GETPET</title>

	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
	<!-- Select2 -->
	<link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
	<!-- Switchery -->
	<link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
	<!-- starrr -->
	<link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
  <style>
    .view-more-comment:hover {
    text-decoration: underline;
}
    .hide-more-comment:hover {
    text-decoration: underline;
}
  </style>
</head>

<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="http://localhost/developgetpet/dashboard/A.W.O-Dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>&nbsp&nbsp&nbsp&nbspGETPET</span></a>
            </div>

            <div class="clearfix"></div>

					<!-- menu profile quick info -->
                    <div class="profile clearfix">
                    <!--<div class="profile_pic">
                    <img <?php echo"<img src = '/developgetpet/web/images/$result->ownerPicture'";?> alt="..." class="img-circle profile_img" style="background-color:#00cdc1;border:#00cdc1;">
                    </div>
                    <div class="profile_info">
                    <span>Welcome,</span>
                    <h2><?php echo ($result->ownerFirstname);?> <?php echo ($result->ownerLastname);?></h2>
                    </div>-->
                    <div class="clearfix"></div>
                    </div>
                    <!-- /menu profile quick info -->

					<br />

				 <!-- sidebar menu -->
         <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                <li>
                    <li><a href="http://localhost/developgetpet/dashboard/A.W.O-Dashboard.php"><i></i> Dashboard </a>
                    </li>

                    <li><a >Pet For Adoption</a>
                      <ul class="nav child_menu">
                        <li><a href="http://localhost/developgetpet/dashboard/A.W.O-Dogslistadoption.php">Dog's </a></li>
                        <li><a href="http://localhost/developgetpet/dashboard/A.W.O-Catslistadoption.php">Cat's </a></li>
                      </ul>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/A.W.O-Fundraisingactivities.php">Fundraising activities</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/A.W.O-Events.php">Events</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/A.W.O-Tips.php">Pet Care Tips</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/A.W.O-Adopted.php">Pet Adopted</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/A.W.O-Donations.php">Manage Donation</a>
                    </li>

              </ul>
                 
              </div>

            </div>
            <!-- /sidebar menu -->

				<!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
              <a data-toggle="modal" data-target="#Settings" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="http://localhost/developgetpet/login-page/login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Home" href="http://localhost/developgetpet/dashboard/A.W.O-Dashboard.php">
              <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
				</div>
			</div>

	    <!-- top navigation -->
      <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img <?php echo"<img src = '/developgetpet/web/images/$result->orgLogo'";?> alt=""><?php echo ($result->orgName);?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="http://localhost/developgetpet/dashboard/A.W.O-Profile.php" id="Profile"> Profile</a>
                      <!--<a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>-->
                    <a class="dropdown-item" data-toggle="modal" data-target="#Settings">Settings</a>
                      <a class="dropdown-item"  href="http://localhost/developgetpet/login-page/login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
                  <?php
                  $query=$dbh->prepare("SELECT COUNT(masterID) FROM notification WHERE masterID='$ID' AND notificationStatus != 'Read' ");
                  $query->execute();

                  $request=$query->fetchColumn();

                  ?>
                  <li role="presentation" class="nav-item dropdown open" style="margin-top:6px;">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-bell"></i>
                      <span class="badge bg-green" id="count"><?php echo ($request);?></span>
                    </a>
                    <script type="text/javascript">
                    var number = <?php echo ($request);?>;
                    if (number === 0){
                      document.getElementById("count").style.display = "none";
                    }
                    </script>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                      <?php
                        $sql="SELECT * from notification WHERE masterID='$ID' ORDER BY notificationID DESC";
                        $query=$dbh->prepare($sql);
                        $query->execute();
                        $results=$query->fetchALL(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount()>0)
                        {
                          foreach($results as $result)
                        {
                           ?>
                            <?php $user_id = $result->userID;

                            $sql1="SELECT * from register WHERE userID='$user_id'";
                            $query1=$dbh->prepare($sql1);
                            $query1->execute();
                            $userids=$query1->fetchALL(PDO::FETCH_OBJ);
                            $cnt1=1;
                            if($query1->rowCount()>0)
                            {
                              foreach($userids as $userid)
                            {
                              ?>

    
                        <a class ="dropdown-item">
                          <span><b><?php echo ($result->notificationTitle);?></b></span>&ensp;<span id="unread" class="rounded-circle badge unread" style="height:10px;width:10px;background-color:#1877F2;color: transparent;"><?php echo ($result->notificationStatus);?></span><br>
                          <span class="image"><img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> class="rounded-circle img-responsive" alt="Profile Image" /></span>
                          <span>
                            <span><?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?></span>
                            <span class="time"><?php echo ($result->notificationDate);?></span>
                          </span>
                          <span class="message">
                          <?php echo ($result->notificationDescription);?>
                          </span>
                        </a>
                         <?php $cnt1=$cnt1+1;}} ?>
                        <?php $cnt=$cnt+1;}} ?>
                      </li>
                      <li onclick="window.location.href='http://localhost/developgetpet/dashboard/A.W.O-UserRequest.php';" class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <a href="http://localhost/developgetpet/dashboard/A.W.O-Requestnotification.php">See All Alerts</a>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

<?php 
$sql = "SELECT * from animalwelfareorganization where orgID=:ID";
$query=$dbh->prepare($sql);
$query->bindParam(':ID',$ID,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount()>0)
{
  foreach($results as $result)
  {
     ?>
<p></p>
<?php
?>
<?php }} ?>


	  <!-- page content -->
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <br>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            

<!-- /page content -->

<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12  ">
    <div class="x_panel" style="border-radius:10px;border-width:2px;">
      <div class="x_title">
      <h2>Manage Donation's</h2> 
     
        <ul class="nav navbar-right panel_toolbox">
       </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content" style="text-align:center;">
      <br>  

                           <!-- View Unaccepted Post for Donation User Request Code -->
            <?php
                        $sql="SELECT * from donation WHERE donationStatus='Not Recieved Yet' ORDER BY donationID DESC";
                        $query=$dbh->prepare($sql);
                        $query->execute();
                        $results=$query->fetchALL(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount()>0)
                        {
                              foreach($results as $result)
                            {
                              ?>   
                                    <div class="col-nd-4">
                                        <div class="card" style="border-radius:10px;border-width:2px;width:550px;margin: 0 auto;float: none; margin-bottom: 10px;">
                                        
                                          <div class="card-body" style="box-shadow: 8px 8px 8px #888888;border-radius:10px;">
                                          
                                          <?php $user_id = $result->userID;

                                          $sql1="SELECT * from register WHERE userID='$user_id'";
                                          $query1=$dbh->prepare($sql1);
                                          $query1->execute();
                                          $userids=$query1->fetchALL(PDO::FETCH_OBJ);
                                          $cnt1=1;
                                          if($query1->rowCount()>0)
                                          {
                                            foreach($userids as $userid)
                                          {
                                            ?>
                                            
                                            <label style="margin-top:-5px;"><img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:40px;height:40px;margin-top:10px;" class="rounded-circle img-responsive"><textarea disabled style="width:450px;height:auto;font-size:18px;border-style: none;background-color:transparent;resize: none;overflow:hidden;font-size:14px;text-align:left;padding-top: 2px;color: #73879C;margin-top:10px;" type='text'><?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?>&#13;&#10;<?php echo ($result->donationDate);?></textarea>
                                            <p id="description" style="font-size:16px;margin-top:10px;padding-left:10px;text-align:left;">Message: <?php echo ($result->donationMessage);?><br>Suggestion: <?php echo ($result->donationIdentity);?></p>
                                            <br>
                                              
                                              <p style="font-size:16px;margin-top:10px;padding-left:10px;text-align:left;line-height:2px;">Deposit Slip:</p>
                                              <Img <?php echo"<img src = '/developgetpet/web/images/$result->donationReciept'";?> class="card-ing-top" alt="Post Images" style="height:450px;width:500px;border-radius:10px;">
                                              <ul style="list-style:none;margin-left:-50px;">
                                              
                                              <li><h3 hidden class="card-title"><?php echo ($result->donationID);?></h3></li>
                                              <li><textarea hidden disabled="yes" id="username"><?php echo ($result->userName);?></textarea></li>
                                              <li><textarea hidden disabled="yes" id="message"><?php echo ($result->donationMessage);?></textarea></li>
                                              <li><textarea hidden disabled="yes" id="identity"><?php echo ($result->donationIdentity);?></textarea></li>
                                              <li><textarea hidden disabled="yes" id="status"><?php echo ($result->donationStatus);?></textarea></li>
                                              
                                          
                                              <?php $cnt1=$cnt1+1;}} ?>
                                              
                                              <br> 
                                              <br>
                                              <button type="button" class="btn btn-link viewbtn" style="height:30px;width:150px;font-size:14px;margin-top:-15px;float:left;margin-left:-10px;">View More Info</button>
                                              <br><br>
                                            
                                            <!--<button name ="Post" type='submit' id="submit" class="btn btn-success acceptbtn" style="background-color:#00cdc1;border:#00cdc1;width:130px;margin-right:10px;height:40px;float:left;">Recieved</button>
                                            <br><br><br>-->
                                            &nbsp&nbsp&nbsp
                                            <button name ="Post" type='submit' class="btn btn-success acceptbtn" style="background-color:#00cdc1;border:#00cdc1;height:35px;width:130px;">Recieved</button>
                                            <button type="button" class="btn btn-success messagebtn" style="background-color:#00cdc1;border:#00cdc1;height:35px;width:140px;">Post Newsfeed</button>
                                            <button type="button" class="btn btn-success acceptbtn" style="background-color:#00cdc1;border:#00cdc1;height:35px;width:180px;">Give rate & Feedback</button>
                                            
                                              </ul>
                                            </div>
                                          </div>
                                        </div>
                                        <br>
                                      <?php $cnt=$cnt+1;
                            }
                        } 
                        else
                        {
                          echo "There isn't any information displayed.";
                        }
                        ?>
                     <!-- //View Unaccepted Post for Donation User Request Code -->        
                           
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- /page content -->

<script>
<?php 
$ID=$_SESSION['orgID'];
$sql = "SELECT * from animalwelfareorganization where orgID=:ID";
$query=$dbh->prepare($sql);
$query->bindParam(':ID',$ID,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount()>0)
{
  foreach($results as $result)
  {
     ?>

<?php
?>
<?php }} ?>
</script>

<!-- Accept Post Code -->
<?php
   if(isset($_POST['Recieved']))
   {
    $donationID=($_POST['donationID']);

    $query="update donation set donationStatus='Recieved' where donationID=:donationID";
    $query= $dbh->prepare($query);
    $query->bindValue(':donationID',$donationID);
    $query->execute();

    echo '<script>alert("Donation has Recieved Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-Donations.php'</script>";
   }
?>
<!-- //Accept Post Code -->

<!-- Accept Post Code -->
<?php
   if(isset($_POST['NotRecieved']))
   {
    $donationID=($_POST['donationID']);

    $query="update donation set donationStatus='Did Not Recieve' where donationID=:donationID";
    $query= $dbh->prepare($query);
    $query->bindValue(':donationID',$donationID);
    $query->execute();

    echo '<script>alert("Donation has not Recieved into our G-Cash!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-Donations.php'</script>";
   }
?>
<!-- //Accept Post Code -->

<!-- Modal Accept Post -->
<div class="modal fade" id="AcceptPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Recieve Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <p>Have you recieved a donation into your G-cash?</p>
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="donation_id" name="donationID" required = "required" class="form-control" id="success">
				</div>

        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <!--<button name="Recieved" id="AcceptRequest" type="submit" type='submit' class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Recieved</button>
              <button class="btn btn-round btn-danger" name="NotRecieved" type="submit" type='submit' style="width:120px;height:37px;">Not Recieved</button>-->
         </div>

         <button name="Recieved" id="AcceptRequest" type="submit" type='submit' class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width:120px;height:37px;">Recieved</button>

         <button name="NotRecieved" type="submit" type='submit' class="btn btn-round btn-danger" style="width:120px;height:37px;">Not Recieved</button>

        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Accept Post -->

<!-- Message Post Code -->
<?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>

<?php
if(isset($_POST['Sendmessage']))
{

$ID=($_POST['ID']);
$Name=($_POST['Name']);
$Email=($_POST['Email']);
$Address=($_POST['Address']);
$ContactNo=($_POST['ContactNo']);
$Donatorsname=($_POST['Donatorsname']);
$Message=($_POST['Message']);
  
$sql="INSERT INTO message(userID,userName,userEmail,userAddress,userContactNo,messageDonatorsname,messageMessage,messageDate)VALUES(:ID,:Name,:Email,:Address,:ContactNo,:Donatorsname,:Message,'$date')";
  
$query=$dbh->prepare($sql); 
$query->bindParam(':ID',$ID,PDO::PARAM_STR);
$query->bindParam(':Name',$Name,PDO::PARAM_STR);
$query->bindParam(':Email',$Email,PDO::PARAM_STR);
$query->bindParam(':Address',$Address,PDO::PARAM_STR);
$query->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query->bindParam(':Donatorsname',$Donatorsname,PDO::PARAM_STR);
$query->bindParam(':Message',$Message,PDO::PARAM_STR);
$query->execute();

echo '<script>alert("Your Message has successfully saved!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-Donations.php'</script>";

}
?>
<!-- //Message Post Code -->

<!-- Modal for Message-->
<div class="modal fade" id="MessagePost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Message Modal</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form class="" action="" method="post" novalidate enctype="multipart/form-data"> 
      
      <div hidden class="field item form-group">
                                          <div class="col-md-6 col-sm-6">
                                            <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ID" value="<?php echo ($result->orgID);?>"/>
                                          </div> 
                                        </div>

                                        <div hidden class="field item form-group">
                                            <div class="col-md-6 col-sm-6">
                                              <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="Name" value="<?php echo ($result->orgName);?>"/>
                                            </div> 
                                         </div>

                                        <div hidden class="field item form-group">
                                            <div class="col-md-6 col-sm-6">
                                              <input class="form-control" name="Address" class='Address' value="<?php echo ($result->orgAddress);?>"/>
                                            </div>
                                        </div>

                                        <div hidden class="field item form-group">
                                            <div class="col-md-6 col-sm-6">
                                              <input class="form-control" name="Email" class='Email' value="<?php echo ($result->orgEmail);?>"/>
                                            </div>
                                        </div>

                                        <div hidden class="field item form-group">
                                            <div class="col-md-6 col-sm-6">
                                             <input class="form-control" name="ContactNo" class='ContactNo' value="<?php echo ($result->orgContactNo);?>"/>
                                            </div>
                                        </div>

                                         <div class="field item form-group">
                                          <label class="col-form-label col-md-3 col-sm-3  label-align">Donators Name<span class="required"></span></label>
                                          <div class="col-md-6 col-sm-6">
                                                <input readonly type="text" class="form-control" id="char_username" id="Donatorsname" name="Donatorsname" style="background-color:#fff;width:400px;" required="required"/>
                                          </div>
                                          </div>

                                        <div class="field item form-group">
                                          <label class="col-form-label col-md-3 col-sm-3  label-align">Leave Message(Optional)</label>
                                          <div class="col-md-6 col-sm-6">
                                            <textarea id="Message" required="required" class="form-control" name="Message" placeholder="You can leave message..." data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height:100px;width:400px;border-radius:4px;"></textarea>
                                          </div>
                                        </div><br>

         <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
         <button name ="Sendmessage" type='submit' id="Sendmessage" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width:130px;height:40px;">Send</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
<!-- //Modal for Message-->  

<!-- Modal Donation Information -->
<div class="modal fade" id="View" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cleartext()">
          <span aria-hidden="true">&times;</span>
        </button>

      </div>
      <div class="modal-body mx-3">
      <form method="post">
        
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" id="char_id" name="CharityID" required = "required" class="form-control">
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Donators Name<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="char_username" name="Username" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Message<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="char_message" name="Message" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Suggestion<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="char_suggestion" name="Suggestion" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Status<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="char_status" name="Status" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Donation Information -->

</div>
</div>

<!-- footer content -->
<footer>
<p class="tweet-p1">
ADOPTING MEANS YOU SAVE A LIFE! <a href="mailto:GetPet@gmail.com">GetPet@gmail.com</a>
</p>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../vendors/validator/multifield.js"></script>
<script src="../vendors/validator/validator.js"></script>

<script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {

                $('#View').modal('show');

                $tr = $(this).closest('ul');

                var data = $tr.children("li").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#donation_id').val(data[0]);
            });
        });
</script>

<script>
        $(document).ready(function () {

            $('.acceptbtn').on('click', function () {

                $('#AcceptPost').modal('show');

                $tr = $(this).closest('ul');

                var data = $tr.children("li").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#donation_id').val(data[0]);
            });
        });
</script> 

<script>
        $(document).ready(function () {

            $('.messagebtn').on('click', function () {

                $('#MessagePost').modal('show');

                $tr = $(this).closest('ul');

                var data = $tr.children("li").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#char_id').val(data[0]);
                $('#char_username').val(data[1]);
            });
        });
</script>

<script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {

                $('#View').modal('show');

                $tr = $(this).closest('ul');

                var data = $tr.children("li").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#char_id').val(data[0]);
                $('#char_username').val(data[1]);
                $('#char_message').val(data[2]);
                $('#char_suggestion').val(data[3]);
                $('#char_status').val(data[4]);
                
            });
        });
    </script>


<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="../vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="../vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="../vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="../vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="../vendors/starrr/dist/starrr.js"></script>
<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>





</body>
</html>

