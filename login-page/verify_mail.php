<?php

session_start();
include('C:\xampp\htdocs\developgetpet\includes\config.php');
	
	if(isset($_POST['continue']))
	{
	    $user_email = $_POST['user_email'];
		$verification_code = generateRandomString();

		$sql = $dbh->prepare("SELECT * FROM register WHERE Email = '$user_email'");
		$sql->setFetchMode(PDO::FETCH_ASSOC);
		$sql->execute();

		$rows = $sql->rowCount();
		if($rows>0)
		{
			echo "VERIFICATION CODE WAS SENT TO: $user_email";
			echo 
			"<form method = 'POST' action = 'verification.php' enctype = 'multipart/form-data'>
	            <input type = 'hidden' name = 'user_email' value = '".$user_email."' />
	            <input type = 'hidden' name = 'verification_code' value = '".$verification_code."' style = 'display:none;'/>
	            <input type = 'text' class = 'input' name = 'v_code' placeholder = 'Verification Code' />
	            <button name = 'next' class = 'button'>Continue</button>
	        </form>";

	        $receiver = $user_email;
	        $subject = "Verification Code";
	        $body = "Your Verification Code: $verification_code";
	        $sender = "getpet2022.test@gmail.com";

	    	mail($receiver, $subject, $body, $sender);
		}
		else
		{
			echo "<script>alert('Email  incorrect! or not yet registered');</script>";
            echo "<script>window.open('OTP.php', '_self');</script>";
		}
	}

	function generateRandomString($length = 8) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?>