<?php 
session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
$ID=$_SESSION['adopterID'];
$sql = "SELECT * from petadopter where adopterID=:ID";
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
$Firstname=($_POST['Firstname']);
$Lastname=($_POST['Lastname']);
$ContactNo=($_POST['ContactNo']);
$Address=($_POST['Address']);
$Email=($_POST['Email']);
$Username=($_POST['Username']);
$Password=($_POST['Password']);

$sql="update register set 
userFirstname=:Firstname,
userLastname=:Lastname,
contactNo=:ContactNo,
Address=:Address,
Email=:Email,
Username=:Username,
Password=:Password 
where userID=:ID";

$query=$dbh->prepare($sql);
$query->bindParam(':ID',$ID,PDO::PARAM_STR);  
$query->bindParam(':Firstname',$Firstname,PDO::PARAM_STR);
$query->bindParam(':Lastname',$Lastname,PDO::PARAM_STR);
$query->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query->bindParam(':Address',$Address,PDO::PARAM_STR);
$query->bindParam(':Email',$Email,PDO::PARAM_STR);
$query->bindParam(':Username',$Username,PDO::PARAM_STR);
$query->bindParam(':Password',$Password,PDO::PARAM_STR);
$query->execute();

$Firstname=($_POST['Firstname']);
$Lastname=($_POST['Lastname']);
$ContactNo=($_POST['ContactNo']);
$Address=($_POST['Address']);
$Email=($_POST['Email']);
$Username=($_POST['Username']);
$Password=($_POST['Password']);

$sql1="update petadopter set
adopterFirstname=:Firstname,
adopterLastname=:Lastname,
adopterContactNo=:ContactNo,
adopterAddress=:Address,
adopterEmail=:Email,
adopterUsername=:Username,
adopterPassword=:Password 
where adopterID=:ID";
$query1=$dbh->prepare($sql1); 
$query1->bindParam(':ID',$ID,PDO::PARAM_STR); 
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

$sql3="update login set 
userFirstname=:Firstname,
userLastname=:Lastname,
contactNo=:ContactNo,
Address=:Address,
Email=:Email,
Username=:Username,
Password=:Password where userID=:ID";

