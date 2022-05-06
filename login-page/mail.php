<?php
    $receiver = "genesistagsip777@gmail.com";
    $subject = "asdsadsa";
    $body = "sadasdas";
    $sender = "ianjohn0101@gmail.com";

    if(mail($receiver, $subject, $body, $sender))
    {
        echo "MAIL SUCCESSFUL";
    }
    else
    {
        echo "WALA";
    }
?>