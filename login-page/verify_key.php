
<?php
include('C:\xampp\htdocs\developgetpet\includes\config.php');
if(isset($_POST['submit']))
{
    $otp_code = $_POST['otp_code'];
    $verification_code = $_POST['verification_code'];
    $email = $_POST['email'];

    
    if($otp_code == $verification_code)
    {
        $sql = "UPDATE register SET verified = '1' WHERE Email = :email";
        $query = $dbh->prepare($sql);
        $query->bindParam(':email', $email,PDO::PARAM_STR);
        $query->execute();
        
        if($query->execute())
        {
            echo "<script>alert('You can now log in');</script>";
            echo "<script>window.open('login.php', '_self');</script>";
        }
    }
    else
    {
        echo "BBUBU TANGA SAYOP CODE";
    }
}

function generateRandomString($length = 8){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>