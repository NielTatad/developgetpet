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
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Profile.php'</script>";
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
                    <li><a href="http://localhost/developgetpet/dashboard/P.O-Fundraisingactivities.php">Fundraising activities</a>
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
                      <li><a class="collapse-link" style="margin-left:50px"><i class="fa fa-chevron-up"></i></a>
                      </li>      
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content" style="text-align:center;">
                  
                  <?php
                        $sql="SELECT * from petowner WHERE ownerID='$ID'";
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
                                            <Img <?php echo"<img src = '/developgetpet/web/images/$result->ownerPicture'";?> class="rounded-circle img-responsive" id="Modalprofile" alt="Post Images" style="height:250px;width:250px;border-style: solid;border-color: #F5F5F5;border-width: 6px;">
                                        </div>
                                  </div>                            
                                  <h2 class="card-title"><?php echo ($result->ownerFirstname);?> <?php echo ($result->ownerLastname);?></h2>
                                  
                          </div>
                        </div>
                      </div>
                      <br>
                      <?php $cnt=$cnt+1;}} ?>
                      
                      <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/P.O-About.php" role="tab" aria-controls="about" aria-selected="false">About</a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/P.O-PostDogsAdoption.php" role="tab" aria-controls="post_adoption" aria-selected="false">Post Dogs Adoption</a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/P.O-PostCatsAdoption.php" role="tab" aria-controls="post_adoption" aria-selected="false">Post Cats Adoption</a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/P.O-PostDogsShorttermcare.php" role="tab" aria-controls="post_short-term-care" aria-selected="false">Post Dogs Short-Term Care</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" href="http://localhost/developgetpet/dashboard/P.O-PostCatsShorttermcare.php" role="tab" aria-controls="post_short-term-care" aria-selected="false">Post Cats Short-Term Care</a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/P.O-PostTips.php" role="tab" aria-controls="post_tips" aria-selected="false">Post Tips</a>
                      </li>
                    </ul>
                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/P.O-PostAdvice.php" role="tab" aria-controls="post_advice" aria-selected="false">Post Advice</a>
                      </li>
                      <li class="nav-item">
                        <a href="http://localhost/developgetpet/dashboard/P.O-PostArticles.php" role="tab" aria-controls="post_advice" aria-selected="false">Post Articles</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="post1" role="tabpanel" aria-labelledby="post-tab">
                      <div class="x_content" style="text-align:center;">
                                  
                <!-- View Pet Post for Short-term Care Code -->
                  <?php
                        $sql="SELECT * from postpet WHERE userID='$ID' AND petStatus='Available' AND petType='Cat' AND postStatus='Short-term care' AND postStatus!='Deleted' ORDER BY petID DESC";
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
                                            
                                            <label style="margin-top:-5px;"><img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:40px;height:40px;margin-top:10px;" class="rounded-circle img-responsive"><textarea disabled style="width:450px;height:auto;font-size:18px;border-style: none;background-color:transparent;resize: none;overflow:hidden;font-size:14px;text-align:left;padding-top: 2px;color: #73879C;margin-top:10px;" type='text'><?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?>&#13;&#10;<?php echo ($result->postDate);?></textarea>  <i class="fa fa-ellipsis-h menu" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i hidden><?php echo ($result->userID);?></i>
                                                </i>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                              <button class="dropdown-item Epost" data-pet-id="<?php echo ($result->petID);?>" data-pet-name="<?php echo ($result->petName);?>" data-pet-type="<?php echo ($result->petType);?>" data-pet-breed="<?php echo ($result->petBreed);?>" data-pet-gender="<?php echo ($result->petSex);?>" data-pet-age="<?php echo ($result->petAge);?>" data-pet-color="<?php echo ($result->petColor);?>" data-pet-weight="<?php echo ($result->petWeight);?>"  data-pet-spayneuter="<?php echo ($result->SpayNeuter);?>" data-pet-rabiesvaccine="<?php echo ($result->rabiesVaccine);?>" data-pet-deworming="<?php echo ($result->Deworming);?>" data-pet-threeinonevaccine="<?php echo ($result->threeinoneVaccine);?>" data-pet-diet="<?php echo ($result->petDiet);?>" data-total-days="<?php echo ($result->totalDays);?>" data-selected-range="<?php echo ($result->selectedRange);?>" data-charge="<?php echo ( $result->Charge);?>" data-pet-description="<?php echo ($result->petDescription);?>"><i hidden><?php echo ($result->userID);?></i> Edit Post</button>

                                              <button class="dropdown-item Dpost" data-pet-id="<?php echo ($result->petID);?>"><i hidden><?php echo ($result->userID);?></i> Delete Post</button>
                                              <button class="dropdown-item Ppost" data-pet-id="<?php echo ($result->petID);?>" data-pet-picture="<?php echo ($result->petPicture);?>"><i hidden><?php echo ($result->userID);?></i> Add/Change Picture 1</button>
                                              <button class="dropdown-item Ppost2" data-pet-id="<?php echo ($result->petID);?>" data-pet-picture="<?php echo ($result->petPicture2);?>"><i hidden><?php echo ($result->userID);?></i> Add/Change Picture 2</button>
                                              <button class="dropdown-item Ppost3" data-pet-id="<?php echo ($result->petID);?>" data-pet-picture="<?php echo ($result->petPicture3);?>"><i hidden><?php echo ($result->userID);?></i> Add/Change Picture 3</button>
                                              <button class="dropdown-item Ppost4" data-pet-id="<?php echo ($result->petID);?>" data-pet-picture="<?php echo ($result->petPicture4);?>"><i hidden><?php echo ($result->userID);?></i> Add/Change Picture 4</button>
                                            </div><br>
                                          <p id="description" style="font-size:16px;margin-top:10px;float:left;padding-left: 10px;text-align:justify;text-justify: inter-word;"><?php echo ($result->petDescription);?></p>
                                          
                                          <br>
                                              <Img <?php echo"<img src = '/developgetpet/web/images/$result->petPicture'";?> class="card-ing-top view_picture" alt="Post Image" onerror="this.onerror=null;this.src='/developgetpet/web/images/noimage.jpg'" style="height:300px;width:500px;border-radius:10px;margin-bottom:5px;" data-pet-picture="<?php echo ($result->petPicture);?>"><Img <?php echo"<img src = '/developgetpet/web/images/$result->petPicture2'";?> class="card-ing-top view_picture2" alt="Post Image" onerror="this.onerror=null;this.src='/developgetpet/web/images/noimage.jpg'" align="left" style="height:150px;width:165px;border-radius:10px;" data-pet-picture="<?php echo ($result->petPicture2);?>"><Img <?php echo"<img src = '/developgetpet/web/images/$result->petPicture3'";?> class="card-ing-top view_picture3" alt="Post Image" onerror="this.onerror=null;this.src='/developgetpet/web/images/noimage.jpg'" align="center" style="height:150px;width:165px;border-radius:10px;" data-pet-picture="<?php echo ($result->petPicture3);?>"><Img <?php echo"<img src = '/developgetpet/web/images/$result->petPicture4'";?> class="card-ing-top view_picture4" alt="Post Image" onerror="this.onerror=null;this.src='/developgetpet/web/images/noimage.jpg'" align="right" style="height:150px;width:165px;border-radius:10px;" data-pet-picture="<?php echo ($result->petPicture4);?>">
                                              <ul style="list-style:none;margin-left:-50px;">
                                              
                                              <li><h3 hidden class="card-title"><?php echo ($result->petID);?></h3></li>
                                              <li><h2 hidden class="card-title"><?php echo ($result->petName);?></h2></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->petType);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->petBreed);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->petSex);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->petAge);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->petColor);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->petWeight);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->vaccinationStatus);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->dewormingStatus);?></h3></li>
                                              <li><textarea hidden disabled="yes" id="description" style="width:350px;height:100px;padding-top:-5px;background-color: #fff;resize: none;color:#73879C;font-size:16px;"><?php echo ($result->petDescription);?></textarea></li>
                                              
                                              
                                              <li><h3 hidden class="card-title"><?php echo ($result->petDescription);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->petPicture);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->petStatus);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->userID);?></h3></li>
                                            
                                              
                                              <li><h3 hidden class="card-title"><?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?></h3></li>
                                              <li><label hidden class="card-title"><?php echo ($result->postDate);?></label><br></li>
                                              <li><h3 hidden class="card-title"><?php echo ( $userid->Email);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ( $userid->Address);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ( $userid->contactNo);?></h3></li>
                                              <?php $cnt1=$cnt1+1;}} ?>
                                              <button type="button" class="btn btn-link viewbtn" style="height:30px;width:150px;font-size:14px;margin-top:-10px;float:left;margin-left:-25px;" data-pet-id="<?php echo ($result->petID);?>" data-pet-name="<?php echo ($result->petName);?>" data-pet-type="<?php echo ($result->petType);?>" data-pet-breed="<?php echo ($result->petBreed);?>" data-pet-gender="<?php echo ($result->petSex);?>" data-pet-age="<?php echo ($result->petAge);?>" data-pet-color="<?php echo ($result->petColor);?>" data-pet-weight="<?php echo ($result->petWeight);?>" data-pet-spayneuter="<?php echo ($result->SpayNeuter);?>" data-pet-rabiesvaccine="<?php echo ($result->rabiesVaccine);?>" data-pet-deworming="<?php echo ($result->Deworming);?>" data-pet-threeinonevaccine="<?php echo ($result->threeinoneVaccine);?>" data-pet-diet="<?php echo ($result->petDiet);?>" data-selected-range="<?php echo ( $result->selectedRange);?>" data-charge="₱<?php echo ( $result->Charge);?>.00" data-pet-description="<?php echo ($result->petDescription);?>" data-pet-status="<?php echo ($result->petStatus);?>">View Info</button><button type="button" class="btn btn-success stcbtn" id="stcbtn" style="height:35px;width:150px;font-size:14px;margin-top:-10px;float:center;margin-right:140px;background-color:#00cdc1;color:white;"  data-master-id="<?php echo ($userid->userID);?>" data-pet-name="<?php echo ($result->petName);?>" data-pet-id="<?php echo ($result->petID);?>" data-pet-name="<?php echo ($result->petName);?>" data-pet-type="<?php echo ($result->petType);?>" data-pet-breed="<?php echo ($result->petBreed);?>" data-pet-description="<?php echo ($result->petDescription);?>"><i hidden><?php echo ( $result->userID);?></i> Care Me</button>
                                              <br>

                                              <?php
                                              $count=$dbh->prepare("SELECT COUNT(postID) FROM comment WHERE postID='$result->petID'");
                                              $count->execute();

                                              $commentno=$count->fetchColumn();

                                              ?>
                                              
                                              <?php
                                              $postid = $result->petID;

                                              $sql2="SELECT * from comment WHERE postID ='$postid' AND  commentStatus='Short-Term Care' ORDER BY commentID DESC LIMIT 1";
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
                                               <h4 style="margin-top:-55px;float:right;margin-right:10px;"><span class="comment-count" id="comment-count"><?php echo ($commentno);?></span> Comment</h4>

                                               <div class="comment-Div">

                                                <label style="margin-top:-5px;"><img <?php echo"<img src = '/developgetpet/web/images/$picture->Image'";?> alt="avatar" style="width:30px;height:30px;margin-top:10px;" class="rounded-circle img-responsive">&nbsp<textarea disabled="yes" class="txtgrow" style="width:450px;height:auto;font-size:16px;border-radius:20px; background-color:#e9ecef;resize: none;overflow:hidden;font-size:14px;text-align:left;padding-top: 10px;color: #808080;margin-top:10px;" type='text'><?php echo ( $picture->orgName);?><?php echo ( $picture->userFirstname);?> <?php echo ( $picture->userLastname);?>&#13;&#10;<?php echo ( $comment->commentContent);?></textarea>&nbsp&nbsp<i class="fa fa-ellipsis-v option" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i hidden><?php echo ($comment->userID);?></i>
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
                                              $postid = $result->petID;

                                              $sql2="SELECT * from comment WHERE postID ='$postid' AND  commentStatus='Short-Term Care' ORDER BY commentID DESC";
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
                                                
                                                <label style="margin-top:-30px;"><img <?php echo"<img src = '/developgetpet/web/images/$picture->Image'";?> alt="avatar" style="width:30px;height:30px;margin-top:10px;" class="rounded-circle img-responsive">&nbsp<textarea disabled="yes" class="txtgrow" style="width:450px;height:auto;font-size:16px;border-radius:20px; background-color:#e9ecef;resize: none;overflow:hidden;font-size:14px;text-align:left;padding-top: 10px;color: #808080;margin-top:10px;" type='text'><?php echo ( $picture->orgName);?><?php echo ( $picture->userFirstname);?> <?php echo ( $picture->userLastname);?>&#13;&#10;<?php echo ( $comment->commentContent);?></textarea>&nbsp&nbsp<i class="fa fa-ellipsis-v option" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i hidden><?php echo ($comment->userID);?></i></i>

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
                                              <button type="button" class="btn-round commentbtn" style="border: none;height:30px;width:450px;background-color:#e9ecef;font-size:14px;text-align:left;padding: 0.375rem 0.75rem;color: #808080;outline: none;" data-pet-id="<?php echo ($result->petID);?>" data-master-id="<?php echo ($result->userID);?>">Write a comment...</button>
                                              <div class="clearfix"></div>
                                              <?php $cnt4=$cnt4+1;}} ?>

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
                          echo "There's no information to display.";
                        }
                        ?>
                     <!-- //View Pet Post for Short-term Care Code -->   
                                                       
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

