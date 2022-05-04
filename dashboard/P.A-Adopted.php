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
<?php
if(isset($_POST['update']))
{
$Firstname=($_POST['Firstname']);
$Lastname=($_POST['Lastname']);
$ContactNo=($_POST['ContactNo']);
$Address=($_POST['Address']);
$Email=($_POST['Email']);
$Username=($_POST['Username']);
$Password=($_POST['Password']);

$sql="update register set 
userFirstname=:Firstname,
userLastname=:Lastname,
contactNo=:ContactNo,
Address=:Address,
Email=:Email,
Username=:Username,
Password=:Password 
where userID=:ID";

$query=$dbh->prepare($sql);
$query->bindParam(':ID',$ID,PDO::PARAM_STR);  
$query->bindParam(':Firstname',$Firstname,PDO::PARAM_STR);
$query->bindParam(':Lastname',$Lastname,PDO::PARAM_STR);
$query->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query->bindParam(':Address',$Address,PDO::PARAM_STR);
$query->bindParam(':Email',$Email,PDO::PARAM_STR);
$query->bindParam(':Username',$Username,PDO::PARAM_STR);
$query->bindParam(':Password',$Password,PDO::PARAM_STR);
$query->execute();

$Firstname=($_POST['Firstname']);
$Lastname=($_POST['Lastname']);
$ContactNo=($_POST['ContactNo']);
$Address=($_POST['Address']);
$Email=($_POST['Email']);
$Username=($_POST['Username']);
$Password=($_POST['Password']);

$sql1="update petadopter set
adopterFirstname=:Firstname,
adopterLastname=:Lastname,
adopterContactNo=:ContactNo,
adopterAddress=:Address,
adopterEmail=:Email,
adopterUsername=:Username,
adopterPassword=:Password 
where adopterID=:ID";
$query1=$dbh->prepare($sql1); 
$query1->bindParam(':ID',$ID,PDO::PARAM_STR); 
$query1->bindParam(':Firstname',$Firstname,PDO::PARAM_STR);
$query1->bindParam(':Lastname',$Lastname,PDO::PARAM_STR);
$query1->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query1->bindParam(':Address',$Address,PDO::PARAM_STR);
$query1->bindParam(':Email',$Email,PDO::PARAM_STR);
$query1->bindParam(':Username',$Username,PDO::PARAM_STR);
$query1->bindParam(':Password',$Password,PDO::PARAM_STR);
$query1->execute();

$Firstname=($_POST['Firstname']);
$Lastname=($_POST['Lastname']);
$ContactNo=($_POST['ContactNo']);
$Address=($_POST['Address']);
$Email=($_POST['Email']);
$Username=($_POST['Username']);
$Password=($_POST['Password']);

$sql3="update login set 
userFirstname=:Firstname,
userLastname=:Lastname,
contactNo=:ContactNo,
Address=:Address,
Email=:Email,
Username=:Username,
Password=:Password where userID=:ID";

$query3=$dbh->prepare($sql3); 
$query3->bindParam(':ID',$ID,PDO::PARAM_STR);
$query3->bindParam(':Firstname',$Firstname,PDO::PARAM_STR);
$query3->bindParam(':Lastname',$Lastname,PDO::PARAM_STR);
$query3->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query3->bindParam(':Address',$Address,PDO::PARAM_STR);
$query3->bindParam(':Email',$Email,PDO::PARAM_STR);
$query3->bindParam(':Username',$Username,PDO::PARAM_STR);
$query3->bindParam(':Password',$assword,PDO::PARAM_STR);
$query3->execute();
{
echo '<script>alert("Your Account Updated Successfully!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.A-Profile.php'</script>";
}
}
?>

