<?php 
    //include 'selectEvent.php';
    $deleteId = $_GET['eventId'];
    //$deleteName = $_GET['eventName'];

    try{
        require "../connectPDO.php";

        $sql = "DELETE FROM wdv341_events WHERE id=:eventId"; 
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':eventId', $deleteId);
        $stmt->execute();

        $numDeleted = $stmt->rowCount();
    }
    catch(PDOException $e){
        $message = "There has been a problem on our end, we will fix it and get back to you";
        error_log($e->getMessage());
        $numDeleted = -1; 
    }

?>
<!DOCTYPE html>
<html lang='en'>
<head>
<!--Cyrus Brucker || Start Date: April 18th || End Date: April 18th -->
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='Delete Page'>
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
    <?php 
    if($numDeleted > 0){
    ?>
    <h1>Your Event "<?php echo $deleteId?> " Was Successfully Deleted</h1>
    <h2>You will be redirected in a second.</h2>
    <button><a href="selectEvent.php">Redirect</button>
    <?php 
    }else{
    ?>
        <h2> Delete Unsuccessful, Try again. </h2>
        <button><a href="selectEvent.php">Redirect</a></button>
    <?php 
    header('refresh:7; url=//locahost/WDV341/createDeleteFunction/selectEvent.php');
    }

    ?>
</body>
</html>