<!-- Short-Term Care Request Code -->
<?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>

<?php
if(isset($_POST['Short-Term-Care']))
{
  
  $MasterID=($_POST['MasterID']);

  if($MasterID == $ID){

  echo '<script>alert("Opps! You cannot adopt your own post pet")</script>';
  echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-PostCatsShorttermcare.php'</script>";

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

  $sql="INSERT INTO request(requestTitle,masterID,UserID,userName,userEmail,userAddress,userContactNo,petID,petType,petName,petBreed,petDescription,requestReason,requestDate)VALUES('Short-Term Care Request',:MasterID,:UserID,:Name,:Email,:Address,:ContactNo,:PetID,:Type,:PetName,:Breed,:Description,:Reason,'$date')";
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

  $sql2="SELECT requestID FROM request ORDER BY requestID DESC";
  $query2=$dbh->prepare($sql2);
  $query2->execute();

  $ID=$query2->fetchColumn();

  $sql3="INSERT INTO notification(activityID,postID,notificationTitle,masterID,UserID,notificationDescription,notificationDate,notificationStatus)VALUES('$ID',:PetID,'Short-Term Care Request',:MasterID,:UserID,:Reason,'$date','Unread')";
  $query3=$dbh->prepare($sql3);
  $query3->bindParam(':PetID',$PetID,PDO::PARAM_STR);
  $query3->bindParam(':MasterID',$MasterID,PDO::PARAM_STR);
  $query3->bindParam(':UserID',$UserID,PDO::PARAM_STR);
  $query3->bindParam(':Reason',$Reason,PDO::PARAM_STR);
  $query3->execute();

  echo '<script>alert("Just Wait for The Owner Accept Your Short-Term Care Request!")</script>';
  echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-PostCatsShorttermcare.php'</script>";

  }

}
?>
  <!-- //Short-Term Care Request Code -->

  <!-- Modal Short-Term Care -->
  <div class="modal fade" id="STCModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Short-Term Care</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cleartext()">
          <span aria-hidden="true">&times;</span>
        </button>
        <script>
          function cleartext() {
          document.getElementById("Reason").value="";
          document.getElementById('short-term-care').disabled = true;
            }
        </script>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
      
      <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" id="pet_id" name="PetID" required = "required" class="form-control">
				</div>

        <div hidden class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_name" name="PetName" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div hidden class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Type<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_type" name="Type" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div hidden class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Breed<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_breed" name="Breed" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div hidden class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Description<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
        <textarea readonly id="pet_description" name="Description" style="width:400px;height:100px;padding-top:-5px;background-color: #fff;resize: none;font-size:16px;"></textarea>
        </div>
        </div>

        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" id="master_id" name ="MasterID" required = "required" class="form-control">
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Reason<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
        <textarea name="Reason" id="Reason" style="width:400px;height:150px;padding-top:-5px;background-color: #fff;resize: none;font-size:16px;" required = "required" placeholder="Write your reason to adopt..." onkeyup="request()"></textarea>
        </div>
        </div>
        <script>
          function request() {
          if(document.getElementById("Reason").value==="") { 
                    document.getElementById('short-term-care').disabled = true; 
                } else { 
                    document.getElementById('short-term-care').disabled = false;
                }
            }
        </script>
        <div hidden style="text-align: center" class="wrap-input100 validate-input">
					    <input type="text" name="UserID" value="<?php echo ($result->ownerID);?>"  required = "required" class="form-control">

              <input readonly type="text" class="form-control" name="Name" value="<?php echo ($result->ownerFirstname);?> <?php echo ($result->ownerLastname);?>" style="background-color:#fff;width:400px;" required="required"/>

              <input readonly type="text" class="form-control" name="Email" value="<?php echo ($result->ownerEmail);?>" style="background-color:#fff;width:400px;" required="required"/>

              <input readonly type="text" class="form-control" name="Address" value="<?php echo ($result->ownerAddress);?>" style="background-color:#fff;width:400px;" required="required"/>

              <input readonly type="text" class="form-control" name="ContactNo" value="<?php echo ($result->ownerContactNo);?>" style="background-color:#fff;width:400px;" required="required"/>

        </div>

        <div class="ln_solid">
        <br>
        <div class="form-group" style="text-align: center">
        <div class="col-md-6 offset-md-3">
               <button id="short-term-care" name ="Short-Term-Care" type="submit" class="btn btn-success" style="background-color:#00cdc1;border:#00cdc1;width:160px;height:50px;font-size:18px;" disabled>Care Now!</button>
        </div>
        </div>
        </div>

        </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Short-Term Care -->

  <!-- Modal View Pet Info -->
  <div class="modal fade" id="View" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Information</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" id="pet_id" name="PetID" required = "required" class="form-control">
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Name<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="petname" name="PetName" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Type<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pettype" name="Type" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Breed<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="petbreed" name="Breed" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Gender<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="petsex" name="Gender" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Age<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="petage" name="Age" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Color<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="petcolor" name="Color" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Weight<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="petweight" name="Weight" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Status<span class="required"></span></label>&nbsp;&nbsp;&nbsp;
        <div class="d-flex align-items-center" style="">
        <input readonly id="spayneuter" style="width:20px;height:20px;" name="SpayNeuter">&nbsp;Spay/Neuter&emsp;<input readonly id="rabiesvaccine" style="width:20px;height:20px" name="Vaccine">&nbsp;Rabies Vaccine&emsp;<input readonly id="deworming" style="width:20px;height:20px" name="Deworming" >&nbsp;Deworming&emsp;<input readonly id="threeinonevaccine" style="width:20px;height:20px" name="threeinoneVaccine" >&nbsp;3 in 1 Vaccine
        </div>
        </div>

        <div class="field item form-group">
				<label class="col-form-label col-md-3 col-sm-3  label-align">Pet Diet</label>
			  <div class="col-md-6 col-sm-6">
        <textarea disabled="yes" id="petdiet" style="width:440px;height:80px;padding-top:-5px;background-color: #fff;resize: none;font-size:16px;"></textarea>
        </div>
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Time Period<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="selectedrange" name="selectedRange" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Charge<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="charge" name="Charge" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Reason for Short-term care<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
        <textarea disabled="yes" id="petdescription" style="width:440px;height:100px;padding-top:-5px;background-color: #fff;resize: none;font-size:16px;"></textarea>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Status<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="petstatus" name="Availability" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <br><br>

        </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal View Pet Info -->

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
    $petid=($_POST['petid']);
    $masterid=($_POST['masterid']);
    $Comment=($_POST['Comment']);
    
    $sql="INSERT INTO comment(postID,masterID,userID,commentContent,commentDate,commentStatus)VALUES(:petid,:masterid,'$ID',:Comment,'$date','Short-term care')";
    $query=$dbh->prepare($sql);
    $query->bindParam(':petid',$petid,PDO::PARAM_STR);
    $query->bindParam(':masterid',$masterid,PDO::PARAM_STR);
    $query->bindParam(':Comment',$Comment,PDO::PARAM_STR);
    $query->execute();

    echo '<script>alert("Your Comment Posted Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-PostCatsShorttermcare.php'</script>";
  
  }

  else
  {
    $petid=($_POST['petid']);
    $masterid=($_POST['masterid']);
    $Comment=($_POST['Comment']);
    
    $sql="INSERT INTO comment(postID,masterID,userID,commentContent,commentDate,commentStatus)VALUES(:petid,:masterid,'$ID',:Comment,'$date','Short-term care')";
    $query=$dbh->prepare($sql);
    $query->bindParam(':petid',$petid,PDO::PARAM_STR);
    $query->bindParam(':masterid',$masterid,PDO::PARAM_STR);
    $query->bindParam(':Comment',$Comment,PDO::PARAM_STR);
    $query->execute();

    $sql2="SELECT commentID FROM comment ORDER BY commentID DESC";
    $query2=$dbh->prepare($sql2);
    $query2->execute();

    $commentID=$query2->fetchColumn();

    $sql3="INSERT INTO notification(activityID,postID,notificationTitle,userID,masterID,notificationDescription,notificationDate,notificationStatus)VALUES('$commentID',:petid,'Comment on Your Post','$ID',:masterid,:Comment,'$date','Unread')";
    $query3=$dbh->prepare($sql3);
    $query3->bindParam(':petid',$petid,PDO::PARAM_STR);
    $query3->bindParam(':masterid',$masterid,PDO::PARAM_STR);
    $query3->bindParam(':Comment',$Comment,PDO::PARAM_STR);
    $query3->execute();

    echo '<script>alert("Your Comment Posted Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-PostCatsShorttermcare.php'</script>";
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
					    <input hidden id="petid" name="petid" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="masterid" name="masterid" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="userid" name="userid" value="<?php echo ($result->ownerID);?>" required = "required" class="form-control" id="success">
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
      echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-PostCatsShorttermcare.php'</script>";
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
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-PostCatsShorttermcare.php'</script>";
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
    $petID=($_POST['petID']);

    $query="update postpet set petStatus='Not available', postStatus ='Deleted' where petID=:petID";
    $query= $dbh->prepare($query);
    $query->bindValue('petID',$petID);
    $query->execute();

    $query1="Delete from comment where postID=:petID";
    $query1 = $dbh->prepare($query1);
    $query1->bindValue('petID',$petID);
    $query1->execute();

    $query2="Delete from notification where postID=:petID";
    $query2 = $dbh->prepare($query2);
    $query2->bindValue('petID',$petID);
    $query2->execute();

    echo '<script>alert("Post Deleted Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-PostCatsShorttermcare.php'</script>";
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
					    <input hidden id="pet_id1" name="petID" required = "required" class="form-control" id="success">
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
   if(isset($_POST['Edit']))
   {
    $petID=($_POST['petID']);
    $Type=($_POST['Type']);
    $PetName=($_POST['PetName']);
    $Breed=($_POST['Breed']);
    $Gender=($_POST['Gender']);
    $Age=($_POST['Age']);
    $Color=($_POST['Color']);
    $Weight=($_POST['Weight']);
    $SpayNeuter=($_POST['SpayNeuter']);
    $rabiesVaccine=($_POST['rabiesVaccine']);
    $Deworming=($_POST['Deworming']);
    $threeinoneVaccine=($_POST['threeinoneVaccine']);
    $petDiet=($_POST['petDiet']);
    $selectedRange=($_POST['selectedRange']);
    $totalDays=($_POST['totalDays']);
    $Charge=($_POST['Charge']);
    $Description=($_POST['Description']);

    $sql="update postpet set
    petType=:Type,
    petName=:PetName,
    petBreed=:Breed,
    petSex=:Gender,
    petAge=:Age,
    petColor=:Color,
    petWeight=:Weight,
    SpayNeuter=:SpayNeuter,
    rabiesVaccine=:rabiesVaccine,
    Deworming=:Deworming,
    threeinoneVaccine=:threeinoneVaccine,
    petDiet=:petDiet,
    selectedRange=:selectedRange,
    totalDays=:totalDays,
    Charge=:Charge,
    petDescription=:Description
    where petID=:petID";
    $query=$dbh->prepare($sql); 
    $query->bindParam(':petID',$petID,PDO::PARAM_STR);
    $query->bindParam(':Type',$Type,PDO::PARAM_STR);
    $query->bindParam(':PetName',$PetName,PDO::PARAM_STR);
    $query->bindParam(':Breed',$Breed,PDO::PARAM_STR);
    $query->bindParam(':Gender',$Gender,PDO::PARAM_STR);
    $query->bindParam(':Age',$Age,PDO::PARAM_STR);
    $query->bindParam(':Color',$Color,PDO::PARAM_STR);
    $query->bindParam(':Weight',$Weight,PDO::PARAM_STR);
    $query->bindParam(':SpayNeuter',$SpayNeuter,PDO::PARAM_STR);
    $query->bindParam(':rabiesVaccine',$rabiesVaccine,PDO::PARAM_STR);
    $query->bindParam(':Deworming',$Deworming,PDO::PARAM_STR);
    $query->bindParam(':threeinoneVaccine',$threeinoneVaccine,PDO::PARAM_STR);
    $query->bindParam(':petDiet',$petDiet,PDO::PARAM_STR);
    $query->bindParam(':selectedRange',$selectedRange,PDO::PARAM_STR);
    $query->bindParam(':totalDays',$totalDays,PDO::PARAM_STR);
    $query->bindParam(':Charge',$Charge,PDO::PARAM_STR);
    $query->bindParam(':Description',$Description,PDO::PARAM_STR);
    $query->execute();
  
    echo '<script>alert("Post Updated Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-PostCatsShorttermcare.php'</script>";
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
            document.getElementById("Edit").disabled = false;
        }
      </script>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" id="pet_id2" name="petID" required = "required" class="form-control">
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Name<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input type="text" class="form-control" id="pet_name2" name="PetName" style="background-color:#fff;width:440px;" required="required" onkeypress="return /[a-z\s*]/i.test(event.key)"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align" for="">Pet Type</label>&nbsp;&nbsp;&nbsp;<input readonly type="text" class="form-control" name="Type" id="pet_type2" style="background-color:#fff;width:223px;" required="required"/>
        <div class="col-md-6 col-sm-6">
        <select class="form-control myselect" id="slct1" style="background-color:#fff;width:223px;"  onchange="populate(this.id,'slct2')" onclick="typeFunction()">
          <option value=""></option>
          <option value="Dog">DOG</option>
          <option value="Cat">CAT</option>
        </select>
        </div>
        </div>

        <script>
          function typeFunction() {
          var type = document.getElementById('slct1').value;
          document.getElementById('pet_type2').value = type;
          }
        </script>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align" for="">Pet Breed</label>&nbsp;&nbsp;&nbsp;<input readonly type="text" class="form-control" id="pet_breed2" name="Breed" style="background-color:#fff;width:223px;" required="required"/>
        <div class="col-md-6 col-sm-6">
        <select class="select2_group form-control" id="slct2" onclick="breedFunction()" style="background-color:#fff;width:223px;"></select>
        </div>
        </div>
        <script>

        function populate(s1,s2)
      {
       var s1 = document.getElementById(s1);
       var s2 = document.getElementById(s2);

       s2.innerHTML = "";

       if(s1. value == "Dog")
      {
       var optionArray = ['Affenpinscher|Affenpinscher', 'Afghan hound|Afghan hound', 'Airedale terrier|Airedale terrier','Akita|Akita','Alaskan Malamute|Alaskan Malamute','American Staffordshire terrier|American Staffordshire terrier','American water spaniel|American water spaniel','Askal|Askal','Australian cattle dog|Australian cattle dog','Australian shepherd|Australian shepherd','Australian terrier|Australian terrier','Basenji|Basenji','Basset hound|Basset hound','Beagle|Beagle','Bearded collie|Bearded collie','Bedlington terrier|Bedlington terrier','Bernese mountain dog|Bernese mountain dog','Bichon frise|Bichon frise','Black and tan coonhound|Black and tan coonhound','Bloodhound|Bloodhound','Border collie|Border collie','Border terrier|Border terrier','Borzoi|Borzoi','Boston terrier|Boston terrier','Bouvier Des Flandres|Bouvier Des Flandres','Boxer|Boxer','Briard|Briard','Brittany|Brittany','Brussels griffon|Brussels griffon','Bull terrier|Bull terrier','Bulldog|Bulldog','Bullmastiff|Bullmastiff','Cairn terrier|Cairn terrier','Canaan dog|Canaan dog','Chesapeake Bay retriever|Chesapeake Bay retriever','Chihuahua|Chihuahua','Chinese crested|Chinese shar-pei','Chow chow|Chow chow','Clumber spaniel|Clumber spaniel','Cocker spaniel|Cocker spaniel','Collie|Collie','Curly-coated retriever|Curly-coated retriever','Dachshund|Dachshund','Dalmatian|Dalmatian','Doberman pinscher|Doberman pinscher','English cocker spaniel|English cocker spaniel','English setter|English setter','English springer spaniel|English springer spaniel','English toy spaniel|English toy spaniel','Eskimo dog|Eskimo dog','Finnish spitz|Finnish spitz','Flat-coated retriever|Flat-coated retriever','Fox terrier|Fox terrier','Foxhound|Foxhound','French bulldog|German shepherd','German shorthaired pointer|German shorthaired pointer','German wirehaired pointer|German wirehaired pointer','Golden retriever|Golden retriever','Gordon setter|Gordon setter','Great Dane|Great Dane','Greyhound|Greyhound','Irish setter|Irish setter','Irish water spaniel|Irish water spaniel','Irish wolfhound|Irish wolfhound','Jack Russell terrier|Jack Russell terrier','Japanese spaniel|Japanese spaniel','Keeshond|Keeshond','Kerry blue terrier|Kerry blue terrier','Komondor|Komondor','Kuvasz|Kuvasz','Labrador retriever|Labrador retriever','Lakeland terrier|Lakeland terrier','Lhasa apso|Lhasa apso','Maltese|Maltese','Manchester terrier|Manchester terrier','Mastiff|Mastiff','Mexican hairless|Mexican hairless','Newfoundland|Newfoundland','Norwegian elkhound|Norwegian elkhound','Otterhound|Otterhound','Papillon|Papillon','Pekingese|Pekingese','Pointer|Pointer','Pomeranian|Pomeranian','Poodle|Poodle','Pug|Pug','Puli|Puli','Rhodesian ridgeback|Rhodesian ridgeback','Rottweiler|Rottweiler','Saint Bernard|Saint Bernard','Saluki|Saluki','Samoyed|Samoyed','Schipperke|Schipperke','Schnauzer|Schnauzer','Scottish deerhound|Scottish deerhound','Scottish terrier|Scottish terrier','Sealyham terrier|Sealyham terrier','Shetland sheepdog|Shetland sheepdog','Shih tzu|Shih tzu','Siberian husky|Siberian husky','Silky terrier|Silky terrier','Skye terrier|Skye terrier','Staffordshire bull terrier|Staffordshire bull terrier','Soft-coated wheaten terrier|Soft-coated wheaten terrier','Sussex spaniel|Sussex spaniel','Spitz|Spitz','Tibetan terrier|Tibetan terrier','Vizsla|Vizsla','Weimaraner|Weimaraner','Welsh terrier|Welsh terrier','West Highland white terrier|West Highland white terrier','Whippet|Whippet'];
      }
        else if(s1.value == 'Cat')
      {
        var optionArray = ['American Shorthair|American Shorthair','Abyssinian|Abyssinian','American Curl|American Curl','American Bobtail|American Bobtail','American Wirehair|American Wirehair','Aegean|Aegean','Australian Mist|Australian Mist','American Polydactyl|American Polydactyl','Arabian Mau|Arabian Mau','Asian cat|Asian cat','Asian Semi-longhair|Asian Semi-longhair','British Shorthair|British Shorthair','Bengal|Bengal','Burmese|Burmese','Birman|Birman','Balinese|Balinese','Bombay|Bombay','Burmilla|Burmilla','Bambino|Bambino','Brazilian Shorthair|Brazilian Shorthair','British Longhair|British Longhair','Cornish Rex|Cornish Rex','Colorpoint Shorthair|Colorpoint Shorthair','Chartreux|Chartreux','California Spangled|California Spangled','Cymric|Cymric','Chantilly-Tiffany|Chantilly-Tiffany','Chausie|Chausie','Cheetoh|Cheetoh','Cyprus|Cyprus','Devon Rex|Devon Rex','Domestic shorthair cat|Domestic shorthair cat','Donskoy|Donskoy','Dwelf|Dwelf','Exotic Shorthair|Exotic Shorthair','Egyptian Mau|Egyptian Mau','European Burmese|European Burmese','Elf cat|Elf cat','Havana Brown|Havana Brown','Himalayan|Himalayan','Japanese Bobtail|Japanese Bobtail','Javanese|Javanese','Khao Manee|Khao Manee','Korat|Korat','Lykoi|Lykoi','LaPerm|LaPerm','Maine Coon|Maine Coon','Manx|Manx','Munchkin|Munchkin','Minskin|Minskin','Norwegian Forest Cat|Norwegian Forest Cat','Nebelung|Nebelung','Napoleon cat|Napoleon cat','Oriental|Oriental','Ocicat|Ocicat','Persian|Persian','Pixie-bob|Pixie-bob','Peterbald|Peterbald','Puspin|Puspin','Ragdoll|Ragdoll','Russian Blue|Russian Blue','Ragamuffin|Ragamuffin','Sphynx|Sphynx','Scottish Fold|Scottish Fold','Siamese|Siamese','Siberian|Siberian','Selkirk Rex|Selkirk Rex','Somali|Somali','Singapura|Singapura','Savannah|Savannah','Snowshoe|Snowshoe','Sokoke|Sokoke','Serengeti cat|Serengeti cat','Tonkinese|Tonkinese','Turkish Angora|Turkish Angora','Turkish Van|Turkish Van','Toyger|Toyger','Thai cat|Thai cat','Ukrainian Levkoy|Ukrainian Levkoy','York Chocolate|York Chocolate'];
        }
          for (var option in optionArray)
         {
          var pair = optionArray[option].split("|");
          var newoption = document.createElement("option");
          newoption.value = pair[0];
          newoption.innerHTML = pair[1];
          s2.options.add(newoption);
         }
        }
                                            
        </script>

          <script>
          function breedFunction() {
          var breed = document.getElementById('slct2').value;
          document.getElementById('pet_breed2').value = breed;
          }
          </script>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Gender<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
        <select class="form-control" style="background-color:#fff;width:440px;" required="required" required="required" name="Gender" id="pet_sex2">
          <option></option>
          <option>Male</option>
          <option>Female</option>
        </select>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Age</label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_age2" name="Age" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align"></label>&nbsp;&nbsp;&nbsp;<input type="number" min="1" onclick="ageFunction()" onkeyup="ageFunction()" id="age" class="form-control" style="width:223px"/>
        <div class="col-md-6 col-sm-6">
               <select class="form-control" onclick="ageFunction()"  id ="mnyr" style="width:223px">
               <option value=""></option>
               <option value="month">Month</option>
               <option value="year">Year</option>
               </select>
        </div>
        </div>

        <script>
         function ageFunction() {
         var age = document.getElementById('age').value;
         var mnyr = document.getElementById('mnyr').value;
         var petage = age +" "+ mnyr;
        document.getElementById('pet_age2').value = petage;
        }
        </script>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Color<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input type="text" class="form-control" id="pet_color2" name="Color" style="background-color:#fff;width:440px;" required="required" onkeypress="return /[a-z\s*]/i.test(event.key)"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Weight<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_weight2" name="Weight" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align"></label>&nbsp;&nbsp;&nbsp;<input type="number" min="1" onclick="weightFunction()" onkeyup="weightFunction()" id="weight" class="form-control" style="width:223px"/>
        <div class="col-md-6 col-sm-6">
             <select class="form-control" onclick="weightFunction()" id ="kgpd" style="width:223px">
             <option value=""></option>
             <option value="kg">Kilogram</option>
             <option value="lb">Pound</option>
             </select>
        </div>
        </div>
                                        
        <script>
        function weightFunction() {
        var weight = document.getElementById('weight').value;
        var kgpd = document.getElementById('kgpd').value;
        var petweight = weight +" "+ kgpd;
        document.getElementById('pet_weight2').value = petweight;
        }
        </script>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Status<span class="required"></span></label>&nbsp;&nbsp;&nbsp;
        <div class="d-flex align-items-center" style="">
        <input type="checkbox" style="width:20px;height:20px" name="SpayNeuter" value="✔">&nbsp;Spay/Neuter&emsp;<input type="checkbox" style="width:20px;height:20px" name="rabiesVaccine" value="✔">&nbsp;Rabies Vaccine&emsp;<input type="checkbox" style="width:20px;height:20px" name="Deworming" value="✔">&nbsp;Deworming&emsp;<input type="checkbox" style="width:20px;height:20px" name="threeinoneVaccine" value="✔">&nbsp;3 in 1 Vaccine
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align"><span class="required"></span></label>&nbsp;&nbsp;&nbsp;
        <div class="d-flex align-items-center" style="">
        <input readonly id="spay_neuter2" style="width:20px;height:20px;">&nbsp;Spay/Neuter&emsp;<input readonly id="rabies_vaccine2" style="width:20px;height:20px">&nbsp;Rabies Vaccine&emsp;<input readonly id="deworming2" style="width:20px;height:20px">&nbsp;Deworming&emsp;<input readonly id="three_in_one_vaccine2" style="width:20px;height:20px">&nbsp;3 in 1 Vaccine
        </div>
        </div>

        <div class="field item form-group">
				<label class="col-form-label col-md-3 col-sm-3  label-align">Pet Diet</label>
			  <div class="col-md-6 col-sm-6">
        <textarea id="pet_diet2" name="petDiet" style="width:440px;height:100px;padding-top:-5px;background-color: #fff;resize: none;font-size:16px;"></textarea>
        </div>
				</div>

        <div class="field item form-group">
											<label class="col-form-label col-md-3 col-sm-3  label-align">Time Period<span class="required"></span></label>
											<div class="col-md-6 col-sm-6">
												<select class="form-control" onChange="jsFunction" required="required" id="totalDays" name="totalDays" style="width:440px">
													<option></option>
													<option value="1">1 day</option>
                          <option value="2">2 days</option>
                          <option value="3">3 days</option>
                          <option value="4">4 days</option>
                          <option value="5">5 days</option>
                          <option value="6">6 days</option>
                          <option value="7">1 week</option>
                          <option value="14">2 weeks</option>
                          <option value="21">3 weeks</option>
                          <option value="30">1 month</option>
                          <option value="60">2 months</option>
                          <option value="90">3 months</option>
                          <option value="120">4 months</option>
                          <option value="150">5 months</option>
                          <option value="180">6 months</option>
												</select>
											</div>
										</div>

                    <script>
                      var myselect = document.getElementById("totalDays");
                      myselect.onchange = function(){
                      document.getElementById("selected_Range2").value = myselect.options[myselect.selectedIndex].text;
                      };  
                    </script>

                    <div hidden class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align"><span class="required"></span></label>
                        <div class="col-md-6 col-sm-6">
                          <input readonly id="selected_Range2" name="selectedRange" style="background-color:#fff;" class="form-control"/>
                        </div>
                    </div>
       
                    <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Charge<span class="required"></span></label>
                    <div class="col-md-6 col-sm-6">
                          <input type="number" class="form-control" id="charge2" name="Charge" style="background-color:#fff;width:440px;" required="required" min="1" placeholder="₱.00"/>
                    </div>
                    </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Reason for Adoption<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
        <textarea id="pet_description2" name="Description" style="width:440px;height:100px;padding-top:-5px;background-color: #fff;resize: none;font-size:16px;" onkeyup="edit()"></textarea>
        </div>
        </div>

        <script>
          function edit() {
          if(document.getElementById("pet_description2").value==="") { 
                    document.getElementById('Edit').disabled = true; 
                } else { 
                    document.getElementById('Edit').disabled = false;
                }
            }
        </script>
       
        <div class="ln_solid">
        <br>
        <div class="form-group" style="text-align: center">
        <div class="col-md-6 offset-md-3">
               <button id="Edit" name ="Edit" type='submit' class="btn btn-success" style="background-color:#00cdc1;border:#00cdc1;width:130px;height:40px;font-size:18px;">Save</button>
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
$petID=$_POST['petID'];
$PostPicture=$_POST['PostPicture'];

$sql="update postpet set 
petPicture=:PostPicture
where petID=:petID";

$query=$dbh->prepare($sql);
$query->bindParam(':petID',$petID,PDO::PARAM_STR);  
$query->bindParam(':PostPicture',$PostPicture,PDO::PARAM_STR);
$query->execute();

echo '<script>alert("Your Post Picture 1 Changed Successfully!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-PostCatsShorttermcare.php'</script>";
}
?>
	<!-- //Change Post Picture Code -->

  <!-- Modal Change Post Picture -->
