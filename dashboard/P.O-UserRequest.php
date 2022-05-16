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

                </ul>

                  
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
              <div class="col-md-12 col-sm-12">
                <div class="x_panel" style="border-radius:10px;border-width:2px;">
                  <div class="x_title">
                    <h2>User Request</h2>
                    <ul class="nav navbar-right panel_toolbox">     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="text-align:center;">

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
                  <h3><?php echo ($result->requestTitle);?></h3>
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
                      
                      <?php if ($result->requestTitle == 'Short-Term Care Request') { ?>

                      <img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:160px;height:150px;border-radius:10px;" class="rounded-circle img-responsive">&nbsp;<textarea disabled="yes" id="description" style="width:600px;height:150px;font-size:16px;border-radius:10px; background-color: #fff;resize: none;border-color:#73879C;color:#73879C" class="txtgrow" type='text'>Name: <?php echo ($userid->orgName);?><?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?>&#13;&#10;Address: <?php echo ( $userid->Address);?>&#13;&#10;Email: <?php echo ( $userid->Email);?>&#13;&#10;Contact No: <?php echo ( $userid->contactNo);?>&#13;&#10;Reason for Short-term care: <?php echo ( $result->requestReason);?></textarea><br><br>

                      <img <?php echo"<img src = '/developgetpet/web/images/$petid->petPicture'";?> alt="avatar" style="width:200px;height:190px;border-radius:10px;">&nbsp;<textarea disabled="yes" id="description" style="width:600px;height:190px;font-size:16px;border-radius:10px; background-color: #fff;resize: none;border-color:#73879C;color:#73879C" type='text'>Pet Name: <?php echo ( $petid->petName);?>&#13;&#10;Pet Type: <?php echo ( $petid->petType);?>&#13;&#10;Pet Gender: <?php echo ( $petid->petSex);?>&#13;&#10;Pet Breed: <?php echo ( $petid->petBreed);?>&#13;&#10;Time Period: <?php echo ( $petid->selectedRange);?>&#13;&#10;Charge: ₱<?php echo ( $petid->Charge);?>.00&#13;&#10;Requested Date: <?php echo ($result->requestDate);?></textarea><br><br>

                      <div style="text-align: center" class="form-group">
                      <div class="col-md-6 offset-md-3">
                            <button name="profile" type="submit" type='submit' class="btn btn-round btn-success accept-shorttermcare-btn" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Accept</button>
                            <button type='reset' class="btn btn-round btn-danger decline-shorttermcare-btn" style="width:90px;height:37px;">Decline</button>
                      </div>
                      </div>
                      
                      <?php } ?>

                      <?php if ($result->requestTitle == 'Adoption Request') { ?>

                      <img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:160px;height:150px;border-radius:10px;" class="rounded-circle img-responsive">&nbsp;<textarea disabled="yes" id="description" style="width:600px;height:150px;font-size:16px;border-radius:10px; background-color: #fff;resize: none;border-color:#73879C;color:#73879C" class="txtgrow" type='text'>Name: <?php echo ($userid->orgName);?><?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?>&#13;&#10;Address: <?php echo ( $userid->Address);?>&#13;&#10;Email: <?php echo ( $userid->Email);?>&#13;&#10;Contact No: <?php echo ( $userid->contactNo);?>&#13;&#10;Reason for Adoption: <?php echo ( $result->requestReason);?></textarea><br><br>

                      <img <?php echo"<img src = '/developgetpet/web/images/$petid->petPicture'";?> alt="avatar" style="width:200px;height:180px;border-radius:10px;">&nbsp;<textarea disabled="yes" id="description" style="width:600px;height:180px;font-size:16px;border-radius:10px; background-color: #fff;resize: none;border-color:#73879C;color:#73879C;padding-top:15px" type='text'>Pet Name: <?php echo ( $petid->petName);?>&#13;&#10;Pet Type: <?php echo ( $petid->petType);?>&#13;&#10;Pet Gender: <?php echo ( $petid->petSex);?>&#13;&#10;Pet Breed: <?php echo ( $petid->petBreed);?>&#13;&#10;Requested Date: <?php echo ($result->requestDate);?></textarea><br><br>

                      <div style="text-align: center" class="form-group">
                      <div class="col-md-6 offset-md-3">
                            <button name="profile" type="submit" type='submit' class="btn btn-round btn-success accept-adoption-btn" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Accept</button>
                            <button type='reset' class="btn btn-round btn-danger decline-adoption-btn" style="width:90px;height:37px;">Decline</button>
                      </div>
                      </div>

                      <?php } ?>

                      <li><h3 hidden class="card-title"><?php echo ($petid->petType);?></h3></li>
                      <li><h3 hidden class="card-title"><?php echo ($petid->petName);?></h3></li>
                      <li><h3 hidden class="card-title"><?php echo ($petid->petBreed);?></h3></li>
                      <li><h3 hidden class="card-title"><?php echo ($petid->totalDays);?></h3></li>
                      <li><h3 hidden class="card-title"><?php echo ($result->requestDate);?></h3></li>
                      <?php $cnt2=$cnt2+1;}} ?>
                      <?php $cnt1=$cnt1+1;}} ?>
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
          echo "There is no display of user requests.";
          }
          ?> 
         <!-- //View User Request Code -->

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

 <!-- Decline Adoption Request Code-->          
 <?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>  
