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

        .view-more-comment:hover {
        text-decoration: underline;
    }
        .hide-more-comment:hover {
        text-decoration: underline;
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md" onLoad="window.scroll(0, 500)">
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
                    <li><a href="http://localhost/developgetpet/dashboard/A.W.O-Dashboard.php"><i></i> Dashboard </a>
                    </li>

                    <li><a >Pet For Adoption</a>
                      <ul class="nav child_menu">
                        <li><a href="http://localhost/developgetpet/dashboard/A.W.O-DogsForAdoption.php">Dog</a></li>
                        <li><a href="http://localhost/developgetpet/dashboard/A.W.O-CatsForAdoption.php">Cat</a></li>
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

              </ul>
                 
              </div>

            </div>
            <!-- /sidebar menu -->

				 <!-- /menu footer buttons -->
         <div class="sidebar-footer hidden-small">
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
                  <a><i class="fa fa-bars"></i></a>
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
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/A.W.O-AccountSettings.php">Account Settings</a>
                      <?php
                      
                      $query=$dbh->prepare("SELECT COUNT(userID) FROM charity WHERE userID='$ID' AND charityStatus='Unaccepted' AND charityPoststatus='Fundraising' AND charityPoststatus!='Deleted'");
                      $query->execute();

                      $myrequest=$query->fetchColumn();

                      ?>
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/A.W.O-MyRequest.php">My Request <span class="badge bg-red" id="myrequest" value=""><?php echo ($myrequest);?></span></a>
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
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/A.W.O-UserRequest.php">User Request <span class="badge bg-red" id="user_request" value=""> <?php echo ($user_request);?></span></a>
                      <script type="text/javascript">
                        var user_request = <?php echo ($user_request);?>;
                        if (user_request === 0){
                          document.getElementById("user_request").style.display = "none";
                        }
                        </script>

                      <?php
                      $query3=$dbh->prepare("SELECT COUNT(masterID) FROM history WHERE masterID='$ID' AND Title ='Adoption' AND requestStatus = 'Approved'");
                      $query3->execute();

                      $user_adopted=$query3->fetchColumn();

                      ?>
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/A.W.O-MyPetAdoptedByUser.php">My Pet Adopted By User <span class="badge bg-red" id="user_adopted" value=""> <?php echo ($user_adopted);?></a>
                      <script type="text/javascript">
                        var user_adopted = <?php echo ($user_adopted);?>;
                        if (user_adopted === 0){
                          document.getElementById("user_adopted").style.display = "none";
                        }
                        </script>

                      <?php
                      $query=$dbh->prepare("SELECT COUNT(masterID) FROM donation WHERE masterID='$ID' AND donationStatus='Not Recieved Yet'");
                      $query->execute();

                      $donation=$query->fetchColumn();

                      ?>
                  
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/A.W.O-Donations.php">Donation <span class="badge bg-red" id="donation" value=""><?php echo ($donation);?></span></a>
                      <script type="text/javascript">
                        var donation = <?php echo ($donation);?>;
                        if (donation === 0){
                          document.getElementById("donation").style.display = "none";
                        }
                        </script>
                      
                      <?php
                      $query=$dbh->prepare("SELECT COUNT(masterID) FROM donation WHERE masterID='$ID' AND donationStatus='Recieved'");
                      $query->execute();

                      $history=$query->fetchColumn();

                      ?>
                  
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/A.W.O-History.php">Donation History <span class="badge bg-red" id="adoption" value=""><?php echo ($history);?></span></a>
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
                      <li class="nav-item" style= "height: 440; overflow-y: scroll;">
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
                            <span class="image"><img src="/developgetpet/web/images/logo.png" style=" border:1px solid #ced4da;" class="rounded-circle img-responsive" alt="Profile Image" > </span>
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

                        <form method="post">
                        <button class ="dropdown-item" type="submit" style="margin-top:-15px">
                          <span><b><?php echo ($result->notificationTitle);?></b></span>&ensp;<span id="unread" class="rounded-circle badge unread" style="height:10px;width:10px;background-color:#1877F2;color: transparent;"><?php echo ($result->notificationStatus);?></span><br>
                          <span class="image"><img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> style="height:30px;width:30px" class="rounded-circle img-responsive" alt="Profile Image" /></span>
                          <span>
                            <span><?php echo ($userid->orgName);?><?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?></span>
                          </span><br>
                          <span class="message">
                          <?php echo ($result->notificationDescription);?>
                          </span><br>
                          <span style="float:left;margin-top:10px" class="time"><b><?php echo ($result->notificationDate);?></b></span><br>
                          </button>
                        </form>
                         <?php $cnt1=$cnt1+1;}} ?>
                         <?php } ?>
                        <?php $cnt=$cnt+1;
                        }
                        }
                        else
                        {
                        echo "No Notification.";
                        }  
                        ?>
                      </li>
                      <li class="nav-item">
                      </li>
                    </ul>
                  </li>
                  
                
                  <?php
                  $query=$dbh->prepare("SELECT COUNT(masterID) FROM message WHERE masterID='$ID' AND messageStatus != 'Read' ");
                  $query->execute();

                  $user_message=$query->fetchColumn();

                  ?>
                  <li role="presentation" class="nav-item dropdown open" style="margin-top:6px;margin-right:10px;">
								<a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-envelope"></i>
									<span class="badge bg-green" id="user_message"><?php echo ($user_message);?></span>
								</a>
                <script type="text/javascript">
                    var user_message = <?php echo ($user_message);?>;
                    if (user_message === 0){
                      document.getElementById("user_message").style.display = "none";
                    }
                    </script>
								<ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
									
									<li class="nav-item" style= "height: 440; overflow-y: scroll;">
                  <?php
                        $sql="SELECT * from message WHERE masterID='$ID' ORDER BY messageID DESC";
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

                        <?php
                        if(isset($_POST['view_message']))
                        {
                          $masterID=($_POST['masterID']);
                          $roomID=($_POST['roomID']);
                          
                          $sql="update message set
                          messageStatus='Read'
                          where roomID=:roomID";
                          $query=$dbh->prepare($sql); 
                          $query->bindParam(':roomID',$roomID,PDO::PARAM_STR); 
                          $query->execute();
                
                          echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-Message.php'</script>";
                          $_SESSION['masterID'] = $masterID;
                          $_SESSION['roomID'] = $roomID;
                          

                        }
                        ?>

                        <form method="post">
                        <button class ="dropdown-item" name="view_message" type="submit" style="margin-top:-15px">
                          <span><b>Message</b></span>&ensp;<span id="unread" class="rounded-circle badge unread" style="height:10px;width:10px;background-color:#1877F2;color: transparent;"><?php echo ($result->messageStatus);?></span><br>
                          <span class="image"><img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> class="rounded-circle img-responsive" style="height:30px;width:30px" alt="Profile Image" /></span>
                          <span>
                            <input hidden name="roomID" value="<?php echo ($result->roomID);?>">
                            <input hidden name="masterID" value="<?php echo ($result->userID);?>">
                            <span><?php echo ($userid->orgName);?><?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?></span>
                          </span><br>
                          <span class="message">
                          <?php echo ($result->messageContent);?>
                          </span><br>
                          <span style="float:left;margin-top:10px" class="time"><b><?php echo ($result->messageDate);?></b></span><br>
                        </button>
                        </form>
                         <?php $cnt1=$cnt1+1;}} ?>
                        <?php $cnt=$cnt+1;
                        }
                        }
                        else
                        {
                        echo "No Message.";
                        } 
                        ?>
									</li>
                  <li class="nav-item">
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
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel" style="border-radius:10px;border-width:2px;">
                  <div class="x_title">
                    <h2>My Profile</h2>
                    <ul class="nav navbar-right panel_toolbox"> 
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="text-align:center;">
                  
                  <?php
                        $sql="SELECT * from animalwelfareorganization WHERE orgID='$ID'";
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
                                            <Img <?php echo"<img src = '/developgetpet/web/images/$result->orgLogo'";?> class="rounded-circle img-responsive" id="Modalprofile" alt="Post Images" style="height:250px;width:250px;border-style: solid;border-color: #F5F5F5;border-width: 6px;">
                                        </div>
                                  </div>                            
                                  <h2 class="card-title"><?php echo ($result->orgName);?></h2>
                                  
                          </div>
                        </div>
                      </div>
                      <br>
                      <?php $cnt=$cnt+1;}} ?>
                      
                      <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/A.W.O-About.php" role="tab" aria-controls="about" aria-selected="false">About</a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/A.W.O-PostDogsAdoption.php" role="tab" aria-controls="post_adoption" aria-selected="false">Post Dogs Adoption</a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/A.W.O-PostCatsAdoption.php" role="tab" aria-controls="post_adoption" aria-selected="false">Post Cats Adoption</a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/A.W.O-PostFundraising.php" role="tab" aria-controls="post_fundraising" aria-selected="false">Post Fundraising Activities</a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/A.W.O-PostEvents.php" role="tab" aria-controls="post_events" aria-selected="false">Post Events</a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/A.W.O-PostTips.php" role="tab" aria-controls="post_tips" aria-selected="false">Post Tips</a>
                      </li>
                    </ul>
                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/A.W.O-PostAdvice.php" role="tab" aria-controls="post_advice" aria-selected="false">Post Advice</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/developgetpet/dashboard/A.W.O-PostArticles.php" role="tab" aria-controls="post_advice" aria-selected="false">Post Articles</a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/A.W.O-Reviews.php" role="tab" aria-controls="post_adoption" aria-selected="false">Reviews</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="post1" role="tabpanel" aria-labelledby="post-tab">
                      <div class="x_content" style="text-align:center;">
                                  
                <!-- View Post Articles Code -->
                <?php
                        $sql="SELECT * from post WHERE userID='$ID' AND postStatus='Articles' ORDER BY postID DESC";
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
                                           <h5 class="card-title" id="description" id="Title" name="Title" style="text-align:left;resize:none;width:880px">Title: <?php echo ($result->postTitle);?></h5>
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
                  
                     <!-- //View Post Articles Code -->   
                                                       
                        </div>
                      </div>
                      <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="about-tab">
                      <div class="x_content">

                                </div>
                      </div>
                      <div class="tab-pane fade" id="request1" role="tabpanel" aria-labelledby="request-tab">
                        xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk 
                      </div>
                    </div>     
                    

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
                              
