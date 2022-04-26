<?php 

    include "../connectPDO.php";

    try{
        $sql  = " SELECT * FROM wdv341_events";
        $stmt = $conn->prepare($sql);  //preparing the statement
        $stmt->execute();   //the result object is still in the database format, not directly readable
    }
    catch(PDOException $e){
        echo "Errors: " . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<!--Cyrus Brucker || Start Date: april 17 || End Date: 17 -->
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='Select Events HomePage'>
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
</head>
<body class="container">
<h3>WDV341 Select Events-PHP</h3>


<?php 
    if(!empty($_GET['eventId'])){
        $id = $_GET['eventId'];
        //$name = $_GET['eventName'];

?>
<h2> Event ID <?php echo $id?> is Updated</h2>
<?php
} 
?>
<table class="table">
    <thread>
        <tr>
            <th scope="col">Event Id</th>
            <th scope="col">Event</th>
            <th scope="col">Time</th>
            <th scope="col">Date</th>
        </tr>
    </thread>

    <?php
        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $result) {     
    ?>
        <tbody>
            <tr>
                <th scope="row"><?php echo $result['id']; ?></th>
                    <td><?php echo $result['event_name']; ?></td>
                    <td><?php echo $result['time']; ?></td>
                    <td><?php echo $result['date']; ?></td>
                    <td><?php echo "<a href=updateEvent.php?eventId=" . $result['id'] . ">Update Link</a>" ?></td>
                    <td><?php echo "<a href=deleteEvent.php?eventId=" . $result['id'] . ">Delete Link</a>" ?></td>
            </tr>
        </tbody>
    <?php }?>
</table>





</body>
</html>