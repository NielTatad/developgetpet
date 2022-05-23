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

                    <li><a >Pet For Adoption</a>
                      <ul class="nav child_menu">
                        <li><a href="http://localhost/developgetpet/dashboard/P.A-DogsForAdoption.php">Dog</a></li>
                        <li><a href="http://localhost/developgetpet/dashboard/P.A-CatsForAdoption.php">Cat</a></li>
                      </ul>
                    </li>

                    <li><a >Pet For Short-Term Care</a>
                      <ul class="nav child_menu">
                        <li><a href="http://localhost/developgetpet/dashboard/P.A-DogsForShorttermcare.php">Dog</a></li>
                        <li><a href="http://localhost/developgetpet/dashboard/P.A-CatsForShorttermcare.php">Cat</a></li>
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
                    <li><a href="http://localhost/developgetpet/dashboard/P.A-Adopted.php">Pet Adopted</a>
                    </li>

                  
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
         <div class="sidebar-footer hidden-small">
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
                  <a><i class="fa fa-bars"></i></a>
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
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.A-AccountSettings.php">Account Settings</a>
                      <?php
                      
                      $query=$dbh->prepare("SELECT COUNT(userID) FROM request WHERE userID='$ID' AND requestStatus != 'Disapproved' AND requestStatus != 'Cancelled' AND requestStatus != 'Approved'");
                      $query->execute();

                      $myrequest=$query->fetchColumn();

                      ?>
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.A-MyRequest.php">My Request <span class="badge bg-red" id="myrequest" value=""><?php echo ($myrequest);?></span></a>
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
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.A-UserRequest.php">User Request <span class="badge bg-red" id="user_request" value=""> <?php echo ($user_request);?></span></a>
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
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.A-MyAdoptedPet.php">My Adopted Pet <span class="badge bg-red" id="my_adopted" value=""> <?php echo ($my_adopted);?></a>
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
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.A-MyPetAdoptedByUser.php">My Pet Adopted By User <span class="badge bg-red" id="user_adopted" value=""> <?php echo ($user_adopted);?></a>
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
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.A-MyShorttermcare.php">My Short-Term Care <span class="badge bg-red" id="my_shorttermcare" value=""> <?php echo ($my_shorttermcare);?></a>
                      <script type="text/javascript">
                        var my_shorttermcare = <?php echo ($my_shorttermcare);?>;
                        if (my_shorttermcare === 0){
                          document.getElementById("my_shorttermcare").style.display = "none";
                        }
                        </script>

                      <?php
                      $query=$dbh->prepare("SELECT COUNT(userID) FROM request WHERE userID='$ID' AND requestStatus = 'Cancelled'");
                      $query->execute();

                      $cancelled=$query->fetchColumn();

                      ?>
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.A-CancelledRequest.php">Cancelled Request <span class="badge bg-red" id="cancelled" value=""><?php echo ($cancelled);?></span></a>
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
                      <a class="dropdown-item" href="http://localhost/developgetpet/dashboard/P.A-History.php">My History <span class="badge bg-red" id="adoption" value=""><?php echo ($history);?></span></a>
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
                
                          echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.A-Message.php'</script>";
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
              </div>

            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel" style="border-radius:10px;border-width:2px;">
                  <div class="x_title">
                    <h2>My Short-Term Care</h2>
                    <ul class="nav navbar-right panel_toolbox">     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="text-align:center;">
