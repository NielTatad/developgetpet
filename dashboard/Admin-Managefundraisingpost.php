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
                                  <li><a href="http://localhost/developgetpet/dashboard/Admin-Managetips.php">Tips</a></li>
                                  <li><a href="http://localhost/developgetpet/dashboard/Admin-Manageadvice.php">Advice</a></li>
                                  <li><a href="http://localhost/developgetpet/dashboard/Admin-Managearticles.php">Articles</a></li>
                                </ul>
                              </li>

                              <li>
                                <li><a href="http://localhost/developgetpet/dashboard/Admin-Managefundraisingpost.php" style="font-size:15px;">Manage Fundraising Activities</a>
                              </li>
                                
                              <li><a style="font-size:15px;">Report</a>
                                <ul class="nav child_menu">
                                  <li><a href="http://localhost/developgetpet/dashboard/Admin-Adoptionreport.php">Adoption</a></li>
                                  <li><a href="http://localhost/developgetpet/dashboard/Admin-Shorttermcarereport.php">Short Term-Care</a></li>
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
            <h2>Manage Fundraising acitivities Post</h2>
            <ul class="nav navbar-right panel_toolbox">
          </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content" style="text-align:center;">
      
                  <div class="row">
                  <div class="col-sm-12">
                  <div class="card-box table-responsive">
					
                  <table class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                            <th style="text-align:center" class="column-title">Charity ID</th>
                            <th hidden style="text-align:center" class="column-title">User ID</th>
                            <th style="text-align:center" class="column-title">Organization Name</th>
                            <th style="text-align:center" class="column-title">Email</th>
                            <th style="text-align:center" class="column-title">Address</th>
                            <th style="text-align:center" class="column-title">Contact No</th>
                            <th style="text-align:center" class="column-title">Title</th>
                            <th style="text-align:center" class="column-title">Description</th>
                            <th style="text-align:center" class="column-title">Photo</th>
                            <th style="text-align:center" class="column-title">Target Amount</th>
                            <th style="text-align:center" class="column-title">Gain Amount</th>
                            <th style="text-align:center" class="column-title">Website</th>
                            <th style="text-align:center" class="column-title">QR Code</th>
                            <th style="text-align:center" class="column-title">Date</th>
                            <th style="text-align:center" class="column-title">Charity Status</th>
                            <th style="text-align:center" class="column-title">Post Status</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="12">
                              <a class="antoo" style="color:#fff; font-weight:500;">Data to be Deleted (<span class="action-cnt"> </span>)</a>
                            </th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            $sql="SELECT * from charity where charityPoststatus='Fundraising' ";
                            $query=$dbh->prepare($sql);
                            $query->execute();
                            $results=$query->fetchALL(PDO::FETCH_OBJ);
                            $cnt=1;
                            if($query->rowCount()>0)
                            {
                             foreach($results as $result)
                            {
                             ?>
                              <tr class="even pointer">
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->charityID);?></td>
                                <td hidden style="text-align:center" class=" "><?php echo htmlentities($result->userID);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->userName);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->userEmail);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->userAddress);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->userContactNo);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->charityTitle);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->charityDescription);?></td>
                                <td style="text-align:center" class=" "><?php echo"<img src = '/developgetpet/web/images/$result->charityPicture' style = height:80px; width: 80px;/>";?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->charityTargetamount);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->charityGainamount);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->charityWebsite);?></td>
                                <td style="text-align:center" class=" "><?php echo"<img src = '/developgetpet/web/images/$result->charityQRcode' style = height:80px; width: 80px;/>";?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->charityPostdate);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->charityStatus);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->charityPoststatus);?></td>
                                <?php if ($result->charityPoststatus != 'Deleted' AND $result->charityStatus != 'Accepted' AND $result->charityPoststatus != 'Fundraising') { ?>
                                <td style="text-align:center;" class="last"><button type="button" class="btn btn-danger deletebtn" data-charity-id="<?php echo ($result->charityID);?>" data-master-id="<?php echo ($result->userID);?>">Delete</button>
                                </td>
                                <?php } ?>                                
                              </tr>
                            <?php $cnt=$cnt+1;}}?>
                         </tbody>
                    </table>
                  </div>
                </div>
              </div> 
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <!-- /page content -->

 <!-- Delete Post Code -->
 <?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>  
 <?php
   if(isset($_POST['Delete']))
   {
    $charityID=($_POST['charityID']);
    $masterID=($_POST['masterID']);

    $query="update charity set charityStatus='Not available', postStatus ='Deleted' where charityID=:charityID";
    $query= $dbh->prepare($query);
    $query->bindValue('charityID',$charityID);
    $query->execute();

    $query1="Delete from comment where postID=:charityID";
    $query1 = $dbh->prepare($query1);
    $query1->bindValue('charityID',$charityID);
    $query1->execute();

    $query2="Delete from notification where postID=:charityID";
    $query2 = $dbh->prepare($query2);
    $query2->bindValue('charityID',$charityID);
    $query2->execute();
 
    $sql3="INSERT INTO notification(activityID,postID,notificationTitle,userID,masterID,notificationDescription,notificationDate,notificationStatus)VALUES(:charityID,:charityID,'Post Deleted','$ID',:masterID,'Your Post Has Been Removed By Admin','$date','Unread')";
    $query3=$dbh->prepare($sql3);
    $query3->bindParam(':charityID',$charityID,PDO::PARAM_STR);
    $query3->bindParam(':masterID',$masterID,PDO::PARAM_STR);
    $query3->execute();

    echo '<script>alert("Deleted Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/Admin-Managefundraisingpost.php'</script>";
   }
?>
<!-- //Delete Post Code -->

  <!-- Modal Delete Post -->
<div class="modal fade" id="DeletePost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Delete Short-Term Care Post</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <p>Are you sure you want to delete this post?</p>
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="charity_id" name="charityID" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden id="master_id" name="masterID" required = "required" class="form-control" id="success">
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

<script type="text/javascript">
  $(".deletebtn").click(function () {
    var charity_id = $(this).attr('data-charity-id');
    var master_id = $(this).attr('data-master-id');
    $('#DeletePost').modal('show');
    $("#charity_id").val( charity_id );
    $("#master_id").val( master_id );
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
