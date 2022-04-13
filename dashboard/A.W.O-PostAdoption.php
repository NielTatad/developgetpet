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

<?php

if(isset($_POST['update']))
{
$OrganizationName=($_POST['Orgname']);
$ContactNo=($_POST['ContactNo']);
$Address=($_POST['Address']);
$Email=($_POST['Email']);
$Username=($_POST['Username']);
$Password=($_POST['Password']);

$sql="update register set 
orgName=:Orgname,
contactNo=:ContactNo,
Address=:Address,
Email=:Email,
Username=:Username,
Password=:Password 
where 
userID=:ID";

$query=$dbh->prepare($sql);
$query->bindParam(':ID',$ID,PDO::PARAM_STR);  
$query->bindParam(':Orgname',$OrganizationName,PDO::PARAM_STR);
$query->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query->bindParam(':Address',$Address,PDO::PARAM_STR);
$query->bindParam(':Email',$Email,PDO::PARAM_STR);
$query->bindParam(':Username',$Username,PDO::PARAM_STR);
$query->bindParam(':Password',$Password,PDO::PARAM_STR);
$query->execute();

$OrganizationName=($_POST['Orgname']);
$ContactNo=($_POST['ContactNo']);
$Address=($_POST['Address']);
$Email=($_POST['Email']);
$Username=($_POST['Username']);
$Password=($_POST['Password']);

$sql1="update animalwelfareorganization set
orgName=:Orgname,
orgContactNo=:ContactNo,
orgAddress=:Address,
orgEmail=:Email,
orgUsername=:Username,
orgPassword=:Password 
where 
orgID=:ID";

$query1=$dbh->prepare($sql1); 
$query1->bindParam(':ID',$ID,PDO::PARAM_STR); 
$query1->bindParam(':Orgname',$OrganizationName,PDO::PARAM_STR);
$query1->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query1->bindParam(':Address',$Address,PDO::PARAM_STR);
$query1->bindParam(':Email',$Email,PDO::PARAM_STR);
$query1->bindParam(':Username',$Username,PDO::PARAM_STR);
$query1->bindParam(':Password',$Password,PDO::PARAM_STR);
$query1->execute();

$OrganizationName=($_POST['Orgname']);
$ContactNo=($_POST['ContactNo']);
$Address=($_POST['Address']);
$Email=($_POST['Email']);
$Username=($_POST['Username']);
$Password=($_POST['Password']);

$sql3="update login set 
orgName=:Orgname,
contactNo=:ContactNo,
Address=:Address,
Email=:Email,
Username=:Username,
Password=:Password
where userID=:ID";

$query3=$dbh->prepare($sql3); 
$query3->bindParam(':ID',$ID,PDO::PARAM_STR);
$query3->bindParam(':Orgname',$OrganizationName,PDO::PARAM_STR);
$query3->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query3->bindParam(':Address',$Address,PDO::PARAM_STR);
$query3->bindParam(':Email',$Email,PDO::PARAM_STR);
$query3->bindParam(':Username',$Username,PDO::PARAM_STR);
$query3->bindParam(':Password',$Password,PDO::PARAM_STR);
$query3->execute();
{
echo '<script>alert("Your Account Updated Successfully!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-Profile.php'</script>";
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

$sql1="update animalwelfareorganization set
orgLogo=:Picture
where orgID=:ID";
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
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-Profile.php'</script>";
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
                    <!--<div class="profile_pic">
                    <img <?php echo"<img src = '/developgetpet/web/images/$result->adopterPicture'";?> alt="..." class="img-circle profile_img" style="background-color:#00cdc1;border:#00cdc1;border:5px;">
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
                    <li><a href="http://localhost/developgetpet/dashboard/A.W.O-Dashboard.php"><i></i> Dashboard </a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/A.W.O-Adoption.php">Pet Adoption</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/A.W.O-Donation.php">Donation</a>
                    </li>

                    <li>
                    <li><a href="#">Fundraising activities</a>
                    </li>

                    <li>
                    <li><a href="http://localhost/developgetpet/dashboard/A.W.O-T.A.A.php">Pet Care Tips</a>
                    </li>
                 
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
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
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
                    <a class="dropdown-item" data-toggle="modal" data-target="#Settings">Settings</a>
                      <a class="dropdown-item"  href="http://localhost/developgetpet/login-page/login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
                  <?php
                  $query=$dbh->prepare("SELECT COUNT(masterID) FROM notification WHERE masterID='$ID' AND notificationStatus != 'Read'");
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
                          <span><b><?php echo ($result->notificationTitle);?></b></span><br>
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
                      <li onclick="window.location.href='http://localhost/developgetpet/dashboard/A.W.O-UserRequest.php';" class="nav-item">
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

<?php
date_default_timezone_set("Asia/Manila");
$date = date('m/d/Y h:i A', time());
?>

<?php
if(isset($_POST['Post']))
{

$ID=($_POST['ID']);
$Name=($_POST['Name']);
$Email=($_POST['Email']);
$Address=($_POST['Address']);
$ContactNo=($_POST['ContactNo']);
$Type=($_POST['Type']);
$Petname=($_POST['Petname']);
$Breed=($_POST['Breed']);
$Gender=($_POST['Gender']);
$Age=($_POST['Age']);
$Color=($_POST['Color']);
$Weight=($_POST['Weight']);
$Vaccination=($_POST['Vaccination']);
$Deworming=($_POST['Deworming']);
$Description=($_POST['Description']);
$Picture = $_FILES["Picture"]["name"];
$tmp_dir = $_FILES["Picture"]["tmp_name"];

move_uploaded_file($tmp_dir, "C:/xampp/htdocs/developgetpet/web/images/$Picture");

$sql="INSERT INTO postpet(userID,userName,userEmail,userAddress,userContactNo,petType,petName,petBreed,petSex,petAge,petColor,petWeight,vaccinationStatus,dewormingStatus,petDescription,petPicture,postDate,petStatus,postStatus)VALUES(:ID,:Name,:Email,:Address,:ContactNo,:Type,:Petname,:Breed,:Gender,:Age,:Color,:Weight,:Vaccination,:Deworming,:Description,:Picture,'$date','Available','Adoption')";
$query=$dbh->prepare($sql); 
$query->bindParam(':ID',$ID,PDO::PARAM_STR);
$query->bindParam(':Name',$Name,PDO::PARAM_STR);
$query->bindParam(':Email',$Email,PDO::PARAM_STR);
$query->bindParam(':Address',$Address,PDO::PARAM_STR);
$query->bindParam(':ContactNo',$ContactNo,PDO::PARAM_STR);
$query->bindParam(':Type',$Type,PDO::PARAM_STR);
$query->bindParam(':Petname',$Petname,PDO::PARAM_STR);
$query->bindParam(':Breed',$Breed,PDO::PARAM_STR);
$query->bindParam(':Gender',$Gender,PDO::PARAM_STR);
$query->bindParam(':Age',$Age,PDO::PARAM_STR);
$query->bindParam(':Color',$Color,PDO::PARAM_STR);
$query->bindParam(':Weight',$Weight,PDO::PARAM_STR);
$query->bindParam(':Vaccination',$Vaccination,PDO::PARAM_STR);
$query->bindParam(':Deworming',$Deworming,PDO::PARAM_STR);
$query->bindParam(':Description',$Description,PDO::PARAM_STR);
$query->bindParam(':Picture',$Picture,PDO::PARAM_STR);
$query->execute();

echo '<script>alert("Posted Successfully!")</script>';
echo "<script type ='text/javascript'> document.location='http://localhost/developgetpet/dashboard/A.W.O-Adoption.php'</script>";

}
?>


                    <!-- Back Button -->
                    <a href="http://localhost/developgetpet/dashboard/A.W.O-Adoption.php"><button type="button" class="btn btn-round btn-success" style="background-color:#00cdc1;border:#00cdc1;">Back</button></a>

                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12  ">
                        <div class="x_panel" style="border-radius:10px;border-width:2px;">
                        <div class="x_title">
                        <h2>Post Pet For Adoption</h2>
                        <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link" style="margin-left:50px"><i class="fa fa-chevron-up"></i></a>
                        </li>          
                        </ul>
                        <div class="clearfix"></div>
                        </div>

                                <div class="x_content">
                                <form class="" action="" method="post" novalidate enctype="multipart/form-data">
                                         
                                         <span class="section"></span>
                                         <div class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="ID" value="<?php echo ($result->orgID);?>" type="hidden"/>
                                             </div>
 
                                         </div>
                                         <div class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="Name" value="<?php echo ($result->orgName);?>" type="hidden"/>
                                             </div>
 
                                         </div>
                                         <div class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" name="Email" class='email' value="<?php echo ($result->orgEmail);?>" type="hidden"/></div>
                                         </div>
 
                                         <div class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" name="Address" value="<?php echo ($result->orgAddress);?>" type="hidden"/></div>
                                         </div>
 
                                         <div class="field item form-group">
                                             <div class="col-md-6 col-sm-6">
                                                 <input class="form-control" class='number' name="ContactNo" value="<?php echo ($result->orgContactNo);?>" type="hidden"></div>
                                         </div>
 
                                         <div class="field item form-group">
                                         <label class="col-form-label col-md-3 col-sm-3  label-align" for="">Select<span class="required"></span></label>
                                         <div class="col-md-6 col-sm-6">
                                           <select class="form-control" name="Type" id="slct1" required="required" onchange="populate(this.id,'slct2')">
                                             <option value="">Type of pet...</option>
                                             <option value="Dog">DOG</option>
                                             <option value="Cat">CAT</option>
                                           </select>
                                         </div>
                                       </div>
 
                                       <div class="field item form-group">
                                         <label class="col-form-label col-md-3 col-sm-3  label-align" for="">Select Breed</label>
                                         <div class="col-md-6 col-sm-6">
                                           <select class="select2_group form-control" name="Breed" required="required" id="slct2"></select>
                                         </div>
                                       </div>
 
                                       <script>
 
                                             function populate(s1,s2)
                                             {
                                                 var s1 = document.getElementById(s1);
                                                 var s2 = document.getElementById(s2);
 
                                                 s2.innerHTML = "";
 
                                                 if(s1. value == "Dog")
                                                 {
                                                    var optionArray = ['Affenpinscher|Affenpinscher', 'Afghan hound|Afghan hound', 'Airedale terrier|Airedale terrier','Akita|Akita','Alaskan Malamute|Alaskan Malamute','American Staffordshire terrier|American Staffordshire terrier','American water spaniel|American water spaniel','Askal|Askal','Australian cattle dog|Australian cattle dog','Australian shepherd|Australian shepherd','Australian terrier|Australian terrier','Basenji|Basenji','Basset hound|Basset hound','Beagle|Beagle','Bearded collie|Bearded collie','Bedlington terrier|Bedlington terrier','Bernese mountain dog|Bernese mountain dog','Bichon frise|Bichon frise','Black and tan coonhound|Black and tan coonhound','Bloodhound|Bloodhound','Border collie|Border collie','Border terrier|Border terrier','Borzoi|Borzoi','Boston terrier|Boston terrier','Bouvier Des Flandres|Bouvier Des Flandres','Boxer|Boxer','Briard|Briard','Brittany|Brittany','Brussels griffon|Brussels griffon','Bull terrier|Bull terrier','Bulldog|Bulldog','Bullmastiff|Bullmastiff','Cairn terrier|Cairn terrier','Canaan dog|Canaan dog','Chesapeake Bay retriever|Chesapeake Bay retriever','Chihuahua|Chihuahua','Chinese crested|Chinese shar-pei','Chow chow|Chow chow','Clumber spaniel|Clumber spaniel','Cocker spaniel|Cocker spaniel','Collie|Collie','Curly-coated retriever|Curly-coated retriever','Dachshund|Dachshund','Dalmatian|Dalmatian','Doberman pinscher|Doberman pinscher','English cocker spaniel|English cocker spaniel','English setter|English setter','English springer spaniel|English springer spaniel','English toy spaniel|English toy spaniel','Eskimo dog|Eskimo dog','Finnish spitz|Finnish spitz','Flat-coated retriever|Flat-coated retriever','Fox terrier|Fox terrier','Foxhound|Foxhound','French bulldog|German shepherd','German shorthaired pointer|German shorthaired pointer','German wirehaired pointer|German wirehaired pointer','Golden retriever|Golden retriever','Gordon setter|Gordon setter','Great Dane|Great Dane','Greyhound|Greyhound','Irish setter|Irish setter','Irish water spaniel|Irish water spaniel','Irish wolfhound|Irish wolfhound','Jack Russell terrier|Jack Russell terrier','Japanese spaniel|Japanese spaniel','Keeshond|Keeshond','Kerry blue terrier|Kerry blue terrier','Komondor|Komondor','Kuvasz|Kuvasz','Labrador retriever|Labrador retriever','Lakeland terrier|Lakeland terrier','Lhasa apso|Lhasa apso','Maltese|Maltese','Manchester terrier|Manchester terrier','Mastiff|Mastiff','Mexican hairless|Mexican hairless','Newfoundland|Newfoundland','Norwegian elkhound|Norwegian elkhound','Otterhound|Otterhound','Papillon|Papillon','Pekingese|Pekingese','Pointer|Pointer','Pomeranian|Pomeranian','Poodle|Poodle','Pug|Pug','Puli|Puli','Rhodesian ridgeback|Rhodesian ridgeback','Rottweiler|Rottweiler','Saint Bernard|Saint Bernard','Saluki|Saluki','Samoyed|Samoyed','Schipperke|Schipperke','Schnauzer|Schnauzer','Scottish deerhound|Scottish deerhound','Scottish terrier|Scottish terrier','Sealyham terrier|Sealyham terrier','Shetland sheepdog|Shetland sheepdog','Shih tzu|Shih tzu','Siberian husky|Siberian husky','Silky terrier|Silky terrier','Skye terrier|Skye terrier','Staffordshire bull terrier|Staffordshire bull terrier','Soft-coated wheaten terrier|Soft-coated wheaten terrier','Sussex spaniel|Sussex spaniel','Spitz|Spitz','Tibetan terrier|Tibetan terrier','Vizsla|Vizsla','Weimaraner|Weimaraner','Welsh terrier|Welsh terrier','West Highland white terrier|West Highland white terrier','Whippet|Whippet'];
                                                 }
                                                 else if(s1.value == 'Cat')
                                                 {
                                                  var optionArray = ['American Shorthair|American Shorthair','Abyssinian|Abyssinian','American Curl|American Curl','American Bobtail|American Bobtail','American Wirehair|American Wirehair','Aegean|Aegean','Australian Mist|Australian Mist','American Polydactyl|American Polydactyl','Arabian Mau|Arabian Mau','Asian cat|Asian cat','Asian Semi-longhair|Asian Semi-longhair','British Shorthair|British Shorthair','Bengal|Bengal','Burmese|Burmese','Birman|Birman','Balinese|Balinese','Bombay|Bombay','Burmilla|Burmilla','Bambino|Bambino','Brazilian Shorthair|Brazilian Shorthair','British Longhair|British Longhair','Cornish Rex|Cornish Rex','Colorpoint Shorthair|Colorpoint Shorthair','Chartreux|Chartreux','California Spangled|California Spangled','Cymric|Cymric','Chantilly-Tiffany|Chantilly-Tiffany','Chausie|Chausie','Cheetoh|Cheetoh','Cyprus|Cyprus','Devon Rex|Devon Rex','Domestic shorthair cat|Domestic shorthair cat','Donskoy|Donskoy','Dwelf|Dwelf','Exotic Shorthair|Exotic Shorthair','Egyptian Mau|Egyptian Mau','European Burmese|European Burmese','Elf cat|Elf cat','Havana Brown|Havana Brown','Himalayan|Himalayan','Japanese Bobtail|Japanese Bobtail','Javanese|Javanese','Khao Manee|Khao Manee','Korat|Korat','Lykoi|Lykoi','LaPerm|LaPerm','Maine Coon|Maine Coon','Manx|Manx','Munchkin|Munchkin','Minskin|Minskin','Norwegian Forest Cat|Norwegian Forest Cat','Nebelung|Nebelung','Napoleon cat|Napoleon cat','Oriental|Oriental','Ocicat|Ocicat','Persian|Persian','Pixie-bob|Pixie-bob','Peterbald|Peterbald','Puspin|Puspin','Ragdoll|Ragdoll','Russian Blue|Russian Blue','Ragamuffin|Ragamuffin','Sphynx|Sphynx','Scottish Fold|Scottish Fold','Siamese|Siamese','Siberian|Siberian','Selkirk Rex|Selkirk Rex','Somali|Somali','Singapura|Singapura','Savannah|Savannah','Snowshoe|Snowshoe','Sokoke|Sokoke','Serengeti cat|Serengeti cat','Tonkinese|Tonkinese','Turkish Angora|Turkish Angora','Turkish Van|Turkish Van','Toyger|Toyger','Thai cat|Thai cat','Ukrainian Levkoy|Ukrainian Levkoy','York Chocolate|York Chocolate'];
                                                 }
                                                 for (var option in optionArray)
                                                 {
                                                   var pair = optionArray[option].split("|");
                                                   var newoption = document.createElement("option");
                                                   newoption.value = pair[0];
                                                   newoption.innerHTML = pair[1];
                                                   s2.options.add(newoption);
                                                 }
                                             }
                                             
                                       </script>
 
                                         <div class="field item form-group">
                                             <label class="col-form-label col-md-3 col-sm-3  label-align"> Name<span class="required"></span></label>
                                             <div class="col-md-6 col-sm-6">
                                                 <input type="text" id="petname" class="form-control" name="Petname" placeholder="Pet Name..." required="required" onkeypress="return /[a-z\s*]/i.test(event.key)"/>
                                             </div>
                                         </div>
 
                                         <div class="field item form-group">
                                         <label class="col-form-label col-md-3 col-sm-3  label-align">Gender<span class="required"></span></label>
                                         <div class="col-md-6 col-sm-6">
                                           <select class="form-control" required="required" name="Gender">
                                             <option>Male</option>
                                             <option>Female</option>
                                           </select>
                                         </div>
                                       </div>
 
                                       <div class="field item form-group">
                                             <label class="col-form-label col-md-3 col-sm-3  label-align">Age</label>&nbsp;&nbsp;&nbsp;<input type="number" min="1" max="1500" onclick="ageFunction()" onkeyup="ageFunction()" id="age" class="form-control" style="width:215px" placeholder="0" value="1"/>
                                             <div class="col-md-6 col-sm-6">
                                               <select class="form-control" onclick="ageFunction()"  id ="mnyr" style="width:231px">
                                               <option value="month">Month</option>
                                               <option value="year">Year</option>
                                           </select>
                                             </div>
                                         </div>
                                         
                                         <script>
                                         function ageFunction() {
                                         var age = document.getElementById('age').value;
                                         var mnyr = document.getElementById('mnyr').value;
                                         var petage = age +" "+ mnyr;
                                         document.getElementById('petage').value = petage;
                                         }
                                         </script>
 
                                         <div hidden  class="field item form-group">
                                         <label class="col-form-label col-md-3 col-sm-3  label-align"><span class="required"></span></label>
                                             <div class="col-md-6 col-sm-6">
                                                 <input readonly type="text" id="petage" name="Age" value ="1 month" style="width:360px;background-color:#fff;" class="form-control"/>
                                             </div>
                                         </div>
 
                                         <div class="field item form-group">
                                             <label class="col-form-label col-md-3 col-sm-3  label-align"> Color<span class="required"></span></label>
                                             <div class="col-md-6 col-sm-6">
                                                 <input type="text" id="petcolor" class="form-control" name="Color" placeholder="Pet Color..." required="required" onkeypress="return /[a-z\s*]/i.test(event.key)"/>
                                             </div>
                                         </div>
 
                                         <div class="field item form-group">
                                             <label class="col-form-label col-md-3 col-sm-3  label-align"> Weight</span></label>&nbsp;&nbsp;&nbsp;<input type="number" min="1" max="1500" onclick="weightFunction()" onkeyup="weightFunction()" id="weight" class="form-control" style="width:150px" placeholder="0" value="1"/>
                                             <div class="col-md-6 col-sm-6">
                                               <select class="form-control" onclick="weightFunction()" id ="kgpd" style="width:200px">
                                               <option value="kg">Kilogram</option>
                                               <option value="lb">Pound</option>
                                           </select>
                                             </div>
                                         </div>
                                         
                                         <script>
                                         function weightFunction() {
                                         var weight = document.getElementById('weight').value;
                                         var kgpd = document.getElementById('kgpd').value;
                                         var petweight = weight +" "+ kgpd;
                                         document.getElementById('petweight').value = petweight;
                                         }
                                         </script>
 
                                         <div class="field item form-group">
                                         <label class="col-form-label col-md-3 col-sm-3  label-align"><span class="required"></span></label>
                                             <div class="col-md-6 col-sm-6">
                                                 <input readonly type="text" id="petweight" name="Weight" style="width:360px;background-color:#fff;" value = "1 kg"class="form-control"/>
                                             </div>
                                         </div>
 
 
                     <div class="field item form-group">
                       <label class="col-form-label col-md-3 col-sm-3  label-align">Vaccination Status<span class="required"></span></label>
                       <div class="col-md-6 col-sm-6">
                         <select class="form-control" id="vax" name="Vaccination">
                           <option>Vaccination Status...</option>
                           <option>Vaccinated</option>
                           <option>Not vaccinated</option>
                         </select>
                       </div>
                     </div>
 
                     <div class="field item form-group">
                       <label class="col-form-label col-md-3 col-sm-3  label-align">Deworming Status<span class="required"></span></label>
                       <div class="col-md-6 col-sm-6">
                         <select class="form-control" required="required" id="deworm" name="Deworming">
                           <option>Deworming Status...</option>
                           <option>Deworm</option>
                           <option>Not deworm</option>
                         </select>
                       </div>
                     </div>
 
                     <div class="field item form-group">
                       <label class="col-form-label col-md-3 col-sm-3  label-align">Description</label>
                       <div class="col-md-6 col-sm-6">
                         <textarea id="description" required="required" class="form-control" name="Description" placeholder="Pet Description..." data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                       </div>
                     </div>
 
                     <label class="col-form-label col-md-3 col-sm-3  label-align">Upload Pet Photo</label>
                     
                     <div style="text-align: center" class="wrap-input100 validate-input">
                      <input type="file" name="Picture" id="Picture" style="width:250px;height:40px;border:none;margin-right:445px" placeholder="Upload Picture">
                     </div>

                                         <div class="ln_solid">
                                             <br>
                                             <div class="form-group">
                                                 <div class="col-md-6 offset-md-3">
                                                     <button name ="Post" type='submit' id="submit" class="btn btn-success" style="background-color:#00cdc1;border:#00cdc1;width:130px;height:40px;">Post</button>
                                                     <button onclick="window.location.href='http://localhost/developgetpet/dashboard/P.O-PostAdoption.php';" type='reset' class="btn btn-danger" name="Reset" style="width:120px;height:40px;">Reset</button>
                                                 </div>
                                             </div>
                                         </div>
                                     </form>
                                </div>
                            </div>
                        </div>
                    </div>
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

<?php
?>
<?php }} ?>
</script>

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
        <div class="modal-header">
              <img <?php echo"<img src = '/developgetpet/web/images/$result->orgLogo'";?> alt="avatar" style="width:150px;height:150px;margin-left:125px;margin-top:-20px;" class="rounded-circle img-responsive">
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
              <input type="file" name="Picture" id="Picture" style="width:250px;height:40px;border:none;margin-left:160px;margin-top:5px;" placeholder="Upload Photo">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input type="hidden" name="orgID" value="<?php echo ( $result->orgID);?>" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center">
						  <button  class="login100-form-btn" style="background-color:#00cdc1;width:150px;height:35px;border:none;" name="profile" type="submit" id="insert" value="Insert">
							 <a style="color:White"> Update Profile </a>
						 </button>
				</div>
        <div style="text-align: center">
             <h6 class="mt-1 mb-2"><?php echo ($result->orgName);?></h6> 
             <h6 class="mt-1 mb-2"><?php echo ($result->orgContactNo);?></h6>
             <h6 class="mt-1 mb-2"><?php echo ($result->orgAddress);?></h6>
             <h6 class="mt-1 mb-2"><?php echo ($result->orgEmail);?></h6>
             <h6 class="mt-1 mb-2"><?php echo ($result->Role);?></h6>
        </div><br>
      </form>
      </div>
    </div>
  </div>
