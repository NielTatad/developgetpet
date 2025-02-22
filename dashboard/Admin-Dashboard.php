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
            

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Timeline</h2>
                    <ul class="nav navbar-right panel_toolbox">
                   </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    
                  <div class="top_tiles">
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                  <div class="tile-stats">
                  <div class="icon"></div>
                  <a href="#" data-toggle="modal" data-target="#signin">
                  <h6>Total:<br> Sign-in Today<br> </h6 >
                  <div class="count"><?php echo $Date;?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-users"></i></div>
                  
                  </a>
                  </div>
                  </div>
                  </div>

                  <div class="top_tiles">
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                  <div class="tile-stats">
                  <div class="icon"></div>
                  <a href="#" data-toggle="modal" data-target="#petadopter">
                  <h6>Total:<br> Pet Adopters</h6>
                  <div class="count"><?php echo $pet_adopter;?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-users"></i></div>
                  
                  </a>
                  </div>
                  </div>
                  </div>

                  <div class="top_tiles">
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                  <div class="tile-stats">
                  <div class="icon"></div>
                  <a href="#" data-toggle="modal" data-target="#petowner">
                  <h6>Total:<br> Pet Owners</h6>
                  <div class="count"><?php echo $pet_owner; ?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-users"></i></div>
                  
                  </a>
                  </div>
                  </div>
                  </div>

                  <div class="top_tiles">
                  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
                  <div class="tile-stats">
                  <div class="icon"></div>
                  <a href="#" data-toggle="modal" data-target="#AWO">
                  <h6>Total:<br> Animal Welfare Organzation</h6>
                  <div class="count"><?php echo $animal_welfare_organization;?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-users"></i></div>
                  
                  </a>
                  </div>
                  </div>
                  </div>

                  </div>
                </div>
              </div>
            </div>

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


              </div>
            </div>
            <!-- //New Post For Adoption Code -->

            <!-- New Post For Short-term care Code -->
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12">
                <div class="x_panel" style="border-radius:10px;border-width:2px;">
                  <div class="x_title">
                    <h2>New Post For Short-Term Care</h2>
                    <ul class="nav navbar-right panel_toolbox">     
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="text-align:center;">

                  <?php
                        $sql="SELECT * from postpet WHERE petStatus='Available' AND postStatus='Short-term care' AND postStatus!='Deleted' ORDER BY petID DESC LIMIT 3";
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
                                          <p class="card-title" style="float:left;"><?php echo ($result->selectedRange);?></p><br><br>
                                          <p class="card-title" style="float:left;line-height:5px"><?php echo ($result->petStatus);?></p>
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

              </div>
            </div>
            <!-- //New Post For Short-term care Code -->

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

  </div>
</div>            
<!-- New Post For Tips Advice & Articles Code -->

          </div>
        </div>
        <!-- /page content -->
  
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

  <!-- Modal Total Sign-in Today -->  
  <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document" >
    <div class="modal-content">
      <div class="modal-header text-center">

      <div class="clearfix"></div>

<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h2><strong>Sign-in Today Were Registered = <?php echo $Date;?></strong></h2>
      <ul class="nav navbar-right panel_toolbox">
      </ul>
      <div class="clearfix"></div>
    </div>

                            <div class="x_content">
                            <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
              
                            <th style="text-align:center" class="column-title">ID</th>
                            <th style="text-align:center" class="column-title">Organization Name/Name</th>
                            <th style="text-align:center" class="column-title">Contact No.</th>
                            <th style="text-align:center" class="column-title">Address</th>
                            <th style="text-align:center" class="column-title">Logo/Picture</th>
                            <th style="text-align:center" class="column-title">Email</th>
                            <th style="text-align:center" class="column-title">Role</th>
                            </th> 
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            $sql="SELECT * from login WHERE (loginDate) = (CURDATE())";
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
                                
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->userID);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->orgName);?><?php echo htmlentities($result->userFirstname);?> <?php echo htmlentities($result->userLastname);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->contactNo);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->Address);?></td>
                                <td style="text-align:center" class=" "><?php echo"<img src = '/developgetpet/web/images/$result->Image' style = height:80px; width: 80px;/>";?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->Email);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->Role);?></td>
                                
                              </tr>
                            <?php $cnt=$cnt+1;}} ?>
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
        </div>
      </div>
	<!-- Modal Total Sign-in Today -->

  <!-- Modal Total Pet Adopters -->
  
  <div class="modal fade" id="petadopter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document" >
    <div class="modal-content">
      <div class="modal-header text-center">

      <div class="clearfix"></div>