$query3=$dbh->prepare($sql3); 
$query3->bindParam(':ID',$ID,PDO::PARAM_STR);
$query3->bindParam(':Firstname',$Firstname,PDO::PARAM_STR);
$query3->bindParam(':Lastname',$Lastname,PDO::PARAM_STR);
$query3->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query3->bindParam(':Address',$Address,PDO::PARAM_STR);
$query3->bindParam(':Email',$Email,PDO::PARAM_STR);
$query3->bindParam(':Username',$Username,PDO::PARAM_STR);
$query3->bindParam(':Password',$assword,PDO::PARAM_STR);
$query3->execute();
{
echo '<script>alert("Your Account Updated Successfully!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.A-Profile.php'</script>";
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

$sql1="update petadopter set
adopterPicture=:Picture
where adopterID=:ID";
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
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.A-Profile.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  .Img-icons i {
            position: absolute;
        }
          
        .Img-icons {
            width: 100%;
            margin-bottom: 10px;
        }
          
        .camera {
            padding: 194px;
            min-width: 300px;
            width: 44%;
        }
        
        .circle {
            padding: 180px;
            min-width: 300px;
            color:white;
            border-color: #F5F5F5;
            color: #F5F5F5;
            width: 44%;
        }
          
        .Img-field {
            width: 100%;
            padding: 100px;
            text-align: center;
        }
  </style>
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
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md" onLoad="window.scroll(0, 550)">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="http://localhost/developgetpet/dashboard/P.A-Dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>&nbsp&nbsp&nbsp&nbspGETPET</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
            
              <!--<div class="profile_info" style="margin-left:60px;">
                
                <h2>Welcome, <br><?php echo ($result->adopterFirstname);?> <?php echo ($result->adopterLastname);?></h2>
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
                    <li><a href="http://localhost/developgetpet/dashboard/P.A-Dashboard.php"><i></i> Dashboard </a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.A-Adoption.php">Pet Adoption</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.A-Shorttermcare.php">Short-term Care</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.A-Donation.php">Donation</a>
                    </li>

                    <li>
                    <li><a href="#">Fundraising activities</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.A-Events.php">Events</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.A-T.A.A.php">Pet Care Tips</a>
                    </li>

                  
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
              <a data-toggle="tooltip" data-placement="top" title="Home" href="http://localhost/developgetpet/dashboard/P.A-Dashboard.php">
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
                      <img <?php echo"<img src = '/developgetpet/web/images/$result->adopterPicture'";?> alt=""><?php echo ($result->adopterFirstname);?> <?php echo ($result->adopterLastname);?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="http://localhost/developgetpet/dashboard/P.A-Profile.php" id="Profile"> Profile</a>
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
                      <li onclick="window.location.href='http://localhost/developgetpet/dashboard/P.A-UserRequest.php';" class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <a href="http://localhost/developgetpet/dashboard/P.A-Requestnotification.php">See All Alerts</a>
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
$sql = "SELECT * from petadopter where adopterID=:ID";
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
              <h2><?php echo ($result->Role);?>'s Dashboard</h2>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel" style="border-radius:10px;border-width:2px;">
                  <div class="x_title">
                    <h2>My Profile</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link" style="margin-left:50px"><i class="fa fa-chevron-up"></i></a>
                      </li>      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="text-align:center;">
                  
                  <?php
                        $sql="SELECT * from petadopter WHERE adopterID='$ID'";
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
                            <div class="card">
                              <div class="card-body">
                                  
                                  <div style="max-width:400px;margin:auto">
                                        <div class="Img-icons">
                                        <i class="fa fa-circle circle fa-4x" data-toggle="modal" href="#ProfilePicture"></i>
                                        <i class="fa fa-camera camera fa-2x" data-toggle="modal" href="#ProfilePicture"></i>
                                            <Img <?php echo"<img src = '/developgetpet/web/images/$result->adopterPicture'";?> class="rounded-circle img-responsive" id="Modalprofile" alt="Post Images" style="height:250px;width:250px;border-style: solid;border-color: #F5F5F5;border-width: 6px;">
                                        </div>
                                  </div>                            
                                  <h2 class="card-title"><?php echo ($result->adopterFirstname);?> <?php echo ($result->adopterLastname);?></h2>
                                  
                          </div>
                        </div>
                      </div>
                      <br>
                      <?php $cnt=$cnt+1;}} ?>
                      
                     <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/P.A-Posts.php" role="tab" aria-controls="post" aria-selected="true">Posts</a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/P.A-About.php" role="tab" aria-controls="profile" aria-selected="false">About</a>
                      </li>
                      <?php
                      $query=$dbh->prepare("SELECT COUNT(userID) FROM request WHERE userID='$ID' AND requestStatus != 'Disapproved' AND requestStatus != 'Cancelled' AND requestStatus != 'Approved'");
                      $query->execute();

                      $myrequest=$query->fetchColumn();

                      ?>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/P.A-Request.php"role="tab" aria-controls="request" aria-selected="false">My Request <span class="badge bg-green" id="myrequest" value=""><?php echo ($myrequest);?></span>
                        </a>
                        <script type="text/javascript">
                        var myrequest = <?php echo ($myrequest);?>;
                        if (myrequest === 0){
                          document.getElementById("myrequest").style.display = "none";
                        }
                        </script>
                      </li>
                      <?php
                      $query1=$dbh->prepare("SELECT COUNT(masterID) FROM request WHERE masterID='$ID' AND requestStatus != 'Cancelled' AND requestStatus != 'Disapproved' AND requestStatus != 'Approved'");
                      $query1->execute();

                      $user_request=$query1->fetchColumn();

                      ?>
                      <li class="nav-item">
                        <a class="nav-link active" id="contact-request" data-toggle="tab" href="#request1" role="tab" aria-controls="request" aria-selected="false">User Request <span class="badge bg-green" id="user_request" value=""><?php echo ($user_request);?></a>
                        <script type="text/javascript">
                        var user_request = <?php echo ($user_request);?>;
                        if (user_request === 0){
                          document.getElementById("user_request").style.display = "none";
                        }
                        </script>
                      </li>
                      <?php
                      $query=$dbh->prepare("SELECT COUNT(userID) FROM history WHERE userID='$ID'");
                      $query->execute();

                      $adoption=$query->fetchColumn();

                      ?>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/P.A-History.php" role="tab" aria-controls="user_request" aria-selected="false">History <span class="badge bg-green" id="adoption" value=""><?php echo ($adoption);?></span></a>
                        <script type="text/javascript">
                        var adoption = <?php echo ($adoption);?>;
                        if (adoption === 0){
                          document.getElementById("adoption").style.display = "none";
                        }
                        </script>
                      </li>
                      <?php
                      $query=$dbh->prepare("SELECT COUNT(userID) FROM request WHERE userID='$ID' AND requestStatus = 'Cancelled'");
                      $query->execute();

                      $cancelled=$query->fetchColumn();

                      ?>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/P.A-CancelledRequest.php" role="tab" aria-controls="user_request" aria-selected="false">Cancelled <span class="badge bg-green" id="cancelled" value=""><?php echo ($cancelled);?></span></a>
                        <script type="text/javascript">
                        var cancelled = <?php echo ($cancelled);?>;
                        if (cancelled === 0){
                          document.getElementById("cancelled").style.display = "none";
                        }
                        </script>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="post1" role="tabpanel" aria-labelledby="post-tab">
                        
 <!-- View User Request Code -->
 <?php
            $sql="SELECT * from request WHERE masterID='$ID' AND requestStatus != 'Cancelled' AND requestStatus != 'Disapproved' AND requestStatus != 'Approved' ORDER BY requestID DESC";
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
              <div class="card" style="border-radius:10px;border-width:2px;">                 
                <div class="card-body" style="box-shadow: 8px 8px 8px #888888;border-radius:10px;">
                  <h3>Adoption Request</h3>
                      <ul style="list-style:none;margin-left:-50px;"><br>
                      <li><h3 hidden class="card-title"><?php echo ($result->requestID);?></h3></li>
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
                      
                      <img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:100px;height:100px;margin-bottom:5px" class="rounded-circle img-responsive"><br>

                      <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
 
                      <table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
                      <tr>
                          <td align='center'>Name:</td>
                          <td><input readonly style="width:300px;margin-bottom:-10px;color:#73879C" type='text' value="<?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?>"></td>
                      </tr>
                      <tr> <td>&nbsp;</td> </tr>
                      <tr>
                      <td align='center'>Address:</td>
                          <td><input readonly style="width:300px;margin-bottom:-10px;color:#73879C" type='text' value="<?php echo ( $userid->Address);?>"></td>
                      </tr>
                      <tr> <td>&nbsp;</td> </tr>
                      <tr>
                          <td align='center'>Email:</td>
                          <td><input readonly style="width:300px;margin-bottom:-10px;color:#73879C" type='text' value="<?php echo ( $userid->Email);?>"></td>
                      </tr>
                      <tr> <td>&nbsp;</td> </tr>
                      <tr>
                          <td align='center'>Contact No:</td>
                          <td><input readonly style="width:300px;margin-bottom:-10px;color:#73879C" type='text' value="<?php echo ( $userid->contactNo);?>"></td>
                      </tr>
                      <tr> <td>&nbsp;</td> </tr>
                      <tr>
                          <td align='center'>Reason:</td>
                          <td><textarea disabled="yes" id="description" style="width:300px;margin-bottom:-10px;height:80px;background-color: #fff;resize: none;border-color:#73879C;color:#73879C" type='text'><?php echo ( $result->requestReason);?></textarea></td>
                      </tr>
                      <tr> <td>&nbsp;</td> </tr>
                      <table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
                      </table>
                      </table>
                      
                      </table>
                      <li><h3 hidden class="card-title"><?php echo ($result->petID);?></h3></li>
                      <li><h3 hidden class="card-title"><?php echo ($result->userID);?></h3></li>
                      <li><h3 hidden class="card-title"><?php echo ($result->userName);?></h3></li>
                      <li><h3 hidden class="card-title"><?php echo ($result->userEmail);?></h3></li>
                      <li><h3 hidden class="card-title"><?php echo ($result->userAddress);?></h3></li>
                      <li><h3 hidden class="card-title"><?php echo ($result->userContactNo);?></h3></li>
                      <?php $pet_id = $result->petID;

                      $sql2="SELECT * from postpet WHERE petID='$pet_id'";
                      $query2=$dbh->prepare($sql2);
                      $query2->execute();
                      $petids=$query2->fetchALL(PDO::FETCH_OBJ);
                      $cnt2=1;
                      if($query2->rowCount()>0)
                      {
                        foreach($petids as $petid)
                      {
                        ?>
                      <img <?php echo"<img src = '/developgetpet/web/images/$petid->petPicture'";?> alt="avatar" style="width:200px;height:180px;border-radius:10px;">&nbsp;<textarea disabled="yes" id="description" style="width:600px;height:180px;font-size:16px;border-radius:10px; background-color: #fff;resize: none;border-color:#73879C;color:#73879C" type='text'>Name: <?php echo ( $petid->petName);?>&#13;&#10;Type: <?php echo ( $petid->petType);?>&#13;&#10;Gender: <?php echo ( $petid->petSex);?>&#13;&#10;Breed: <?php echo ( $petid->petBreed);?>&#13;&#10;&#13;&#10;Request Date: <?php echo ($result->requestDate);?></textarea><br><br>

                      <li><h3 hidden class="card-title"><?php echo ($petid->petType);?></h3></li>
                      <li><h3 hidden class="card-title"><?php echo ($petid->petName);?></h3></li>
                      <li><h3 hidden class="card-title"><?php echo ($petid->petBreed);?></h3></li>
                      <li><h3 hidden class="card-title"><?php echo ($result->requestDate);?></h3></li>
                      <?php $cnt2=$cnt2+1;}} ?>
                      <?php $cnt1=$cnt1+1;}} ?>
                      <div style="text-align: center" class="form-group">
                      <div class="col-md-6 offset-md-3">
                            <button name="profile" type="submit" type='submit' class="btn btn-round btn-success acceptbtn" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Accept</button>
                            <button type='reset' class="btn btn-round btn-danger declinebtn" style="width:90px;height:37px;">Decline</button>
                      </div>
                      </div>
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
          echo "There is no display of adoption requests.";
          }
          ?> 
         <!-- //View User Request Code -->
                      </div>
                    </div>     
                    

                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<!-- Decline User Request Code-->
