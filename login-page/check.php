<?php

session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
	
        
        $user_email = "genesistagsip777@gmail.com";

        $check_role = $dbh->prepare("SELECT Role from register WHERE Email = '$user_email'");
        $check_role->setFetchMode(PDO:: FETCH_ASSOC);
        $check_role->execute();

        $row = $check_role->fetch();

        var_dump($row['Role']);
        
        
    
?>