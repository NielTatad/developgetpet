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

                </div>
              </div>
            </div>

            <!-- /page content -->
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel" style="border-radius:10px;border-width:2px;">
                  <div class="x_title">
                    <h2>Short-Term Care Report</h2>
                    <ul class="nav navbar-right panel_toolbox">
                  </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="text-align:center;">

                  <a class="btn btn-info" href="Admin-Printshorttermcarereport.php" style="margin-top: 25px;float: left; margin-bottom: 25px;"><i class="sidebar-item-icon fa fa-print"></i><span class="nav-label">  Print</span></a>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
    
              
                          <div class="row">
                          <div class="col-sm-12">
                          <div class="card-box table-responsive">
                  
                          <table class="table table-striped jambo_table bulk_action">
                                    <thead>
                                    <tr class="headings">
                                    <th hidden style="text-align:center" class="column-title">Master ID</th>
                                    <th hidden style="text-align:center" class="column-title">User ID</th>
                                    <th hidden style="text-align:center" class="column-title">Pet ID</th>
                                    <th hidden hidden style="text-align:center" class="column-title">User ID</th>
                                    <th style="text-align:center" class="column-title">Pet Owner</th>
                                    <th style="text-align:center" class="column-title">Pet Name</th>
                                    <th style="text-align:center" class="column-title">Pet Type</th>
                                    <th style="text-align:center" class="column-title">Pet Breed</th>
                                    <th style="text-align:center" class="column-title">Post Status</th>
                                    <th style="text-align:center" class="column-title">Pet Status</th>
                                    <th style="text-align:center" class="column-title">Pet-Sitter</th>
                                    </th>
                                    <th class="bulk-actions" colspan="12">
                                      <a class="antoo" style="color:#fff; font-weight:500;">Data to be Deleted (<span class="action-cnt"> </span>)</a>
                                    </th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    $sql="SELECT * from history WHERE Title='Short-term care' ORDER BY historyID DESC";
                                    $query=$dbh->prepare($sql);
                                    $query->execute();
                                    $results=$query->fetchALL(PDO::FETCH_OBJ);
                                    $cnt=1;
                                    if($query->rowCount()>0)
                                    {
                                    foreach($results as $result)
                                    {
                                    ?>
                                      <?php
                                      $pet_id = $result->petID;
                                      $sql1="SELECT * from postpet WHERE petID='$pet_id' AND petStatus='Short-Term Care' ORDER BY petID DESC";
                                      $query1=$dbh->prepare($sql1);
                                      $query1->execute();
                                      $results1=$query1->fetchALL(PDO::FETCH_OBJ);
                                      $cnt1=1;
                                      if($query1->rowCount()>0)
                                      {
                                      foreach($results1 as $result1)
                                      {
                                      ?>
                                      <?php
                                      $master_id = $result->masterID;
                                      $sql2="SELECT * from register WHERE userID='$master_id'";
                                      $query2=$dbh->prepare($sql2);
                                      $query2->execute();
                                      $results2=$query2->fetchALL(PDO::FETCH_OBJ);
                                      $cnt2=1;
                                      if($query2->rowCount()>0)
                                      {
                                      foreach($results2 as $result2)
                                      {
                                      ?>
                                      <tr class="even pointer">
                                        <td hidden style="text-align:center" class=" "><?php echo htmlentities($result->masterID);?></td>
                                        <td hidden style="text-align:center" class=" "><?php echo htmlentities($result->userID);?></td>
                                        <td hidden style="text-align:center" class=" "><?php echo htmlentities($result->petID);?></td>
                                        <td hidden hidden style="text-align:center" class=" "><?php echo htmlentities($result->userID);?></td>
                                        <td style="text-align:center" class=" "><?php echo htmlentities($result2->orgName);?><?php echo htmlentities($result2->userFirstname);?> <?php echo htmlentities($result2->userLastname);?></td>
                                        <td style="text-align:center" class=" "><?php echo htmlentities($result->petName);?></td>
                                        <td style="text-align:center" class=" "><?php echo htmlentities($result->petType);?></td>
                                        <td style="text-align:center" class=" "><?php echo htmlentities($result->petBreed);?></td>
                                        <td style="text-align:center" class=" "><?php echo htmlentities($result1->postStatus);?></td>     
                                        <td style="text-align:center" class=" "><?php echo htmlentities($result1->petStatus);?></td>
                                        <td style="text-align:center" class=" "><?php echo htmlentities($result->userName);?></td>                                                         
                                      </tr>
                                    <?php $cnt2=$cnt2+1;}}?>
                                    <?php $cnt1=$cnt1+1;}}?>
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
            <!-- //page content -->


          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
<!-- //page content --> 

  </div>
</div>
<!-- //page content -->

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
                $('#char_bank').val(data[2]);
                $('#char_amount').val(data[3]);
                $('#char_pin').val(data[4]);
                $('#char_description').val(data[5]);
                $('#des').val(data[6]);
                $('#char_picture').val(data[7]);
                $('#char_status').val(data[8]);
                $('#user_id').val(data[9]);
                $('#post_by').val(data[10]);
                $('#post_date').val(data[11]);
                $('#user_email').val(data[12]);
                $('#user_address').val(data[13]);
                $('#user_contactno').val(data[14]);
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
    
    <script type="text/javascript">
        $(function() {
            $('#example-table').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>
    <script>
$(document).ready(function (){

$('#checkAll').click(function() {

    if($(this).is(':checked')){

        $('.checkItem').prop('checked',true);
    }
    else
    {
       $('.checkItem').prop('checked',false);   
    }
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
