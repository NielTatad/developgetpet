<!-- Search By ID Code -->
<?php 
session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
$ID=$_SESSION['ownerID'];
$sql = "SELECT * from petowner where ownerID=:ID";
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
<!-- //Search By ID Code -->

<!-- Update Account Code -->
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

$sql1="update petowner set
ownerFirstname=:Firstname,
ownerLastname=:Lastname,
ownerContactNo=:ContactNo,
ownerAddress=:Address,
ownerEmail=:Email,
ownerUsername=:Username,
ownerPassword=:Password 
where ownerID=:ID";
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
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Profile.php'</script>";
}
}
?>
<!-- //Update Account Code -->

<!-- Update Profile Code -->
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

$sql1="update petowner set
ownerPicture=:Picture
where ownerID=:ID";
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
$ID=$_SESSION['ownerID'];
$sql = "SELECT * from petowner where ownerID=:ID";
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
<?php }}
}
}
?>
<!-- //Update Profile Code -->
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

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
  <style>
    .view-all-comment:hover {
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
              <a href="http://localhost/developgetpet/dashboard/P.O-Dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>&nbsp&nbsp&nbsp&nbspGETPET</span></a>
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
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu" >
              <div class="menu_section">
                    <ul class="nav side-menu">
                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.O-Dashboard.php"><i></i> Dashboard </a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.O-Adoption.php">Pet Adoption</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.O-Shorttermcare.php">Short-term Care</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.O-Donation.php">Donation</a>
                    </li>

                    <li>
                    <li><a href="#">Fundraising activities</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.O-T.A.A.php">Pet Care Tips</a>
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
                    <a data-toggle="tooltip" data-placement="top" title="Home" href="http://localhost/developgetpet/dashboard/P.O-Dashboard.php">
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
                      <img <?php echo"<img src = '/developgetpet/web/images/$result->ownerPicture'";?> alt=""><?php echo ($result->ownerFirstname);?> <?php echo ($result->ownerLastname);?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="http://localhost/developgetpet/dashboard/P.O-Profile.php" id="Profile"> Profile</a>
                      <!--<a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>-->
                    <a class="dropdown-item" data-toggle="modal" data-target="#Settings">Settings</a>
                      <a class="dropdown-item"  href="http://localhost/developgetpet/login-page/login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
                  <?php
                  $query=$dbh->prepare("SELECT COUNT(masterID) FROM notification WHERE masterID='$ID' AND notificationStatus != 'Read'");
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
                          <span><b><?php echo ($result->notificationTitle);?></b></span><br>
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
                      <li onclick="window.location.href='http://localhost/developgetpet/dashboard/P.O-UserRequest.php';" class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <a href="http://localhost/developgetpet/dashboard/P.O-Requestnotification.php">See All Alerts</a>
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
$sql = "SELECT * from petowner where ownerID=:ID";
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

            <!-- Post Button -->
            <a href="http://localhost/developgetpet/dashboard/P.O-Postdonation.php"><button type="button" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width:150px;">Create Post</button></a>

            <!-- /page content -->

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel" style="border-radius:10px;border-width:2px;">
                  <div class="x_title">
                  <h2>Donation Post</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link" style="margin-left:50px"><i class="fa fa-chevron-up"></i></a>
                      </li>
                   </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="text-align:center;">
                                  
                  <!-- View Pet Post for Adotion Code -->
                  <?php
                        $sql="SELECT * from charity WHERE charCharitystatus='Unaccepted' AND charPoststatus='Donation' AND charPoststatus!='Deleted' ORDER BY charityID DESC";
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
                                            
                                            <label style="margin-top:-5px;"><img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:40px;height:40px;margin-top:10px;" class="rounded-circle img-responsive"><textarea disabled style="width:450px;height:auto;font-size:18px;border-style: none;background-color:transparent;resize: none;overflow:hidden;font-size:14px;text-align:left;padding-top: 2px;color: #73879C;margin-top:10px;" type='text'><?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?>&#13;&#10;<?php echo ($result->charPostdate);?></textarea>
                                            <p id="description" style="font-size:16px;margin-top:10px;padding-left:10px;text-align:left;"><?php echo ($result->charDescription);?></p>
                                                                                      
                                              <Img <?php echo"<img src = '/developgetpet/web/images/$result->charPicture'";?> class="card-ing-top" alt="Post Images" style="height:300px;width:500px;border-radius:10px;">
                                              <ul style="list-style:none;margin-left:-50px;">
                                              
                                              <li><h3 hidden class="card-title"><?php echo ($result->charityID);?></h3></li>
                                              <li><h2 hidden class="card-title"><?php echo ($result->charTitle);?></h2></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->charBank);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->charAmount);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->charPinnumber);?></h3></li>
                                              <li><textarea hidden disabled="yes" id="description" style="width:350px;height:100px;padding-top:-5px;background-color: #fff;resize: none;color:#73879C;font-size:16px;"><?php echo ($result->charDescription);?></textarea></li>
                                              
                                              
                                              <li><h3 hidden class="card-title"><?php echo ($result->charDescription);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->charPicture);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->charCharitystatus);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->userID);?></h3></li>
                                            
                                              
                                              <li><h3 hidden class="card-title"><?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?></h3></li>
                                              <li><label hidden class="card-title"><?php echo ($result->charPostdate);?></label><br></li>
                                              <li><h3 hidden class="card-title"><?php echo ( $userid->Email);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ( $userid->Address);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ( $userid->contactNo);?></h3></li>
                                              <?php $cnt1=$cnt1+1;}} ?>
                                              <button type="button" class="btn btn-link viewbtn" style="height:30px;width:150px;font-size:14px;margin-top:-10px;float:left;margin-left:-10px;">View More Info</button>
                                              <br>

                                              <?php
                                              $count=$dbh->prepare("SELECT COUNT(postID) FROM comment WHERE postID='$result->charityID'");
                                              $count->execute();

                                              $commentno=$count->fetchColumn();

                                              ?>
                                              
                                              <?php
                                              $postid = $result->charityID;

                                              $sql2="SELECT * from comment WHERE postID ='$postid' AND  commentStatus='Donation' ORDER BY commentID DESC LIMIT 1";
                                              $query2=$dbh->prepare($sql2);
                                              $query2->execute();
                                              $comments=$query2->fetchALL(PDO::FETCH_OBJ);
                                              $cnt2=1;
                                              if($query2->rowCount()>0)
                                              {
                                                foreach($comments as $comment)
                                              {
                                                ?>

                                              <?php
                                              $uid = $comment->userID;

                                              $sql3="SELECT * from register WHERE userID ='$uid'";
                                              $query3=$dbh->prepare($sql3);
                                              $query3->execute();
                                              $pictures=$query3->fetchALL(PDO::FETCH_OBJ);
                                              $cnt3=1;
                                              if($query3->rowCount()>0)
                                              {
                                                foreach($pictures as $picture)
                                              {
                                                ?>
                                                <br>
                                               <h4 style="margin-top:-40px;float:right;margin-right:10px;"><span class="comment-count"><?php echo ($commentno);?></span> Comment</h4>
                                              
                                                <label style="margin-top:-5px;"><img <?php echo"<img src = '/developgetpet/web/images/$picture->Image'";?> alt="avatar" style="width:30px;height:30px;margin-top:10px;" class="rounded-circle img-responsive">&nbsp<textarea disabled="yes" style="width:450px;height:auto;font-size:16px;border-radius:20px; background-color:#e9ecef;resize: none;overflow:hidden;font-size:14px;text-align:left;padding-top: 4px;color: #808080;margin-top:10px;" type='text'><?php echo ( $picture->userFirstname);?><?php echo ( $picture->orgName);?><?php echo ( $picture->userLastname);?>&#13;&#10;<?php echo ( $comment->commentContent);?></textarea>&nbsp&nbsp<i class="fa fa-ellipsis-v"></i><br>
                                                <p style="margin-top:5px;margin-bottom:8px;text-align:right;padding-right:15px;"><?php echo ( $comment->commentDate);?></p>
                                                
                                                <!--<p class="view-all-comment" id="view_all" style="margin-top:5px;margin-bottom:8px;"> View all comments</p>-->

                                                <!-- start view all comment -->
                                          <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">                  
                                            <div class="panel">
                                              <a class="view-all-comment" role="tab" id="view_all" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                                              <p class="view-all-comment" id="view_all" style="margin-top:5px;margin-bottom:8px;"> View all comments</p>
                                              </a>
                                              <?php
                                              $postid = $result->charityID;
                                              $sql4="SELECT * from comment WHERE postID ='$postid' AND  commentStatus='Donation' ORDER BY commentID DESC";
                                              $query4=$dbh->prepare($sql4);
                                              $query4->execute();
                                              $comments=$query4->fetchALL(PDO::FETCH_OBJ);
                                              $cnt4=1;
                                              if($query4->rowCount()>0)
                                              {
                                                foreach($comments as $comment)
                                              {
                                                ?>
                                            <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                              <div class="panel-body">
                                              <label style="margin-top:-5px;"><img <?php echo"<img src = '/developgetpet/web/images/$picture->Image'";?> alt="avatar" style="width:30px;height:30px;margin-top:10px;" class="rounded-circle img-responsive">&nbsp<textarea disabled="yes" style="width:450px;height:auto;font-size:16px;border-radius:20px; background-color:#e9ecef;resize: none;overflow:hidden;font-size:14px;text-align:left;padding-top: 4px;color: #808080;margin-top:10px;" type='text'><?php echo ( $picture->userFirstname);?><?php echo ( $picture->orgName);?><?php echo ( $picture->userLastname);?>&#13;&#10;<?php echo ( $comment->commentContent);?></textarea>
                                              <?php $cnt4=$cnt4+1;}} ?>
                                              <br>
                                              </div>
                                            </div>
                                          </div>                  
                                        </div>
                                        <!-- end of view all comment -->
                                        <?php $cnt2=$cnt2+1;}} ?>
                                        <?php $cnt3=$cnt3+1;}} ?>
                                        
                                                
                                              <?php

                                              $sql5="SELECT * from register WHERE userID='$ID'";
                                              $query5=$dbh->prepare($sql5);
                                              $query5->execute();
                                              $userIDs=$query5->fetchALL(PDO::FETCH_OBJ);
                                              $cnt5=1;
                                              if($query5->rowCount()>0)
                                              {
                                                foreach($userIDs as $userID)
                                              {
                                                ?>
                                              <label style="margin-top:4px;"><img <?php echo"<img src = '/developgetpet/web/images/$userID->Image'";?> alt="avatar" style="width:30px;height:30px;margin-bottom:4px;" class="rounded-circle img-responsive">&nbsp
                                              <button type="button" class="btn-round commentbtn" style="border: none;height:30px;width:450px;background-color:#e9ecef;font-size:14px;text-align:left;padding: 0.375rem 0.75rem;color: #808080;outline: none;">Write a comment...</button>
                                              <div class="clearfix"></div>
                                              <?php $cnt5=$cnt5+1;}} ?>

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
                     <!-- //View Pet Post for Adotion Code -->                                        
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        

  <!-- Search By ID Code -->
