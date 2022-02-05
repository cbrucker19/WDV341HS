<?php 
//Function that accepts a timestamp and format it into mm/dd/yyyy format.
function formatDate(){
    date_default_timezone_set("America/Chicago");
    $date = date("m/d/y");
    return $date; 
}
//Funciton that accepts a timestamp and format it into dd/mm/yyy format to use when working with international dates.
function formatDateInternational(){
    date_default_timezone_set("America/Chicago");
    $date = date("d/m/y");
    return $date;
}
//Create a function that will accept a string input.
function stringInput($inString){

    $inStringLength = strlen($inString);
    $inStringTrimWhiteSpace = trim($inString);
    $inStringLowerCase = strtolower($inString);
    $string = "DMACC"; 

    //if statements checking the string to make sure it does or doesn't contain the characters 'DMACC'
    if(stripos($inString, $string) !== false){
        $string = "does contain";
    }else{
        $string = "does not contain";
    }
    //Outputing to page 
    echo "<p>The input String: <span>" . $inString . "</span> contains <span>". $inStringLength . "</span> characters.</br>";
    echo "The String <span>" . $inString . "</span> is displayed with the whitespace removed: <span>" . $inStringTrimWhiteSpace . "</span>.</br>";
    echo "The String <span>" . $inString . "</span> is displayed as all lowercase: <span>" . $inStringLowerCase . "</span>.</br>";
    echo "The String <span>" . $inString . " " . $string . "</span> DMACC in upper or lowercase.</p>"; 
}
//Function that accepts phone number and outputs the correct format
function formatNumber($inPhoneNum){
    strval($inPhoneNum);
    $inPhoneNum = "(" . substr($inPhoneNum, 0, 3) . ")" . substr($inPhoneNum, 3, 3) . "-" . substr($inPhoneNum, 6, 4);   
    echo $inPhoneNum;
}
//Funciton that accepts a number and displays the US currency with a $
function formatCurrency($inNum){
    $format = numfmt_create('en_US', NumberFormatter::CURRENCY);
    echo numfmt_format_currency($format, $inNum, "USD");
}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <!--Cyrus Brucker || Start Date: Feb 4th|| End Date: Feb 4th -->
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='description' content='functionsAssignment'>
    <style>
        body{
            background-color:beige;
        }
        #container{
            width: auto;
            margin-left:auto;
            margin-right: auto;
            border:5px solid black; 
            background-color:lightgray;
        }
        p{
            font-size: large;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        h1,h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <div id = "container">
        <h1>WDV341 Intro Php</h1>
        <h2>Week 4 Function Assignments</h2>
        <p>Create a function that will accept a timestamp and format it into mm/dd/yyyy format.</p>
        <?php echo formatDate(); ?>

        <p>Create a function that will accept a timestamp and format it into dd/mm/yyy format to use when working with international dates. </p>
        <?php echo formatDateInternational(); ?>

        <p>Create a function that will accept a string input.  It will do the following things to the string:</p>
        <ul> - Display the number of characters in the string.</ul>
        <ul> - Trim any leading or trailing whitespace.</ul>
        <ul> - Display the string as all lowercase characters.</ul>
        <ul> - Will display whether or not the string contains "DMACC" either upper or lowercase.</ul>
        <?php stringInput("   cyrUS@dMAcc.edU")?>

        <p>Create a function that will accept a number and display it as a formatted phone number.</p>
        <?php formatNumber(1234567890);?>
        
        <p>Create a function that will accept a number and display it as US currency with a dollar sign.</p>
        <?php formatCurrency(123456);?>
        <p>Link to GitHub Repo: <a href="https://github.com/cbrucker19/WDV341HS/blob/main/functionsAssignment.php">Click Here!</p>
    </div>
</body>
</html>