<?php
$sql="SELECT * from request WHERE masterID='$ID' AND requestStatus != 'Cancelled' AND requestStatus != 'Disapproved' AND requestStatus != 'Approved' ORDER BY requestID DESC";
$query=$dbh->prepare($sql);
$query->execute();
$results=$query->fetchALL(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount()>0)
{
    foreach($results as $result)
  {
    ?>
          
<?php
date_default_timezone_set("Asia/Manila");
$title = ($result->requestTitle);
$date = date('m/d/Y h:i A', time());
?>  
<?php
if(isset($_POST['DeclineRequest']))
{
  if($title == 'Adoption Request')
  {
    $requestID=($_POST['requestID']);
    $userID=($_POST['userID']);
    $userName=($_POST['userName']);
    $userEmail=($_POST['userEmail']);
    $userAddress=($_POST['userAddress']);
    $userContactNo=($_POST['userContactNo']);
    $petID=($_POST['petID']);
    $petType=($_POST['petType']);
    $petName=($_POST['petName']);
    $petBreed=($_POST['petBreed']);
    $requestDate=($_POST['requestDate']);
  
    $sql="update request set
    approvalDate='$date', requestStatus='Disapproved'
    where requestID=:requestID";
    $query=$dbh->prepare($sql); 
    $query->bindParam(':requestID',$requestID,PDO::PARAM_STR); 
    $query->execute();
  
    $sql1="update postpet set
    petStatus='Available'
    where petID=:petID";
    $query1=$dbh->prepare($sql1); 
    $query1->bindParam(':petID',$petID,PDO::PARAM_STR); 
    $query1->execute();
  
    $sql2="update notification set
    notificationStatus='Read'
    where activityID=:requestID";
    $query2=$dbh->prepare($sql2); 
    $query2->bindParam(':requestID',$requestID,PDO::PARAM_STR); 
    $query2->execute();
  
    $sql3="INSERT INTO notification(activityID,notificationTitle,userID,masterID,notificationDescription,notificationDate,notificationStatus)VALUES(:requestID,'Disapproved Adoption Request','$ID',:userID,'Disapproved your adoption request','$date','Unread')";
    $query3=$dbh->prepare($sql3);
    $query3->bindParam(':requestID',$requestID,PDO::PARAM_STR);
    $query3->bindParam(':userID',$userID,PDO::PARAM_STR);
    $query3->execute();
  
    $sql4="INSERT INTO history(Title,requestID,masterID,userID,userName,userEmail,userAddress,userContactNo,petID,petType,petName,petBreed,requestDate,approvalDate,Status)VALUES('Adoption',:requestID,'$ID',:userID,:userName,:userEmail,:userAddress,:userContactNo,:petID,:petType,:petName,:petBreed,:requestDate,'$date','Disapproved')";
    $query4=$dbh->prepare($sql4);
    $query4->bindParam(':requestID',$requestID,PDO::PARAM_STR);
    $query4->bindParam(':userID',$userID,PDO::PARAM_STR);
    $query4->bindParam(':userName',$userName,PDO::PARAM_STR);
    $query4->bindParam(':userEmail',$userEmail,PDO::PARAM_STR);
    $query4->bindParam(':userAddress',$userAddress,PDO::PARAM_STR);
    $query4->bindParam(':userContactNo',$userContactNo,PDO::PARAM_STR);
    $query4->bindParam(':petID',$petID,PDO::PARAM_STR);
    $query4->bindParam(':petType',$petType,PDO::PARAM_STR);
    $query4->bindParam(':petName',$petName,PDO::PARAM_STR);
    $query4->bindParam(':petBreed',$petBreed,PDO::PARAM_STR);
    $query4->bindParam(':requestDate',$requestDate,PDO::PARAM_STR);
    $query4->execute();
  
    echo '<script>alert("User Request Declined Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.A-UserRequest.php'</script>";
  }
  else
  {
    $requestID=($_POST['requestID']);
    $userID=($_POST['userID']);
    $userName=($_POST['userName']);
    $userEmail=($_POST['userEmail']);
    $userAddress=($_POST['userAddress']);
    $userContactNo=($_POST['userContactNo']);
    $petID=($_POST['petID']);
    $petType=($_POST['petType']);
    $petName=($_POST['petName']);
    $petBreed=($_POST['petBreed']);
    $requestDate=($_POST['requestDate']);
  
    $sql="update request set
    approvalDate='$date', requestStatus='Disapproved'
    where requestID=:requestID";
    $query=$dbh->prepare($sql); 
    $query->bindParam(':requestID',$requestID,PDO::PARAM_STR); 
    $query->execute();
  
    $sql1="update postpet set
    petStatus='Available'
    where petID=:petID";
    $query1=$dbh->prepare($sql1); 
    $query1->bindParam(':petID',$petID,PDO::PARAM_STR); 
    $query1->execute();
  
    $sql2="update notification set
    notificationStatus='Read'
    where activityID=:requestID";
    $query2=$dbh->prepare($sql2); 
    $query2->bindParam(':requestID',$requestID,PDO::PARAM_STR); 
    $query2->execute();
  
    $sql3="INSERT INTO notification(activityID,notificationTitle,userID,masterID,notificationDescription,notificationDate,notificationStatus)VALUES(:requestID,'Disapproved Adoption Request','$ID',:userID,'Disapproved your adoption request','$date','Unread')";
    $query3=$dbh->prepare($sql3);
    $query3->bindParam(':requestID',$requestID,PDO::PARAM_STR);
    $query3->bindParam(':userID',$userID,PDO::PARAM_STR);
    $query3->execute();
  
    $sql4="INSERT INTO history(Title,requestID,masterID,userID,userName,userEmail,userAddress,userContactNo,petID,petType,petName,petBreed,requestDate,approvalDate,Status)VALUES('Short-term care',:requestID,'$ID',:userID,:userName,:userEmail,:userAddress,:userContactNo,:petID,:petType,:petName,:petBreed,:requestDate,'$date','Disapproved')";
    $query4=$dbh->prepare($sql4);
    $query4->bindParam(':requestID',$requestID,PDO::PARAM_STR);
    $query4->bindParam(':userID',$userID,PDO::PARAM_STR);
    $query4->bindParam(':userName',$userName,PDO::PARAM_STR);
    $query4->bindParam(':userEmail',$userEmail,PDO::PARAM_STR);
    $query4->bindParam(':userAddress',$userAddress,PDO::PARAM_STR);
    $query4->bindParam(':userContactNo',$userContactNo,PDO::PARAM_STR);
    $query4->bindParam(':petID',$petID,PDO::PARAM_STR);
    $query4->bindParam(':petType',$petType,PDO::PARAM_STR);
    $query4->bindParam(':petName',$petName,PDO::PARAM_STR);
    $query4->bindParam(':petBreed',$petBreed,PDO::PARAM_STR);
    $query4->bindParam(':requestDate',$requestDate,PDO::PARAM_STR);
    $query4->execute();
  
    echo '<script>alert("User Request Declined Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.A-UserRequest.php'</script>";
  }
}
?>
<?php $cnt=$cnt+1;}}?>
<!-- //Decline User Request Code -->

        <!-- Modal Decline User Request -->