<?php
if(isset($_POST['profile']))
{
$Picture=$_POST['Picture'];

$sql="update register set 
Image=:Picture
where userID=:ID";

$query=$dbh->prepare($sql);
$query->bindParam(':ID',$ID,PDO::PARAM_STR);  
$query->bindParam(':Picture',$Picture,PDO::PARAM_STR);
$query->execute();


$Picture=($_POST['Picture']);

$sql1="update petadopter set
adopterPicture=:Picture
where adopterID=:ID";
$query1=$dbh->prepare($sql1); 
$query1->bindParam(':ID',$ID,PDO::PARAM_STR); 
$query1->bindParam(':Picture',$Picture,PDO::PARAM_STR);
$query1->execute();


$Picture=$_POST['Picture'];

$sql3="update login set 
Image=:Picture
where userID=:ID";

$query3=$dbh->prepare($sql3);
$query3->bindParam(':ID',$ID,PDO::PARAM_STR); 
$query3->bindParam(':Picture',$Picture,PDO::PARAM_STR);
$query3->execute();
{
echo '<script>alert("Your Profile Picture Updated Successfully!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/P.A-Profile.php'</script>";
}
}
?>
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
	<!-- iCheck -->
	<link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
	<!-- Select2 -->
	<link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
	<!-- Switchery -->
	<link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
	<!-- starrr -->
	<link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
  <style>
    .view-more-comment:hover {
    text-decoration: underline;
}
    .hide-more-comment:hover {
    text-decoration: underline;
}
  </style>
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
                    <!--<div class="profile_pic">
                    <img <?php echo"<img src = '/developgetpet/web/images/$result->adopterPicture'";?> alt="..." class="img-circle profile_img" style="background-color:#00cdc1;border:#00cdc1;">
                    </div>
                    <div class="profile_info">
                    <span>Welcome,</span>
                    <h2><?php echo ($result->adopterFirstname);?> <?php echo ($result->adopterLastname);?></h2>
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
                        <li><a href="http://localhost/developgetpet/dashboard/P.A-Dogslistadoption.php">Dog's For Adoption</a></li>
                        <li><a href="http://localhost/developgetpet/dashboard/P.A-Catslistadoption.php">Cat's For Adoption</a></li>
                      </ul>
                    </li>

                    <li><a >Pet For Short-term care</a>
                      <ul class="nav child_menu">
                        <li><a href="http://localhost/developgetpet/dashboard/P.A-Dogsshorttermcare.php">Dog's For Short-term care</a></li>
                        <li><a href="http://localhost/developgetpet/dashboard/P.A-Catsshorttermcare.php">Cat's For Short-term care</a></li>
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
                    <li><a href="http://localhost/developgetpet/dashboard/P.A-Adopted.php">Adopted</a>
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
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
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
                    <a class="dropdown-item" data-toggle="modal" data-target="#Settings">Settings</a>
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
                        <?php $cnt=$cnt+1;}} ?>
                      </li>
                      <li onclick="window.location.href='http://localhost/developgetpet/dashboard/P.A-UserRequest.php';" class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <a href="http://localhost/developgetpet/dashboard/P.A-Requestnotification.php">See All Alerts</a>
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

<!-- /page content -->

<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12  ">
    <div class="x_panel" style="border-radius:10px;border-width:2px;">
      <div class="x_title">
      <h2>Pet's That has already Adopted</h2> 
     
        <ul class="nav navbar-right panel_toolbox">
       </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content" style="text-align:center;">
      <br>  

      <?php
            $sql="SELECT * from postpet WHERE petStatus='Adopted' AND postStatus='Adoption' AND postStatus!='Deleted' ORDER BY petID DESC LIMIT 3";
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
                              <h5 class="card-title" style="float:left;text-transform: uppercase;"><?php echo ($result->petName);?> (<?php echo ($result->petSex);?>)</h5>
                              <br><br>
                              <h4 class="card-title" style="float:left;line-height:5px;"><?php echo ($result->petType);?> (<?php echo ($result->petBreed);?>)</h4>
                              <br><br>
                              <p class="card-title" style="float:left;line-height:5px;">Vaccination Status: <?php echo ($result->vaccinationStatus);?></p>
                              <br><br>
                              <p class="card-title" style="float:left;line-height:5px;">Deworming Status: <?php echo ($result->dewormingStatus);?></p>
                              <br><br>
                              <div class="alert alert-success" style="background-color:
                              #7ED8BB;" role="alert">
                                This Pet is Already <?php echo ($result->postStatus);?> by Someone
                              </div>
                            </div>
                            <div class="card-footer" style="background-color:#E4E4E4;">
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
  </div>
</div>
</div>
</div>
<!-- /page content -->

</div>
</div>

<!-- footer content -->
<footer>
<p class="tweet-p1">
ADOPTING MEANS YOU SAVE A LIFE! <a href="mailto:GetPet@gmail.com">GetPet@gmail.com</a>
</p>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../vendors/validator/multifield.js"></script>
<script src="../vendors/validator/validator.js"></script>