<?php
if(isset($_POST['DeclineAdoptionRequest']))
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
  
    $sql2="update notification set
    notificationStatus='Read'
    where activityID=:requestID";
    $query2=$dbh->prepare($sql2); 
    $query2->bindParam(':requestID',$requestID,PDO::PARAM_STR); 
    $query2->execute();
  
    $sql3="INSERT INTO notification(activityID,postID,notificationTitle,userID,masterID,notificationDescription,notificationDate,notificationStatus)VALUES(:requestID,:petID,'Disapproved Adoption Request','$ID',:userID,'Disapproved your adoption request','$date','Unread')";
    $query3=$dbh->prepare($sql3);
    $query3->bindParam(':requestID',$requestID,PDO::PARAM_STR);
    $query3->bindParam(':petID',$petID,PDO::PARAM_STR);
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
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-UserRequest.php'</script>"; 
}
?>
<!-- //Decline Adoption Request Code -->

 <!-- Modal Decline Adoption Request -->
 <div class="modal fade" id="ModalDeclineAdoptionRequest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
					    <input hidden id="request_id" name="requestID" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pet_id" name="petID" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_id" name="userID" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_name" name="userName" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_email" name="userEmail" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_address" name="userAddress" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_contactno" name="userContactNo" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pet_type" name="petType" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pet_name" name="petName" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pet_breed" name="petBreed" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="request_date" name="requestDate" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="DeclineAdoptionRequest" name="DeclineAdoptionRequest" type="submit" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Yes</button>
              <button type='reset' class="btn btn-round btn-danger" name="CancelRequest" class="close" data-dismiss="modal" style="width:90px;height:37px;">No</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Decline Adoption Request -->

   <!-- Decline Short-Term Care Request Code-->          