<!-- View My Short-Term Care Code -->
<?php
            $sql="SELECT * from history WHERE userID='$ID' AND Title='Short-Term Care' AND requestStatus='Approved' AND petStatus != 'Returned' ORDER BY historyID DESC";
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
                  <h3><?php echo ($result->Title);?></h3>
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
                      <li><h3 hidden class="card-title"><?php echo ($result->masterID);?></h3></li>
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
                         
                      <?php $master_id = $result->masterID;

                      $sql3="SELECT * from register WHERE userID='$master_id'";
                      $query3=$dbh->prepare($sql3);
                      $query3->execute();
                      $masterids=$query3->fetchALL(PDO::FETCH_OBJ);
                      $cnt3=1;
                      if($query3->rowCount()>0)
                      {
                        foreach($masterids as $masterid)
                      {
                        ?>
                    <?php if ($petid->petStatus == 'In Short-term care') { ?>

                      <?php if ($result->Title == 'Short-Term Care' AND $result->requestStatus == 'Approved') { ?>

                      <img <?php echo"<img src = '/developgetpet/web/images/$masterid->Image'";?> alt="avatar" style="width:160px;height:150px;border-radius:10px;" class="rounded-circle img-responsive">&nbsp;<textarea disabled="yes" id="description" style="width:600px;height:150px;font-size:16px;border-radius:10px; background-color: #fff;resize: none;border-color:#73879C;color:#73879C;padding-top:20px" class="txtgrow" type='text'>Name: <?php echo ($masterid->orgName);?><?php echo ( $masterid->userFirstname);?> <?php echo ($masterid->userLastname);?>&#13;&#10;Address: <?php echo ( $masterid->Address);?>&#13;&#10;Email: <?php echo ( $masterid->Email);?>&#13;&#10;Contact No: <?php echo ( $masterid->contactNo);?></textarea><br>

                      <?php
                        if(isset($_POST['Message']))
                        {
                          $masterID=($_POST['masterID']);
                          $roomID=($_POST['roomID']);
                
                          echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.A-Message.php'</script>";
                          $_SESSION['masterID'] = $masterID;
                          $_SESSION['roomID'] = $roomID;
                          

                        }
                        ?>
                      
                      <form method="post">
                      <input hidden name="roomID" value="<?php echo ($masterid->userID);?>-<?php echo $ID;?>">
                      <input hidden name="masterID" value="<?php echo ($masterid->userID);?>">
                      <button class="btn btn-primary" name="Message" style="border:#00cdc1;width: 120px;height:35px;margin-right:600px;margin-top:5px">Message</button>
                      <br><br>
                      </form>

                      <img <?php echo"<img src = '/developgetpet/web/images/$petid->petPicture'";?> alt="avatar" style="width:260px;height:285px;border-radius:10px;">&nbsp;<textarea disabled="yes" id="description" style="width:600px;height:285px;font-size:16px;border-radius:10px; background-color: #fff;resize: none;border-color:#73879C;color:#73879C" type='text'>Pet Name: <?php echo ( $petid->petName);?>&#13;&#10;Pet Type: <?php echo ( $petid->petType);?>&#13;&#10;Pet Gender: <?php echo ( $petid->petSex);?>&#13;&#10;Pet Breed: <?php echo ( $petid->petBreed);?>&#13;&#10;Time Period: <?php echo ( $petid->selectedRange);?>&#13;&#10;Charge:  ₱<?php echo ( $petid->Charge);?>.00&#13;&#10;Requested Date: <?php echo ($result->requestDate);?>&#13;&#10;Approved Date: <?php echo ($result->approvalDate);?>&#13;&#10;Return Date: <?php echo ($result->returnDate);?>&#13;&#10;Request Status: <?php echo ($result->requestStatus);?>&#13;&#10;Status: <?php echo ($result->petStatus);?></textarea><br><br>

                      <div style="text-align: center" class="form-group">
                      <div class="col-md-6 offset-md-3">
                      <button class="btn btn-round btn-success viewbtn" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;" data-pet-id="<?php echo ($petid->petID);?>" data-pet-name="<?php echo ($petid->petName);?>" data-pet-type="<?php echo ($petid->petType);?>" data-pet-breed="<?php echo ($petid->petBreed);?>" data-pet-gender="<?php echo ($petid->petSex);?>" data-pet-age="<?php echo ($petid->petAge);?>" data-pet-color="<?php echo ($petid->petColor);?>" data-pet-weight="<?php echo ($petid->petWeight);?>" data-pet-spayneuter="<?php echo ($petid->SpayNeuter);?>" data-pet-rabiesvaccine="<?php echo ($petid->rabiesVaccine);?>" data-pet-deworming="<?php echo ($petid->Deworming);?>" data-pet-threeinonevaccine="<?php echo ($petid->threeinoneVaccine);?>" data-pet-diet="<?php echo ($petid->petDiet);?>" data-selected-range="<?php echo ( $petid->selectedRange);?>" data-charge="₱<?php echo ( $petid->Charge);?>.00" data-pet-description="<?php echo ($petid->petDescription);?>" data-pet-status="<?php echo ($petid->petStatus);?>" data-master-name="<?php echo ($masterid->orgName);?><?php echo ($masterid->userFirstname);?> <?php echo ($masterid->userLastname);?>">View</button>

                      <button class="btn btn-round btn-primary returnbtn" style="border:#00cdc1;width: 90px;height:37px;" data-history-id="<?php echo($result->historyID);?>"  data-pet-id="<?php echo($result->petID);?>" data-master-id="<?php echo($masterid->userID);?>" data-user-id="<?php echo $ID;?>" data-return-date="<?php echo($result->returnDate);?>">Returned</button>
                      </div>
                      </div>

                      <?php } ?>
                    <?php } ?>

                    <?php if ($petid->petStatus != 'In Short-term care') { ?>
                      <?php echo "There's no information to display."; ?>
                    <?php } ?>
                    

                      <?php $cnt3=$cnt3+1;}} ?>
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
            echo "There's no information to display.";
          }
            ?>
         <!-- //View My Short-Term Care Code -->

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
        <label class="col-form-label col-md-3 col-sm-3  label-align">Time Period<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="selected_range1" name="selectedRange" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Charge<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="charge1" name="Charge" style="background-color:#fff;width:440px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Reason for Short-term care<span class="required"></span></label>
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
        <label class="col-form-label col-md-3 col-sm-3  label-align">Posted By<span class="required"></span></label>
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

  <!-- Return Code -->