<p></p>
<?php
?>
<?php }} ?>
</script>

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
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-PostArticles.php'</script>";
  
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
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-PostArticles.php'</script>";
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
			  <input hidden id="user_id" name="userID" value="<?php echo ($result->orgID);?>" required = "required" class="form-control" id="success">
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
      echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-PostArticles.php'</script>";
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
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-PostArticles.php'</script>";
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
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-PostArticles.php'</script>";
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
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-PostArticles.php'</script>";
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
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-PostArticles.php'</script>";
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
              <img <?php echo"<img src = '/developgetpet/web/images/$result->orgLogo'";?> id ="profile_picture" alt="avatar" style="width:150px;height:150px;margin-left:125px;margin-top:-20px;" class="rounded-circle img-responsive">
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
              <input type="file" name="Picture" id="Picture" style="width:250px;height:40px;border:none;margin-left:160px;margin-top:5px;" placeholder="Upload Photo">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input type="hidden" name="adopterID" value="<?php echo ( $result->orgID);?>" required = "required" class="form-control" id="success">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js" integrity="sha512-hkvXFLlESjeYENO4CNi69z3A1puvONQV5Uh+G4TUDayZxSLyic5Kba9hhuiNLbHqdnKNMk2PxXKm0v7KDnWkYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
$("#selected_picture_cancel4").click(function () {

PostPicture4.value = "";
document.getElementById("btnChangePostPicture4").disabled = true;
});
</script>

