<?php 
session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
$ID=$_SESSION['orgID'];
$masterID=$_SESSION['masterID'];
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
            <div class="page-title">
              <div class="title_left">
              <br>
              </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel" style="border-radius:10px;border-width:2px;">
                  <div class="x_title">
                    <h2>Feedback</h2>
                    <ul class="nav navbar-right panel_toolbox">     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="text-align:center;">

            <div class="col-nd-4">
              <div class="card" style="border-radius:10px;border-width:2px;">                 
                  <div class="card-body" style="box-shadow: 8px 8px 8px #888888;border-radius:10px;">
                  <h3>User Feedback</h3>
                      <ul style="list-style:none;margin-left:-50px;"><br>
                      <li></li>
                      <?php

                      $sql1="SELECT * from register WHERE userID='$masterID'";
                      $query1=$dbh->prepare($sql1);
                      $query1->execute();
                      $userids=$query1->fetchALL(PDO::FETCH_OBJ);
                      $cnt1=1;
                      if($query1->rowCount()>0)
                      {
                        foreach($userids as $userid)
                      {
                        ?>

                      <img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:160px;height:150px;border-radius:10px;" class="rounded-circle img-responsive">&nbsp;<textarea disabled="yes" id="description" style="width:600px;height:150px;font-size:16px;border-radius:10px; background-color: #fff;resize: none;border-color:#73879C;color:#73879C;padding-top:20px" class="txtgrow" type='text'>Name: <?php echo ($userid->orgName);?><?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?>&#13;&#10;Address: <?php echo ( $userid->Address);?>&#13;&#10;Email: <?php echo ( $userid->Email);?>&#13;&#10;Contact No: <?php echo ( $userid->contactNo);?></textarea><br><br><br>

                      <?php $cnt1=$cnt1+1;}} ?>

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

                    <!-- User Feedback Code -->

                    <?php
                    date_default_timezone_set("Asia/Manila");
                    $date = date('m/d/Y h:i A', time());
                    ?>

                    <?php
                    if(isset($_POST['Send']))
                    {

                    if($Ratings=$_POST['Ratings'] == "")
                    {
                        echo '<script>alert("Give a rating!")</script>';
                        echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-Feedback.php'</script>";
                    }
                    if($Ratings=$_POST['Feedback'] == " ")
                    {
                        echo '<script>alert("Write a feedback!")</script>';
                        echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-Feedback.php'</script>";
                    }

                    else
                    {
                        $Ratings=($_POST['Ratings']);
                        $Feedback=($_POST['Feedback']);

                        $sql="INSERT INTO feedback(masterID,userID,Ratings,feedbackContent,feedbackDate)VALUES('$masterID','$ID',:Ratings,:Feedback,'$date')";
                        $query=$dbh->prepare($sql);
                        $query->bindParam(':Ratings',$Ratings,PDO::PARAM_STR);
                        $query->bindParam(':Feedback',$Feedback,PDO::PARAM_STR);
                        $query->execute();
    
                        echo '<script>alert("Successfully Sent!")</script>';
                        echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-ViewReviews.php'</script>";
                    }

                    }
                    ?>

                     <!-- //User Feedback Code -->

                      <form method="post">
                      <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Ratings:<span class="required"></span></label>&nbsp;&nbsp;&nbsp;
                      <div class="d-flex align-items-center" style="">
                      <input type="radio" style="width:20px;height:20px" name="Ratings" value="Very bad">&nbsp;Very bad&emsp;<input type="radio" style="width:20px;height:20px" name="Ratings" value="Poor">&nbsp;Poor&emsp;<input type="radio" style="width:20px;height:20px" name="Ratings" value="OK">&nbsp;OK&emsp;<input type="radio" style="width:20px;height:20px" name="Ratings" value="Good">&nbsp;Good&emsp;<input type="radio" style="width:20px;height:20px" name="Ratings" value="Excellent">&nbsp;Excellent
                      </div>
                      </div><br>
                      <div style="text-align: center" class="wrap-input100 validate-input">
                      <img <?php echo"<img src = '/developgetpet/web/images/$result->orgLogo'";?> alt="avatar" style="width:80px;height:80px;border-radius:10px;" class="rounded-circle img-responsive">&nbsp;<textarea id="message" name="Feedback" style="width:530px;height:100px;font-size:16px;border-radius:10px; background-color: #fff;resize: none;border-color:#73879C;color:#73879C;outline: none;" placeholder="Write a feedback.." class="txtgrow" type='text' onkeyup="request()"></textarea><br><br>
                      <script>
                        function request() {
                        if(document.getElementById("message").value==="") { 
                                    document.getElementById('send').disabled = true; 
                                } else { 
                                    document.getElementById('send').disabled = false;
                                }
                            }
                       </script>
				       </div>
                       <div style="text-align: center" class="form-group">
                       <div class="col-md-6 offset-md-3">
                       <button disabled class="btn btn-round btn-success" name="Send" id="send" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Send</button>
                       </div>
                       </div>
                       </form>
                      </ul>
              </div>
            </div>
          </div>
          <br>

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

