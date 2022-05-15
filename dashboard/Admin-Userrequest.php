<?php 
session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
$ID=$_SESSION['adID'];
$sql = "SELECT * from admin where adID=:ID";
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

$query=$dbh->prepare("SELECT COUNT(ownerID) FROM petowner");
$query->execute();

$pet_owner=$query->fetchColumn();

?>

<?php
$query=$dbh->prepare("SELECT COUNT(adopterID) FROM petadopter");
$query->execute();

$pet_adopter=$query->fetchColumn();

?>

<?php
$query=$dbh->prepare("SELECT COUNT(orgID) FROM animalwelfareorganization");
$query->execute();

$animal_welfare_organization=$query->fetchColumn();

?>

<?php
$query=$dbh->prepare("SELECT COUNT(*) FROM register ");
$query->execute();

$Registered=$query->fetchColumn();

?>

<?php
$query=$dbh->prepare("SELECT COUNT(*) FROM login WHERE (loginDate) = (CURDATE())");
$query->execute();

$Date=$query->fetchColumn();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
      td {
 white-space: nowrap;
}
th {
 white-space: nowrap;
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

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="http://localhost/developgetpet/dashboard/Admin-Dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGETPET</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <!--<div class="profile_pic">
              <img <?php echo"<img src = '/GETPET/web/images/$result->ownerPicture'";?> alt="..." class="img-circle profile_img" style="background-color:#00cdc1;border:#00cdc1;">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo ($result->ownerFirstname);?> <?php echo ($result->ownerLastname);?></h2>
              </div>-->
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
				<div class="menu_section">						
					<ul class="nav side-menu">
          
                          <li>
                            <li><a href="http://localhost/developgetpet/dashboard/Admin-Dashboard.php" style="font-size:15px;">Dashboard</a>
                            </li>

                            <li>
                            <li><a href="http://localhost/developgetpet/dashboard/Admin-Petinformation.php" style="font-size:15px;">Pet Information</a>
                            </li>

                            <li>
                            <li><a href="http://localhost/developgetpet/dashboard/Admin-Userinformation.php" style="font-size:15px;">User Information</a>
                            </li>

                            <li>
                            <li><a href="http://localhost/developgetpet/dashboard/Admin-Userrequest.php" style="font-size:15px;">User Request</a>
                            </li>

                            <li><a style="font-size:15px;">Manage Pet Adoption & Short-Term Care</a>
                                <ul class="nav child_menu">
                                  <li><a href="http://localhost/developgetpet/dashboard/Admin-Managepetadoptionpost.php">Pet Adoption</a></li>
                                  <li><a href="http://localhost/developgetpet/dashboard/Admin-Manageshorttermcarepost.php">Short-Term Care</a></li>
                                </ul>
                              </li>

                                <li><a style="font-size:15px;">Manage Pet Care Tips</a>
                                <ul class="nav child_menu">
                                  <li><a href="#">Tips</a></li>
                                  <li><a href="#">Advice</a></li>
                                  <li><a href="#">Articles</a></li>
                                </ul>
                              </li>

                              <li>
                                <li><a href="http://localhost/developgetpet/dashboard/Admin-Managefundraisingpost.php" style="font-size:15px;">Manage Fundraising Activities</a>
                              </li>
                                
                              <li><a style="font-size:15px;">Report</a>
                                <ul class="nav child_menu">
                                  <li><a href="http://localhost/developgetpet/dashboard/Admin-Adoptionreport.php">Adoption</a></li>
                                  <li><a href="http://localhost/developgetpet/dashboard/Admin-Shorttermcarereport.php">Short Term-Care</a></li>
                                  <li><a href="http://localhost/developgetpet/dashboard/Admin-Donationreport.php">Donation</a></li>
                                </ul>
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
                      <?php echo ($result->adUsername);?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black" data-toggle="modal" data-target="#Settings"> Profile</a>
                      <!--<a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>-->
                    <a class="dropdown-item"  href="http://localhost/developgetpet/dashboard/page_404.php" id="contact">Contact Us</a>
                      <a class="dropdown-item"  href="http://localhost/developgetpet/login-page/login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open" style="margin-top:1px;">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false" >
                      <i class="fa fa-bell"></i>
                      <!--<span class="badge bg-green">6</span>-->
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <a>See All Alerts</a>
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
            <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="x_panel" style="border-radius:10px;border-width:2px;">
          <div class="x_title">
            <h2>Manage User Request</h2>
            <ul class="nav navbar-right panel_toolbox">
          </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content" style="text-align:center;">
                  
            <!-- View Unaccepted Post for Donation User Request Code -->
            <?php
                        $sql="SELECT * from charity WHERE charityStatus='Unaccepted' AND charityPoststatus='Fundraising' AND charityPoststatus!='Deleted' ORDER BY charityID DESC";
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
                                            
                                            <label style="margin-top:-5px;"><img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:40px;height:40px;margin-top:10px;" class="rounded-circle img-responsive"><textarea disabled style="width:450px;height:auto;font-size:18px;border-style: none;background-color:transparent;resize: none;overflow:hidden;font-size:14px;text-align:left;padding-top: 2px;color: #73879C;margin-top:10px;" type='text'><?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?>&#13;&#10;<?php echo ($result->charityPostdate);?></textarea>
                                            <p id="description" style="font-size:16px;margin-top:10px;padding-left:10px;text-align:left;"><?php echo ($result->charityDescription);?></p>
                                                                                      
                                              <Img <?php echo"<img src = '/developgetpet/web/images/$result->charityPicture'";?> class="card-ing-top" alt="Post Images" style="height:445px;width:500px;border-radius:10px;">
                                              <ul style="list-style:none;margin-left:-50px;">
                                              
                                              <li><h3 hidden class="card-title"><?php echo ($result->charityID);?></h3></li>
                                              <li><h2 hidden class="card-title"><?php echo ($result->charityTitle);?></h2></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->charityTargetamount);?></h3></li>
                                              <li><textarea hidden disabled="yes" id="description" style="width:350px;height:100px;padding-top:-5px;background-color: #fff;resize: none;color:#73879C;font-size:16px;"><?php echo ($result->charityDescription);?></textarea></li>
                                              
                                              
                                              <li><h3 hidden class="card-title"><?php echo ($result->charityDescription);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->charPicture);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->charityStatus);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ($result->userID);?></h3></li>
                                            
                                              
                                              <li><h3 hidden class="card-title"><?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?><?php echo ($userid->orgName);?></h3></li>
                                              <li><label hidden class="card-title"><?php echo ($result->charityPostdate);?></label><br></li>
                                              <li><h3 hidden class="card-title"><?php echo ( $userid->Email);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ( $userid->Address);?></h3></li>
                                              <li><h3 hidden class="card-title"><?php echo ( $userid->contactNo);?></h3></li>
                                              <?php $cnt1=$cnt1+1;}} ?>
                                              <button type="button" class="btn btn-link viewbtn" style="height:30px;width:150px;font-size:14px;margin-top:-10px;float:left;margin-left:-10px;">View More Info</button>
                                              <br> 

                                            <button name ="Post" type='submit' id="submit" class="btn btn-success acceptbtn" style="background-color:#00cdc1;border:#00cdc1;width:130px;margin-right:150px;height:40px;">Accept</button>
                                            
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
                          echo "There isn't any information displayed.";
                        }
                        ?>
                     <!-- //View Unaccepted Post for Donation User Request Code -->                   
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<!-- Accept Post Code -->
<?php
   if(isset($_POST['Accept']))
   {
    $charityID=($_POST['charityID']);

    $query="update charity set charityStatus='Accepted' where charityID=:charityID";
    $query= $dbh->prepare($query);
    $query->bindValue(':charityID',$charityID);
    $query->execute();

    echo '<script>alert("Request Accepted Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/Admin-Userrequest.php'</script>";
   }
