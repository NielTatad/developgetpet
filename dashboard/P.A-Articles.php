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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
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
                    <!--<div class="profile_pic">
                    <img <?php echo"<img src = '/developgetpet/web/images/$result->adopterPicture'";?> alt="..." class="img-circle profile_img" style="background-color:#00cdc1;border:#00cdc1;">
                    </div>
                    <div class="profile_info">
                    <span>Welcome,</span>
                    <h2><?php echo ($result->adopterFirstname);?> <?php echo ($result->adopterLastname);?></h2>
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

                    <li><a >Pet For Adoption</a>
                      <ul class="nav child_menu">
                        <li><a href="http://localhost/developgetpet/dashboard/P.A-Dogslistadoption.php">Dog's For Adoption</a></li>
                        <li><a href="http://localhost/developgetpet/dashboard/P.A-Catslistadoption.php">Cat's For Adoption</a></li>
                      </ul>
                    </li>

                    <li><a >Pet For Short-term care</a>
                      <ul class="nav child_menu">
                        <li><a href="http://localhost/developgetpet/dashboard/P.A-Dogsshorttermcare.php">Dog's For Short-term care</a></li>
                        <li><a href="http://localhost/developgetpet/dashboard/P.A-Catsshorttermcare.php">Cat's For Short-term care</a></li>
                      </ul>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.A-Fundraisingactivities.php">Fundraising activities</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.A-Events.php">Events</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.A-Tips.php">Pet Care Tips</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.A-Adopted.php">Adopted</a>
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

            <!-- Post Button 
            <a href="http://localhost/developgetpet/dashboard/P.A-PostAdoption.php"><button type="button" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width:150px;">Post Pet</button></a>
             -->

            <!-- /page content -->
            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel" style="border-radius:50px;">
                  
                <img <?php echo"<img src = '/developgetpet/web/images/$result->adopterPicture'";?> onclick="window.location.href='http://localhost/developgetpet/dashboard/P.A-Profile.php';" alt="avatar" style="width:40px;height:40px;" class="rounded-circle img-responsive">&nbsp&nbsp<a data-toggle="modal" data-target="#create" data-placement="top" title="create"><input Cursor="Arrow" data-toggle="modal" data-target="#create" type="text" id="textarea" name="textarea" placeholder="Wanna create or post something?" required="required" style="border-radius:50px;cursor:pointer;height:40px;width:900px;background-color:#e9ecef;font-size:16px;height: calc(1.5em + 0.75rem + 2px);padding: 0.375rem 0.75rem;font-size: 1remfont-weight: 400;line-height: 1.5;color: #495057;" onkeypress="return /[a-z]/i.test(event.key)" disabled/></a>
                <div class="clearfix"></div>

                </div>
              </div>
            </div>

            <div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12  ">
    <div class="x_panel" style="border-radius:10px;border-width:2px;">
      <div class="x_title">
        <h2>Tips, Advice & Articles</h2>
        <ul class="nav navbar-right panel_toolbox">
       </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content" style="text-align:center;">
      
       <!-- View Post for Tips Advice & Articles Code -->
                  <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/P.A-Tips.php" role="tab" aria-controls="tips-tab" aria-selected="true">Tips</a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/P.A-Advice.php" role="tab" aria-controls="advice-tab" aria-selected="false">Advice</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/developgetpet/dashboard/P.A-Articles.php" role="tab" aria-controls="articles-tab" aria-selected="false">Articles</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade" id="tips" role="tabpanel" aria-labelledby="tips-tab">

                      </div>
                      <div class="tab-pane fade" id="advice" role="tabpanel" aria-labelledby="advice-tab">
      
                      </div>
                      <div class="tab-pane fade show active" id="articles" role="tabpanel" aria-labelledby="articles-tab">
                      <?php
                        $sql="SELECT * from post WHERE postStatus='Articles' ORDER BY postID DESC";
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
                                            
                                            
                                            <h3 hidden class="card-title"><?php echo ($result->postID);?></h3>                                
                                            <h3 hidden class="card-title"><?php echo ($result->userID);?></h3>
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
                                            
                                           <i class="fa fa-ellipsis-h menu" style="float: right;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i hidden><?php echo ($result->userID);?></i>
                                                </i>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              <button class="dropdown-item Epost" data-post-id="<?php echo ($result->postID);?>" data-post-title="<?php echo ($result->postTitle);?>" data-post-content="<?php echo ($result->postContent);?>" data-post-location="<?php echo ($result->postLocation);?>" data-post-time="<?php echo ($result->postTime);?>" data-post-date="<?php echo ($result->postEventdate);?>"><i hidden><?php echo ($result->userID);?></i> Edit</button>

                                              <button class="dropdown-item Dpost" data-post-id="<?php echo ($result->postID);?>"><i hidden><?php echo ($result->userID);?></i> Delete</button>
                                              <button class="dropdown-item Ppost" data-post-id="<?php echo ($result->postID);?>" data-post-picture="<?php echo ($result->postPicture);?>"><i hidden><?php echo ($result->userID);?></i> Change Picture</button>
                                            </div><br>
                                            <label style="margin-top:10px;">Posted by: <img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:25px;height:25px;" class="rounded-circle img-responsive"> <?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?></label><br>
                                            <label style=""><?php echo ($result->postDate);?></label><br><br>
                                            <Img <?php echo"<img src = '/developgetpet/web/images/$result->postPicture'";?> class="card-ing-top" alt="Post Images" style="height:300px;width:500px;border-radius:10px;"><br>
                                            <br>
                                            <div class="field item form-group">  
                                            <div class="col-md-6 col-sm-6">
                                            <textarea id="description" required="required" class="form-control" id="Title" name="Title" style="height:40px;resize: none;overflow:hidden;width:880px;border-radius:10px;" readonly><?php echo ($result->postTitle);?></textarea>
                                            </div>
                                            </div>                                
                                            <div class="field item form-group">                                        
                                             <div class="col-md-6 col-sm-6">
                                                 <textarea required="required" class="form-control txtgrow" id="Content" name="Content" style="height:auto;resize: none;overflow:hidden;width:880px;border-radius:10px;" readonly><?php echo ($result->postContent);?></textarea>
                                            </div>
                                            </div>
                                            <?php $cnt1=$cnt1+1;}} ?>

                                            <br>

                                            <?php
                                            $count=$dbh->prepare("SELECT COUNT(postID) FROM comment WHERE postID='$result->postID'");
                                            $count->execute();

                                            $commentno=$count->fetchColumn();

                                            ?>

                                            <?php
                                            $postid = $result->postID;

                                            $sql2="SELECT * from comment WHERE postID ='$postid' AND  commentStatus='Articles' ORDER BY commentID DESC LIMIT 1";
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
                                            <h4 style="margin-top:-40px;float:right;margin-right:25px;"><span class="comment-count" id="comment-count"><?php echo ($commentno);?></span> Comment</h4>

                                            <div class="comment-Div">

                                              <label style="margin-top:-5px;"><img <?php echo"<img src = '/developgetpet/web/images/$picture->Image'";?> alt="avatar" style="width:30px;height:30px;margin-top:10px;" class="rounded-circle img-responsive">&nbsp<textarea disabled="yes" class="txtgrow" style="width:800px;height:auto;font-size:16px;border-radius:20px; background-color:#e9ecef;resize: none;overflow:hidden;font-size:14px;text-align:left;padding-top: 10px;color: #808080;margin-top:10px;" type='text'><?php echo ( $picture->orgName);?><?php echo ( $picture->userFirstname);?> <?php echo ( $picture->userLastname);?>&#13;&#10;<?php echo ( $comment->commentContent);?></textarea>&nbsp&nbsp<i class="fa fa-ellipsis-v option" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i hidden><?php echo ($comment->userID);?></i>
                                              </i>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <button class="dropdown-item Ecomment" data-comment-id="<?php echo ( $comment->commentID);?>" data-comment-content="<?php echo ( $comment->commentContent);?>"><i hidden><?php echo ( $comment->userID);?></i> Edit</button>
                                                  <button class="dropdown-item Dcomment" data-comment-id="<?php echo ( $comment->commentID);?>"><i hidden><?php echo ( $comment->userID);?></i> Delete</button>
                                                </div><br>

                                              <p style="margin-top:5px;margin-bottom:8px;text-align:right;padding-right:15px;"><?php echo ( $comment->commentDate);?></p>
                                              
                                              <?php
                                              $count_more_comment = $commentno-1;
                                              ?>
                                              <p class="view-more-comment" id="view_more" style="margin-top:-10px;margin-bottom:8px;"><span class="count-more-comment" id="count-more-comment">View <?php echo $count_more_comment?> more comment</span></p>  

                                            </div>


                                              
                                            <?php $cnt2=$cnt2+1;}} ?>
                                            <?php $cnt3=$cnt3+1;}} ?>

                                            <div class="view-more-comment-Div" id="view_more_comment_Div">

                                            <?php
                                            $postid = $result->postID;

                                            $sql2="SELECT * from comment WHERE postID ='$postid' AND  commentStatus='Articles' ORDER BY commentID DESC";
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
                                              
                                              <label style="margin-top:-30px;"><img <?php echo"<img src = '/developgetpet/web/images/$picture->Image'";?> alt="avatar" style="width:30px;height:30px;margin-top:10px;" class="rounded-circle img-responsive">&nbsp<textarea disabled="yes" class="txtgrow" style="width:800px;height:auto;font-size:16px;border-radius:20px; background-color:#e9ecef;resize: none;overflow:hidden;font-size:14px;text-align:left;padding-top: 10px;color: #808080;margin-top:10px;" type='text'><?php echo ( $picture->orgName);?><?php echo ( $picture->userFirstname);?> <?php echo ( $picture->userLastname);?>&#13;&#10;<?php echo ( $comment->commentContent);?></textarea>&nbsp&nbsp<i class="fa fa-ellipsis-v option" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i hidden><?php echo ($comment->userID);?></i></i>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                  <button class="dropdown-item Ecomment" data-comment-id="<?php echo ( $comment->commentID);?>" data-comment-content="<?php echo ( $comment->commentContent);?>"><i hidden><?php echo ( $comment->userID);?></i> Edit</button>
                                                  <button class="dropdown-item Dcomment" data-comment-id="<?php echo ( $comment->commentID);?>"><i hidden><?php echo ( $comment->userID);?></i> Delete</button>
                                                </div><br>
                                              
                                              <p style="margin-top:5px;margin-bottom:8px;text-align:right;padding-right:15px;"><?php echo ( $comment->commentDate);?></p>

                                            <?php $cnt2=$cnt2+1;}} ?>
                                            <?php $cnt3=$cnt3+1;}} ?>

                                            <?php
                                              $hide_more_comment = $commentno-1;
                                            ?>
                                            <p class="hide-more-comment" id="hide_more" style="margin-top:-10px;margin-bottom:8px;"> Hide <?php echo $hide_more_comment?> comment</p>

                                            </div>

                                            <?php

                                            $sql4="SELECT * from register WHERE userID='$ID'";
                                            $query4=$dbh->prepare($sql4);
                                            $query4->execute();
                                            $userIDs=$query4->fetchALL(PDO::FETCH_OBJ);
                                            $cnt4=1;
                                            if($query4->rowCount()>0)
                                            {
                                              foreach($userIDs as $userID)
                                            {
                                              ?>
                                            <label style="margin-top:4px;"><img <?php echo"<img src = '/developgetpet/web/images/$userID->Image'";?> alt="avatar" style="width:30px;height:30px;margin-bottom:4px;" class="rounded-circle img-responsive">&nbsp
                                            <button type="button" class="btn-round commentbtn" style="border: none;height:30px;width:750px;background-color:#e9ecef;font-size:14px;text-align:left;padding: 0.375rem 0.75rem;color: #808080;outline: none;" data-post-id="<?php echo ($result->postID);?>" data-master-id="<?php echo ($result->userID);?>" data-post-status="<?php echo ($result->postStatus);?>">Write a comment...</button>
                                            <div class="clearfix"></div>
                                            <?php $cnt4=$cnt4+1;}} ?>
                                            
                                    </div>
                                  </div><br>
                                </div>
                              <?php $cnt=$cnt+1;
                            }
                        } 
                        else
                        {
                          echo "There isn't any information displayed.";
                        }
                        ?>
                      </div>
                    </div>
                  
                     <!-- //View Post for Tips Advice & Articles Code -->  
          
      </div>
    </div>
  </div>
