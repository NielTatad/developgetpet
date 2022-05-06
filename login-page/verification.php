<?php

session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
	
	if(isset($_POST['next']))
    {
        
        $verification_code = $_POST['verification_code'];
        $v_code = $_POST['v_code'];
        $user_email = $_POST['user_email'];

        $check_role = $dbh->prepare("SELECT Role from register WHERE Email = '$user_email'");
        $check_role->setFetchMode(PDO:: FETCH_ASSOC);
        $check_role->execute();

        $row = $check_role->fetch();
        
        if($row['Role'] == 'Pet Owner')
        {
            $update_verified = $dbh->prepare("UPDATE petowner SET verified = 1 WHERE ownerEmail = '$user_email'");
            $update_verified->setFetchMode(PDO::FETCH_ASSOC);
            $update_verified->execute();

            if($update_verified->execute())
            {
                echo 
                "<script>alert('Verified!');</script>
                <script>window.open('login.php', '_self');</script>";
            }
        }
        if($row['Role'] == 'Pet Adopter')
        {
            $update_verified = $dbh->prepare("UPDATE petadopter SET verified = 1 WHERE ownerEmail = '$user_email'");
            $update_verified->setFetchMode(PDO::FETCH_ASSOC);
            $update_verified->execute();

            if($update_verified->execute())
            {
                echo 
                "<script>alert('Verified!');</script>
                <script>window.open('login.php', '_self');</script>";
            }
        }
        if($row['Role'] == 'Animal Welfare Organization')
        {
            $update_verified = $dbh->prepare("UPDATE animalwelfareorganization SET verified = 1 WHERE ownerEmail = '$user_email'");
            $update_verified->setFetchMode(PDO::FETCH_ASSOC);
            $update_verified->execute();

            if($update_verified->execute())
            {
                echo 
                "<script>alert('Verified!');</script>
                <script>window.open('login.php', '_self');</script>";
            }
        }
        
        
    }
?>