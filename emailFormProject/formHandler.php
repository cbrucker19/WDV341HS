<?php 

    include "email_contact.php";
    include "email_response.php";

    function submittalDate(){               // function that gets the submittal date
        date_default_timezone_set("America/Chicago");   
        $date = date("m/d/Y");             
        return $date;                      
    }
    function formatResponse($inReason){ // function that formats an appropiate response based of off the value input for "reason" name
        
        if($inReason == "resume"){
            $response = "my resume";
        }
        if($inReason == "references"){
            $response = "my references";
        }
        if($inReason == "interview"){
            $response = "an interview";
        }
        if($inReason == "other"){
            $response = "other";
        }
        return $response;
    } 

?>
<!DOCTYPE html>
<html lang='en'>
<head>
<!--Cyrus Brucker || Start Date: Feb26th || End Date: Feb28th -->
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='formHandlerEmail'>
<style>
    .container{
        width: 960px;
        background-color: coral;
        border: 5px solid black;
        margin:50px;
        margin-left: auto;
        margin-right: auto;
        padding:50px;
    }
    body{
        text-align: center;
    }
</style>
</head>
<body class="container">
<h3 class="text-center">Thank you!  Your request is being processed.</h3>

<div class= "jumbotron col-md-4 mx-auto border border-dark rounded-lg m-6 p-4" style="border: 2px solid black">
    
    <p>
        Dear <?php echo $_POST["first_name"] , ","; ?>
    </p>

    <p>
        Thank you for your interest and for contacting me.  You should recieve a confirmation email at:
        <span class="font-italic">
            <?php echo $_POST["email_address"]; ?>
        </span></br>
        Your request indicates your reason for contacting me is for <?php echo formatResponse($_POST["reason"]); ?>, with the following comments: 
    </p>

    <p>
        <strong><?php echo $_POST["comments"]; ?></strong>  
        
    </p>

    <p>
        You should expect an email response or phone call from me reguarding your request within the next 24 hours.
    </p>


</div>

<footer class="text-center m-4">

    <p>
        <a href="../../WDV341HS.php">PHP Homework Page</a>
    </p>

</footer>
</body>
</html>