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
           <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.O-Dashboard.php"><i></i> Dashboard </a>
                    </li>

                    <li><a >Pet For Adoption</a>
                      <ul class="nav child_menu">
                        <li><a href="http://localhost/developgetpet/dashboard/P.O-DogsForAdoption.php">Dog's</a></li>
                        <li><a href="http://localhost/developgetpet/dashboard/P.O-CatsForAdoption.php">Cat's</a></li>
                      </ul>
                    </li>

                    <li><a >Pet For Short-Term Care</a>
                      <ul class="nav child_menu">
                        <li><a href="http://localhost/developgetpet/dashboard/P.O-DogsForShorttermcare.php">Dog's</a></li>
                        <li><a href="http://localhost/developgetpet/dashboard/P.O-CatsForShorttermcare.php">Cat's</a></li>
                      </ul>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.O-Fundraisingactivities.php">Fundraising Activities</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.O-Events.php">Events</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.O-Tips.php">Pet Care Tips</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/P.O-Adopted.php">Pet Adopted</a>
                    </li>

                  
              </div>

            </div>
            <!-- /sidebar menu -->

						<!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings" href="http://localhost/developgetpet/dashboard/P.O-AccountSettings.php">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="http://localhost/developgetpet/login-page/login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Home" href="http://localhost/developgetpet/dashboard/P.O-Dashboard.php">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Inbox" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style="cursor:pointer;">
              <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
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
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.O-AccountSettings.php">Account Settings</a>
                      <?php
                      
                      $query=$dbh->prepare("SELECT COUNT(userID) FROM request WHERE userID='$ID' AND requestStatus != 'Disapproved' AND requestStatus != 'Cancelled' AND requestStatus != 'Approved'");
                      $query->execute();

                      $myrequest=$query->fetchColumn();

                      ?>
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.O-MyRequest.php">My Request <span class="badge bg-red" id="myrequest" value=""><?php echo ($myrequest);?></span></a>
                      <script type="text/javascript">
                        var myrequest = <?php echo ($myrequest);?>;
                        if (myrequest === 0){
                          document.getElementById("myrequest").style.display = "none";
                        }
                        </script>

                      <?php
                      $query1=$dbh->prepare("SELECT COUNT(masterID) FROM request WHERE masterID='$ID' AND requestStatus != 'Cancelled' AND requestStatus != 'Disapproved' AND requestStatus != 'Approved'");
                      $query1->execute();

                      $user_request=$query1->fetchColumn();

                      ?>
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.O-UserRequest.php">User Request <span class="badge bg-red" id="user_request" value=""> <?php echo ($user_request);?></span></a>
                      <script type="text/javascript">
                        var user_request = <?php echo ($user_request);?>;
                        if (user_request === 0){
                          document.getElementById("user_request").style.display = "none";
                        }
                        </script>

                      <?php
                      $query2=$dbh->prepare("SELECT COUNT(userID) FROM history WHERE userID='$ID' AND Title ='Adoption' AND Status = 'Approved'");
                      $query2->execute();

                      $my_adopted=$query2->fetchColumn();

                      ?>
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.O-MyAdoptedPet.php">My Adopted Pet <span class="badge bg-red" id="my_adopted" value=""> <?php echo ($my_adopted);?></a>
                      <script type="text/javascript">
                        var my_adopted = <?php echo ($my_adopted);?>;
                        if (my_adopted === 0){
                          document.getElementById("my_adopted").style.display = "none";
                        }
                        </script>
                      <?php
                      $query3=$dbh->prepare("SELECT COUNT(masterID) FROM history WHERE masterID='$ID' AND Title ='Adoption' AND Status = 'Approved'");
                      $query3->execute();

                      $user_adopted=$query3->fetchColumn();

                      ?>
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.O-MyPetAdoptedByUser.php">My Pet Adopted By User <span class="badge bg-red" id="user_adopted" value=""> <?php echo ($user_adopted);?></a>
                      <script type="text/javascript">
                        var user_adopted = <?php echo ($user_adopted);?>;
                        if (user_adopted === 0){
                          document.getElementById("user_adopted").style.display = "none";
                        }
                        </script>

                      <?php
                      $query4=$dbh->prepare("SELECT COUNT(userID) FROM history WHERE userID='$ID' AND Title ='Short-Term Care' AND Status = 'Approved'");
                      $query4->execute();

                      $my_shorttermcare=$query4->fetchColumn();

                      ?>
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.O-MyShorttermcare.php">My Short-Term Care <span class="badge bg-red" id="my_shorttermcare" value=""> <?php echo ($my_shorttermcare);?></a>
                      <script type="text/javascript">
                        var my_shorttermcare = <?php echo ($my_shorttermcare);?>;
                        if (my_shorttermcare === 0){
                          document.getElementById("my_shorttermcare").style.display = "none";
                        }
                        </script>
                      
                      <?php
                      $query5=$dbh->prepare("SELECT COUNT(masterID) FROM history WHERE masterID='$ID' AND Title ='Short-Term Care' AND Status = 'Approved'");
                      $query5->execute();

                      $user_shorttermcare=$query5->fetchColumn();

                      ?>
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.O-MyPetShorttermcare.php">My Pet In Short-Term Care <span class="badge bg-red" id="user_shorttermcare" value=""> <?php echo ($user_shorttermcare);?></a>
                      <script type="text/javascript">
                        var user_shorttermcare = <?php echo ($user_shorttermcare);?>;
                        if (user_shorttermcare === 0){
                          document.getElementById("user_shorttermcare").style.display = "none";
                        }
                        </script>

                      <?php
                      $query=$dbh->prepare("SELECT COUNT(userID) FROM request WHERE userID='$ID' AND requestStatus = 'Cancelled'");
                      $query->execute();

                      $cancelled=$query->fetchColumn();

                      ?>
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.O-CancelledRequest.php">Cancelled Request <span class="badge bg-red" id="cancelled" value=""><?php echo ($cancelled);?></span></a>
                      <script type="text/javascript">
                        var cancelled = <?php echo ($cancelled);?>;
                        if (cancelled === 0){
                          document.getElementById("cancelled").style.display = "none";
                        }
                        </script>
                      
                      <?php
                      $query=$dbh->prepare("SELECT COUNT(userID) FROM history WHERE userID='$ID'");
                      $query->execute();

                      $history=$query->fetchColumn();

                      ?>
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.O-History.php">My History <span class="badge bg-red" id="adoption" value=""><?php echo ($history);?></span></a>
                      <script type="text/javascript">
                        var adoption = <?php echo ($history);?>;
                        if (adoption === 0){
                          document.getElementById("adoption").style.display = "none";
                        }
                        </script>
                        
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
                            <?php if ($result->notificationTitle == 'Post Deleted') { ?>


                            <a class ="dropdown-item">
                            <span><b><?php echo ($result->notificationTitle);?></b></span>&ensp;<span id="unread" class="rounded-circle badge unread" style="height:10px;width:10px;background-color:#1877F2;color: transparent;"><?php echo ($result->notificationStatus);?></span><br>
                            <span class="image"><img src="/developgetpet/web/images/logo.png" style=" border:1px solid #ced4da;" class="rounded-circle img-responsive" alt="Profile Image" ></span>
                            <span>
                            <span>Admin</span>
                            <span class="time"><?php echo ($result->notificationDate);?></span>
                            </span>
                            <span class="message">
                            <?php echo ($result->notificationDescription);?>
                            </span>
                            </a>

                            <?php } ?>

                            <?php if ($result->notificationTitle != 'Post Deleted') { ?>
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
                         <?php } ?>
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

            <!-- 
            <a href="http://localhost/developgetpet/dashboard/A.W.O-PostAdoption.php"><button type="button" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width:150px;">Post Pet</button></a>
             Post Button -->

            <!-- /page content -->
            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel" style="border-radius:50px;">
                  
                <img <?php echo"<img src = '/developgetpet/web/images/$result->ownerPicture'";?> onclick="window.location.href='http://localhost/developgetpet/dashboard/P.O-Profile.php';" alt="avatar" style="width:40px;height:40px;" class="rounded-circle img-responsive">&nbsp&nbsp<a data-toggle="modal" data-target="#create" data-placement="top" title="create"><input Cursor="Arrow" data-toggle="modal" data-target="#create" type="text" id="textarea" name="textarea" placeholder="Wanna create or post something?" required="required" style="border-radius:50px;cursor:pointer;height:40px;width:900px;background-color:#e9ecef;font-size:16px;height: calc(1.5em + 0.75rem + 2px);padding: 0.375rem 0.75rem;font-size: 1remfont-weight: 400;line-height: 1.5;color: #495057;" onkeypress="return /[a-z]/i.test(event.key)" disabled/></a>
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
                        <a href="http://localhost/developgetpet/dashboard/P.O-Tips.php" role="tab" aria-controls="tips-tab" aria-selected="true">Tips</a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/P.O-Advice.php" role="tab" aria-controls="advice-tab" aria-selected="false">Advice</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/developgetpet/dashboard/P.O-Articles.php" role="tab" aria-controls="articles-tab" aria-selected="false">Articles</a>
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
                                           <!--<textarea id="description" required="required" class="form-control" id="Title" name="Title"  style="height:40px;resize: none;overflow:hidden;width:880px;border-radius:10px;" readonly><?php echo ($result->postTitle);?></textarea>-->
                                           <h5 class="card-title" id="description" id="Title" name="Title" style="text-align:left;resize:none;">Title: <?php echo ($result->postTitle);?></h5>
                                            </div>
                                            </div>                                
                                            <div class="field item form-group">                                        
                                             <div class="col-md-6 col-sm-6">
                                                 <h5><label for="exampleFormControlTextarea1" class="form-label" style="float:left;">Content:</label></h5>
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
                          echo "There's no information to display.";
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

  <!-- Modal Create Post -->
 <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Create Post</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      
                      <li class="nav-item">
                        <a class="nav-link" id="post-tips-tab" data-toggle="tab" href="#post_tips" role="tab" aria-controls="post-tips-tab" aria-selected="true">Post Tips</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" id="post-advice-tab" data-toggle="tab" href="#post_advice" role="tab" aria-controls="post-advice-tab" aria-selected="false">Post Advice</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link active" id="post-articles-tab" data-toggle="tab" href="#post_articles" role="tab" aria-controls="post-articles-tab" aria-selected="false">Post Articles</a>
                      </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade" id="post_tips" role="tabpanel" aria-labelledby="post-tips-tab">
                      <label>Create Tips</label>