<div class="modal fade" id="ChangePostPicture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Change Post Picture 1</h4>
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
					    <input hidden name="petID" id="pet_id3" class="form-control" id="success">
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

   <!-- Change Post Picture 2 Code -->
   <?php
if(isset($_POST['btnChangePostPicture2']))
{
$petID=$_POST['petID'];
$PostPicture=$_POST['PostPicture'];

$sql="update postpet set 
petPicture2=:PostPicture
where petID=:petID";

$query=$dbh->prepare($sql);
$query->bindParam(':petID',$petID,PDO::PARAM_STR);  
$query->bindParam(':PostPicture',$PostPicture,PDO::PARAM_STR);
$query->execute();

echo '<script>alert("Your Post Picture 2 Changed Successfully!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-PostCatsShorttermcare.php'</script>";
}
?>
	<!-- //Change Post Picture 2 Code -->

   <!-- Modal Change Post Picture 2 -->
<div class="modal fade" id="ChangePostPicture2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Change Post Picture 2</h4>
        <button type="button" id="selected_picture_close2" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div class="modal-header">
              <img id="post_picture2" src="/developgetpet/web/images/" style="width:150px;height:150px;margin-left:125px;margin-top:-20px;" >
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
              <input type="file" onchange="readURL(this);" name="PostPicture" id="PostPicture2" style="width:250px;height:40px;border:none;margin-left:160px;margin-top:5px;" placeholder="Upload Photo">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden name="petID" id="pet_id32" class="form-control" id="success">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="picture_file2" class="form-control" id="success">
				</div><br>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="btnChangePostPicture2" id="btnChangePostPicture2" type="submit" type='submit' class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;" disabled>Save</button>
              <button type='reset' id="selected_picture_cancel2" class="btn btn-round btn-danger" name="Cancel" class="close" data-dismiss="modal" style="width:90px;height:37px;">Cancel</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Change Post Picture 2 -->

   <!-- Change Post Picture 3 Code -->
   <?php