</div>
</div>
</div>
        <!-- /page content -->

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
<p></p>
<?php
?>
<?php }} ?>
</script>

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
              <img <?php echo"<img src = '/developgetpet/web/images/$result->adopterPicture'";?> alt="avatar" style="width:150px;height:150px;margin-left:125px;margin-top:-20px;" class="rounded-circle img-responsive">
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
              <input type="file" name="Picture" id="Picture" style="width:250px;height:40px;border:none;margin-left:160px;margin-top:5px;" placeholder="Upload Photo">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input type="hidden" name="adopterID" value="<?php echo ( $result->adopterID);?>" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center">
						  <button  class="btn btn-round btn-success" style="background-color:#00cdc1;width:150px;height:35px;border:none;" name="profile" type="submit" id="insert" value="Insert">
							 <a style="color:White"> Update Profile </a>
						 </button>
				</div>
        <div style="text-align: center">
             <h6 class="mt-1 mb-2"><?php echo ($result->adopterFirstname);?> <?php echo ($result->adopterLastname);?></h6>
             <h6 class="mt-1 mb-2"><?php echo ($result->adopterContactNo);?></h6>
             <h6 class="mt-1 mb-2"><?php echo ($result->adopterAddress);?></h6>
             <h6 class="mt-1 mb-2"><?php echo ($result->adopterEmail);?></h6>
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

 <!-- Adoption Request Code -->
