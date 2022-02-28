<?php 
$tableList = "";                        
    foreach($_POST as $key => $value)		// foeach loop that loops through each name-value in the $_POST array
    {
        $tableList .= $key . ": ";		    
        $tableList .= $value . "<br>";	   
    }

    $to = "larry.s.stevenson@gmail.com";    //my email 
    $subject = "You have a contact waiting for your response!";    
    $message = submittalDate() .  //message variable that calls submittal date function and outputs the message
        "<br>Hello,<br> You have a new contact submission. All the contact's information is as follows: <br>"
        . $tableList . "<br> Please respond to this request as soon as possible.  Thank you. <br><br> 
        Regards, <br> Dev Response Team";

    $headers = "From: cbrucker1@dmacc.edu" . "\r\n";   // my email address from local hosting 
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";    
    mail($to,$subject,$message,$headers);  
?>