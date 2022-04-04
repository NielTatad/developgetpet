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

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!-- Custom styling plus plugins -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="http://localhost/developgetpet/dashboard/admin.php" class="site_title"><i class="fa fa-paw"></i> <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspGETPET</span></a>
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
                            <li><a href="http://localhost/developgetpet/dashboard/admin.php" style="font-size:15px;">Dashboard</a>
                            </li>

                            <li>
                            <li><a href="http://localhost/developgetpet/dashboard/ManageAdoption&Shorttermcare.php" style="font-size:15px;">Manage Pet Adoption & <br> Short Term-Care</a>
                            </li>

                                <li><a style="font-size:15px;">Manage Donation & Fundraising Activities<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="#">Donation</a></li>
										<li><a href="#">Fundraising Activities</a></li>
									</ul>
								</li>

                                <li><a style="font-size:15px;">Manage Tips, Advice & Articles<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="#">Tips</a></li>
										<li><a href="#">Advice</a></li>
                                        <li><a href="#">Articles</a></li>
									</ul>
								</li>

                                <li><a style="font-size:15px;">History<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="#">Adoption</a></li>
										<li><a href="#">Short Term-Care</a></li>
									</ul>
								</li>
                                
                                <li>
                                <li><a href="#" style="font-size:15px;">Report</a>
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
                    <?php echo($result->adUsername);?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black" data-toggle="modal" data-target="#Profile"> Profile</a>
                      <!--<a class="dropdown-item"  href="javascript:;" onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black" data-toggle="modal" data-target="#Settings"> Settings</a>
                      <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>-->
                    <a class="dropdown-item"  href="http://localhost/developgetpet/dashboard/page_404.php">Contact Us</a>
                      <a class="dropdown-item"  href="http://localhost/developgetpet/login-page/login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open" style="margin-top:6px;">
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
                            <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- /page content -->

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel" style="border-radius:10px;border-width:2px;">
                  <div class="x_title">
                    <h2>Posted Pet</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link" style="margin-left:50px"><i class="fa fa-chevron-up"></i></a>
                      </li>
                  </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="text-align:center;">
                                  
                  <!-- View Pet Post for Adotion Code -->
                  <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="adoption-tab" data-toggle="tab" href="#adoption1" role="tab" aria-controls="Adoption" aria-selected="true">Pet Adoption Tab</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="shorttermcare-tab" data-toggle="tab" href="#shorttermcare1" role="tab" aria-controls="Shorttermcare" aria-selected="false">Short-Term Care Tab</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="adoption1" role="tabpanel" aria-labelledby="adoption-tab">
                      
                      <?php
                        $sql="SELECT * from postpet WHERE postStatus != 'Deleted' AND petStatus != 'Adopted' ORDER BY petID DESC";
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
                                  <Img <?php echo"<img src = '/developgetpet/web/images/$result->petPicture'";?> class="card-ing-top" alt="Post Images" style="height:300px;width:500px;border-radius:10px;float:left;">
                                  <ul style="list-style:none;margin-left:-50px;">
                                  <li><h3 hidden class="card-title"><?php echo ($result->petID);?></h3></li>
                                  <button class="btn btn-round btn-success editbtn" style="background-color:#00cdc1;"><i class="fa fa-edit"></i></button><button class="btn btn-round btn-success deletebtn" style="background-color:#00cdc1;"><i class="fa fa-trash"></i></button><br><br>
                                  <h2 class="card-title" style="font-style:bold;font-size:25px;font-family:Arial, Helvetica, sans-serif;text-transform: uppercase;"><?php echo ($result->petName);?></h2>
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
                                  
                                  <ul style="margin-right:5px;"><h3 class="card-title" style="font-size:15px;"><?php echo ($result->petSex);?> (<?php echo ($result->petBreed);?>)</h3></ul>
                                  <ul style="margin-right:5px;"><h3 class="card-title" style="font-size:15px;"><?php echo ($userid->Address);?></h3></ul>
                                  <label style="margin-top:10px;">Posted by: <img <?php echo"<img src = '/developgetpet/web/images/$userid->Image'";?> alt="avatar" style="width:25px;height:25px;" class="rounded-circle img-responsive"> <?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?> </label><br>
                                  <?php $cnt1=$cnt1+1;}} ?>
                                  <li><h3 hidden class="card-title"><?php echo ( $userid->userFirstname);?> <?php echo ($userid->userLastname);?></h3></li>
                                  <li><label style=""><?php echo ($result->postDate);?></label><br></li>
                                  <li><h3 hidden class="card-title"><?php echo ( $userid->Email);?></h3></li>
                                  <li><h3 hidden class="card-title"><?php echo ( $userid->Address);?></h3></li>
                                  <li><h3 hidden class="card-title"><?php echo ( $userid->contactNo);?></h3></li>
                                  <button type="button" class="btn btn-round btn-success viewbtn" style="background-color:#00cdc1;border:#00cdc1;width:100px;">View More</button>
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
                      echo "You don't have any posts to display.";
                    }
                    ?>

                      </div>
                      <div class="tab-pane fade" id="shorttermcare1" role="tabpanel" aria-labelledby="shorttermcare-tab">
                      <!-- View Pet Post for Short-Term Care Code -->
                          Code for Short-Term Care
                      <!-- View Pet Post for Short-Term Care Code -->
                      </div>
                      
                    </div>
         <!-- //View Pet Post for Adotion Code -->                                        
                           
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- /page content -->

  <!-- Delete Post Code -->

  <?php
   if(isset($_POST['Delete']))
   {
    $petID=($_POST['petID']);

    $query="update postpet set petStatus='Not available', postStatus ='Deleted' where petID=:petID";
    $query= $dbh->prepare($query);
    $query->bindValue('petID',$petID);
    $query->execute();

    echo '<script>alert("Post Deleted Successfully!")</script>';
    echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/ManageAdoption&Shorttermcare.php'</script>";
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
                  <p>Are you sure, you want to delete this post?</p>
            </div><br>
            <div style="text-align: center" class="wrap-input100 validate-input">
                  <input hidden id="pet_id" name="petID" required = "required" class="form-control" id="success">
            </div>
            <div style="text-align: center" class="form-group">
            <div class="col-md-6 offset-md-3">
                  <button name="Delete" id="CancelRequest" type="submit" type='submit' class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;width: 90px;height:37px;">Yes</button>
                  <button type='reset' class="btn btn-round btn-danger" name="CancelRequest" class="close" data-dismiss="modal" style="width:90px;height:37px;">No</button>
            </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
      <!-- //Modal Delete Post -->
  
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

  <!-- Modal Pet Information -->
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
					    <input hidden type="text" id="pet_id" name="PetID" required = "required" class="form-control">
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_name" name="PetName" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Type<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_type" name="Type" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Breed<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_breed" name="Breed" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Gender<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_sex" name="Gender" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Age<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_age" name="Age" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Color<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_color" name="Color" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Weight<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_weight" name="Weight" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Vaccination Status<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="vaccination_status" name="Vaccination" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Deworming Status<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="deworming_status" name="Deworming" style="background-color:#fff;width:400px;" required="required"/>
        </div>
        </div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Description<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
        <textarea disabled="yes" id="pet_description" style="width:400px;height:100px;padding-top:-5px;background-color: #fff;resize: none;font-size:16px;"></textarea>
        </div>
        </div>

        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" id="des" name="Description"  required = "required" class="form-control">
				</div>

        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" id="pet_picture" name="Picture"  required = "required" class="form-control">
				</div>

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Status<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
               <input readonly type="text" class="form-control" id="pet_status" name="Availability" style="background-color:#fff;width:400px;" required="required"/>
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

        <div class="field item form-group">
        <label class="col-form-label col-md-3 col-sm-3  label-align">Reason<span class="required"></span></label>
        <div class="col-md-6 col-sm-6">
        <textarea name="Reason" id="Reason" style="width:400px;height:100px;padding-top:-5px;background-color: #fff;resize: none;font-size:16px;" required = "required" placeholder="Write your reason to adopt..." onkeyup="request()"></textarea>
        </div>
        </div>
        <script>
          function request() {
          if(document.getElementById("Reason").value==="") { 
                    document.getElementById('adopt').disabled = true; 
                } else { 
                    document.getElementById('adopt').disabled = false;
                }
            }
        </script>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input hidden type="text" name="UserID" value="<?php echo ($result->ownerID);?>"  required = "required" class="form-control">

              <input hidden readonly type="text" class="form-control" name="Name" value="<?php echo ($result->ownerFirstname);?> <?php echo ($result->ownerLastname);?>" style="background-color:#fff;width:400px;" required="required"/>

              <input hidden readonly type="text" class="form-control" name="Email" value="<?php echo ($result->ownerEmail);?>" style="background-color:#fff;width:400px;" required="required"/>

              <input hidden readonly type="text" class="form-control" name="Address" value="<?php echo ($result->ownerAddress);?>" style="background-color:#fff;width:400px;" required="required"/>

              <input hidden readonly type="text" class="form-control" name="ContactNo" value="<?php echo ($result->ownerContactNo);?>" style="background-color:#fff;width:400px;" required="required"/>

        </div>

        <div class="ln_solid">
        <br>
        <div class="form-group" style="text-align: center">
        <div class="col-md-6 offset-md-3">
               <button id="adopt" name ="Adopt" type="submit" class="btn btn-success" style="background-color:#00cdc1;border:#00cdc1;width:130px;height:50px;font-size:18px;" disabled>Adopt Now!</button>
        </div>
        </div>
        </div>

        </form>
      </div>
    </div>
  </div>
</div>
	<!-- //Modal Pet Information -->

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
  </body>
</html>