<script type="text/javascript">
$("#selected_picture_close4").click(function () {

PostPicture4.value = "";
document.getElementById("btnChangePostPicture4").disabled = true;
});
</script>

<script>
  PostPicture4.onchange = evt => {
const [file] = PostPicture4.files
if (file) {
post_picture4.src = URL.createObjectURL(file)
}
document.getElementById("btnChangePostPicture4").disabled = false;
}
</script>

<script type="text/javascript">
$(".Ppost4").click(function () {
var pet_id34 = $(this).attr('data-pet-id');
$('#ChangePostPicture4').modal('show');
$("#pet_id34").val( pet_id34 );
var picture_file4 = $(this).attr('data-pet-picture');
$('#picture_file4').val( picture_file4 );
document.getElementById('post_picture4').src="/developgetpet/web/images/"+""+picture_file4;
});
</script>

<script type="text/javascript">
$("#selected_picture_cancel3").click(function () {

PostPicture3.value = "";
document.getElementById("btnChangePostPicture3").disabled = true;
});
</script>

<script type="text/javascript">
$("#selected_picture_close3").click(function () {

PostPicture3.value = "";
document.getElementById("btnChangePostPicture3").disabled = true;
});
</script>

<script>
  PostPicture3.onchange = evt => {
const [file] = PostPicture3.files
if (file) {
post_picture3.src = URL.createObjectURL(file)
}
document.getElementById("btnChangePostPicture3").disabled = false;
}
</script>