<script>
<?php 
$ID=$_SESSION['ownerID'];
$sql = "SELECT * from petowner where ownerID=:ID";
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
  <!-- //Search By ID Code -->

  <!-- ModalProfile -->
  <div class="modal fade" id="Profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Profile</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div class="modal-header">
              <img <?php echo"<img src = '/developgetpet/web/images/$result->ownerPicture'";?> alt="avatar" style="width:150px;height:150px;margin-left:125px;margin-top:-20px;" class="rounded-circle img-responsive">
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
              <input type="file" name="Picture" id="Picture" style="width:250px;height:40px;border:none;margin-left:160px;margin-top:5px;" placeholder="Upload Photo">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input type="hidden" name="ownerID" value="<?php echo ( $result->ownerID);?>" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center">
						  <button  class="btn btn-round btn-success" style="background-color:#00cdc1;width:150px;height:35px;border:none;" name="profile" type="submit" id="insert" value="Insert">
							 <a style="color:White"> Update Profile </a>
						 </button>
				</div>
        <div style="text-align: center">
             <h6 class="mt-1 mb-2"><?php echo ($result->ownerFirstname);?> <?php echo ($result->ownerLastname);?></h6>
             <h6 class="mt-1 mb-2"><?php echo ($result->ownerContactNo);?></h6>
             <h6 class="mt-1 mb-2"><?php echo ($result->ownerAddress);?></h6>
             <h6 class="mt-1 mb-2"><?php echo ($result->ownerEmail);?></h6>
             <h6 class="mt-1 mb-2"><?php echo ($result->Role);?></h6>
        </div><br>
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
              <img <?php echo"<img src = '/developgetpet/web/images/$result->ownerPicture'";?> alt="avatar" style="width:150px;height:150px;margin-left:125px;margin-top:-20px;" class="rounded-circle img-responsive">
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input type="hidden" name="ownerID" value="<?php echo ( $result->ownerID);?>" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Firstname" required="required" value="<?php echo ($result->ownerFirstname);?>" placeholder="First Name">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Lastname" required="required" value="<?php echo ($result->ownerLastname);?>" placeholder="Last Name">
						<span class="focus-input100"></span>
				</div><br>
        <div  style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;font-family:Arial;" type="text" name="ContactNo" onkeypress="isInputNumber(event)" maxlength="11" value="<?php echo ($result->ownerContactNo);?>" placeholder="Contact No.">
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
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Address" required="required" value="<?php echo ($result->ownerAddress);?>" placeholder="Address">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Email" required="required" value="<?php echo ($result->ownerEmail);?>" placeholder="Email">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input" data-validate = "Valid username is required: ex@abc.xyz">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Username" required="required" value="<?php echo ($result->ownerUsername);?>" placeholder="Username">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input" data-validate = "Valid username is required: ex@abc.xyz">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="Password" name="Password" required="required" value="<?php echo ($result->ownerPassword);?>" placeholder="Password">
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
        <script>
          function cleartext() {
          document.getElementById("Reason").value="";
          document.getElementById('adopt').disabled = true;
            }
        </script>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" id="char_id" name="CharityID" required = "required" class="form-control">
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Title<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="char_title" name="PetName" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Bank Type<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="char_bank" name="Breed" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Amount<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="char_amount" name="Gender" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Account Number<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="char_pin" name="Age" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Description<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
        <textarea disabled="yes" id="char_description" style="width:400px;height:100px;padding-top:-5px;background-color: #fff;resize: none;font-size:16px;"></textarea>
        </div>
        </div>

        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" id="des" name="Description"  required = "required" class="form-control">
				</div>

        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" id="char_picture" name="Picture"  required = "required" class="form-control">
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Status<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="char_status" name="Availability" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" id="user_id" name ="MasterID" required = "required" class="form-control">
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Posted By<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="post_by" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Posted Date<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="post_date" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Email<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="user_email" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Address<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="user_address" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Contact No<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="user_contactno" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" name="UserID" value="<?php echo ($result->adopterID);?>"  required = "required" class="form-control">

              <input hidden readonly type="text" class="form-control" name="Name" value="<?php echo ($result->adopterFirstname);?> <?php echo ($result->adopterLastname);?>" style="background-color:#fff;width:400px;" required="required"/>

              <input hidden readonly type="text" class="form-control" name="Email" value="<?php echo ($result->adopterEmail);?>" style="background-color:#fff;width:400px;" required="required"/>

              <input hidden readonly type="text" class="form-control" name="Address" value="<?php echo ($result->adopterAddress);?>" style="background-color:#fff;width:400px;" required="required"/>

              <input hidden readonly type="text" class="form-control" name="ContactNo" value="<?php echo ($result->adopterContactNo);?>" style="background-color:#fff;width:400px;" required="required"/>

        </div>



        </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Donation Information -->

