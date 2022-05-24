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

                            <?php if ($result->notificationTitle == 'Admin Accepted Request') { ?>


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
            <br><br><br>

            <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
              <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
              </symbol>
              <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
              </symbol>
              <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </symbol>
            </svg>



            <?php
                        $sql="SELECT * from newsfeed ORDER BY newsfeedID DESC LIMIT 1";
                        $query=$dbh->prepare($sql);
                        $query->execute();
                        $results=$query->fetchALL(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount()>0)
                        {
                          foreach($results as $result)
                        {
                           ?>

            <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
              <strong><?php echo ($result->userName);?> has especially thanks!</strong> To <?php echo ($result->newsfeedDonatorsname);?> <?php echo ($result->newsfeedMessage);?>.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php $cnt=$cnt+1;
                            }
                        }                        
                        ?>


<!-- Button trigger modal -->
<?php
$query=$dbh->prepare("SELECT COUNT(postStatus) FROM post WHERE postStatus='Event' AND postStatus != 'Deleted' ");
$query->execute();

$event=$query->fetchColumn();

?>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  New Post for Event <span class="badge bg-danger" id="event"><?php echo ($event);?></span>
</button>
<script type="text/javascript">
  var number = <?php echo ($event);?>;
  if (number === 0){
  document.getElementById("event").style.display = "none";
  }
</script>
<!-- //Button trigger modal -->

<!-- Modal New Post for Event-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Post for Event</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <div class="x_content" style="text-align:center;">

      <?php
            $sql="SELECT * from post WHERE postStatus='Event' AND postStatus!='Deleted' ORDER BY postID DESC LIMIT 3";
            $query=$dbh->prepare($sql);
            $query->execute();
            $results=$query->fetchALL(PDO::FETCH_OBJ);
            $cnt=1;
            if($query->rowCount()>0)
            {
              foreach($results as $result)
            {
               ?>

                <div class="card" style="border-radius:10px;border-width:2px;box-shadow: 8px 8px 8px #888888;">
                <p id="description" style="font-size:16px;margin-top:10px;padding-left:10px;text-align:left;">WHAT:&nbsp&nbsp&nbsp<?php echo ($result->postTitle);?><br>WHEN:&nbsp&nbsp<?php echo ($result->postEventdate);?><br>WHERE:&nbsp<?php echo ($result->postLocation);?>
                                            <br>TIME:&nbsp&nbsp&nbsp<?php echo ($result->postTime);?></p>
                                            <br>
                  <img <?php echo"<img src = '/developgetpet/web/images/$result->postPicture'";?> class="card-img-top" alt="..." style="border-radius:10px;">

                  <div class="card-body">

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
                        
                                <label style="margin-top:10px;">Posted by: <img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:25px;height:25px;" class="rounded-circle img-responsive"> <?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?></label><br>
                                <label style=""><?php echo ($result->postDate);?></label><br>      
                                <?php $cnt1=$cnt1+1;}} ?>                
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

      </div>&nbsp<a href="http://localhost/developgetpet/dashboard/A.W.O-Events.php"><h2 style="text-align:center;">
      <button type="button" class="btn btn-round btn-success viewbtn" style="background-color:#00cdc1;border:#00cdc1;width:150px;">View More!</button></h2></a>
    </div>
  </div>
  </div>
</div>
<!-- //Modal New Post for Event-->
<br>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">

  <div class="carousel-inner" style="border-radius: 10px;">
    <div class="carousel-item active">
      <img src="images/slider1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <figure class="text-center" style="background-color:black;opacity:0.6;border: 1px solid black;border-radius:2px;">
  <blockquote class="blockquote">
    <p>We are GetPet were love is wanted!.</p>
    <h6>When you adopt, not only do you save your loving new companion, but you make space for other animals who desperately need it, creating a domino effect of goodness.</h6>
  </blockquote>
</figure>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/slider2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <figure class="text-center" style="background-color:black;opacity:0.6;border: 1px solid black;border-radius:2px;">
  <blockquote class="blockquote">
    <p>we provide care that your pet deserves!</p>
    <h6>A comprehensive guide to dog & cat care to make your pet feel your love.</h6>
  </blockquote>
</figure>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/slider3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
      <figure class="text-center" style="background-color:black;opacity:0.6;border: 1px solid black;border-radius:2px;">
  <blockquote class="blockquote">
    <p>Helping everyone, With everyone!</p>
    <h6>I care not for a man’s religion whose dog and cat are not the better for it.</h6>
  </blockquote>
</figure>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<br>
      
<!-- New Post For Adoption Code -->
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel" style="border-radius:10px;border-width:2px;">
                  <div class="x_title">
                    <h2>New Post For Adoption</h2>
                    <ul class="nav navbar-right panel_toolbox">     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="text-align:center;">

                  <?php
                        $sql="SELECT * from postpet WHERE petStatus='Available' AND postStatus='Adoption' AND postStatus!='Deleted' ORDER BY petID DESC LIMIT 3";
                        $query=$dbh->prepare($sql);
                        $query->execute();
                        $results=$query->fetchALL(PDO::FETCH_OBJ);
                        $cnt=1;
                        if($query->rowCount()>0)
                        {
                          foreach($results as $result)
                        {
                           ?> 
                                  <div class="row row-cols-1 col-md-4 g-4" style="margin-left:5px;">
                                    <div class="col">
                                      <div class="card h-100" style="box-shadow: 8px 8px 8px #888888;border-radius:10px;">
                                        <img <?php echo"<img src = '/developgetpet/web/images/$result->petPicture'";?> class="card-img-top" height="250" alt="..." style="border-radius:3px;">
                                        <div class="card-body">
                                          <h3 hidden class="card-title"><?php echo ($result->petID);?></h3>
                                          <h5 class="card-title" style="float:left;text-transform: uppercase;"><?php echo ($result->petName);?></h5>
                                          <br><br>
                                          <h4 class="card-title" style="float:left;"><?php echo ($result->petSex);?>(<?php echo ($result->petBreed);?>)</h4>
                                          <br><br>
                                          <p class="card-title" style="float:left;"><?php echo ($result->petStatus);?></p>
                                        </div>
                                        <div class="card-footer" style="background-color:#E4E4E4 ;">
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
                                            
                                            <label style="margin-top:10px;">Posted by: <img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:25px;height:25px;" class="rounded-circle img-responsive"> <?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?></label><br>
                                            <?php $cnt1=$cnt1+1;}} ?>
                                            <label style=""><?php echo ($result->postDate);?></label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  
                              <?php $cnt=$cnt+1;
                            }
                        } 
                        else
                        {
                          echo "There isn't any information displayed.";
                        }
                        ?>

                  </div>&nbsp
                    <h2 style="text-align:center;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color:#00cdc1;border:#00cdc1;">
                      Check Now!
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/A.W.O-DogsForAdoption.php"><li class="fas fa-dog"></li>&nbsp View Dog For Adoption</a>
                    <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/A.W.O-CatsForAdoption.php"><li class="fas fa-cat"></li>&nbsp View Cat For Adoption</a>
                    </ul>
                    </h2>
                  </div>
                </div>
              </div>
            </div>
            <!-- //New Post For Adoption Code -->

             <!-- New Post For Tips Advice & Articles Code -->
           <div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12">
    <div class="x_panel" style="border-radius:10px;border-width:2px;">
      <div class="x_title">
        <h2>New Post For Pet Care Tips</h2>
        <ul class="nav navbar-right panel_toolbox">     
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content" style="text-align:center;">

      <?php
            $sql="SELECT * from post WHERE postStatus!='Deleted' AND postStatus!='Event' ORDER BY postID DESC LIMIT 3";
            $query=$dbh->prepare($sql);
            $query->execute();
            $results=$query->fetchALL(PDO::FETCH_OBJ);
            $cnt=1;
            if($query->rowCount()>0)
            {
              foreach($results as $result)
            {
               ?>

                <div class="card" style="border-radius:10px;border-width:2px;box-shadow: 8px 8px 8px #888888;">
                  <h2 class="card-title" style="text-align:left;">&nbsp&nbspTitle: <?php echo ($result->postTitle);?></h2>
                  <img <?php echo"<img src = '/developgetpet/web/images/$result->postPicture'";?> class="card-img-top" onerror='this.style.display = "none"' alt="..." style="border-radius:10px;">

                  <div class="card-body">

                <div class="mb-3">
                  <h5><label for="exampleFormControlTextarea1" class="form-label" style="float:left;">Content:</label></h5>
                  <textarea class="form-control txtgrow" id="exampleFormControlTextarea1" rows="3" disabled style="border-radius:10px;"><?php echo ($result->postContent);?></textarea>
                </div>
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
                        
                                <label style="margin-top:10px;">Posted by: <img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:25px;height:25px;" class="rounded-circle img-responsive"> <?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?></label><br>
                                <label style=""><?php echo ($result->postDate);?></label><br>      
                                <?php $cnt1=$cnt1+1;}} ?>                
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

      </div>&nbsp<a href="http://localhost/developgetpet/dashboard/A.W.O-Tips.php"><h2 style="text-align:center;">
      <button type="button" class="btn btn-round btn-success viewbtn" style="background-color:#00cdc1;border:#00cdc1;width:150px;">Read More!</button></h2></a>
    </div>
  </div>