if(isset($_POST['btnChangePostPicture3']))
{
$petID=$_POST['petID'];
$PostPicture=$_POST['PostPicture'];

$sql="update postpet set 
petPicture3=:PostPicture
where petID=:petID";

$query=$dbh->prepare($sql);
$query->bindParam(':petID',$petID,PDO::PARAM_STR);  
$query->bindParam(':PostPicture',$PostPicture,PDO::PARAM_STR);
$query->execute();

echo '<script>alert("Your Post Picture 3 Changed Successfully!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-PostCatsShorttermcare.php'</script>";
}
?>
	<!-- //Change Post Picture 3 Code -->

   <!-- Modal Change Post Picture 3 -->
<div class="modal fade" id="ChangePostPicture3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Change Post Picture 3</h4>
        <button type="button" id="selected_picture_close3" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div class="modal-header">
              <img id="post_picture3" src="/developgetpet/web/images/" style="width:150px;height:150px;margin-left:125px;margin-top:-20px;" >
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
              <input type="file" onchange="readURL(this);" name="PostPicture" id="PostPicture3" style="width:250px;height:40px;border:none;margin-left:160px;margin-top:5px;" placeholder="Upload Photo">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden name="petID" id="pet_id33" class="form-control" id="success">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="picture_file3" class="form-control" id="success">
				</div><br>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="btnChangePostPicture3" id="btnChangePostPicture3" type="submit" type='submit' class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;" disabled>Save</button>
              <button type='reset' id="selected_picture_cancel3" class="btn btn-round btn-danger" name="Cancel" class="close" data-dismiss="modal" style="width:90px;height:37px;">Cancel</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Change Post Picture 3 -->

  <!-- Change Post Picture 4 Code -->
  <?php
