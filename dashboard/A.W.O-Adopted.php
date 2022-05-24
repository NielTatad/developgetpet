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
           
            <!-- Pet Adopted Code -->
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel" style="border-radius:10px;border-width:2px;">
                  <div class="x_title">
                    <h2>Pet Adopted</h2>
                    <ul class="nav navbar-right panel_toolbox">     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="text-align:center;">

                  <?php
                        $sql="SELECT * from postpet WHERE petStatus='Adopted' AND postStatus!='Deleted' ORDER BY petID DESC LIMIT 3";
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
                          echo "There's no information to display.";
                        }
                        ?>

                  </div>
                </div>
              </div>
            </div>
            <!-- //Pet Adopted Code -->

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
     $( "#tips_content" ).keyup(function() {
  $("#Posttips").prop("disabled", !this.value);
});
    </script>

<script>
     $( "#advice_content" ).keyup(function() {
  $("#Postadvice").prop("disabled", !this.value);
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
    
  </body>
</html>