?>
<!-- //Accept Post Code -->

<!-- Decline Post Code -->
<?php
   if(isset($_POST['Decline']))
   {
    $charityID=($_POST['charityID']);

    $query1="update charity set charityStatus='Decline' where charityID=:charityID";
    $query1= $dbh->prepare($query1);
    $query1->bindValue(':charityID',$charityID);
    $query1->execute();

    echo '<script>alert("Request Decline Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/Admin-Userrequest.php'</script>";
   }
?>
<!-- //Decline Post Code -->

  <!-- Modal Accept Post -->
<div class="modal fade" id="AcceptPost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Request Modal</h4>
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
					    <input hidden id="char_id" name="charityID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="form-group">
         <div class="col-md-6 offset-md-3">
              <button name="Accept" id="AcceptRequest" type="submit" type='submit' class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Accept</button>
              <button class="btn btn-round btn-danger" name="Decline" type="submit" type='submit'    style="width:90px;height:37px;">Decline</button>
         </div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Accept Post -->


  <!-- Modal Donation Information -->
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
					    <input hidden type="text" id="char_id" name="CharityID" required = "required" class="form-control">
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Title<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="char_title" name="PetName" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Target Amount<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="char_amount" name="Gender" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Gcash QR Code<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
        <Img <?php echo"<img src = '/developgetpet/web/images/$result->charityQRcode'";?> class="card-ing-top" alt="Post Images" style="height:445px;width:400px;border-radius:10px;text-align:center;">
        </div>
        </div>     

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Description<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
        <textarea disabled="yes" id="char_description" style="width:400px;height:100px;padding-top:-5px;background-color: #fff;resize: none;font-size:16px;"></textarea>
        </div>
        </div>

        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" id="des" name="Description"  required = "required" class="form-control">
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Status<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="char_status" name="Availability" style="background-color:#fff;width:400px;" required="required"/>
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

        </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Donation Information -->

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
        
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input type="hidden" name="ownerID" value="<?php echo ( $result->adID);?>" required = "required" class="form-control" id="success">
				</div>
       
        <div style="text-align: center">
             <h6 class="mt-1 mb-2"><?php echo ($result->adUsername);?></h6>
             <h6 class="mt-1 mb-2"><?php echo ($result->adPassword);?></h6>
             <h6 class="mt-1 mb-2"><?php echo ($result->adEmail);?></h6>
             <h6 class="mt-1 mb-2"><?php echo ($result->Role);?></h6>
        </div><br>
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
		    </p>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>

    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.viewbtn').on('click', function () {

                $('#View').modal('show');

                $tr = $(this).closest('ul');

                var data = $tr.children("li").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#char_id').val(data[0]);
                $('#char_title').val(data[1]);
                $('#char_amount').val(data[2]);
                $('#char_description').val(data[3]);
                $('#des').val(data[4]);
                $('#char_picture').val(data[5]);
                $('#char_status').val(data[6]);
                $('#user_id').val(data[7]);
                $('#post_by').val(data[8]);
                $('#post_date').val(data[9]);
                $('#user_email').val(data[10]);
                $('#user_address').val(data[11]);
                $('#user_contactno').val(data[12]);
            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.acceptbtn').on('click', function () {

                $('#AcceptPost').modal('show');

                $tr = $(this).closest('ul');

                var data = $tr.children("li").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#char_id').val(data[0]);
            });
        });
    </script>    

    <div id="custom_notifications" class="custom-notifications dsp_none">
      <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
      </ul>
      <div class="clearfix"></div>
      <div id="notif-group" class="tabbed_notifications"></div>
    </div>

  </body>
</html>