<script>
$( "#comment" ).keyup(function() {
$("#btnComment").prop("disabled", !this.value);
});
</script>

<script>
$( "#edit_comment" ).keyup(function() {
$("#btnEditComment").prop("disabled", !this.value);
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
PostPicture.onchange = evt => {
const [file] = PostPicture.files
if (file) {
post_picture.src = URL.createObjectURL(file)
}
document.getElementById("btnChangePostPicture").disabled = false;
}
</script>

<script>
$(window).on("load", function () {
console.log("load");
$("div#view_more_comment_Div").hide();
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

<script>
$(document).ready(function () {

$('.adoptbtn').on('click', function () {

    $('#AdoptModal').modal('show');

    $tr = $(this).closest('ul');

    var data = $tr.children("li").map(function () {
        return $(this).text();
    }).get();

    console.log(data);

    $('#pet_id').val(data[0]);
    $('#pet_name').val(data[1]);
    $('#pet_type').val(data[2]);
    $('#pet_breed').val(data[3]);
    $('#pet_sex').val(data[4]);
    $('#pet_age').val(data[5]);
    $('#pet_color').val(data[6]);
    $('#pet_weight').val(data[7]);
    $('#vaccination_status').val(data[8]);
    $('#deworming_status').val(data[9]);
    $('#pet_description').val(data[10]);
    $('#des').val(data[11]);
    $('#pet_picture').val(data[12]);
    $('#pet_status').val(data[13]);
    $('#user_id').val(data[14]);
    $('#post_by').val(data[15]);
    $('#post_date').val(data[16]);
    $('#user_email').val(data[17]);
    $('#user_address').val(data[18]);
    $('#user_contactno').val(data[19]);
});
});
</script>

<script>
$(document).ready(function () {

$('.viewbtn').on('click', function () {

    $('#View').modal('show');

    $tr = $(this).closest('ul');

    var data = $tr.children("li").map(function () {
        return $(this).text();
    }).get();

    console.log(data);

    $('#petid').val(data[0]);
    $('#petname').val(data[1]);
    $('#pettype').val(data[2]);
    $('#petbreed').val(data[3]);
    $('#petsex').val(data[4]);
    $('#petage').val(data[5]);
    $('#petcolor').val(data[6]);
    $('#petweight').val(data[7]);
    $('#vaccinationstatus').val(data[8]);
    $('#dewormingstatus').val(data[9]);
    $('#petdescription').val(data[10]);
    $('#petstatus').val(data[13]);
});
});
</script>

<script>
$(document).ready(function () {

$('.commentbtn').on('click', function () {

    $('#Comment').modal('show');

    $tr = $(this).closest('ul');

    var data = $tr.children("li").map(function () {
        return $(this).text();
    }).get();

    console.log(data);

    $('#petid').val(data[0]);
    $('#masterid').val(data[14]);
});
});
</script>

<script type="text/javascript">
$(".Ppost").click(function () {
var pet_id3 = $(this).attr('data-pet-id');
$('#ChangePostPicture').modal('show');
$("#pet_id3").val( pet_id3 );
var picture_file = $(this).attr('data-pet-picture');
$('#picture_file').val( picture_file );
document.getElementById('post_picture').src="/developgetpet/web/images/"+""+picture_file;
});
</script>

<script type="text/javascript">
$(".Epost").click(function () {
var pet_id2 = $(this).attr('data-pet-id');
var pet_name2 = $(this).attr('data-pet-name');
var pet_type2 = $(this).attr('data-pet-type');
var pet_breed2 = $(this).attr('data-pet-breed');
var pet_sex2 = $(this).attr('data-pet-gender');
var pet_age2 = $(this).attr('data-pet-age');
var pet_color2 = $(this).attr('data-pet-color');
var pet_weight2 = $(this).attr('data-pet-weight');
var vaccination_status2 = $(this).attr('data-vaccination-status');
var deworming_status2 = $(this).attr('data-deworming-status');
var pet_description2 = $(this).attr('data-pet-description');
$('#EditPost').modal('show');
$("#pet_id2").val( pet_id2 );
$("#pet_name2").val( pet_name2 );
$("#pet_type2").val( pet_type2 );
$("#pet_breed2").val( pet_breed2 );
$("#pet_sex2").val( pet_sex2 );
$("#pet_age2").val( pet_age2 );
$("#pet_color2").val( pet_color2 );
$("#pet_weight2").val( pet_weight2 );
$("#vaccination_status2").val( vaccination_status2 );
$("#deworming_status2").val( deworming_status2 );
$("#pet_description2").val( pet_description2 );
});
</script>

<script type="text/javascript">
$(".Dpost").click(function () {
var pet_id1 = $(this).attr('data-pet-id');
$('#DeletePost').modal('show');
$("#pet_id1").val( pet_id1 );
});
</script>

<script type="text/javascript">
$(".Ecomment").click(function () {
var commentid = $(this).attr('data-comment-id');
var edit_comment = $(this).attr('data-comment-content');
$("#edit_comment").val( edit_comment );
$("#commentid").val( commentid );
$('#EditComment').modal('show');
});
</script>

<script type="text/javascript">
$(".Dcomment").click(function () {
var comment_id = $(this).attr('data-comment-id');
$("#comment_id").val( comment_id );
$('#DeleteComment').modal('show');
});
</script>

<script type="text/javascript">
$(".menu").filter(function(){
return $(this).text().trim() != "<?php echo $ID?>";
}).hide();
</script>

<script type="text/javascript">
$(".adoptbtn").filter(function(){
return $(this).text().trim() == "<?php echo $ID?> Adopt Me";
}).css('visibility', 'hidden');
</script>

<script type="text/javascript">
$(".option").filter(function(){
return $(this).text().trim() != "<?php echo $ID?>";
}).css('visibility', 'hidden');
</script>

<script type="text/javascript">
$(".Epost").filter(function(){
return $(this).text().trim() != "<?php echo $ID?> Edit";
}).hide();
</script>

<script type="text/javascript">
$(".Dpost").filter(function(){
return $(this).text().trim() != "<?php echo $ID?> Delete";
}).hide();
</script>

<script type="text/javascript">
$(".comment-count").filter(function(){
return $(this).text().trim() === "0";
}).hide();
</script>

<script type="text/javascript">
$(".count-more-comment").filter(function(){
return $(this).text().trim() === "View 0 more comment";
}).hide();
</script>

<script type="text/javascript">
$('p.view-more-comment').click(function() {
$('.view-more-comment-Div').show(); // To hide all other contents
$('.comment-Div').hide();
});
</script>

<script type="text/javascript">
$("p.hide-more-comment").filter(function(){
return $(this).text().trim() === "Hide -1 comment";
}).hide();
$("p.hide-more-comment").filter(function(){
return $(this).text().trim() === "Hide 0 comment";
}).hide();
</script>

<script type="text/javascript">
$('p.hide-more-comment').click(function() {
$('.view-more-comment-Div').hide(); // To hide all other contents
$('.comment-Div').show();
});
</script>

<script type="text/javascript">
$(".unread").filter(function(){
return $(this).text().trim() === "Read";
}).hide();
</script>

<!-- Javascript functions	-->
<script>
function hideshow(){
var password = document.getElementById("password1");
var slash = document.getElementById("slash");
var eye = document.getElementById("eye");

if(password.type === 'password'){
    password.type = "text";
    slash.style.display = "block";
    eye.style.display = "none";
}
else{
    password.type = "password";
    slash.style.display = "none";
    eye.style.display = "block";
}

}
</script>

<script>
// initialize a validator instance from the "FormValidator" constructor.
// A "<form>" element is optionally passed as an argument, but is not a must
var validator = new FormValidator({
"events": ['blur', 'input', 'change']
}, document.forms[0]);
// on form "submit" event
document.forms[0].onsubmit = function(e) {
var submit = true,
    validatorResult = validator.checkAll(this);
console.log(validatorResult);
return !!validatorResult.valid;
};
// on form "reset" event
document.forms[0].onreset = function(e) {
validator.reset();
};
// stuff related ONLY for this demo page:
$('.toggleValidationTooltips').change(function() {
validator.settings.alerts = !this.checked;
if (this.checked)
    $('form .alert').remove();
}).prop('checked', false);

</script>

<script>
$(document).ready(function(){
$("#breed").on("keyup", function(){
var value = $(this).val().toLowerCase();
$("#card div").filter(function(){
 $(this).toggle($(this).text().toLowerCase().indexof(value)>-1);
});
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
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="../vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="../vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="../vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="../vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="../vendors/starrr/dist/starrr.js"></script>
<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>





</body>
</html>