if(isset($_POST['btnChangePostPicture4']))
{
$petID=$_POST['petID'];
$PostPicture=$_POST['PostPicture'];

$sql="update postpet set 
petPicture4=:PostPicture
where petID=:petID";

$query=$dbh->prepare($sql);
$query->bindParam(':petID',$petID,PDO::PARAM_STR);  
$query->bindParam(':PostPicture',$PostPicture,PDO::PARAM_STR);
$query->execute();

echo '<script>alert("Your Post Picture 4 Changed Successfully!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-PostCatsShorttermcare.php'</script>";
}
?>
	<!-- //Change Post Picture 4 Code -->

   <!-- Modal Change Post Picture 4 -->
<div class="modal fade" id="ChangePostPicture4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Change Post Picture 4</h4>
        <button type="button" id="selected_picture_close4" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div class="modal-header">
              <img id="post_picture4" src="/developgetpet/web/images/" style="width:150px;height:150px;margin-left:125px;margin-top:-20px;" >
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
              <input type="file" onchange="readURL(this);" name="PostPicture" id="PostPicture4" style="width:250px;height:40px;border:none;margin-left:160px;margin-top:5px;" placeholder="Upload Photo">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden name="petID" id="pet_id34" class="form-control" id="success">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="picture_file4" class="form-control" id="success">
				</div><br>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="btnChangePostPicture4" id="btnChangePostPicture4" type="submit" type='submit' class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;" disabled>Save</button>
              <button type='reset' id="selected_picture_cancel4" class="btn btn-round btn-danger" name="Cancel" class="close" data-dismiss="modal" style="width:90px;height:37px;">Cancel</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Change Post Picture 4 -->

  <!-- Modal View Post Picture -->