<?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>  
<?php
if(isset($_POST['DeclineShort-Term-CareRequest']))
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
  
    $sql2="update notification set
    notificationStatus='Read'
    where activityID=:requestID";
    $query2=$dbh->prepare($sql2); 
    $query2->bindParam(':requestID',$requestID,PDO::PARAM_STR); 
    $query2->execute();
  
    $sql3="INSERT INTO notification(activityID,postID,notificationTitle,userID,masterID,notificationDescription,notificationDate,notificationStatus)VALUES(:requestID,:petID,'Disapproved Short-Term Care Request','$ID',:userID,'Disapproved your short-term care request','$date','Unread')";
    $query3=$dbh->prepare($sql3);
    $query3->bindParam(':requestID',$requestID,PDO::PARAM_STR);
    $query3->bindParam(':petID',$petID,PDO::PARAM_STR);
    $query3->bindParam(':userID',$userID,PDO::PARAM_STR);
    $query3->execute();
  
    $sql4="INSERT INTO history(Title,requestID,masterID,userID,userName,userEmail,userAddress,userContactNo,petID,petType,petName,petBreed,requestDate,approvalDate,Status)VALUES('Short-Term Care',:requestID,'$ID',:userID,:userName,:userEmail,:userAddress,:userContactNo,:petID,:petType,:petName,:petBreed,:requestDate,'$date','Disapproved')";
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
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-UserRequest.php'</script>";
}
?>
<!-- //Decline Short-Term Care Request Code -->

  <!-- Modal Decline Short-Term Care Request -->
 <div class="modal fade" id="ModalDeclineShort-Term-CareRequest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
					    <input hidden id="request_id1" name="requestID" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pet_id1" name="petID" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_id1" name="userID" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_name1" name="userName" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_email1" name="userEmail" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_address1" name="userAddress" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_contactno1" name="userContactNo" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pet_type1" name="petType" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pet_name1" name="petName" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pet_breed1" name="petBreed" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="request_date1" name="requestDate" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="DeclineShort-Term-CareRequest" id="DeclineShort-Term-CareRequest" type="submit" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Yes</button>
              <button type='reset' class="btn btn-round btn-danger" name="CancelRequest" class="close" data-dismiss="modal" style="width:90px;height:37px;">No</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Decline Short-Term Care Request -->

<!-- Accept Adoption Request Code-->         
<?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>  
<?php
if(isset($_POST['AcceptAdoptionRequest']))
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
  
    $sql3="INSERT INTO notification(activityID,postID,notificationTitle,userID,masterID,notificationDescription,notificationDate,notificationStatus)VALUES(:requestID,:petID,'Approved Adoption Request','$ID',:userID,'Approved your adoption request','$date','Unread')";
    $query3=$dbh->prepare($sql3);
    $query3->bindParam(':requestID',$requestID,PDO::PARAM_STR);
    $query3->bindParam(':petID',$petID,PDO::PARAM_STR);
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
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-UserRequest.php'</script>";
}
?>
<!-- //Accept Adoption Request Code -->

  <!-- Modal Accept Adoption Request -->
<div class="modal fade" id="ModalAcceptAdoptionRequest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
					    <input hidden id="petid" name="petID" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="userid" name="userID" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="username" name="userName" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="useremail" name="userEmail" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="useraddress" name="userAddress" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="usercontactno" name="userContactNo" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pettype" name="petType" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="petname" name="petName" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="petbreed" name="petBreed" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="requestdate" name="requestDate" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="AcceptAdoptionRequest" id="AcceptAdoptionRequest" type="submit" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Yes</button>
              <button type='reset' class="btn btn-round btn-danger" name="CancelRequest" class="close" data-dismiss="modal" style="width:90px;height:37px;">No</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Accept Adoption Request -->

