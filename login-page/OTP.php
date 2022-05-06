<?php

include('C:\xampp\htdocs\developgetpet\includes\config.php');
echo "
<form method = 'POST' action = 'verify_mail.php' enctype = 'multipart/form-data'>
            <h3>Verify Email</h3>
            <input type = 'email' class = 'input' name = 'user_email' placeholder = 'Email..'/>
            <button name = 'continue' class = 'button'>Continue</button>
        </form>
";  
?>