<!-- Comment Code -->
<?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>  
<?php
if(isset($_POST['btnComment']))
{
  $masterid=($_POST['masterid']);

  if($masterid == $ID)
  {
    $charityid=($_POST['charityid']);
    $masterid=($_POST['masterid']);
    $Comment=($_POST['Comment']);
    
    $sql="INSERT INTO comment(postID,masterID,userID,commentContent,commentDate,commentStatus)VALUES(:charityid,:masterid,'$ID',:Comment,'$date','Donation')";
    $query=$dbh->prepare($sql);
    $query->bindParam(':charityid',$charityid,PDO::PARAM_STR);
    $query->bindParam(':masterid',$masterid,PDO::PARAM_STR);
    $query->bindParam(':Comment',$Comment,PDO::PARAM_STR);
    $query->execute();

    echo '<script>alert("Your Comment Posted Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Donation.php'</script>";
  
  }

  else
  {
    $charityid=($_POST['charityid']);
    $masterid=($_POST['masterid']);
    $Comment=($_POST['Comment']);
    
    $sql="INSERT INTO comment(postID,masterID,userID,commentContent,commentDate,commentStatus)VALUES(:charityid,:masterid,'$ID',:Comment,'$date','Donation')";
    $query=$dbh->prepare($sql);
    $query->bindParam(':charityid',$charityid,PDO::PARAM_STR);
    $query->bindParam(':masterid',$masterid,PDO::PARAM_STR);
    $query->bindParam(':Comment',$Comment,PDO::PARAM_STR);
    $query->execute();

    $sql2="SELECT commentID FROM comment ORDER BY commentID DESC";
    $query2=$dbh->prepare($sql2);
    $query2->execute();

    $commentID=$query2->fetchColumn();

    $sql3="INSERT INTO notification(activityID,notificationTitle,userID,masterID,notificationDescription,notificationDate,notificationStatus)VALUES('$commentID','Comment on Your Post','$ID',:masterid,:Comment,'$date','Unread')";
    $query3=$dbh->prepare($sql3);
    $query3->bindParam(':masterid',$masterid,PDO::PARAM_STR);
    $query3->bindParam(':Comment',$Comment,PDO::PARAM_STR);
    $query3->execute();

    echo '<script>alert("Your Comment Posted Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Donation.php'</script>";
  }
  
}
?>
<!-- //Comment Code -->

  <!-- Modal Comment -->
  <div class="modal fade" id="Comment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Comment Post</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="comment()">
          <span aria-hidden="true">&times;</span>
        </button>
        <script>
          function comment() {
          document.getElementById("comment").value="";
            }
        </script>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="charityid" name="charityid" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="masterid" name="masterid" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="userid" name="userid" value="<?php echo ($result->ownerID);?>" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
              <textarea id="comment" name="Comment" required = "required" class="form-control" id="success" placeholder="Write a comment..." style="height:100px;resize: none;font-size:16px;"></textarea>
				</div><br>

        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="btnComment" id="btnComment" type="submit" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Post</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Comment -->

			<!-- footer content -->
			<footer>
      <p class="tweet-p1">
		  ADOPTING MEANS YOU SAVE A LIFE! <a href="mailto:GetPet@gmail.com">GetPet@gmail.com</a>
		  </p>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>

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

                $('#char_id').val(data[0]);
                $('#char_title').val(data[1]);
                $('#char_bank').val(data[2]);
                $('#char_amount').val(data[3]);
                $('#char_pin').val(data[4]);
                $('#char_description').val(data[5]);
                $('#des').val(data[6]);
                $('#char_picture').val(data[7]);
                $('#char_status').val(data[8]);
                $('#user_id').val(data[9]);
                $('#post_by').val(data[10]);
                $('#post_date').val(data[11]);
                $('#user_email').val(data[12]);
                $('#user_address').val(data[13]);
                $('#user_contactno').val(data[14]);
            });
        });
    </script>

<script>
        $(document).ready(function () {

            $('.commentbtn').on('click', function () {

                $('#Comment').modal('show');

                $tr = $(this).closest('ul');

                var data = $tr.children("li").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#charityid').val(data[0]);
                $('#masterid').val(data[9]);
            });
        });
</script> 

    <script>
        // initialize a validator instance from the "FormValidator" constructor.
        // A "<form>" element is optionally passed as an argument, but is not a must
        var validator = new FormValidator({
            "events": ['blur', 'input', 'change']
        }, document.forms[0]);
        // on form "submit" event
        document.forms[0].onsubmit = function(e) {
            var submit = true,
                validatorResult = validator.checkAll(this);
            console.log(validatorResult);
            return !!validatorResult.valid;
        };
        // on form "reset" event
        document.forms[0].onreset = function(e) {
            validator.reset();
        };
        // stuff related ONLY for this demo page:
        $('.toggleValidationTooltips').change(function() {
            validator.settings.alerts = !this.checked;
            if (this.checked)
                $('form .alert').remove();
        }).prop('checked', false);

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

  

     

</body>
</html>
