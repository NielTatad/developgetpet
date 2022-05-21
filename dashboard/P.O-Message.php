<?php 
session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
$ID=$_SESSION['ownerID'];
$masterID=$_SESSION['masterID'];
$roomID=$_SESSION['roomID'];
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

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" integrity="sha512-vEia6TQGr3FqC6h55/NdU3QSM5XR6HSl5fW71QTKrgeER98LIMGwymBVM867C1XHIkYD9nMTfWK2A0xcodKHNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                        <li><a href="http://localhost/developgetpet/dashboard/P.O-DogsForAdoption.php">Dog</a></li>
                        <li><a href="http://localhost/developgetpet/dashboard/P.O-CatsForAdoption.php">Cat</a></li>
                      </ul>
                    </li>

                    <li><a >Pet For Short-Term Care</a>
                      <ul class="nav child_menu">
                        <li><a href="http://localhost/developgetpet/dashboard/P.O-DogsForShorttermcare.php">Dog</a></li>
                        <li><a href="http://localhost/developgetpet/dashboard/P.O-CatsForShorttermcare.php">Cat</a></li>
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
                  <a><i class="fa fa-bars"></i></a>
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
                      $query2=$dbh->prepare("SELECT COUNT(userID) FROM history WHERE userID='$ID' AND Title ='Adoption' AND requestStatus = 'Approved'");
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
                      $query3=$dbh->prepare("SELECT COUNT(masterID) FROM history WHERE masterID='$ID' AND Title ='Adoption' AND requestStatus = 'Approved'");
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
                      $query4=$dbh->prepare("SELECT COUNT(userID) FROM history WHERE userID='$ID' AND Title ='Short-Term Care' AND requestStatus = 'Approved' AND petStatus != 'Returned'");
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
                      $query5=$dbh->prepare("SELECT COUNT(masterID) FROM history WHERE masterID='$ID' AND Title ='Short-Term Care' AND requestStatus = 'Approved' AND petStatus != 'Returned'");
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
                            <span><?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?></span>
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
                
                          echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Message.php'</script>";
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
                            <span><?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?></span>
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


                        <img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:80px;height:80px;border-radius:10px;float:left;margin-right:5px;" class="rounded-circle img-responsive">&nbsp;<h4 style="float:left;margin-top:30px;"><b><?php echo ( $userid->orgName);?><?php echo ( $userid->userFirstname);?> <?php echo ( $userid->userLastname);?></b><h4>
                        <?php $cnt1=$cnt1+1;}} ?>
                    <ul class="nav navbar-right panel_toolbox">     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="text-align:center;height: 500; overflow-y: scroll;">
<!-- Message Code -->
<?php
                        $sql="SELECT * from message WHERE masterID='$masterID' AND userID='$ID' || masterID='$ID' AND userID='$masterID' ORDER BY messageID ASC";
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

                       <?php if ($result->userID != $ID) { ?>

                       <img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:60px;height:60px;border-radius:10px;float:left;margin-right:10px" class="rounded-circle img-responsive">&nbsp;<textarea disabled="yes" id="description" style="width:600px;height:80px;font-size:16px;border-radius:10px;background-color:#EAEDF0;border:#00cdc1;resize: none;border-color:#73879C;padding-top:20px;float:left" class="txtgrow" type='text'><?php echo ( $result->messageContent);?></textarea><br><br><br><br><br><span style="float:right;margin-right:270px;" class="time"><?php echo ($result->messageDate);?></span><br><br>

                       <?php } ?>

                       <?php if ($result->userID == $ID) { ?>
                        
                       <img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:60px;height:60px;border-radius:10px;float:right;margin-top:20px;margin-left:10px;margin-right:15px" class="rounded-circle img-responsive">&nbsp;<textarea disabled="yes" id="description" style="width:600px;height:80px;font-size:16px;border-radius:10px; background-color:#EAEDF0;border:#00cdc1;resize: none;border-color:#73879C;padding-top:20px;float:right;" class="txtgrow" type='text'><?php echo ( $result->messageContent);?></textarea><i class="fa fa-trash deletebtn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right:-225px;" data-message-id="<?php echo ( $result->messageID);?>"></i><br><br><br><br><br><span style="float:left;margin-left:250px;" class="time"><?php echo ($result->messageDate);?></span><br><br>

                       <?php } ?>

                        <?php $cnt1=$cnt1+1;}} ?>
                        <?php $cnt=$cnt+1;
                        }
                        }
                        else
                        {
                        echo "No Message.";
                        } 
                        ?>

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