<!-- Post Tips Code -->
<?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>

<?php
if(isset($_POST['Posttips']))
{

$ID=($_POST['ID']);
$Name=($_POST['Name']);
$Email=($_POST['Email']);
$ContactNo=($_POST['ContactNo']);
$Title=($_POST['Title']);
$Content=($_POST['Content']);

$sql="INSERT INTO post(userID,userName,userEmail,userContactNo,postTitle,postContent,postStatus,postDate)VALUES(:ID,:Name,:Email,:ContactNo,:Title,:Content,'Tips','$date')";
$query=$dbh->prepare($sql); 
$query->bindParam(':ID',$ID,PDO::PARAM_STR);
$query->bindParam(':Name',$Name,PDO::PARAM_STR);
$query->bindParam(':Email',$Email,PDO::PARAM_STR);
$query->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query->bindParam(':Title',$Title,PDO::PARAM_STR);
$query->bindParam(':Content',$Content,PDO::PARAM_STR);
$query->execute();

echo '<script>alert("Posted Successfully!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Tips.php'</script>";

}
?>
<!-- //Post Tips Code -->

                      <form class="" action="" method="post" novalidate enctype="multipart/form-data">

                      <div class="field item form-group">
                                             
                                             <div class="col-md-6 col-sm-6">
                                                 <textarea required="required" class="form-control" id="Title" name="Title" placeholder="Tips Title..." data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height:40px;width:715px;border-radius:10px;"></textarea>
                    </div>
                    </div>
                      <div class="field item form-group">
                                             
                                             <div class="col-md-6 col-sm-6">
                                                 <textarea required="required" class="form-control" id="tips_content" name="Content" placeholder="Write a Tips..." data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height:200px;width:715px;border-radius:10px;" onInput="handleInput(event)"></textarea>
                    </div>
                    </div>
                                         
                                         <span class="section"></span>
                                         <div hidden class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ID" value="<?php echo ($result->ownerID);?>"/>
                                             </div>
 
                                         </div>
                                         <div hidden class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="Name" value="<?php echo ($result->ownerFirstname);?> <?php echo ($result->ownerLastname);?>"/>
                                             </div>
 
                                         </div>
                                         <div hidden class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" name="Email" class='email' value="<?php echo ($result->ownerEmail);?>"/></div>
                                         </div>
                                         <div hidden class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" name="ContactNo" class='ContactNo' value="<?php echo ($result->ownerContactNo);?>"/></div>
                                         </div>
                                                 <div style="text-align: center" class="form-group">
                                                 <div class="col-md-6 offset-md-3">
                                                     <button disabled name ="Posttips" type='submit' id="Posttips" class="btn btn-success" style="background-color:#00cdc1;border:#00cdc1;width:130px;height:40px;">Post</button>
                                                     <button type='reset' class="btn btn-danger" name="Reset" style="width:120px;height:40px;">Reset</button>
                                                 </div>
                                                 </div>                                                   
                                     </form>
                      </div>
                      <div class="tab-pane fade" id="post_advice" role="tabpanel" aria-labelledby="post-advice-tab">
                      <label>Create an Advice</label>