<div class="modal fade" id="DeclineRequest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Decline Request</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <p>Are you sure, you want to decline this request?</p>
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="request_id" name="requestID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pet_id" name="petID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_id" name="userID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_name" name="userName" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_email" name="userEmail" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_address" name="userAddress" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_contactno" name="userContactNo" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pet_type" name="petType" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pet_name" name="petName" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pet_breed" name="petBreed" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="request_date" name="requestDate" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="DeclineRequest" id="DeclineRequest" type="submit" type='submit' class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Yes</button>
              <button type='reset' class="btn btn-round btn-danger" name="CancelRequest" class="close" data-dismiss="modal" style="width:90px;height:37px;">No</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Decline User Request -->

<!-- Accept User Request Code-->
<?php
$sql="SELECT * from request WHERE masterID='$ID' AND requestStatus != 'Cancelled' AND requestStatus != 'Disapproved' AND requestStatus != 'Approved' ORDER BY requestID DESC";
$query=$dbh->prepare($sql);
$query->execute();
$results=$query->fetchALL(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount()>0)
{
    foreach($results as $result)
  {
    ?>
          
<?php
date_default_timezone_set("Asia/Manila");
$title = ($result->requestTitle);
$date = date('m/d/Y h:i A', time());
?>  
<?php
if(isset($_POST['AcceptRequest']))
{
  if($title == 'Adoption Request')
  {
    $requestID=($_POST['requestID']);
    $userID=($_POST['userID']);
    $userName=($_POST['userName']);
    $userEmail=($_POST['userEmail']);
    $userAddress=($_POST['userAddress']);
    $userContactNo=($_POST['userContactNo']);
    $petID=($_POST['petID']);
    $petType=($_POST['petType']);
    $petName=($_POST['petName']);
    $petBreed=($_POST['petBreed']);
    $requestDate=($_POST['requestDate']);
  
    $sql="update request set
    approvalDate='$date', requestStatus='Approved'
    where requestID=:requestID";
    $query=$dbh->prepare($sql); 
    $query->bindParam(':requestID',$requestID,PDO::PARAM_STR); 
    $query->execute();
  
    $sql1="update postpet set
    petStatus='Adopted'
    where petID=:petID";
    $query1=$dbh->prepare($sql1); 
    $query1->bindParam(':petID',$petID,PDO::PARAM_STR); 
    $query1->execute();
  
    $sql2="update notification set
    notificationStatus='Read'
    where activityID=:requestID";
    $query2=$dbh->prepare($sql2); 
    $query2->bindParam(':requestID',$requestID,PDO::PARAM_STR); 
    $query2->execute();
  
    $sql3="INSERT INTO notification(activityID,notificationTitle,userID,masterID,notificationDescription,notificationDate,notificationStatus)VALUES(:requestID,'Approved Adoption Request','$ID',:userID,'Approved your adoption request','$date','Unread')";
    $query3=$dbh->prepare($sql3);
    $query3->bindParam(':requestID',$requestID,PDO::PARAM_STR);
    $query3->bindParam(':userID',$userID,PDO::PARAM_STR);
    $query3->execute();
  
    $sql4="INSERT INTO history(Title,requestID,masterID,userID,userName,userEmail,userAddress,userContactNo,petID,petType,petName,petBreed,requestDate,approvalDate,Status)VALUES('Adoption',:requestID,'$ID',:userID,:userName,:userEmail,:userAddress,:userContactNo,:petID,:petType,:petName,:petBreed,:requestDate,'$date','Approved')";
    $query4=$dbh->prepare($sql4);
    $query4->bindParam(':requestID',$requestID,PDO::PARAM_STR);
    $query4->bindParam(':userID',$userID,PDO::PARAM_STR);
    $query4->bindParam(':userName',$userName,PDO::PARAM_STR);
    $query4->bindParam(':userEmail',$userEmail,PDO::PARAM_STR);
    $query4->bindParam(':userAddress',$userAddress,PDO::PARAM_STR);
    $query4->bindParam(':userContactNo',$userContactNo,PDO::PARAM_STR);
    $query4->bindParam(':petID',$petID,PDO::PARAM_STR);
    $query4->bindParam(':petType',$petType,PDO::PARAM_STR);
    $query4->bindParam(':petName',$petName,PDO::PARAM_STR);
    $query4->bindParam(':petBreed',$petBreed,PDO::PARAM_STR);
    $query4->bindParam(':requestDate',$requestDate,PDO::PARAM_STR);
    $query4->execute();
  
    echo '<script>alert("User Request Accepted Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.A-UserRequest.php'</script>";
  }
  else
  {
    $requestID=($_POST['requestID']);
    $userID=($_POST['userID']);
    $userName=($_POST['userName']);
    $userEmail=($_POST['userEmail']);
    $userAddress=($_POST['userAddress']);
    $userContactNo=($_POST['userContactNo']);
    $petID=($_POST['petID']);
    $petType=($_POST['petType']);
    $petName=($_POST['petName']);
    $petBreed=($_POST['petBreed']);
    $requestDate=($_POST['requestDate']);
  
    $sql="update request set
    approvalDate='$date', requestStatus='Approved'
    where requestID=:requestID";
    $query=$dbh->prepare($sql); 
    $query->bindParam(':requestID',$requestID,PDO::PARAM_STR); 
    $query->execute();
  
    $sql1="update postpet set
    petStatus='Adopted'
    where petID=:petID";
    $query1=$dbh->prepare($sql1); 
    $query1->bindParam(':petID',$petID,PDO::PARAM_STR); 
    $query1->execute();
  
    $sql2="update notification set
    notificationStatus='Read'
    where activityID=:requestID";
    $query2=$dbh->prepare($sql2); 
    $query2->bindParam(':requestID',$requestID,PDO::PARAM_STR); 
    $query2->execute();
  
    $sql3="INSERT INTO notification(activityID,notificationTitle,userID,masterID,notificationDescription,notificationDate,notificationStatus)VALUES(:requestID,'Approved Adoption Request','$ID',:userID,'Approved your adoption request','$date','Unread')";
    $query3=$dbh->prepare($sql3);
    $query3->bindParam(':requestID',$requestID,PDO::PARAM_STR);
    $query3->bindParam(':userID',$userID,PDO::PARAM_STR);
    $query3->execute();
  
    $sql4="INSERT INTO history(Title,requestID,masterID,userID,userName,userEmail,userAddress,userContactNo,petID,petType,petName,petBreed,requestDate,approvalDate,Status)VALUES('Short-term care',:requestID,'$ID',:userID,:userName,:userEmail,:userAddress,:userContactNo,:petID,:petType,:petName,:petBreed,:requestDate,'$date','Approved')";
    $query4=$dbh->prepare($sql4);
    $query4->bindParam(':requestID',$requestID,PDO::PARAM_STR);
    $query4->bindParam(':userID',$userID,PDO::PARAM_STR);
    $query4->bindParam(':userName',$userName,PDO::PARAM_STR);
    $query4->bindParam(':userEmail',$userEmail,PDO::PARAM_STR);
    $query4->bindParam(':userAddress',$userAddress,PDO::PARAM_STR);
    $query4->bindParam(':userContactNo',$userContactNo,PDO::PARAM_STR);
    $query4->bindParam(':petID',$petID,PDO::PARAM_STR);
    $query4->bindParam(':petType',$petType,PDO::PARAM_STR);
    $query4->bindParam(':petName',$petName,PDO::PARAM_STR);
    $query4->bindParam(':petBreed',$petBreed,PDO::PARAM_STR);
    $query4->bindParam(':requestDate',$requestDate,PDO::PARAM_STR);
    $query4->execute();
  
    echo '<script>alert("User Request Accepted Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.A-UserRequest.php'</script>";
  }
}
?>
<?php $cnt=$cnt+1;}}?>
<!-- //Accept User Request Code -->

  <!-- Modal Accept User Request -->
