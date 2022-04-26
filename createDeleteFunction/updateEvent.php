<?php 
    
    require 'selectEvent.php';
    $updateId = $_GET['eventId'];
    $dateUpdated = currentDateSQLFormat();

    function currentDateSQLFormat(){
        $date = date_default_timezone_set("America/Chicago");
        $date = date("Y-m-d");
        return $date;
    }
    if(isset($_POST['submit'])){
        //honeypot validation
        $host = $_POST['events_host'];
        if(!empty($host)){
            header("refresh:0");
        }else{


            $eventName = $_POST['event_name'];
            $eventDescription = $_POST['event_description'];
            $eventPreseneter = $_POST['presenter'];
            $eventDate = $_POST['date'];
            $eventTime = $_POST['time'];
            $eventDateInserted = $_POST['date_inserted'];
            $eventDateUpdated = $dateUpdated; 

            try{
                require "../connectPDO.php";

                $sql = "UPDATE wdv341_events SET ";   // db table columns
                $sql .= "event_name =:eventName, ";
                $sql .= "event_description =:eventDescription, ";
                $sql .= "presenter =:eventPresenter, ";
                $sql .= "date =:eventPresenter, ";
                $sql .= "time =:eventTime, ";
                $sql .= "date_inserted =:eventDateInserted, ";
                $sql .= "date_updated =:eventDateUpdated ";
                $sql .= "WHERE id =:eventId";
             
                //preparing the statement
                $stmt = $conn->prepare($sql);

                //binding variables to the input parameters

                $stmt->bindParam(':eventId', $updateId);
                $stmt->bindParam(':eventName', $eventName);
                $stmt->bindParam(':eventDescription', $eventDescription);		
                $stmt->bindParam(':eventPresenter', $eventPresenter);		
                $stmt->bindParam(':eventPresenter', $eventDate);		
                $stmt->bindParam(':eventTime', $eventTime);
                $stmt->bindParam(':eventDateInserted', $eventDateInserted);
                $stmt->bindParam(':eventDateUpdated', $eventDateUpdated);

                //Execute the prepared statement

                $stmt->execute();

                header("Location: selectEvents.php?eventId=". $updateId . '&eventName= ' .$eventName);
            }
            catch(PDOException $e){
                $message = "There has been a problem on our end, we will get back to you as soon as possible.";
                error_log($e->getMessage());
            }
        }

    }else{
        try{
            include "../connectPDO.php";

            $sql = "SELECT * FROM wdv341_events WHERE id =: eventId";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(': eventId', $updateId);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
        }
        catch(PDOException $e){
            $message = "There has been a problem on our end, we will get back to you as soon as possible.";
            error_log($e->getMessage());
        }
    
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<!--Cyrus Brucker || Start Date: april 18th || End Date: april 18th -->
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='Update Page'>
<style>
    
.container{
    background-color:burlywood;
    margin-left: auto;
    margin-right: auto;
    width:100%;
    text-align:center;
    background-color:grey; 
}


</style>
</style>
</head>
<body class="container">
    <h3>WDV341 Update Page</h3>
    <?php $result?>
    <label for="event_name">Event Name</label>
    <input type="text" name="event_name" id="event_name" value="<?php echo $result['event_name']; ?> ">

    <label for="event_description">Event Description</label>
    <input type="text" name="event_description" id="event_description" value="<?php echo $result['event_description']; ?> ">

    <label for="presenter">Events Presenter</label>
    <input type="text" name="presenter" id="presenter" value="<?php echo $result['presenter']; ?> "> 

    <label for="date">Event Date: </label>
    <input type="date" name="date" id="date" value="<?php echo $result['date']; ?> ">

    <label for="time">Event Time: </label>
    <input type="time" name="time" id="time" value="<?php echo $result['time']; ?> ">

    <label for="date_inserted">Event Date Inserted</label>
    <input type="text" name="date_inserted" id="date_inserted" value="<?php echo $result['date_inserted']; ?> " readonly> 

    <label for="date_updated">Event Date Update: </label>
    <input type="text" name="date_updated" id="date_updated" value="<?php echo $result['date_updated']; ?> " readonly>
    
    <input type="submit" name="submit" id="submit" value="Save">
    <input type="reset" name="Reset" id="button" value="Reset Form" />
</body>
</html>
<?php }?>