<!-- Post Advice Code -->
<?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>

<?php
if(isset($_POST['Postadvice']))
{

$ID=($_POST['ID']);
$Name=($_POST['Name']);
$Email=($_POST['Email']);
$ContactNo=($_POST['ContactNo']);
$Title=($_POST['Title']);
$Content=($_POST['Content']);

$sql="INSERT INTO post(userID,userName,userEmail,userContactNo,postTitle,postContent,postStatus,postDate)VALUES(:ID,:Name,:Email,:ContactNo,:Title,:Content,'Advice','$date')";
$query=$dbh->prepare($sql); 
$query->bindParam(':ID',$ID,PDO::PARAM_STR);
$query->bindParam(':Name',$Name,PDO::PARAM_STR);
$query->bindParam(':Email',$Email,PDO::PARAM_STR);
$query->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query->bindParam(':Title',$Title,PDO::PARAM_STR);
$query->bindParam(':Content',$Content,PDO::PARAM_STR);
$query->execute();

echo '<script>alert("Posted Successfully!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Advice.php'</script>";

}
?>
<!-- //Post Advice Code -->

                      <form class="" action="" method="post" novalidate enctype="multipart/form-data">

                      <div class="field item form-group">
                                             
                                             <div class="col-md-6 col-sm-6">
                                                 <textarea id="description" required="required" class="form-control" id="Title" name="Title" placeholder="Advice Title..." data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height:40px;width:715px;border-radius:10px;"></textarea>
                    </div>
                    </div>
                      <div class="field item form-group">
                                             
                                             <div class="col-md-6 col-sm-6">
                                                 <textarea required="required" class="form-control" id="advice_content" name="Content" placeholder="Write an Advice..." data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height:200px;width:715px;border-radius:10px;"></textarea>
                    </div>
                    </div>
                                         
                                        <span class="section"></span>
                                        <div hidden class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ID" value="<?php echo ($result->owenrID);?>"/>
                                             </div>
 
                                         </div>
                                         <div hidden class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="Name" value="<?php echo ($result->ownerFirstname);?> <?php echo ($result->ownerLastname);?>"/>
                                             </div>
 
                                         </div>
                                         <div hidden class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" name="Email" class='email' value="<?php echo ($result->ownerEmail);?>"/></div>
                                         </div>
                                         <div hidden class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" name="ContactNo" class='ContactNo' value="<?php echo ($result->ownerContactNo);?>"/></div>
                                         </div>                 
                                         
                                         <div style="text-align: center" class="form-group">
                                         <div class="col-md-6 offset-md-3">
                                                     <button disabled name ="Postadvice" type='submit' id="Postadvice" class="btn btn-success" style="background-color:#00cdc1;border:#00cdc1;width:130px;height:40px;">Post</button>
                                                     <button type='reset' class="btn btn-danger" name="Reset" style="width:120px;height:40px;">Reset</button>
                                         </div>
                                         </div>   
                                     </form>
                      </div>
                      <div class="tab-pane fade show active" id="post_articles" role="tabpanel" aria-labelledby="post-articles-tab">
                      <label>Create an Articles</label>