<div class="modal fade" id="AcceptRequest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Accept Request</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <p>Are you sure, you want to accept this request?</p>
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="requestid" name="requestID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="petid" name="petID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="userid" name="userID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="username" name="userName" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="useremail" name="userEmail" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="useraddress" name="userAddress" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="usercontactno" name="userContactNo" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pettype" name="petType" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="petname" name="petName" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="petbreed" name="petBreed" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="requestdate" name="requestDate" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="AcceptRequest" id="AcceptRequest" type="submit" type='submit' class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Yes</button>
              <button type='reset' class="btn btn-round btn-danger" name="CancelRequest" class="close" data-dismiss="modal" style="width:90px;height:37px;">No</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Accept User Request -->

<script>
<?php
$ID=$_SESSION['adopterID'];           
$sql = "SELECT * from petadopter where adopterID=:ID";
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

<!-- ModalProfile -->
<div class="modal fade" id="ProfilePicture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Update Profile Picture</h4>
        <button type="button" id="selected_profile_close" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3"> 
      <form method="post">
        <div class="modal-header">
              <img <?php echo"<img src = '/developgetpet/web/images/$result->adopterPicture'";?> id ="profile_picture" alt="avatar" style="width:150px;height:150px;margin-left:125px;margin-top:-20px;" class="rounded-circle img-responsive">
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
              <input type="file" name="Picture" id="Picture" style="width:250px;height:40px;border:none;margin-left:160px;margin-top:5px;" placeholder="Upload Photo">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input type="hidden" name="adopterID" value="<?php echo ( $result->adopterID);?>" required = "required" class="form-control" id="success">
				</div><br>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="profile" id="profile" type="submit" type='submit' class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;" disabled>Save</button>
              <button type='reset' id="selected_profile_cancel" class="btn btn-round btn-danger" name="Cancel" class="close" data-dismiss="modal" style="width:90px;height:37px;">Cancel</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //ModalProfile -->

  <!-- ModalSettings -->
  <div class="modal fade" id="Settings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Account Settings</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div class="modal-header">
              <img <?php echo"<img src = '/developgetpet/web/images/$result->adopterPicture'";?> alt="avatar" style="width:150px;height:150px;margin-left:125px;margin-top:-20px;" class="rounded-circle img-responsive">
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input type="hidden" name="ownerID" value="<?php echo ( $result->adopterID);?>" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Firstname" required="required" value="<?php echo ($result->adopterFirstname);?>" placeholder="First Name">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Lastname" required="required" value="<?php echo ($result->adopterLastname);?>" placeholder="Last Name">
						<span class="focus-input100"></span>
				</div><br>
        <div  style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;font-family:Arial;" type="text" name="ContactNo" onkeypress="isInputNumber(event)" maxlength="11" value="<?php echo ($result->adopterContactNo);?>" placeholder="Contact No.">
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
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Address" required="required" value="<?php echo ($result->adopterAddress);?>" placeholder="Address">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Email" required="required" value="<?php echo ($result->adopterEmail);?>" placeholder="Email">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input" data-validate = "Valid username is required: ex@abc.xyz">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Username" required="required" value="<?php echo ($result->adopterUsername);?>" placeholder="Username">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input" data-validate = "Valid username is required: ex@abc.xyz">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="Password" name="Password" required="required" value="<?php echo ($result->adopterPassword);?>" placeholder="Password">
				</div><br><br>
        <div style="text-align: center">
						<button  class="btn btn-round btn-success" style="background-color:#00cdc1;width:250px;height:40px;border:none;" name="update" type="submit" id="insert" value="Insert">
							<a style="color:White"> Update </a>
						</button>
				</div><br>
      </form>
      </div>
    </div>
  </div>