<div class="modal fade" id="ViewPostPicture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
      <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Photo 1</h4>
        <button type="button" id="selected_picture_close" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div class="modal-header">
              <img id="view_photo" src="/developgetpet/web/images/" style="width:400px;height:300px;margin-top:-20px;" >
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="photo_file" class="form-control" id="success">
				</div><br>
        <div style="text-align: center" class="form-group">
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal View Post Picture -->

   <!-- Modal View Post Picture 2 -->
<div class="modal fade" id="ViewPostPicture2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
      <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Photo 2</h4>
        <button type="button" id="selected_picture_close" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div class="modal-header">
              <img id="view_photo2" src="/developgetpet/web/images/" style="width:400px;height:300px;margin-top:-20px;" >
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="photo_file2" class="form-control" id="success">
				</div><br>
        <div style="text-align: center" class="form-group">
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal View Post Picture 2 -->

   <!-- Modal View Post Picture 3 -->
<div class="modal fade" id="ViewPostPicture3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
      <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Photo 3</h4>
        <button type="button" id="selected_picture_close" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div class="modal-header">
              <img id="view_photo3" src="/developgetpet/web/images/" style="width:400px;height:300px;margin-top:-20px;" >
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="photo_file3" class="form-control" id="success">
				</div><br>
        <div style="text-align: center" class="form-group">
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal View Post Picture 3 -->

  <!-- Modal View Post Picture 4 -->