<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h2><strong>Total Pet Adopters Were Registered = <?php echo $pet_adopter;?></strong></h2>
      <ul class="nav navbar-right panel_toolbox">
      </ul>
      <div class="clearfix"></div>
    </div>

                            <div class="x_content">
                            <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
              
                            <th style="text-align:center" class="column-title">ID</th>
                            <th style="text-align:center" class="column-title">Name</th>
                            <th style="text-align:center" class="column-title">Contact No.</th>
                            <th style="text-align:center" class="column-title">Address</th>
                            <th style="text-align:center" class="column-title">Picture</th>
                            <th style="text-align:center" class="column-title">Email</th>
                            <th style="text-align:center" class="column-title">Role</th>
                            
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            $sql="SELECT * from petadopter";
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
                                
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->adopterID);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->adopterFirstname);?> <?php echo htmlentities($result->adopterLastname);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->adopterContactNo);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->adopterAddress);?></td>
                                <td style="text-align:center" class=" "><?php echo"<img src = '/developgetpet/web/images/$result->adopterPicture' style = height:80px; width: 80px;/>";?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->adopterEmail);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->Role);?></td>
                                
                              </tr>
                            <?php $cnt=$cnt+1;}} ?>
            
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
        </div>
      </div>
	<!-- Modal Total Pet Adopters -->

  <!-- Modal Total Pet Owners -->
  
  <div class="modal fade" id="petowner" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document" >
    <div class="modal-content">
      <div class="modal-header text-center">

      <div class="clearfix"></div>

<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h2><strong>Total Pet Owners Were Registered = <?php echo $pet_owner;?></strong></h2>
      <ul class="nav navbar-right panel_toolbox">
      </ul>
      <div class="clearfix"></div>
    </div>

                            <div class="x_content">
                            <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
              
                            <th style="text-align:center" class="column-title">ID</th>
                            <th style="text-align:center" class="column-title">Name</th>
                            <th style="text-align:center" class="column-title">Contact No.</th>
                            <th style="text-align:center" class="column-title">Address</th>
                            <th style="text-align:center" class="column-title">Picture</th>
                            <th style="text-align:center" class="column-title">Email</th>
                            <th style="text-align:center" class="column-title">Role</th>
                            
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            $sql="SELECT * from petowner";
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
                                
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->ownerID);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->ownerFirstname);?> <?php echo htmlentities($result->ownerLastname);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->ownerContactNo);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->ownerAddress);?></td>
                                <td style="text-align:center" class=" "><?php echo"<img src = '/developgetpet/web/images/$result->ownerPicture' style = height:80px; width: 80px;/>";?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->ownerEmail);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->Role);?></td>
                                
                              </tr>
                            <?php $cnt=$cnt+1;}} ?>
            
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
        </div>
      </div>
	<!-- Modal Total Pet Owners -->

  <!-- Modal Total Animal Welfare Organization -->
  
  <div class="modal fade" id="AWO" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document" >
    <div class="modal-content">
      <div class="modal-header text-center">

      <div class="clearfix"></div>

<div class="col-md-12 col-sm-12  ">
  <div class="x_panel">
    <div class="x_title">
      <h2><strong>Total Animal Welfare Organization Were Registered = <?php echo $animal_welfare_organization;?></strong> </h2>
      <ul class="nav navbar-right panel_toolbox">
      </ul>
      <div class="clearfix"></div>
    </div>

                            <div class="x_content">
                            <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
              
                            <th style="text-align:center" class="column-title">ID</th>
                            <th style="text-align:center" class="column-title">Organization Name</th>
                            <th style="text-align:center" class="column-title">Contact No.</th>
                            <th style="text-align:center" class="column-title">Address</th>
                            <th style="text-align:center" class="column-title">Logo</th>
                            <th style="text-align:center" class="column-title">Email</th>
                            <th style="text-align:center" class="column-title">Role</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            $sql="SELECT * from animalwelfareorganization";
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
                                
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->orgID);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->orgName);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->orgContactNo);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->orgAddress);?></td>
                                <td style="text-align:center" class=" "><?php echo"<img src = '/developgetpet/web/images/$result->orgLogo' style = height:80px; width: 80px;/>";?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->orgEmail);?></td>
                                <td style="text-align:center" class=" "><?php echo htmlentities($result->Role);?></td>
                                
                              </tr>
                            <?php $cnt=$cnt+1;}} ?>
            
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
        </div>
      </div>
	<!-- Modal Total Animal Welfare Organization -->

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
