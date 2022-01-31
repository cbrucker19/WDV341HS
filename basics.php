<!DOCTYPE HTML>
<?php
$yourName = "Cyrus Brucker"; 

$number1 = 5;
$number2 = 4;
$total = $number1 + $number2; 

$phpArray = array("PHP", "HTML", "JAVASCRIPT");


function buildScriptArray(){
    global $phpArray;
    echo"<script> let javaScriptArray = [];</script>"; //js array built using php

    for ($i = 0; $i < count($phpArray); $i++){
        echo"<script> javaScriptArray[$i] = '$phpArray[$i]'</script>";
    }
}

//calling the function to build the array in Javascript 
buildScriptArray();


?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>WDV341 PHP basics</title>
        <meta name = "Author" value ="Cyrus Brucker">

        <script>

            function pageload(){

                function displayArray(){
                    for(let i = 0; i < javaScriptArray.length; i++){
                        let div = document.createElement("div");
                        div.innerHTML = javaScriptArray[i];
                        document.querySelector("#arrayOutput").appendChild(div);
                    }
                }
                displayArray();
            }
        </script>


    </head>     
    <body onload = "pageload()">
        <h1>PHP Basics</h1>
        <h2><?php  echo $yourName ?></h2>
        <h4>First Number: <?php echo $number1 ?></h4>
        <h4>Second Number: <?php echo $number2 ?></h4>
        <h4>Total: <?php echo $total ?></h4>
            <p id = "arrayOutput"> Array Output:</p>

            <p><a href="https://github.com/cbrucker19/WDV341HS/blob/main/basics.php">Repo assignment: </p>
    </body>
</html>