<div class="modal fade" id="ViewPostPicture4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
      <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Photo 4</h4>
        <button type="button" id="selected_picture_close" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div class="modal-header">
              <img id="view_photo4" src="/developgetpet/web/images/" style="width:400px;height:300px;margin-top:-20px;" >
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="photo_file4" class="form-control" id="success">
				</div><br>
        <div style="text-align: center" class="form-group">
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal View Post Picture 4 -->

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
              <img <?php echo"<img src = '/developgetpet/web/images/$result->ownerPicture'";?> id ="profile_picture" alt="avatar" style="width:150px;height:150px;margin-left:125px;margin-top:-20px;" class="rounded-circle img-responsive">
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
              <input type="file" name="Picture" id="Picture" style="width:250px;height:40px;border:none;margin-left:160px;margin-top:5px;" placeholder="Upload Photo">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input type="hidden" name="ownerID" value="<?php echo ( $result->ownerID);?>" required = "required" class="form-control" id="success">
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
$(".adoptbtn").click(function () {
var master_id = $(this).attr('data-master-id');
var pet_id = $(this).attr('data-pet-id');
var pet_name = $(this).attr('data-pet-name');
var pet_type = $(this).attr('data-pet-type');
var pet_breed = $(this).attr('data-pet-breed');
var pet_description = $(this).attr('data-pet-description');
$('#AdoptModal').modal('show');
$("#master_id").val( master_id );
$("#pet_id").val( pet_id );
$("#pet_name").val( pet_name );
$("#pet_type").val( pet_type );
$("#pet_breed").val( pet_breed );
$("#pet_description").val( pet_description );

});
</script>

