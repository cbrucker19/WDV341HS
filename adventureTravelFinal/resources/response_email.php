<?php 

$toEmail = $_POST["email_address"];
$subject = "Your request is being reviewed";

$message = "

<html>
    <body>
    <h3>
    Thank you! We will be revieing your request. 
    </h3>
    
    <p>" .  currentDate() . "</p>
    <p> Dear " . $_POST["first_name"] . " " . $_POST["last_name"] . ", </p>

    <p>
    Thank you for your interests in our Company, Adventure Travel. You are recieving this email because you sent a repsonse form.
    Your request shows your reason for contacting us is " . $_POST["reason"] . ", with the following comments: <br>
    <strong>" . $_POST["comments"] . "</strong>
    
    </p>

    <p>
    Thanks for choosing us,
    Adventure Travel Team
    </p>
    
    </body>



</html>";

$headers = "From : cbrucker1@dmacc.edu" . "\r\n";

$headers .= "Context-type:text/html;charset=UTF-8". "\r\n";

mail($toEmail, $subject, $message, $headers);

?>