<script type="text/javascript">
  $(".messagebtn").click(function () {
    var master_id2 = $(this).attr('data-master-id');
    var room_id2 = $(this).attr('data-room-id');
    $('#Message').modal('show');
    $("#master_id2").val( master_id2 );
    $("#room_id2").val( room_id2 );
  });
  </script>

<script type="text/javascript">
  $(".recievedbtn").click(function () {
    var history_id = $(this).attr('data-history-id');
    var pet_id = $(this).attr('data-pet-id');
    var master_id = $(this).attr('data-master-id');
    var user_id = $(this).attr('data-user-id');
    $('#Recieved').modal('show');
    $("#history_id").val( history_id );
    $("#pet_id").val( pet_id );
    $("#master_id").val( master_id );
    $("#user_id").val( user_id );
  });
  </script>

<script type="text/javascript">
  $(".viewbtn").click(function () {
    var pet_id1 = $(this).attr('data-pet-id');
    var pet_name1 = $(this).attr('data-pet-name');
    var pet_type1 = $(this).attr('data-pet-type');
    var pet_breed1 = $(this).attr('data-pet-breed');
    var pet_gender1 = $(this).attr('data-pet-gender');
    var pet_age1 = $(this).attr('data-pet-age');
    var pet_color1 = $(this).attr('data-pet-color');
    var pet_weight1 = $(this).attr('data-pet-weight');
    var spay_neuter1 = $(this).attr('data-pet-spayneuter');
    var rabies_vaccine1 = $(this).attr('data-pet-rabiesvaccine');
    var deworming1 = $(this).attr('data-pet-deworming');
    var three_in_one_vaccine1 = $(this).attr('data-pet-threeinonevaccine');
    var pet_diet1 = $(this).attr('data-pet-diet');
    var pet_description1 = $(this).attr('data-pet-description');
    var pet_status1 = $(this).attr('data-pet-status');
    var master_name1 = $(this).attr('data-master-name');
    $('#View').modal('show');
    $("#pet_id1").val( pet_id1 );
    $("#pet_name1").val( pet_name1 );
    $("#pet_type1").val( pet_type1 );
    $("#pet_breed1").val( pet_breed1 );
    $("#pet_gender1").val( pet_gender1 );
    $("#pet_age1").val( pet_age1 );
    $("#pet_color1").val( pet_color1 );
    $("#pet_weight1").val( pet_weight1 );
    $("#spay_neuter1").val( spay_neuter1 );
    $("#rabies_vaccine1").val( rabies_vaccine1 );
    $("#deworming1").val( deworming1 );
    $("#three_in_one_vaccine1").val( three_in_one_vaccine1 );
    $("#pet_diet1").val( pet_diet1 );
    $("#pet_description1").val( pet_description1 );
    $("#pet_status1").val( pet_status1 );
    $("#master_name1").val( master_name1 );
  });
  </script>

    <script>
        $(document).ready(function () {

            $('.cancelbtn').on('click', function () {

                $('#CancelRequest').modal('show');

                $tr = $(this).closest('ul');

                var data = $tr.children("li").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#request_id').val(data[0]);
                $('#pet_id').val(data[1]);
                $('#master_id').val(data[2]);
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
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>