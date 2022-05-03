<?php
    include "resources/php_functions.php";    //Import custom php_functions class
    require "../../connectPDO.php";           //Connecting to the database on localhost
    require "resources/Vacation.php";         //Importing the Vacation class

    $vacationObj = new Vacation();            //Creating a empty Vacation object.

    $vacationObjArray = [];                   //Creating an empty array of vacation objects

    try{                                      //SQL select statement to get dynamic content for page from the db
        $sql = "SELECT vacation_id, ";        //SQL select statement
        $sql .= "vacation_name, ";
        //$sql .= "vacation_image, ";
        $sql .= "vacation_description, ";
        $sql .= "vacation_days, ";
        $sql .= "vacation_nights, ";
        $sql .= "vacation_adult_price, ";
        $sql .= "vacation_child_price, ";
        $sql .= "vacation_group_size, ";
        $sql .= "vacation_spots_remaining, ";
        $sql .= "vacation_date_avail, ";
        $sql .= "vacation_check_in_time, ";
        $sql .= "vacation_date_inserted, ";
        $sql .= "vacation_date_updated ";
        $sql .= "FROM wdv341_vacations";
        $stmt = $conn->prepare($sql);        //Prepare the statement
        $stmt->execute();                    //Execute the statement

        // Store each row from the database vacation table in a vacaton object 
        foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $row){
            $vacationObj = new Vacation();

            $vacationObj->setVacationId($row['vacation_id']);
            $vacationObj->setVacationName($row['vacation_name']);
            //$vacationObj->setVacationImg($row['vacation_image']);
            $vacationObj->setVacationDescription($row['vacation_description']);
            $vacationObj->setVacationDays($row['vacation_days']);
            $vacationObj->setVacationNights($row['vacation_nights']);
            $vacationObj->setVacationAdultPrice($row['vacation_adult_price']);
            $vacationObj->setVacationChildPrice($row['vacation_child_price']);
            $vacationObj->setVacationGroupSize($row['vacation_group_size']);
            $vacationObj->setVacationSpotsRemaining($row['vacation_spots_remaining']);
            $vacationObj->setVacationDateAvailable($row['vacation_date_avail']);
            $vacationObj->setVacationCheckInTime($row['vacation_check_in_time']);
            $vacationObj->setVacationDateInserted($row['vacation_date_inserted']);
            $vacationObj->setVacationDateUpdated($row['vacation_date_updated']);

            // Store the object to an array of vacation objects
            array_push($vacationObjArray, $vacationObj);

            
        }
    }
    catch(PDOException $e){
        echo "Errors: " . $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<!--Cyrus Brucker || Start Date: 28th || End Date: April 1st -->
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='Destinations Page'>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<title>Destinations Page</title>
<style>
        .jumbotron{
            border:5px solid black;
            margin: 100px 100px 100px 100px;
        }
        .vl{
            border-left: 6px solid black;
            height:500px;
        }
        span{
            color:teal;
            font-weight:bold;
        }
</style>
</head>
    <body>
    <a name="topOfPage"></a>
        <div id="container">
            <header>
                <div>
                    <img src="images/banner.jpg" alt="banner" width="100%">
                </div>
            </header>
            <nav>
                <div class="flex-container-nav">
                    <p><a href="index.php"><strong>HomePage</strong></a></p>
                    <p><a href="advantages.php"><strong>Advantages of Adventure</strong></a></p>
                    <p><a href="faq.php"><strong>Frequently Asked Questions</strong></a></p>
                    <p><a href="contact_us.php"><strong>Contact Us</strong></a></p>
                    <p><a href="admin/login.php"><strong>Login</strong></a></p>
                </div>
            </nav>
            <main>
                <h1 style="text-align: center;">Destinations</h1>
                <div style="border:2px solid black; " class="container-fluid">
                    <h2 style="text-align: center;">Explore More with Our All-Inclusive National Park Vacations</h2>
                    <h4 style="text-align: center;">For over 35 years, family-owned and operated Adventure Travel has created exhilarating national park vacations, twice earning the distinction as the World’s Best Tour Operator by Travel + Leisure magazine. Our all-inclusive adventure vacations offer the most intimate, meaningful, and memorable adventure travel experience imaginable. Discover the wild west on horseback outside Yellowstone or the dramatic soaring peaks of Grand Teton National Park. Bring the kids along on our exciting Arizona adventure to the breathtaking Grand Canyon or head over to California’s Yosemite National Park and stand in awe below the famous granite cliffs of El Capitan and Half-dome. Our national park vacation packages include iconic sites and hidden gems to delight every traveler!</h4>
                </div>
                <!--Container with the trips, using php to display them.-->
                <div class="mx-auto container-fluid">         
                    <?php
                        // Loop will create Jumbortron/card deck and two vacation object cards if there are vacation objects
                        // left in the vacation object array. 
                        $i = 0;
                        while($i < count($vacationObjArray)) {
                    ?>
                    <div class="row jumbotron card-deck" style="background-color:olive;">
                        <!-- Card -->
                        <div class="col-xl-4 col-sm-12 card mx-auto" style="background-color:lightgray">

                            <p class="card-body font-weight-bold">
                                <?php  // display name
                                    echo $vacationObjArray[$i]->getVacationName() 
                                ?>
                            </p>

                            <p class="card-body">
                                <?php  
                                    echo  $vacationObjArray[$i]->getVacationDays() . "<strong> Days</strong> /" . 
                                        $vacationObjArray[$i]->getVacationNights() . "<strong> Nights</strong><br>" .  
                                        $vacationObjArray[$i]->getVacationDescription() . "<br>" .
                                        "<strong>Average Cost: </strong><br> $" . 
                                        $vacationObjArray[$i]->getVacationAdultPrice() . 
                                        " / <strong>Adult</strong><br> $" . 
                                        $vacationObjArray[$i]->getVacationChildPrice() . " / <strong>Child</strong><br>" .
                                        "<strong>Date Available:</strong> " . conDateSQLToUS($vacationObjArray[$i]->getVacationDateAvailable()) . "<br>" .
                                        "<strong>Check In Time:</strong> " . date_format(date_create($vacationObjArray[$i]->getVacationCheckInTime()), "g:iA") . "<br>" .
                                        "<strong>Group Size:</strong> " . $vacationObjArray[$i]->getVacationGroupSize() . "<br>" . 
                                        "<strong>Spots Remaining:</strong> " . $vacationObjArray[$i]->getVacationSpotsRemaining();
                                    $i++;
                                ?>             
                            </p>
                        </div>
                                <?php 
                                    //if statement that checks to see if the cards created matches, and how many objects are in the array(IF NOT CREATE ANOTHER CARD)
                                    if($i < count($vacationObjArray)) { 
                                ?>
                                <div class="col-xl-4 col-sm-12 card mx-auto" style="background-color:lightgray">
                                    <p class="card-body font-weight-bold">
                                        <?php  
                                            echo $vacationObjArray[$i]->getVacationName() 
                                        ?>
                                    </p>

                                    <div class="card-body">
                                        <?php // diplay image
                                            //echo //"<img src='images/" . $vacationObjArray[$i]->getVacationImg() . 
                                                //"'" . "alt='" . $vacationObjArray[$i]->getVacationImg() . "' width='100%'>";
                                        ?>
                                    </div>

                                    <p class="card-body">
                                        <?php // display content
                                            echo  $vacationObjArray[$i]->getVacationDays() . "<strong> Days</strong> /" . 
                                                $vacationObjArray[$i]->getVacationNights() . "<strong> Nights</strong><br>" .  
                                                $vacationObjArray[$i]->getVacationDescription() . "<br>" .
                                                "<strong>Average Cost: </strong><br> $" . 
                                                $vacationObjArray[$i]->getVacationAdultPrice() . 
                                                " / <strong>Adult</strong><br> $" . 
                                                $vacationObjArray[$i]->getVacationChildPrice() . " / <strong>Child</strong><br>" .
                                                "<strong>Date Available:</strong> " . conDateSQLToUS($vacationObjArray[$i]->getVacationDateAvailable()) . "<br>" .
                                                "<strong>Check In Time:</strong> " . date_format(date_create($vacationObjArray[$i]->getVacationCheckInTime()), "g:iA") . "<br>" .
                                                "<strong>Group Size:</strong> " . $vacationObjArray[$i]->getVacationGroupSize() . "<br>" . 
                                                "<strong>Spots Remaining:</strong> " . $vacationObjArray[$i]->getVacationSpotsRemaining();
                                            $i++;
                                        ?>            
                                    </p>
                                </div> 
                                <?php
                                    }
                                ?>
                    </div>
                            <?php
                                }
                            ?>
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
                    <img src="images/AT_logo.gif" alt="logo" width="7%"> 
                    <h4>
                        <a href="#topOfPage">Return To Top Of The Page</a>
                    </h4>
                    <h6 style="font-size:medium;">©<?php echo showYear() ?> Adventure Travel, Inc. All rights reserved. Adventure Travel and the Logo are trademarks of Adventure Travel, Inc</h6>
                </div>
            </footer>
            <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        </div>
    </body>
</html>

