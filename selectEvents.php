<?php 

include 'connectPDO.php'; //brings in an external file

$sql = "SELECT event_name FROM wdv341_events"; //create your SQL command

$stmt = $conn->prepare($sql);  //prepares the statement object 

$stmt->execute();  //execute your statement 

$stmt->setFetchMode(PDO::FETCH_ASSOC); //returns any data as a PHP associate array 



?>
<!DOCTYPE html>
<html lang='en'>
<head>
<!--Cyrus Brucker || Start Date: Feb25th || End Date: Feb25th -->
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='selectEvents file that displays all event_names in the database'>
</head>
<body>
<h1>WDV341 Intro PHP</h1>

<h2>UNIT-7 SELECT Data from your database and display it to this page. </h2>

<h3>Current Events! </h3>
<?php 
while($row=$stmt->fetch()){
    echo"<p>";
    echo $row['event_name'];
    echo "</p>";
    
    
    }

?>

</body>
</html>