<!-- Post Articles Code -->
<?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>

<?php
if(isset($_POST['Postarticle']))
{

$ID=($_POST['ID']);
$Name=($_POST['Name']);
$Email=($_POST['Email']);
$ContactNo=($_POST['ContactNo']);
$postPicture = $_FILES["postPicture"]["name"];
$tmp_dir = $_FILES["postPicture"]["tmp_name"];
move_uploaded_file($tmp_dir, "C:/xampp/htdocs/developgetpet/web/images/$postPicture");
$Title=($_POST['Title']);
$Content=($_POST['Content']);

$sql="INSERT INTO post(userID,userName,userEmail,userContactNo,postPicture,postTitle,postContent,postStatus,postDate)VALUES(:ID,:Name,:Email,:ContactNo,:postPicture,:Title,:Content,'Articles','$date')";
$query=$dbh->prepare($sql); 
$query->bindParam(':ID',$ID,PDO::PARAM_STR);
$query->bindParam(':Name',$Name,PDO::PARAM_STR);
$query->bindParam(':Email',$Email,PDO::PARAM_STR);
$query->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query->bindParam(':postPicture',$postPicture,PDO::PARAM_STR);
$query->bindParam(':Title',$Title,PDO::PARAM_STR);
$query->bindParam(':Content',$Content,PDO::PARAM_STR);
$query->execute();

echo '<script>alert("Posted Successfully!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Articles.php'</script>";

}
?>
<!-- //Post Articles Code -->

                      <form class="" action="" method="post" novalidate enctype="multipart/form-data">
                        
                      
                      <label class="col-form-label col-md-3 col-sm-3  label-align" style="text-align:left;">Upload Photo</label>
                                        
                                                <div style="text-align: center" class="wrap-input100 validate-input">
                                                <input type="file" name="postPicture" id="postPicture" style="width:250px;height:40px;border:none;margin-right:460px" placeholder="Upload Picture">
                                                </div>

                      <div class="field item form-group">
                                             
                                             <div class="col-md-6 col-sm-6">
                                                 <textarea id="description" required="required" class="form-control" id="Title" name="Title" placeholder="Article Title..." data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height:40px;width:715px;border-radius:10px;"></textarea>
                    </div>
                    </div>
                      <div class="field item form-group">
                                             
                                             <div class="col-md-6 col-sm-6">
                                                 <textarea required="required" class="form-control" id="article_content" name="Content" placeholder="Write an Article..." data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height:200px;width:715px;border-radius:10px;"></textarea>
                    </div>
                    </div>
                                         
                                        <span class="section"></span>
                                        <div hidden class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ID" value="<?php echo ($result->ownerID);?>"/>
                                             </div>
 
                                         </div>
                                         <div hidden class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="Name" value="<?php echo ($result->ownerFirstname);?> <?php echo ($result->ownerLastname);?>"/>
                                             </div>
 
                                         </div>
                                         <div hidden class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" name="Email" class='email' value="<?php echo ($result->ownerEmail);?>"/></div>
                                         </div>
                                         <div hidden class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" name="ContactNo" class='ContactNo' value="<?php echo ($result->ownerContactNo);?>"/></div>
                                         </div>                 
                                         
                                         <div style="text-align: center" class="form-group">
                                         <div class="col-md-6 offset-md-3">
                                                     <button disabled name ="Postarticle" type='submit' id="Postarticle" class="btn btn-success" style="background-color:#00cdc1;border:#00cdc1;width:130px;height:40px;">Post</button>
                                                     <button type='reset' class="btn btn-danger" name="Reset" style="width:120px;height:40px;">Reset</button>
                                         </div>
                                         </div>     
                                     </form>
                      
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
  <!-- //Modal Create Post -->

  <!-- Comment Code -->