<?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
$current_date = date('m/d/Y', time());
?>

<?php
if(isset($_POST['btnReturn']))
{
  if($current_date == $returnDate=$_POST['returnDate'])
  {
    $historyID=($_POST['historyID']);
    $petID=($_POST['petID']);
    $userID=($_POST['userID']);
    $masterID=($_POST['masterID']);
    $returnDate=($_POST['returnDate']);

    $sql="INSERT INTO notification(activityID,postID,notificationTitle,masterID,userID,notificationDescription,notificationDate,notificationStatus)VALUES(:historyID,:petID,'Returned The Pet',:masterID,'$ID','I already returned your pet that I short-term care','$date','Unread')";
    $query=$dbh->prepare($sql);
    $query->bindParam(':historyID',$historyID,PDO::PARAM_STR);
    $query->bindParam(':petID',$petID,PDO::PARAM_STR);
    $query->bindParam(':masterID',$masterID,PDO::PARAM_STR);
    $query->execute();
  
    $sql1="update postpet set
    petStatus='Available'
    where petID=:petID";
    $query1=$dbh->prepare($sql1); 
    $query1->bindParam(':petID',$petID,PDO::PARAM_STR); 
    $query1->execute();

    $sql2="update history set
    petStatus='Returned'
    where historyID=:historyID";
    $query2=$dbh->prepare($sql2); 
    $query2->bindParam(':historyID',$historyID,PDO::PARAM_STR); 
    $query2->execute();
  
    echo '<script>alert("Successfully Sent!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.A-Feedback.php'</script>";
    $_SESSION['masterID'] = $masterID;
  }

  else{
    echo '<script>alert("You cannot return if it is not the return date!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.A-MyShorttermcare.php'</script>";
  }
}
?>
   <!--// Return Code -->

   <!-- Modal Return -->
<div class="modal fade" id="Return" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Returned</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <p>Are you sure? you already returned the pet!</p>
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="history_id2" name="historyID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="pet_id2" name="petID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="user_id2" name="userID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="master_id2" name="masterID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="return_date2" name="returnDate" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="btnReturn" type="submit" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Yes</button>
              <button class="btn btn-round btn-danger" class="close" data-dismiss="modal" style="width:90px;height:37px;">No</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Return -->

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
  $(".returnbtn").click(function () {
    var history_id2 = $(this).attr('data-history-id');
    var pet_id2 = $(this).attr('data-pet-id');
    var master_id2 = $(this).attr('data-master-id');
    var user_id2 = $(this).attr('data-user-id');
    var return_date2 = $(this).attr('data-return-date');
    $('#Return').modal('show');
    $("#history_id2").val( history_id2 );
    $("#pet_id2").val( pet_id2 );
    $("#master_id2").val( master_id2 );
    $("#user_id2").val( user_id2 );
    $("#return_date2").val( return_date2 );
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
    var selected_range1 = $(this).attr('data-selected-range');
    var charge1 = $(this).attr('data-charge');
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
    $("#selected_range1").val( selected_range1 );
    $("#charge1").val( charge1 );
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