<?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>

<?php
if(isset($_POST['Adopt']))
{
  
  $MasterID=($_POST['MasterID']);

  if($MasterID == $ID){

  echo '<script>alert("Opps! You cannot adopt your own post pet")</script>';
  echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.A-Adoption.php'</script>";

  }
  else{
  
  $MasterID=($_POST['MasterID']);
  $UserID=($_POST['UserID']);
  $Name=($_POST['Name']);
  $Email=($_POST['Email']);
  $Address=($_POST['Address']);
  $ContactNo=($_POST['ContactNo']);
  $PetID=($_POST['PetID']);
  $Type=($_POST['Type']);
  $PetName=($_POST['PetName']);
  $Breed=($_POST['Breed']);
  $Description=($_POST['Description']);
  $Reason=($_POST['Reason']);

  $sql="INSERT INTO request(masterID,UserID,userName,userEmail,userAddress,userContactNo,petID,petType,petName,petBreed,petDescription,requestReason,requestDate)VALUES(:MasterID,:UserID,:Name,:Email,:Address,:ContactNo,:PetID,:Type,:PetName,:Breed,:Description,:Reason,'$date')";
  $query=$dbh->prepare($sql);
  $query->bindParam(':MasterID',$MasterID,PDO::PARAM_STR);
  $query->bindParam(':UserID',$UserID,PDO::PARAM_STR);
  $query->bindParam(':Name',$Name,PDO::PARAM_STR);
  $query->bindParam(':Email',$Email,PDO::PARAM_STR);
  $query->bindParam(':Address',$Address,PDO::PARAM_STR);
  $query->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
  $query->bindParam(':PetID',$PetID,PDO::PARAM_STR);
  $query->bindParam(':Type',$Type,PDO::PARAM_STR);
  $query->bindParam(':PetName',$PetName,PDO::PARAM_STR);
  $query->bindParam(':Breed',$Breed,PDO::PARAM_STR);
  $query->bindParam(':Description',$Description,PDO::PARAM_STR);
  $query->bindParam(':Reason',$Reason,PDO::PARAM_STR);
  $query->execute();

  $sql1="update postpet set
  petStatus='Not available'
  where petID=:PetID";
  $query1=$dbh->prepare($sql1); 
  $query1->bindParam(':PetID',$PetID,PDO::PARAM_STR); 
  $query1->execute();

  $sql2="SELECT requestID FROM request ORDER BY requestID DESC";
  $query2=$dbh->prepare($sql2);
  $query2->execute();

  $ID=$query2->fetchColumn();

  $sql3="INSERT INTO notification(activityID,notificationTitle,masterID,UserID,notificationDescription,notificationDate,notificationStatus)VALUES('$ID','Adoption Request',:MasterID,:UserID,:Reason,'$date','Unread')";
  $query3=$dbh->prepare($sql3);
  $query3->bindParam(':MasterID',$MasterID,PDO::PARAM_STR);
  $query3->bindParam(':UserID',$UserID,PDO::PARAM_STR);
  $query3->bindParam(':Reason',$Reason,PDO::PARAM_STR);
  $query3->execute();

  echo '<script>alert("Just Wait for the Owner Accept Your Adoption Request!")</script>';
  echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.A-Request.php'</script>";

  }

}
?>
  <!-- //Adoption Request Code -->

  <!-- Modal Pet Information -->
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
					    <input hidden type="text" id="pet_id" name="PetID" required = "required" class="form-control">
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_name" name="PetName" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Type<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_type" name="Type" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Breed<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_breed" name="Breed" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Gender<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_sex" name="Gender" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Age<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_age" name="Age" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Color<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_color" name="Color" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Weight<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_weight" name="Weight" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Vaccination Status<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="vaccination_status" name="Vaccination" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Deworming Status<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="deworming_status" name="Deworming" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Description<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
        <textarea disabled="yes" id="pet_description" style="width:400px;height:100px;padding-top:-5px;background-color: #fff;resize: none;font-size:16px;"></textarea>
        </div>
        </div>

        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" id="des" name="Description"  required = "required" class="form-control">
				</div>

        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" id="pet_picture" name="Picture"  required = "required" class="form-control">
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Status<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_status" name="Availability" style="background-color:#fff;width:400px;" required="required"/>
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

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Reason<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
        <textarea name="Reason" id="Reason" style="width:400px;height:100px;padding-top:-5px;background-color: #fff;resize: none;font-size:16px;" required = "required" placeholder="Write your reason to adopt..." onkeyup="request()"></textarea>
        </div>
        </div>
        <script>
          function request() {
          if(document.getElementById("Reason").value==="") { 
                    document.getElementById('adopt').disabled = true; 
                } else { 
                    document.getElementById('adopt').disabled = false;
                }
            }
        </script>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" name="UserID" value="<?php echo ($result->adopterID);?>"  required = "required" class="form-control">

              <input hidden readonly type="text" class="form-control" name="Name" value="<?php echo ($result->adopterFirstname);?> <?php echo ($result->adopterLastname);?>" style="background-color:#fff;width:400px;" required="required"/>

              <input hidden readonly type="text" class="form-control" name="Email" value="<?php echo ($result->adopterEmail);?>" style="background-color:#fff;width:400px;" required="required"/>

              <input hidden readonly type="text" class="form-control" name="Address" value="<?php echo ($result->adopterAddress);?>" style="background-color:#fff;width:400px;" required="required"/>

              <input hidden readonly type="text" class="form-control" name="ContactNo" value="<?php echo ($result->adopterContactNo);?>" style="background-color:#fff;width:400px;" required="required"/>

        </div>

        <div class="ln_solid">
        <br>
        <div class="form-group" style="text-align: center">
        <div class="col-md-6 offset-md-3">
               <button id="adopt" name ="Adopt" type="submit" class="btn btn-success" style="background-color:#00cdc1;border:#00cdc1;width:130px;height:50px;font-size:18px;" disabled>Adopt Now!</button>
        </div>
        </div>
        </div>

        </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Pet Information -->

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
     $( "#content" ).keyup(function() {
  $("#btnEditPost").prop("disabled", !this.value);
});
    </script>

    <script>
     $( "#comment" ).keyup(function() {
  $("#btnComment").prop("disabled", !this.value);
});
    </script>

    <script>
     $( "#edit_comment" ).keyup(function() {
  $("#btnEditComment").prop("disabled", !this.value);
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
      PostPicture.onchange = evt => {
  const [file] = PostPicture.files
  if (file) {
    post_picture.src = URL.createObjectURL(file)
  }
  document.getElementById("btnChangePostPicture").disabled = false;
}
    </script>
    
    <script>
   $(window).on("load", function () {
    console.log("load");
    $("div#view_more_comment_Div").hide();
    });
    </script>

    <script>
     $(function () {
    $("textarea.txtgrow").each(function () {
      this.style.height = 'auto';
      this.style.height = (this.scrollHeight+10)+'px';
    });
    });
    </script>

<script type="text/javascript">
  $(".commentbtn").click(function () {
    var post_id = $(this).attr('data-post-id');
    var master_id = $(this).attr('data-master-id');
    var post_status = $(this).attr('data-post-status');
    $('#Comment').modal('show');
    $("#post_id").val( post_id );
    $("#master_id").val( master_id );
    $("#post_status").val( post_status );
  });
  </script>

<script type="text/javascript">
  $(".Ppost").click(function () {
    var post_id3 = $(this).attr('data-post-id');
    $('#ChangePostPicture').modal('show');
    $("#post_id3").val( post_id3 );
    var picture_file = $(this).attr('data-post-picture');
    $('#picture_file').val( picture_file );
    document.getElementById('post_picture').src="/developgetpet/web/images/"+""+picture_file;
  });
  </script>

<script type="text/javascript">
  $(".Epost").click(function () {
    var post_id2 = $(this).attr('data-post-id');
    var title = $(this).attr('data-post-title');
    var content = $(this).attr('data-post-content');
    var location = $(this).attr('data-post-location');
    var time = $(this).attr('data-post-time');
    var date = $(this).attr('data-post-date');
    $('#EditPost').modal('show');
    $("#post_id2").val( post_id2 );
    $("#title").val( title );
    $("#content").val( content );
    $("#location").val( location );
    $("#time").val( time );
    $("#date").val( date );
  });
  </script>

<script type="text/javascript">
  $(".Dpost").click(function () {
    var post_id1 = $(this).attr('data-post-id');
    $('#DeletePost').modal('show');
    $("#post_id1").val( post_id1 );
  });
  </script>

<script type="text/javascript">
  $(".Ecomment").click(function () {
    var commentid = $(this).attr('data-comment-id');
    var edit_comment = $(this).attr('data-comment-content');
    $("#edit_comment").val( edit_comment );
    $("#commentid").val( commentid );
    $('#EditComment').modal('show');
  });
  </script>

 <script type="text/javascript">
  $(".Dcomment").click(function () {
    var comment_id = $(this).attr('data-comment-id');
    $("#comment_id").val( comment_id );
    $('#DeleteComment').modal('show');
  });
  </script>

  <script type="text/javascript">
  $(".menu").filter(function(){
  return $(this).text().trim() != "<?php echo $ID?>";
  }).hide();
  </script>

  <script type="text/javascript">
  $(".adoptbtn").filter(function(){
  return $(this).text().trim() == "<?php echo $ID?> Adopt Me";
  }).css('visibility', 'hidden');
  </script>

  <script type="text/javascript">
  $(".option").filter(function(){
  return $(this).text().trim() != "<?php echo $ID?>";
  }).css('visibility', 'hidden');
  </script>

  <script type="text/javascript">
  $(".Epost").filter(function(){
  return $(this).text().trim() != "<?php echo $ID?> Edit";
  }).hide();
  </script>

  <script type="text/javascript">
  $(".Dpost").filter(function(){
  return $(this).text().trim() != "<?php echo $ID?> Delete";
  }).hide();
  </script>

  <script type="text/javascript">
  $(".comment-count").filter(function(){
  return $(this).text().trim() === "0";
  }).hide();
  </script>

  <script type="text/javascript">
  $(".count-more-comment").filter(function(){
  return $(this).text().trim() === "View 0 more comment";
  }).hide();
  </script>

  <script type="text/javascript">
  $('p.view-more-comment').click(function() {
      $('.view-more-comment-Div').show(); // To hide all other contents
      $('.comment-Div').hide();
  });
  </script>

  <script type="text/javascript">
  $("p.hide-more-comment").filter(function(){
  return $(this).text().trim() === "Hide -1 comment";
  }).hide();
  $("p.hide-more-comment").filter(function(){
  return $(this).text().trim() === "Hide 0 comment";
  }).hide();
  </script>

  <script type="text/javascript">
  $('p.hide-more-comment').click(function() {
      $('.view-more-comment-Div').hide(); // To hide all other contents
      $('.comment-Div').show();
  });
  </script>

  <script type="text/javascript">
  $(".unread").filter(function(){
  return $(this).text().trim() === "Read";
  }).hide();
  </script>

    <script>
     $( "#tips_content" ).keyup(function() {
  $("#Posttips").prop("disabled", !this.value);
});
    </script>

<script>
     $( "#advice_content" ).keyup(function() {
  $("#Postadvice").prop("disabled", !this.value);
});
    </script>

<script>
     $( "#article_content" ).keyup(function() {
  $("#Postarticle").prop("disabled", !this.value);
});
    </script>

    <script>
     let previousLength = 0;

      const handleInput = (event) => {
        const bullet = "\u2022";
        const newLength = event.target.value.length;
        const characterCode = event.target.value.substr(-1).charCodeAt(0);

        if (newLength > previousLength) {
          if (characterCode === 10) {
            event.target.value = `${event.target.value}${bullet} `;
          } else if (newLength === 1) {
            event.target.value = `${bullet} ${event.target.value}`;
          }
        }
        
        previousLength = newLength;
      }
    </script>

	<!-- Javascript functions	-->
	<script>
		function hideshow(){
			var password = document.getElementById("password1");
			var slash = document.getElementById("slash");
			var eye = document.getElementById("eye");
			
			if(password.type === 'password'){
				password.type = "text";
				slash.style.display = "block";
				eye.style.display = "none";
			}
			else{
				password.type = "password";
				slash.style.display = "none";
				eye.style.display = "block";
			}

		}
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
     
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
