<?php
// allows access to the applications admin section
session_start();  

if (isset($_SESSION['validUser']) && $_SESSION['validUser']) {
} else {
    // Deny access if false and redirect to the login form page
    header("Location: login.php");
}

include "../resources/php_functions.php";
$numDeleted = "";   // empty variable for flaging deleted rows

if (isset($_POST['submit'])) {
    // deletes row from the database
    try {
        require "../../../connectPDO.php";

        $vacationId = $_POST['vacation_id'];
        $vacationDeletedName = $_POST['vacation_name'];
        $sql = "DELETE FROM wdv341_vacations WHERE vacation_id=:vacationId";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':vacationId', $vacationId);
        $stmt->execute();

        // how many rows were affected by the previous SQL execute
        $numDeleted = $stmt->rowCount();    // flag
    } catch (PDOException $e) {
        $message = "There has been a problem. The system administrator has been contacted. Please try again later.";
        error_log($e->getMessage());

        $numDeleted = -1; // flag tells that deleted didn't work
    }
}

try {
    // SQL select command - used in fetch all to populate the page with db info
    require "../../../connectPDO.php";

    $sql = "SELECT vacation_id, ";  // SQL select statement
    $sql .= "vacation_name, ";
    $sql .= "vacation_image, ";
    $sql .= "vacation_description, ";
    $sql .= "vacation_days, ";
    $sql .= "vacation_nights, ";
    $sql .= "vacation_adult_price, ";
    $sql .= "vacation_child_price, ";
    $sql .= "vacation_group_size, ";
    $sql .= "vacation_spots_remaining, ";
    $sql .= "TIME_FORMAT(vacation_check_in_time, '%h: %i %p') as vacation_check_in_time, ";
    $sql .= "DATE_FORMAT(vacation_date_avail, '%M %d, %Y') as vacation_date_avail, ";
    $sql .= "DATE_FORMAT(vacation_date_inserted, '%M %d, %Y') as vacation_date_inserted, ";
    $sql .= "DATE_FORMAT(vacation_date_updated, '%M %d, %Y') as vacation_date_updated ";
    $sql .= "FROM wdv341_vacations";

    $stmt = $conn->prepare($sql);           // prepare the statement
    $stmt->execute();                       // the result Object is still in database format not directly readable
} catch (PDOException $e) {
    echo "Errors: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang='en'>
<head>
<!--Cyrus Brucker || Start Date: April 12th || End Date: April 30th -->
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='View All Vacations Page'>
<link rel="stylesheet" href="../styles.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">    
<title>View all Vacations</title>
<style>
    .navAdmin {
        color: olive; 
        align text: center; 
    }
    .container-fluid{
        text-align:center; 
    }
</style>
</head>
<body>
    <a name="topOfPage"></a>
    <div id="container">

        <header>
            <img src="../images/banner.jpg" alt="banner" width="100%">
        </header>
            <nav>
                <div class="flex-container-nav">
                    <p><a href="../index.php"><strong>HomePage</strong></a></p>
                    <p><a href="../advantages.php"><strong>Advantages of Adventure</strong></a></p>
                    <p><a href="../destinations.php"><strong>Destinations</strong></a></p>
                    <p><a href="../faq.php"><strong>Frequently Asked Questions</strong></a></p>
                    <p><a href="../contact_us.php"><strong>Contact Us</strong></a></p>
                </div>
            </nav>
            <navAdmin>
                <div class="flex-container-nav">
                <h1 style="color:purple">Admin</h1>
                </div>
                <div class="flex-container-nav">
                    <p><a href="view_all_vacations.php"><strong>View All Entries</strong></a></p>
                    <p><a href="insert_vacation.php"><strong>Add New Entry</strong></a></p>
                    <p><a href="view_all_vacations.php"><strong>Update/Delete Entries</strong></a></p>
                    <p><a href="logout.php"><strong>Logout</strong></a></p>
                </div>
            </navAdmin>

            <main class="row">
                <!-- Page content -->
                <div class="col pl-0">
                    <h1 class="text-center my-5">Vacation Package List</h1>

                    <?php // deletion confirmation msg
                    if ($numDeleted > 0) {
                    ?>
                        <h5 class='text-danger text-center'>Deletion Of " <?php echo $vacationDeletedName ?> " Successful!</h5>;
                    <?php   // error msg
                    } else if ($numDeleted == -1) {
                    ?>
                        <h5 class='text-danger text-center'>Deletion Unsuccessful.. Please Try Again</h5>;
                    <?php
                    }   // get vacation name from url for updated confirmation msg
                    if (!empty($_GET['vacationName'])) {  
                        $vacationName = $_GET['vacationName'];
                    ?>
                        <h5 class="text-primary text-center mb-5"> <?php echo $vacationName ?> Is Updated</h5>
                    <?php
                    }
                    ?>
                    <table class="table" style="margin: 25px 25px 25px 25px">
                        <!-- Displays a table to the browser with headers-->
                        <thead class="tableHeader thead-dark">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Days</th>
                                <th scope="col">Nights</th>
                                <th scope="col">Adult Price</th>
                                <th scope="col">Child Price</th>
                                <th scope="col">Group Size</th>
                                <th scope="col">Spots Left</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <?php // gets each row from the db to display in table
                            foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $result) {     
                        ?>
                            <tbody>
                                <tr>
                                    <th scope="row"><?php echo $result['vacation_name']; ?></th>
                                    <td><?php echo $result['vacation_description']; ?></td>
                                    <td><?php echo $result['vacation_days']; ?></td>
                                    <td><?php echo $result['vacation_nights']; ?></td>
                                    <td><?php echo $result['vacation_adult_price']; ?></td>
                                    <td><?php echo $result['vacation_child_price']; ?></td>
                                    <td><?php echo $result['vacation_group_size']; ?></td>
                                    <td><?php echo $result['vacation_spots_remaining']; ?></td>

                                    <!-- update form button -->
                                    <td>
                                        <form name="update" id="update" method="get" action="update_vacation.php" style="background-color:whitesmoke">
                                            <input type="hidden" name="vacationId" id="vacation_id" value=<?php echo "'" . $result['vacation_id'] . "'"; ?> />
                                            <input type="submit" class="btn btn-outline-primary" name="submit" id="submit" value="Update"></button>
                                        </form>
                                    </td>
                                    <!-- delete form -->
                                    <td>
                                        <form name="delete" id="delete" onsubmit="return confirm('You are about to delete a destination.  Are you sure?');" method="post" action="view_all_vacations.php">
                                            <input type="hidden" name="vacation_id" id="vacation_id" value=<?php echo "'" . $result['vacation_id'] . "'"; ?> />
                                            <input type="hidden" name="vacation_name" id="vacation_name" value=<?php echo "'" . $result['vacation_name'] . "'"; ?> />
                                            <input type="submit" class="btn btn-danger" name="submit" id="submit" value="Delete"></button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>

                        <?php
                        } // end of foreach()        
                        ?>
                    </table>
                </div>

            </main>
            <footer>
                <div class="footer-container">
                    <hr>
                        <div class="flex-container-footer">
                            <div class="flex-container-footer-info">
                                <h5>100% Money Refund</h5>
                                <p>With choosing us as a travel Resource, we come with decades of experience, immaculate service, along with unmatched access to national parks. If you were to need your money back, we take pride as a company to give you 100% of your money back!</p>
                            </div>
                            <div class="flex-container-footer-info">
                                <h5>Information About Us</h5>
                                <p>Adventure Travel our core values are based around having a great trip while respecting Mother Natures incrediable features. For 35 long years we have been sharing the outdoors with everyday Mother Earth's features!</p>
                            </div>
                            <div class="flex-container-footer-info">
                                <h5>Finest Cuisine</h5>
                                <p>At Adventure Travel we take pride in finding the perfect vacation for you and your loved ones. We pick the perfect location for you and your group, along with the greatest cuisine to go along with a great destination. Based on where you are going there will be great food choices to go along with the culture of your destination.</p>
                            </div>
                            <div class="flex-container-footer-info">
                                <h5>Become a Memeber of Adventure Travel!</h5>
                                <p>Sign up to become a memember of the Adventure Travel to gain benefits. Such as, a annual discount on trips, access EXCLUSIVE trips along with discounted gear if needed. The memebership is only $40 and it is easy to get signed up!</p>
                            </div>
                        </div>
                    <hr>
                    <img src="../images/AT_logo.gif" alt="logo" width="7%"> 
                    <h4>
                        <a href="#topOfPage">Return To Top Of The Page</a>
                    </h4>
                    <h6 style="font-size:medium;">©<?php echo showYear() ?> Adventure Travel, Inc. All rights reserved. Adventure Travel and the Logo are trademarks of Adventure Travel, Inc</h6>
                </div>
            </footer>
        </div>
    </body>

</html>