<!-- Accept Short-Term Care Request Code -->
<?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>  
<?php
if(isset($_POST['AcceptShort-Term-CareRequest']))
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
    $totalDays=($_POST['totalDays']);
    $requestDate=($_POST['requestDate']);
  
    $sql="update request set
    approvalDate='$date', requestStatus='Approved'
    where requestID=:requestID";
    $query=$dbh->prepare($sql); 
    $query->bindParam(':requestID',$requestID,PDO::PARAM_STR); 
    $query->execute();
  
    $sql1="update postpet set
    petStatus='In Short-term care'
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
  
    $sql3="INSERT INTO notification(activityID,postID,notificationTitle,userID,masterID,notificationDescription,notificationDate,notificationStatus)VALUES(:requestID,:petID,'Approved Short-Term Care Request','$ID',:userID,'Approved your short-term care request','$date','Unread')";
    $query3=$dbh->prepare($sql3);
    $query3->bindParam(':requestID',$requestID,PDO::PARAM_STR);
    $query3->bindParam(':petID',$petID,PDO::PARAM_STR);
    $query3->bindParam(':userID',$userID,PDO::PARAM_STR);
    $query3->execute();

    date_default_timezone_set("Asia/Manila");
    $approval_date = date("m/d/Y");
    $day = $totalDays;
    $returndate=date('m/d/Y', strtotime("+$day days"));
  
    $sql4="INSERT INTO history(Title,requestID,masterID,userID,userName,userEmail,userAddress,userContactNo,petID,petType,petName,petBreed,requestDate,approvalDate,returnDate,Status)VALUES('Short-Term Care',:requestID,'$ID',:userID,:userName,:userEmail,:userAddress,:userContactNo,:petID,:petType,:petName,:petBreed,:requestDate,'$date','$returndate','Approved')";
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
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-UserRequest.php'</script>";
}
?>
<!-- //Accept Short-Term Care Request Code -->

  <!-- Modal Accept Short-Term-Care Request -->
<div class="modal fade" id="ModalAcceptShort-Term-CareRequest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
					    <input hidden id="requestid1" name="requestID" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="petid1" name="petID" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="userid1" name="userID" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="username1" name="userName" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="useremail1" name="userEmail" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="useraddress1" name="userAddress" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="usercontactno1" name="userContactNo" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pettype1" name="petType" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="petname1" name="petName" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="petbreed1" name="petBreed" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="totaldays1" name="totalDays" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="requestdate1" name="requestDate" required = "required" class="form-control">
				</div>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="AcceptShort-Term-CareRequest" id="AcceptShort-Term-CareRequest" type="submit" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Yes</button>
              <button type='reset' class="btn btn-round btn-danger" name="CancelRequest" class="close" data-dismiss="modal" style="width:90px;height:37px;">No</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Accept Short-Term-Care Request -->

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
      this.style.height = (this.scrollHeight+10)+'px';
    });
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

            $('.decline-adoption-btn').on('click', function () {

                $('#ModalDeclineAdoptionRequest').modal('show');

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
                $('#request_date').val(data[11]);
            });
        });
    </script>

<script>
        $(document).ready(function () {

            $('.decline-shorttermcare-btn').on('click', function () {

                $('#ModalDeclineShort-Term-CareRequest').modal('show');

                $tr = $(this).closest('ul');

                var data = $tr.children("li").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#request_id1').val(data[0]);
                $('#pet_id1').val(data[1]);
                $('#user_id1').val(data[2]);
                $('#user_name1').val(data[3]);
                $('#user_email1').val(data[4]);
                $('#user_address1').val(data[5]);
                $('#user_contactno1').val(data[6]);
                $('#pet_type1').val(data[7]);
                $('#pet_name1').val(data[8]);
                $('#pet_breed1').val(data[9]);
                $('#request_date1').val(data[11]);
            });
        });
    </script>

<script>
        $(document).ready(function () {

            $('.accept-adoption-btn').on('click', function () {

                $('#ModalAcceptAdoptionRequest').modal('show');

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
                $('#requestdate').val(data[11]);
            });
        });
    </script>

<script>
        $(document).ready(function () {

            $('.accept-shorttermcare-btn').on('click', function () {

                $('#ModalAcceptShort-Term-CareRequest').modal('show');

                $tr = $(this).closest('ul');

                var data = $tr.children("li").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#requestid1').val(data[0]);
                $('#petid1').val(data[1]);
                $('#userid1').val(data[2]);
                $('#username1').val(data[3]);
                $('#useremail1').val(data[4]);
                $('#useraddress1').val(data[5]);
                $('#usercontactno1').val(data[6]);
                $('#pettype1').val(data[7]);
                $('#petname1').val(data[8]);
                $('#petbreed1').val(data[9]);
                $('#totaldays1').val(data[10]);
                $('#requestdate1').val(data[11]);
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