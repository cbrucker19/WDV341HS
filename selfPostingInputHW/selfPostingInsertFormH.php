<?php 

$dateInserted = currentDateUSFormat();
$dateUpdated = currentDateUSFormat();

//formats the current date 
function currentDateUsFormat(){
    $date = date_default_timezone_set("America/Chicago");
    $date = date("m/d/Y");
    return $date; 
}
//formats the current date in sql formatted date
function currentDateSqlFormat(){
    $date = date_default_timezone_set("America/Chicago");
    $date = date("Y-m-d");
    return $date;
}

if(isset($_POST['submit'])){
    //HoneyPost validation
    $host = $_POST['events_host'];
    if(empty($host)){
        header("refresh:0"); 
    }else{
        $eventName = $_POST['event_name'];
        $eventDescription = $_POST['event_description'];
        $eventDate = $_POST['date'];
        $eventTime = $_POST['time'];
        $eventDateInserted = currentDateSqlFormat();
        $eventDateUpdated = currentDateSqlFormat();
    

        try{
            require '../connectPDO.php';
            //Creating SQL command strings
            $sql = "INSERT INTO wdv341_events (";   // db table columns
            $sql .= "event_name, ";
            $sql .= "event_description, ";
            $sql .= "date, ";
            $sql .= "time, ";
            $sql .= "date_inserted, ";
            $sql .= "date_updated ";
            $sql .= ") VALUES (";                   // values for columns
            $sql .= ":eventName, ";
            $sql .= ":eventDescription, ";
            $sql .= ":eventDate, ";
            $sql .= ":eventTime, ";
            $sql .= ":eventDateInserted, ";
            $sql .= ":eventDateUpdated)";

            $stmt = $conn->prepare($sql);
                    
                    //BIND the values to the input parameters of the prepared statement
            $stmt->bindParam(':eventName', $eventName);
            $stmt->bindParam(':eventDescription', $eventDescription);		
            $stmt->bindParam(':eventDate', $eventDate);		
            $stmt->bindParam(':eventTime', $eventTime);
            $stmt->bindParam(':eventDateInserted', $eventDateInserted);
            $stmt->bindParam(':eventDateUpdated', $eventDateUpdated);		
                    
            //EXECUTE the prepared statement
            $stmt->execute();
        }
        catch(PDOException $e){
            $message = "Sorry! There has been a problem on our end. We will fix it and get back to you!";
            error_log($e->getMessage());
        }
    }
}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<!--Cyrus Brucker || Start Date: april 1st || End Date: april 3rd -->
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='Self Posting Input Event Form with Insert'>
<style>
    #container{
        width:960px;
        border:30px solid black; 
        margin:50px;
	    margin-left:auto;
	    margin-right:auto;
        padding:50px;
        background-color: orange;
    }
    body{
        text-align:center;
    }


</style>
</head>
<body>
    <div id="container">
        <h1>Self Posting Input Event Form with Insert</h1>

        <?php //php message to respond if the form was submitted
            if(isset($_POST['submit'])){
                echo"<p><h4>Your form has been saved!</h4>
                    Event: $eventName<br>
                    Description: $eventDescription<br>
                    Time: $eventTime <br>
                    Date: $eventDate <br>
                </p>";
            }else{ //else if not submitted it will display the form on the page. 
        ?>
        <form name="eventsForm" id="eventsForm" method="post" action="selfPostingInsertForm.php">
                <label for="event_name">Event Name:</label>
                <input type="text" name="event_name" id="event_name"><br>

                <label for="event_description">Event Description: </label>
                <input type="text" name="event_description" id="event_description"><br>

                <label for="events_host">Event Host: </label>
                <input type="text" name="events_host" id="events_host"><br>

                <label for="date">Event Date: </label>
                <input type="date" name="date" id="date"><br>

                <label for="time">Event Time: </label>
                <input type="time" name="time" id="time"><br>

                <label for="date_inserted">Event Date Inserted: </label>
                <input type="text" name="date_inserted" id="date_inserted" value="<?php echo $dateInserted ?>" readonly><br>

                <label for="date_updated">Event Date Updated: </label>
                <input type="text" name="date_updated" id="date_updated" value="<?php echo $dateUpdated ?>" readonly><br> 

                <input type="submit" name="submit" id="submit" value="Add Event">
                <input type="reset" name="Reset" id="button" value="Clear Form">
        </form>
    </div>
</body>
</html>
<?php }?>