</div>            
<!-- New Post For Tips Advice & Articles Code -->              

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

        <!-- ModalProfile -->
<div class="modal fade" id="ProfilePicture" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Update Profile Picture</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div class="modal-header">
              <img <?php echo"<img src = '/developgetpet/web/images/$result->orgLogo'";?> alt="avatar" style="width:150px;height:150px;margin-left:125px;margin-top:-20px;border:1px solid #E5E4E2" class="rounded-circle img-responsive">
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
              <input type="file" name="Picture" id="Picture" style="width:250px;height:40px;border:none;margin-left:160px;margin-top:5px;" placeholder="Upload Photo">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input type="hidden" name="ownerID" value="<?php echo ( $result->orgID);?>" required = "required" class="form-control" id="success">
				</div><br>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="profile" type="submit" type='submit' class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Save</button>
              <button type='reset' class="btn btn-round btn-danger" name="Cancel" class="close" data-dismiss="modal" style="width:90px;height:37px;">Cancel</button>
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
              <img <?php echo"<img src = '/developgetpet/web/images/$result->orgLogo'";?> alt="avatar" style="width:150px;height:150px;margin-left:125px;margin-top:-20px;border:1px solid #E5E4E2" class="rounded-circle img-responsive">
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input type="hidden" name="orgID" value="<?php echo ( $result->orgID);?>" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Orgname" required="required" value="<?php echo ($result->orgName);?>" placeholder="Organization Name">
				</div><br>
        <div  style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;font-family:Arial;" type="text" name="ContactNo" onkeypress="isInputNumber(event)" maxlength="11" value="<?php echo ($result->orgContactNo);?>" placeholder="Contact No.">
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
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Address" required="required" value="<?php echo ($result->orgAddress);?>" placeholder="Address">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Email" required="required" value="<?php echo ($result->orgEmail);?>" placeholder="Email">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input" data-validate = "Valid username is required: ex@abc.xyz">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Username" required="required" value="<?php echo ($result->orgUsername);?>" placeholder="Username">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input" data-validate = "Valid username is required: ex@abc.xyz">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="Password" name="Password" required="required" value="<?php echo ($result->orgPassword);?>" placeholder="Password">
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
                        <a class="nav-link active" id="post-tips-tab" data-toggle="tab" href="#post_tips" role="tab" aria-controls="post-tips-tab" aria-selected="true">Post Tips</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" id="post-advice-tab" data-toggle="tab" href="#post_advice" role="tab" aria-controls="post-advice-tab" aria-selected="false">Post Advice</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" id="post-articles-tab" data-toggle="tab" href="#post_articles" role="tab" aria-controls="post-articles-tab" aria-selected="false">Post Articles</a>
                      </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="post_tips" role="tabpanel" aria-labelledby="post-tips-tab">
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
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-Tips.php'</script>";

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
                                                 <input class="form-control" name="Email" class='email' value="<?php echo ($result->orgEmail);?>"/></div>
                                         </div>
                                         <div hidden class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" name="ContactNo" class='ContactNo' value="<?php echo ($result->orgContactNo);?>"/></div>
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
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-Advice.php'</script>";

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
                                                 <textarea required="required" class="form-control" id="advice_content" name="Content" placeholder="Write an Advice...." data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10" style="height:200px;width:715px;border-radius:10px;"></textarea>
                    </div>
                    </div>
                                         
                                        <span class="section"></span>
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
                                                 <input class="form-control" name="Email" class='email' value="<?php echo ($result->orgEmail);?>"/></div>
                                         </div>
                                         <div hidden class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" name="ContactNo" class='ContactNo' value="<?php echo ($result->orgContactNo);?>"/></div>
                                         </div>                    
                                         
                                         <div style="text-align: center" class="form-group">
                                         <div class="col-md-6 offset-md-3">
                                                     <button disabled name ="Postadvice" type='submit' id="Postadvice" class="btn btn-success" style="background-color:#00cdc1;border:#00cdc1;width:130px;height:40px;">Post</button>
                                                     <button type='reset' class="btn btn-danger" name="Reset" style="width:120px;height:40px;">Reset</button>
                                         </div>
                                         </div>   
                                     </form>
                      </div>
                      <div class="tab-pane fade" id="post_articles" role="tabpanel" aria-labelledby="pos-articles-tab">
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
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-Articles.php'</script>";

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
                                                 <input class="form-control" name="Email" class='email' value="<?php echo ($result->orgEmail);?>"/></div>
                                         </div>
                                         <div hidden class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" name="ContactNo" class='ContactNo' value="<?php echo ($result->orgContactNo);?>"/></div>
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

    <script>
     $(function () {
    $("textarea.txtgrow").each(function () {
      this.style.height = 'auto';
      this.style.height = (this.scrollHeight+10)+'px';
    });
    });
    </script>

    <script>
   var img = document.getElementById("myImg");
img.onerror = function () { 
    this.style.display = "none";
}
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

    <script type="text/javascript">
    $(".unread").filter(function(){
    return $(this).text().trim() === "Read";
    }).hide();
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
    
    <script>
    var toastElList = [].slice.call(document.querySelectorAll('.toast'))
    var toastList = toastElList.map(function (toastEl) {
    return new bootstrap.Toast(toastEl, option)
    })
    </script>

    <script>
    var toastTrigger = document.getElementById('liveToastBtn')
var toastLiveExample = document.getElementById('liveToast')
if (toastTrigger) {
  toastTrigger.addEventListener('click', function () {
    var toast = new bootstrap.Toast(toastLiveExample)

    toast.show()
  })
}  
    </script>

    <script>
      toast.show()
    </script>

    <script>
      toast.hide()
    </script>

    <script>
      toast.dispose()
    </script>

    <script>
      var myCollapseEl = document.getElementById('myCollapse')

      myCollapseEl.addEventListener('shown.bs.collapse', function (event) {
      // Action to execute once the collapsible area is expanded
      })
    </script>

    <script>
      var myToastEl = document.getElementById('myToast')
myToastEl.addEventListener('hidden.bs.toast', function () {
  // do something...
})
    </script>


    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


  </body>
</html>