<script type="text/javascript">
  $(".viewbtn").click(function () {
    var petid = $(this).attr('data-pet-id');
    var petname = $(this).attr('data-pet-name');
    var pettype = $(this).attr('data-pet-type');
    var petbreed = $(this).attr('data-pet-breed');
    var petsex = $(this).attr('data-pet-gender');
    var petage = $(this).attr('data-pet-age');
    var petcolor = $(this).attr('data-pet-color');
    var petweight = $(this).attr('data-pet-weight');
    var spayneuter = $(this).attr('data-pet-spayneuter');
    var rabiesvaccine = $(this).attr('data-pet-rabiesvaccine');
    var deworming = $(this).attr('data-pet-deworming');
    var threeinonevaccine = $(this).attr('data-pet-threeinonevaccine');
    var petdiet = $(this).attr('data-pet-diet');
    var selectedrange = $(this).attr('data-selected-range');
    var charge = $(this).attr('data-charge');
    var petdescription = $(this).attr('data-pet-description');
    var petstatus = $(this).attr('data-pet-status');
    $('#View').modal('show');
    $("#petid").val( petid );
    $("#petname").val( petname );
    $("#pettype").val( pettype );
    $("#petbreed").val( petbreed );
    $("#petsex").val( petsex );
    $("#petage").val( petage );
    $("#petcolor").val( petcolor );
    $("#petweight").val( petweight );
    $("#spayneuter").val( spayneuter );
    $("#rabiesvaccine").val( rabiesvaccine );
    $("#deworming").val( deworming );
    $("#threeinonevaccine").val( threeinonevaccine );
    $("#petdiet").val( petdiet );
    $("#selectedrange").val( selectedrange );
    $("#charge").val( charge );
    $("#petdescription").val( petdescription );
    $("#petstatus").val( petstatus );
  });
  </script>

<script type="text/javascript">
$(".Ppost").click(function () {
var pet_id3 = $(this).attr('data-pet-id');
$('#ChangePostPicture').modal('show');
$("#pet_id3").val( pet_id3 );
var picture_file = $(this).attr('data-pet-picture');
$('#picture_file').val( picture_file );
document.getElementById('post_picture').src="/developgetpet/web/images/"+""+picture_file;
});
</script>

<script type="text/javascript">
  $(".Epost").click(function () {
    var pet_id2 = $(this).attr('data-pet-id');
    var pet_name2 = $(this).attr('data-pet-name');
    var pet_type2 = $(this).attr('data-pet-type');
    var pet_breed2 = $(this).attr('data-pet-breed');
    var pet_sex2 = $(this).attr('data-pet-gender');
    var pet_age2 = $(this).attr('data-pet-age');
    var pet_color2 = $(this).attr('data-pet-color');
    var pet_weight2 = $(this).attr('data-pet-weight');
    var spay_neuter2 = $(this).attr('data-pet-spayneuter');
    var rabies_vaccine2 = $(this).attr('data-pet-rabiesvaccine');
    var deworming2 = $(this).attr('data-pet-deworming');
    var three_in_one_vaccine2 = $(this).attr('data-pet-threeinonevaccine');
    var pet_diet2 = $(this).attr('data-pet-diet');
    var totalDays = $(this).attr('data-total-days');
    var selected_Range2 = $(this).attr('data-selected-range');
    var charge2 = $(this).attr('data-charge');
    var pet_description2 = $(this).attr('data-pet-description');
    $('#EditPost').modal('show');
    $("#pet_id2").val( pet_id2 );
    $("#pet_name2").val( pet_name2 );
    $("#pet_type2").val( pet_type2 );
    $("#pet_breed2").val( pet_breed2 );
    $("#pet_sex2").val( pet_sex2 );
    $("#pet_age2").val( pet_age2 );
    $("#pet_color2").val( pet_color2 );
    $("#pet_weight2").val( pet_weight2 );
    $("#spay_neuter2").val( spay_neuter2 );
    $("#rabies_vaccine2").val( rabies_vaccine2 );
    $("#deworming2").val( deworming2 );
    $("#three_in_one_vaccine2").val( three_in_one_vaccine2 );
    $("#pet_diet2").val( pet_diet2 );
    $("#totalDays").val( totalDays );
    $("#selected_Range2").val( selected_Range2 );
    $("#charge2").val( charge2 );
    $("#pet_description2").val( pet_description2 );
  });
  </script>

<script type="text/javascript">
$(".Dpost").click(function () {
var pet_id1 = $(this).attr('data-pet-id');
$('#DeletePost').modal('show');
$("#pet_id1").val( pet_id1 );
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
  $(".stcbtn").filter(function(){
  return $(this).text().trim() == "<?php echo $ID?> Care Me";
  }).css('visibility', 'hidden');
  </script>

<script type="text/javascript">
$(".Epost").filter(function(){
return $(this).text().trim() != "<?php echo $ID?> Edit Post";
}).hide();
</script>

<script type="text/javascript">
$(".Dpost").filter(function(){
return $(this).text().trim() != "<?php echo $ID?> Delete Post";
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
   
    profile_picture.src = <?php echo"'/developgetpet/web/images/$result->ownerPicture'";?>;
    Picture.value = "";
    document.getElementById("profile").disabled = true;
});
  </script>

    <script type="text/javascript">
  $("#selected_profile_close").click(function () {
   
    profile_picture.src = <?php echo"'/developgetpet/web/images/$result->ownerPicture'";?>;
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