<script type="text/javascript">
$(".Ppost3").click(function () {
var pet_id33 = $(this).attr('data-pet-id');
$('#ChangePostPicture3').modal('show');
$("#pet_id33").val( pet_id33 );
var picture_file3 = $(this).attr('data-pet-picture');
$('#picture_file3').val( picture_file3 );
document.getElementById('post_picture3').src="/developgetpet/web/images/"+""+picture_file3;
});
</script>

<script type="text/javascript">
$("#selected_picture_cancel2").click(function () {

PostPicture2.value = "";
document.getElementById("btnChangePostPicture2").disabled = true;
});
</script>

<script type="text/javascript">
$("#selected_picture_close2").click(function () {

PostPicture2.value = "";
document.getElementById("btnChangePostPicture2").disabled = true;
});
</script>

<script>
  PostPicture2.onchange = evt => {
const [file] = PostPicture2.files
if (file) {
post_picture2.src = URL.createObjectURL(file)
}
document.getElementById("btnChangePostPicture2").disabled = false;
}
</script>

<script type="text/javascript">
$(".Ppost2").click(function () {
var pet_id32 = $(this).attr('data-pet-id');
$('#ChangePostPicture2').modal('show');
$("#pet_id32").val( pet_id32 );
var picture_file2 = $(this).attr('data-pet-picture');
$('#picture_file2').val( picture_file2 );
document.getElementById('post_picture2').src="/developgetpet/web/images/"+""+picture_file2;
});
</script>

<script type="text/javascript">
$(".view_picture4").click(function () {
$('#ViewPostPicture4').modal('show');
var photo_file4 = $(this).attr('data-pet-picture');
$('#photo_file4').val( photo_file4 );
document.getElementById('view_photo4').src="/developgetpet/web/images/"+""+photo_file4;
});
</script>

<script type="text/javascript">
$(".view_picture3").click(function () {
$('#ViewPostPicture3').modal('show');
var photo_file3 = $(this).attr('data-pet-picture');
$('#photo_file3').val( photo_file3 );
document.getElementById('view_photo3').src="/developgetpet/web/images/"+""+photo_file3;
});
</script>

<script type="text/javascript">
$(".view_picture2").click(function () {
$('#ViewPostPicture2').modal('show');
var photo_file2 = $(this).attr('data-pet-picture');
$('#photo_file2').val( photo_file2 );
document.getElementById('view_photo2').src="/developgetpet/web/images/"+""+photo_file2;
});
</script>

<script type="text/javascript">
$(".view_picture").click(function () {
$('#ViewPostPicture').modal('show');
var photo_file = $(this).attr('data-pet-picture');
$('#photo_file').val( picture_file );
document.getElementById('view_photo').src="/developgetpet/web/images/"+""+photo_file;
});
</script>

<script type="text/javascript">
$('#edit_comment_emoji').emojioneArea({
  inline: true,
  pickerPosition: "right",
});
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
function editcommentEmoji() {
var copyText = document.getElementById("edit_comment_emoji");
copyText.select();
copyText.setSelectionRange(0, 99999);
navigator.clipboard.writeText(copyText.value);

/* Alert the copied text */
alert("Copied the text: " + copyText.value);
}
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
  $(".Ecomment").filter(function(){
  return $(this).text().trim() != "<?php echo $ID?> Edit";
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
  $("#selected_profile_cancel").click(function () {
   
    profile_picture.src = <?php echo"'/developgetpet/web/images/$result->orgLogo'";?>;
    Picture.value = "";
    document.getElementById("profile").disabled = true;
});
  </script>

    <script type="text/javascript">
  $("#selected_profile_close").click(function () {
   
    profile_picture.src = <?php echo"'/developgetpet/web/images/$result->orgLogo'";?>;
    Picture.value = "";
    document.getElementById("profile").disabled = true;
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

    <script type="text/javascript">
    $(".unread").filter(function(){
    return $(this).text().trim() === "Read";
    }).hide();
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