<?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>

<?php
if(isset($_POST['Send']))
{
  $Message=($_POST['Message']);

  if($Message=$_POST['Message']==" ")
  {
    echo '<script>alert("Please write a message!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Message.php'</script>";
  }
  else
  {
    $Message=($_POST['Message']);

    $sql="INSERT INTO message(masterID,userID,roomID,messageContent,messageDate,messageStatus)VALUES('$masterID','$ID','$roomID',:Message,'$date','Unread')";
    $query=$dbh->prepare($sql);
    $query->bindParam(':Message',$Message,PDO::PARAM_STR);
    $query->execute();

    echo '<script>alert("Successfully Sent!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Message.php'</script>";
  }
}
?>  

                        <form method="post">
                        <div style="text-align: center" class="wrap-input100 validate-input">
					    <img <?php echo"<img src = '/developgetpet/web/images/$result->ownerPicture'";?> alt="avatar" style="width:80px;height:80px;border-radius:10px;margin-right:10px;float:left;" class="rounded-circle img-responsive">&nbsp;<textarea name="Message" required = "required" class="form-control" id="message" placeholder="Write a message..." style="background-color:#EAEDF0;border-radius:10px;height:100px;width:700px;resize: none;font-size:16px;float:left" onkeyup="request()"></textarea>
                        <script>
                        function request() {
                        if(document.getElementById("message").value==="") { 
                                    document.getElementById('send').disabled = true; 
                                } else { 
                                    document.getElementById('send').disabled = false;
                                }
                            }
                        </script>
                        <button name="Send" id="send" type="submit" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;margin-top:60px;" disabled>Send</button>
				        </div><br>
                      </form>

         <!-- //Message Code -->

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
					    <input hidden type="text" id="pet_id1" name="petID" required = "required" class="form-control">
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Name<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_name1" name="petName" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Type<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_type1" name="petType" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Breed<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_breed1" name="petBreed" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Gender<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_gender1" name="petGender" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Age<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_age1" name="petAge" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Color<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_color1" name="petColor" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Weight<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_weight1" name="petWeight" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Pet Status<span class="required"></span></label>&nbsp;&nbsp;&nbsp;
        <div class="d-flex align-items-center" style="">
        <input readonly id="spay_neuter1" style="width:20px;height:20px;" name="SpayNeuter">&nbsp;Spay/Neuter&emsp;<input readonly id="rabies_vaccine1" style="width:20px;height:20px" name="Vaccine">&nbsp;Rabies Vaccine&emsp;<input readonly id="deworming1" style="width:20px;height:20px" name="Deworming" >&nbsp;Deworming&emsp;<input readonly id="three_in_one_vaccine1" style="width:20px;height:20px" name="threeinoneVaccine" >&nbsp;3 in 1 Vaccine
        </div>
        </div>

        <div class="field item form-group">
				<label class="col-form-label col-md-3 col-sm-3  label-align">Pet Diet</label>
			  <div class="col-md-6 col-sm-6">
        <textarea disabled="yes" id="pet_diet1" style="width:440px;height:80px;padding-top:-5px;background-color: #fff;resize: none;font-size:16px;"></textarea>
        </div>
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Reason for Adoption<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
        <textarea disabled="yes" id="pet_description1" name="petDescription" style="width:440px;height:100px;padding-top:-5px;background-color: #fff;resize: none;font-size:16px;"></textarea>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Status<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_status1" name="petStatus" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Posted By:<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="master_name1" name="masterName" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <br><br>

        </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal View Pet Info -->

    <!-- Recieved Code -->
<?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>