</div>
	<!-- //ModalProfile -->

  <!-- ModalSettings -->
  <div class="modal fade" id="Settings" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold" style="margin-left:20px;">Account Settings</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      <form method="post">
        <div class="modal-header">
              <img <?php echo"<img src = '/developgetpet/web/images/$result->orgLogo'";?> alt="avatar" style="width:150px;height:150px;margin-left:125px;margin-top:-20px;" class="rounded-circle img-responsive">
        </div>
        <div style="text-align: center" class="wrap-input100 validate-input">
					    <input type="hidden" name="orgID" value="<?php echo ( $result->orgID);?>" required = "required" class="form-control" id="success">
				</div>
        <div style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Orgname" required="required" value="<?php echo ($result->orgName);?>" placeholder="Organization Name">
				</div><br>
        <div  style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;font-family:Arial;" type="text" name="ContactNo" onkeypress="isInputNumber(event)" maxlength="11" value="<?php echo ($result->orgContactNo);?>" placeholder="Contact No.">
						<script>
            
                        function isInputNumber(evt){
                
                        var ch = String.fromCharCode(evt.which);
                
                        if(!(/[0-9]/.test(ch))){
                        evt.preventDefault();
                       }
					}
                    </script>
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Address" required="required" value="<?php echo ($result->orgAddress);?>" placeholder="Address">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Email" required="required" value="<?php echo ($result->orgEmail);?>" placeholder="Email">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input" data-validate = "Valid username is required: ex@abc.xyz">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="text" name="Username" required="required" value="<?php echo ($result->orgUsername);?>" placeholder="Username">
				</div><br>
        <div style="text-align: center" class="wrap-input100 validate-input" data-validate = "Valid username is required: ex@abc.xyz">
						<input class="input100" style="background-color:#f1f1f1;width:250px;height:40px;border:none;" type="Password" name="Password" required="required" value="<?php echo ($result->orgPassword);?>" placeholder="Password">
				</div><br><br>
        <div style="text-align: center">
						<button  class="btn btn-round btn-success" style="background-color:#00cdc1;width:250px;height:40px;border:none;" name="update" type="submit" id="insert" value="Insert">
							<a style="color:White"> Update </a>
						</button>
				</div><br>
      </form>
      </div>
    </div>
  </div>
</div>
  <!-- //ModalSettings -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->
		</div>
	</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../vendors/validator/multifield.js"></script>
    <script src="../vendors/validator/validator.js"></script>

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

    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="../vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="../vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="../vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>

     <!-- Initialize datetimepicker -->
    <script  type="text/javascript">
   $(function () {
                $('#myDatepicker').datetimepicker();
            });
    
    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });
    
    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });
    
    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();
    
    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });
    
    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });
    
    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>

</body>
</html>
