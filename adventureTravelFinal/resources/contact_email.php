<?php 

    $tableList = "";
    foreach($_POST as $key => $value){
        $tableList .= $key . ": ";
        $tableList .= $value . "<br>";
    }

    $toEmail = "cyrus.j.brucker@gmail.com";
    $subject = "Contact waiting for a response!";
    $message = currentDate() . "<br> Hello, <br> You have a new contact submission, all the contact's information is as follows: <br> " . $tableList . "<br> Please respond to this request ASAP.";

    $headers = "From cyrus.j.brucker@info.com" . "\r\n";

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($toEmail, $subject, $message, $headers);
?>