</div>
  <!-- //ModalSettings -->

        <!-- footer content -->
        <footer>
        <p class="tweet-p1">
		ADOPTING MEANS YOU SAVE A LIFE! <a href="mailto:GetPet@gmail.com">GetPet@gmail.com</a>
		<!--<a href="#">http://ax.by/zzzz</a>-->
		</p>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../vendors/validator/multifield.js"></script>
    <script src="../vendors/validator/validator.js"></script>

    <script type="text/javascript">
  $("#selected_profile_cancel").click(function () {
   
    profile_picture.src = <?php echo"'/developgetpet/web/images/$result->adopterPicture'";?>;
    Picture.value = "";
    document.getElementById("profile").disabled = true;
});
  </script>

    <script type="text/javascript">
  $("#selected_profile_close").click(function () {
   
    profile_picture.src = <?php echo"'/developgetpet/web/images/$result->adopterPicture'";?>;
    Picture.value = "";
    document.getElementById("profile").disabled = true;
});
  </script>

<script type="text/javascript">
  $("#selected_picture_cancel").click(function () {
  
    PostPicture.value = "";
    document.getElementById("btnChangePostPicture").disabled = true;
});
  </script>

    <script type="text/javascript">
  $("#selected_picture_close").click(function () {

    PostPicture.value = "";
    document.getElementById("btnChangePostPicture").disabled = true;
});
  </script>

    <script>
      Picture.onchange = evt => {
  const [file] = Picture.files
  if (file) {
    profile_picture.src = URL.createObjectURL(file)
  }
  document.getElementById("profile").disabled = false;
}
    </script>

    <script>
      PostPicture.onchange = evt => {
  const [file] = PostPicture.files
  if (file) {
    post_picture.src = URL.createObjectURL(file)
  }
  document.getElementById("btnChangePostPicture").disabled = false;
}
    </script>

    <script type="text/javascript">
    $(".unread").filter(function(){
    return $(this).text().trim() === "Read";
    }).hide();
    </script>

    <script>
        $(document).ready(function () {

            $('.declinebtn').on('click', function () {

                $('#DeclineRequest').modal('show');

                $tr = $(this).closest('ul');

                var data = $tr.children("li").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#request_id').val(data[0]);
                $('#pet_id').val(data[1]);
                $('#user_id').val(data[2]);
                $('#user_name').val(data[3]);
                $('#user_email').val(data[4]);
                $('#user_address').val(data[5]);
                $('#user_contactno').val(data[6]);
                $('#pet_type').val(data[7]);
                $('#pet_name').val(data[8]);
                $('#pet_breed').val(data[9]);
                $('#request_date').val(data[10]);
            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.acceptbtn').on('click', function () {

                $('#AcceptRequest').modal('show');

                $tr = $(this).closest('ul');

                var data = $tr.children("li").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#requestid').val(data[0]);
                $('#petid').val(data[1]);
                $('#userid').val(data[2]);
                $('#username').val(data[3]);
                $('#useremail').val(data[4]);
                $('#useraddress').val(data[5]);
                $('#usercontactno').val(data[6]);
                $('#pettype').val(data[7]);
                $('#petname').val(data[8]);
                $('#petbreed').val(data[9]);
                $('#requestdate').val(data[10]);
            });
        });
    </script>
    

    <div id="custom_notifications" class="custom-notifications dsp_none">
      <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
      </ul>
      <div class="clearfix"></div>
      <div id="notif-group" class="tabbed_notifications"></div>
    </div>

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
    <!-- PNotify -->
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>