<?php
if(isset($_POST['btnRecieved']))
{
  $historyID=($_POST['historyID']);
  $petID=($_POST['petID']);
  $userID=($_POST['userID']);
  $masterID=($_POST['masterID']);

  $sql="INSERT INTO notification(activityID,postID,notificationTitle,masterID,userID,notificationDescription,notificationDate,notificationStatus)VALUES(:historyID,:petID,'Recieved The Pet',:masterID,'$ID','I already recieved the pet','$date','Unread')";
  $query=$dbh->prepare($sql);
  $query->bindParam(':historyID',$historyID,PDO::PARAM_STR);
  $query->bindParam(':petID',$petID,PDO::PARAM_STR);
  $query->bindParam(':masterID',$masterID,PDO::PARAM_STR);
  $query->execute();

  echo '<script>alert("Successfully Sent!")</script>';
  echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-MyAdoptedPet.php'</script>";
}
?>
   <!--// Recieved Code -->

  <!-- Modal Recieved -->
<div class="modal fade" id="Recieved" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Recieved</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <p>Are you sure, you already recieved the pet?</p>
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="history_id" name="historyID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pet_id" name="petID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_id" name="userID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="master_id" name="masterID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="btnRecieved" type="submit" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Yes</button>
              <button class="btn btn-round btn-danger" class="close" data-dismiss="modal" style="width:90px;height:37px;">No</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Recieved -->

  <!-- Message Code -->
<?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>

<?php
if(isset($_POST['Send']))
{
  $Message=($_POST['Message']);

  if($Message=$_POST['Message']==" ")
  {
    echo '<script>alert("Please write a message!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-MyAdoptedPet.php'</script>";
  }
  else
  {
    $masterID=($_POST['masterID']);
    $Message=($_POST['Message']);

    $sql="INSERT INTO message(masterID,userID,messageContent,messageDate,messageStatus)VALUES(:masterID,'$ID',:Message,'$date','Unread')";
    $query=$dbh->prepare($sql);
    $query->bindParam(':masterID',$masterID,PDO::PARAM_STR);
    $query->bindParam(':Message',$Message,PDO::PARAM_STR);
    $query->execute();

    echo '<script>alert("Successfully Sent!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-MyAdoptedPet.php'</script>";
  }
}
?>  
   <!--// Message Code -->

  <!-- Modal Message -->
<div class="modal fade" id="Message" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Message</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="cleartext()">
          <span aria-hidden="true">&times;</span>
        </button>
        <script>
          function cleartext() {
          document.getElementById("message").value="";
            }
        </script>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="master_id2" name="masterID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <textarea id="message" name="Message" required = "required" class="form-control" id="success" placeholder="Write a message..." style="height:100px;resize: none;font-size:16px;" onkeyup="request()"></textarea>
				</div><br>
        <script>
          function request() {
          if(document.getElementById("message").value==="") { 
                    document.getElementById('send').disabled = true; 
                } else { 
                    document.getElementById('send').disabled = false;
                }
            }
        </script>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="Send" id="send" type="submit" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Send</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Message-->

    <!-- Delete Comment Code -->
  <?php
  if(isset($_POST['btnDeleteMessage']))
  {
    $messageID=($_POST['messageID']);
    
    $query="Delete from message where messageID=:messageID";
    $query = $dbh->prepare($query);
    $query->bindValue('messageID',$messageID);
    $query->execute();
    
    echo '<script>alert("Message Deleted Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.O-Message.php'</script>";
  }
  ?>
	<!-- //Delete Comment Code -->

     <!-- Modal Delete Message -->
  <div class="modal fade" id="DeleteMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Delete Message</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <p>Are you sure, you want to delete this message?</p>
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="message_id3" name="messageID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="btnDeleteMessage" type="submit" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Yes</button>
              <button type='reset' class="btn btn-round btn-danger" name="btnCancel" class="close" data-dismiss="modal" style="width:90px;height:37px;">No</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Delete Message -->

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
  $(".deletebtn").click(function () {
    var message_id3 = $(this).attr('data-message-id');
    $("#message_id3").val( message_id3 );
    $('#DeleteMessage').modal('show');
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
    $('#Message').modal('show');
    $("#history_id").val( history_id );
    $("#master_id2").val( master_id2 );
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    
  </body>
</html>