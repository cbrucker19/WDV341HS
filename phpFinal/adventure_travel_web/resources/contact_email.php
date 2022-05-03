<?php
//This file directs the contact_us emailer to the emailie. Basically it directs the out going email from the contact_us file to the create/team AKA me. 
    $tableList = "";                        
    foreach($_POST as $key => $value)		//foreach loops through for every name value in the POST Array                       
    {
        $tableList .= $key . ": ";		   
        $tableList .= $value . "<br>";	    
    }

    $to = "cyrus.j.brucker@gmail.com";        // emailie address(me)
    $subject = "Someone wants to talk to you regarding the Vacation options!";    //subject line 
    $message = currentDate() . 
        "<br>Hello Cyrus,<br> You have a new email regarding a contact submission. All the contact's information is as follows: <br>"
        . $tableList . "<br> Please respond to this request as soon as possible.  Thank you. <br><br> 
        Regards, <br> Computer Wizard";
    
    $headers = "From: cbrucker19@dmacc.edu" . "\r\n";   //email address from host server

    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";    //formats for http

    mail($to,$subject,$message,$headers);   //send out the email. 
?>