<?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>  
<?php
if(isset($_POST['btnComment']))
{
  $masterID=($_POST['masterID']);

  if($masterID == $ID)
  {
    $postID=($_POST['postID']);
    $masterID=($_POST['masterID']);
    $Comment=($_POST['Comment']);
    $postStatus=($_POST['postStatus']);
    
    $sql="INSERT INTO comment(postID,masterID,userID,commentContent,commentDate,commentStatus)VALUES(:postID,:masterID,'$ID',:Comment,'$date',:postStatus)";
    $query=$dbh->prepare($sql);
    $query->bindParam(':postID',$postID,PDO::PARAM_STR);
    $query->bindParam(':masterID',$masterID,PDO::PARAM_STR);
    $query->bindParam(':Comment',$Comment,PDO::PARAM_STR);
    $query->bindParam(':postStatus',$postStatus,PDO::PARAM_STR);
    $query->execute();

    echo '<script>alert("Your Comment Posted Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Articles.php'</script>";
  
  }

  else
  {
    $postID=($_POST['postID']);
    $masterID=($_POST['masterID']);
    $Comment=($_POST['Comment']);
    $postStatus=($_POST['postStatus']);
    
    $sql="INSERT INTO comment(postID,masterID,userID,commentContent,commentDate,commentStatus)VALUES(:postID,:masterID,'$ID',:Comment,'$date',:postStatus)";
    $query=$dbh->prepare($sql);
    $query->bindParam(':postID',$postID,PDO::PARAM_STR);
    $query->bindParam(':masterID',$masterID,PDO::PARAM_STR);
    $query->bindParam(':Comment',$Comment,PDO::PARAM_STR);
    $query->bindParam(':postStatus',$postStatus,PDO::PARAM_STR);
    $query->execute();

    $sql2="SELECT commentID FROM comment ORDER BY commentID DESC";
    $query2=$dbh->prepare($sql2);
    $query2->execute();

    $commentID=$query2->fetchColumn();

    $sql3="INSERT INTO notification(activityID,postID,notificationTitle,userID,masterID,notificationDescription,notificationDate,notificationStatus)VALUES('$commentID',:postID,'Comment on Your Post','$ID',:masterID,:Comment,'$date','Unread')";
    $query3=$dbh->prepare($sql3);
    $query3->bindParam(':postID',$postID,PDO::PARAM_STR);
    $query3->bindParam(':masterID',$masterID,PDO::PARAM_STR);
    $query3->bindParam(':Comment',$Comment,PDO::PARAM_STR);
    $query3->execute();

    echo '<script>alert("Your Comment Posted Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Articles.php'</script>";
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
          document.getElementById("btnComment").disabled = true;
            }
        </script>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div style="text-align: center" class="wrap-input100 validate-input">
			  <input hidden id="post_id" name="postID" required = "required" class="form-control" id="success">
		</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
			  <input hidden id="master_id" name="masterID" required = "required" class="form-control" id="success">
		</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
			  <input hidden id="user_id" name="userID" value="<?php echo ($result->ownerID);?>" required = "required" class="form-control" id="success">
		</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
			  <input hidden id="post_status" name="postStatus" required = "required" class="form-control" id="success">
		</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
              <textarea id="comment" name="Comment" required = "required" class="form-control" id="success" placeholder="Write a comment..." style="height:100px;resize: none;font-size:16px;"></textarea>
		</div><input type="text" id="comment_emoji" aria-hidden="true"><input type="button" value="Copy emoji" onclick="commentEmoji()" style="float:right;margin-right:-1px"><br>

        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button disabled name="btnComment" id="btnComment" type="submit" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Post</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Comment -->

  <!-- Edit Comment Code -->
  <?php
    if(isset($_POST['btnEditComment']))
    {
      $commentContent=($_POST['commentContent']);
      $commentID=($_POST['commentID']);

      $query="update comment set commentContent=:commentContent where commentID=:commentID";
      $query= $dbh->prepare($query);
      $query->bindParam(':commentContent',$commentContent,PDO::PARAM_STR);
      $query->bindParam(':commentID',$commentID,PDO::PARAM_STR);
      $query->execute();

      $query1="update notification set notificationDescription=:commentContent where activityID=:commentID";
      $query1= $dbh->prepare($query1);
      $query1->bindParam(':commentContent',$commentContent,PDO::PARAM_STR);
      $query1->bindParam(':commentID',$commentID,PDO::PARAM_STR);
      $query1->execute();

      echo '<script>alert("Your Comment Updated Successfully!")</script>';
      echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Articles.php'</script>";
    }
  ?>
  <!-- //Edit Comment Code -->

  <!-- Modal Edit Comment -->
<div class="modal fade" id="EditComment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Edit Comment</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="editcomment()">
          <span aria-hidden="true">&times;</span>
        </button>
        <script>
          function editcomment() {
          document.getElementById("edit_comment").value="";
          document.getElementById("btnEditComment").disabled = false;
            }
        </script>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="commentid" name="commentID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
              <textarea id="edit_comment" name="commentContent" required = "required" class="form-control" id="success" placeholder="Write a comment..." style="height:100px;resize: none;font-size:16px;"></textarea>
				</div><input type="text" id="edit_comment_emoji" aria-hidden="true"><input type="button" value="Copy emoji" onclick="editcommentEmoji()" style="float:right;margin-right:-1px"><br>

        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button id="btnEditComment" name="btnEditComment" type="submit" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Save</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Edit Comment -->

  <!-- Delete Comment Code -->
  <?php
  if(isset($_POST['btnDeleteComment']))
  {
    $commentID=($_POST['commentID']);
    
    $query="Delete from comment where commentID=:commentID";
    $query = $dbh->prepare($query);
    $query->bindValue('commentID',$commentID);
    $query->execute();

    $query1="Delete from notification where activityID=:commentID";
    $query1 = $dbh->prepare($query1);
    $query1->bindValue('commentID',$commentID);
    $query1->execute();
    
    echo '<script>alert("Comment Deleted Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Articles.php'</script>";
  }
  ?>
	<!-- //Delete Comment Code -->

  <!-- Modal Delete Comment -->
  <div class="modal fade" id="DeleteComment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Delete Comment</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <p>Are you sure, you want to delete this comment?</p>
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="comment_id" name="commentID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="btnDeleteComment" type="submit" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Yes</button>
              <button type='reset' class="btn btn-round btn-danger" name="btnCancel" class="close" data-dismiss="modal" style="width:90px;height:37px;">No</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Delete Comment -->

  <!-- Delete Post Code -->
<?php
   if(isset($_POST['Delete']))
   {
    $postID=($_POST['postID']);

    $query="update post set postStatus ='Deleted' where postID=:postID";
    $query= $dbh->prepare($query);
    $query->bindValue('postID',$postID);
    $query->execute();

    $query1="Delete from comment where postID=:postID";
    $query1 = $dbh->prepare($query1);
    $query1->bindValue('postID',$postID);
    $query1->execute();

    $query2="Delete from notification where postID=:postID";
    $query2 = $dbh->prepare($query2);
    $query2->bindValue('postID',$postID);
    $query2->execute();

    echo '<script>alert("Post Deleted Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Articles.php'</script>";
   }
?>
<!-- //Delete Post Code -->

  <!-- Modal Delete Post -->
<div class="modal fade" id="DeletePost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Delete Post</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <p>Are you sure, you want to delete your post?</p>
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="post_id1" name="postID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="Delete" type="submit" type='submit' class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Yes</button>
              <button type='reset' class="btn btn-round btn-danger" name="CancelRequest" class="close" data-dismiss="modal" style="width:90px;height:37px;">No</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Delete Post -->

  <!-- Edit Post Code -->
<?php
   if(isset($_POST['btnEditPost']))
   {
    $postID=($_POST['postID']);
    $Title=($_POST['Title']);
    $Content=($_POST['Content']);

    $sql="update post set
    postTitle=:Title,
    postContent=:Content
    where postID=:postID";
    $query=$dbh->prepare($sql); 
    $query->bindParam(':postID',$postID,PDO::PARAM_STR);
    $query->bindParam(':Title',$Title,PDO::PARAM_STR);
    $query->bindParam(':Content',$Content,PDO::PARAM_STR);
    $query->execute();
  
    echo '<script>alert("Post Updated Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Articles.php'</script>";
  }
?>
<!-- //Edit Post Code -->

  <!-- Modal Edit Post -->
<div class="modal fade" id="EditPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Edit Post</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="enableButton()">
          <span aria-hidden="true">&times;</span>
        </button>
        <script>
        function enableButton() {
            document.getElementById("btnEditPost").disabled = false;
        }
      </script>
      </div>
      <div class="modal-body mx-3">
        <form method="post">
                                         
                                        <div hidden style="text-align: center" class="wrap-input100 validate-input">
                                        <input name="postID" id="post_id2" class="form-control" id="success">
                                        </div><br>
                                        
                                        <div class="field item form-group">
                                             
                                             <div class="col-md-6 col-sm-6">
                                                 <textarea required="required" class="form-control" id="title" name="Title" placeholder="Article Title..." data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height:40px;width:715px;border-radius:10px;"></textarea>
                                             </div>
                                        </div>
                                       
                                        <div class="field item form-group">
                                             
                                             <div class="col-md-6 col-sm-6">
                                                 <textarea required="required" class="form-control" id="content" name="Content" placeholder="Write an Article..." data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height:200px;width:715px;border-radius:10px;"></textarea>
                                             </div>
                                        </div>      

                                        <div class="ln_solid">
                                            <br>
                                            <div style="text-align: center" class="form-group">
                                            <div class="col-md-6 offset-md-3">
                                                <button name ="btnEditPost" type='submit' id="btnEditPost" class="btn btn-success" style="background-color:#00cdc1;border:#00cdc1;width:130px;height:40px;">Save</button>
                                            </div>
                                            </div>  
                                        </div>
                                    </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Edit Post -->

   <!-- Change Post Picture Code -->
   <?php
if(isset($_POST['btnChangePostPicture']))
{
$postID=$_POST['postID'];
$PostPicture=$_POST['PostPicture'];

$sql="update post set 
postPicture=:PostPicture
where postID=:postID";

$query=$dbh->prepare($sql);
$query->bindParam(':postID',$postID,PDO::PARAM_STR);  
$query->bindParam(':PostPicture',$PostPicture,PDO::PARAM_STR);
$query->execute();

echo '<script>alert("Your Post Picture Changed Successfully!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Articles.php'</script>";
}
?>
	<!-- //Change Post Picture Code -->

  <!-- Modal Change Post Picture -->
<div class="modal fade" id="ChangePostPicture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Change Post Picture</h4>
        <button type="button" id="selected_picture_close" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div class="modal-header">
              <img id="post_picture" src="/developgetpet/web/images/" style="width:150px;height:150px;margin-left:125px;margin-top:-20px;" >
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
              <input type="file" onchange="readURL(this);" name="PostPicture" id="PostPicture" style="width:250px;height:40px;border:none;margin-left:160px;margin-top:5px;" placeholder="Upload Photo">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden name="postID" id="post_id3" class="form-control" id="success">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="picture_file" class="form-control" id="success">
				</div><br>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="btnChangePostPicture" id="btnChangePostPicture" type="submit" type='submit' class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;" disabled>Save</button>
              <button type='reset' id="selected_picture_cancel" class="btn btn-round btn-danger" name="Cancel" class="close" data-dismiss="modal" style="width:90px;height:37px;">Cancel</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Change Post Picture -->

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js" integrity="sha512-hkvXFLlESjeYENO4CNi69z3A1puvONQV5Uh+G4TUDayZxSLyic5Kba9hhuiNLbHqdnKNMk2PxXKm0v7KDnWkYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
    $('#edit_comment_emoji').emojioneArea({
      inline: true,
      pickerPosition: "right",
   });
</script>

<script>
  function editcommentEmoji() {
  var copyText = document.getElementById("edit_comment_emoji");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
  </script>

    <script type="text/javascript">
    $('#comment_emoji').emojioneArea({
      inline: true,
      pickerPosition: "right",
   });
</script>

<script>
  function commentEmoji() {
  var copyText = document.getElementById("comment_emoji");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
  </script>

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

  

     

</body>
</html>
