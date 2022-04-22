<?php 


require "EventH.php";

require "../connectPDO.php";

$outputObjArray = []; //this is an empty array to hold the event objects

//try catch to try to get database info and if cannot, throw error

try{
    $sql = "SELECT id, event_name, event_description, presenter, date, time  FROM wdv341_events WHERE id = 1"; //sql query command
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    //loop foreach row in the stmt, load the object
    foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row){
        //creating a new object event
            $outputObj = new Event();

            $outputObj->setEventId($row['id']);
            $outputObj->setEventName($row['event_name']);
            $outputObj->setEventDescription($row['event_description']);
            $outputObj->setEventPresenter($row['presenter']);
            $outputObj->setEventTime($row['time']);
            $outputObj->setEventDate($row['date']);
        
            array_push($outputObjArray, $outputObj);
        }

        echo(json_encode($outputObjArray));   

    }   
    catch(PDOException $e){
        echo "Errors: " . $e->getMessage();
    }  
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<!--Cyrus Brucker || Start Date: march 19 || End Date: 20 -->
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='json events '>
<title>PHP-JSON Event Objects Assignment 9</title>
</head>
<body>

</body>
</html>