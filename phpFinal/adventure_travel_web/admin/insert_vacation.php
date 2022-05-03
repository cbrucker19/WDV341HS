<?php
session_start();

//allow access by making sure validUser session variable isset
//and validUser session variable is valid
if(isset($_SESSION['validUser']) && $_SESSION['validUser']){
  
}else{
    //deny access if false and redirect to the login form page
    header("Location: login.php");
}

// validation & custom function files
include "../resources/validations.php";
include "../resources/php_functions.php";

//Error variables for each attribue
$validform = true;
$required = "";
$errName = "";
//$errImage = "";
$errDescription = "";
$errDays = "";
$errNights = "";
$errAdultPrice = "";
$errChildPrice = "";
$errGroupSize = "";
$errSpotsRemaining = "";
$errDateAvail = "";
$errCheckInTime = "";

//Sticky variables to populate the form
$vacationName = "";
//$vacationImage = "";
$vacationDescription = "";
$vacationDays = "";
$vacationNights = "";		
$vacationAdultPrice = "";	
$vacationChildPrice = "";		
$vacationGroupSize = "";		
$vacationSpotsRemaining = "";
$vacationDateAvail = "";
$vacationCheckInTime = "";

//Variables for the form's read only(People cannot type anything)
$dateInserted = currentDateUSFormat();
$dateUpdated = currentDateUSFormat();

if(isset($_POST['submit'])){

    //HoneyPot validation
    $host = $_POST['vacation_host'];
    if(!empty($host)){
        header("refresh:0");    //This refreshed page if field is not empty 
    }else{
        $vacationName = strtoupper($_POST['vacation_name']);  //strtoupper is making vacation names upper case
        //$vacationImage = $_POST['vacation_image'];
        $vacationDescription = $_POST['vacation_description'];
        $vacationDays = $_POST['vacation_days'];
        $vacationNights = $_POST['vacation_nights'];		
        $vacationAdultPrice = $_POST['vacation_adult_price'];	
        $vacationChildPrice = $_POST['vacation_child_price'];		
        $vacationGroupSize = $_POST['vacation_group_size'];;		
        $vacationSpotsRemaining = $_POST['vacation_spots_remaining'];
        $vacationDateAvail = $_POST['vacation_date_avail'];
        $vacationCheckInTime = $_POST['vacation_check_in_time'];
        $vacationDateInserted = currentDateSqlFormat();
        $vacationDateUpdated = currentDateSqlFormat();
        
        //Validating all fields have values
        //If statements sets $validform to false if a field is empty
        if(!valVacationName($vacationName)){
            global $validform, $errName;
            $validform = false;
            $errName = "*";
        }
        /*
        if(!valVacationImage($vacationImage)){
            global $validform, $errImage;
            $validform = false;
            $errImage = "*";
        }
        */
        if(!valVacationDescription($vacationDescription)){
            global $validform, $errDescription;
            $validform = false;
            $errDescription = "*";
        }
        if(!valVacationDays($vacationDays)){
            global $validform, $errDays;
            $validform = false;
            $errDays = "*";
        }
        if(!valVacationNights($vacationNights)){
            global $validform, $errNights;
            $validform = false;
            $errNights = "*";
        }
        if(!valVacationAdultPrice($vacationAdultPrice)){
            global $validform, $errAdultPrice;
            $validform = false;
            $errAdultPrice = "*";
        }
        if(!valVacationChildPrice($vacationChildPrice)){
            global $validform, $errChildPrice;
            $validform = false;
            $errChildPrice = "*";
        }
        if(!valVacationGroupSize($vacationGroupSize)){
            global $validform, $errGroupSize;
            $validform = false;
            $errGroupSize = "*";
        }
        if(!valVacationSpotsRemaining($vacationSpotsRemaining)){
            global $validform, $errSpotsRemaining;
            $validform = false;
            $errSpotsRemaining = "*";
        }
        if(!valVacationDateAvail($vacationDateAvail)){
            global $validform, $errDateAvail;
            $validform = false;
            $errDateAvail = "*";
        }
        if(!valVacationCheckInTime($vacationCheckInTime)){
            global $validform, $errCheckInTime;
            $validform = false;
            $errCheckInTime = "*";
        }
        
        if(!$validform){
            try {       
                require '../../../connectPDO.php';	//Connection to the database using connectPDO
                
                //Create the SQL command string
                $sql = "INSERT INTO wdv341_vacations (";   // db table columns
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
                $sql .= "vacation_date_updated";
                $sql .= ") VALUES (";                   // values for columns
                $sql .= ":vacationName, ";
                //$sql .= ":vacationImage, ";
                $sql .= ":vacationDescription, ";
                $sql .= ":vacationDays, ";
                $sql .= ":vacationNights, ";
                $sql .= ":vacationAdultPrice, ";
                $sql .= ":vacationChildPrice, ";
                $sql .= ":vacationGroupSize, ";
                $sql .= ":vacationSpotsRemaining, ";
                $sql .= ":vacationDateAvail, ";
                $sql .= ":vacationCheckInTime, ";
                $sql .= ":vacationDateInserted, ";
                $sql .= ":vacationDateUpdated)";
                
                //PREPARE the SQL statement
                $stmt = $conn->prepare($sql);
                
                //BIND the values to the input parameters of the prepared statement
                $stmt->bindParam(':vacationName', $vacationName);
                //$stmt->bindParam(':vacationImage', $vacationImage);
                $stmt->bindParam(':vacationDescription', $vacationDescription);		
                $stmt->bindParam(':vacationDays', $vacationDays);		
                $stmt->bindParam(':vacationNights', $vacationNights);		
                $stmt->bindParam(':vacationAdultPrice', $vacationAdultPrice);		
                $stmt->bindParam(':vacationChildPrice', $vacationChildPrice);		
                $stmt->bindParam(':vacationGroupSize', $vacationGroupSize);		
                $stmt->bindParam(':vacationSpotsRemaining', $vacationSpotsRemaining);		
                $stmt->bindParam(':vacationDateAvail', $vacationDateAvail);		
                $stmt->bindParam(':vacationCheckInTime', $vacationCheckInTime);
                $stmt->bindParam(':vacationDateInserted', $vacationDateInserted);
                $stmt->bindParam(':vacationDateUpdated', $vacationDateUpdated);		
                
                //EXECUTE the prepared statement
                $stmt->execute();
                    
            }
            
            catch(PDOException $e)
            {
                $message = "There has been a problem. The system administrator has been contacted. Please try again later.";
                error_log($e->getMessage());			//Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<!--Cyrus Brucker || Start Date: April 14  || End Date: April 30th -->
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='Inserting page'>
<link rel="stylesheet" href="../styles.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<title> Insert Vacation Page</title>
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
        <a name="topOfPage">
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
                    <p><a href="view_all_vacations.php"><strong>Update/Delete Entries</strong></a></p>
                    <p><a href="logout.php"><strong>Logout</strong></a></p>
                </div>
            </navAdmin> 
            <main class="row">
                <div class="col">
                    <?php   // confirmation msg
                    if(isset($_POST['submit']) && empty($host) && $validform){
                    ?>   
                    <h3 class="text-primary text-center mt-2">New Vacation Was Saved In The Database</h3>
                    <?php   // required field missing error msg
                    }else if(isset($_POST['submit']) && empty($host) && !$validform){
                    ?>
                        <h3 class="text-danger text-center mt-2"> There Was A Problem.  Required Field Is Missing.</h3>
                    <?php
                    }
                    ?>
                    <!-- Page content -->
                    <h1 class="text-center mt-5">Add A Vacation</h1>
                    
                    <div class= "jumbotron col-md-6 mx-auto border border-dark rounded-lg m-4 p-4">
                        
                        <form name="insert_vacation" id="insert_vacation" method="post" action="insert_vacation.php" onsubmit="return validateInsertForm();">
                            <?php //If statement displays on screen is missing any fields
                                if(isset($_POST['submit']) && empty($host) && !$validform){
                            ?>
                                    <span class="text-danger text-center">* Required Fields</span>
                            <?php
                                }
                            ?>
                            <div class="form-group">
                                <span class="error"><?php echo $errName ?></span>
                                <label for="vacation_name">Vacation Name: </label>
                                <input type="text" class="form-control form-control-sm" name="vacation_name" id="vacation_name" value="<?php echo $vacationName;?>">
                            </div>
                            <div class="form-group">
                                <span class="error"><?php  echo $errDescription ?></span>
                                <label for="vacation_description">Vacation Description: </label>
                                <input type="text" class="form-control form-control-sm" name="vacation_description" id="vacation_description" value="<?php echo $vacationDescription;?>">
                            </div>
                            <div class="form-group">
                                <span class="error"><?php ?></span>
                                <label for="vacation_host">Vacation Host: </label>
                                <input type="text" class="form-control form-control-sm" name="vacation_host" id="vacation_host" value="<?php ?>">
                            </div> 
                            <div class="form-group">
                                <span class="error"><?php echo $errDays ?></span>
                                <label for="vacation_days">Vacation Days: </label>
                                <input type="text" class="form-control form-control-sm" name="vacation_days" id="vacation_days" value="<?php echo $vacationDays; ?>"> 
                            </div>
                            <div class="form-group">
                                <span class="error"><?php echo $errNights ?></span> 
                                <label for="vacation_nights">Vacation Nights: </label>
                                <input type="text" class="form-control form-control-sm" name="vacation_nights" id="vacation_nights" value="<?php echo $vacationNights;?>"> 
                            </div>
                            <div class="form-group">
                                <span class="error"><?php echo $errAdultPrice ?></span> 
                                <label for="vacation_adult_price">Vacation Adult Price: </label>
                                <input type="text" class="form-control form-control-sm" name="vacation_adult_price" id="vacation_adult_price" value="<?php echo $vacationAdultPrice;?>"> 
                            </div>
                            <div class="form-group">
                                <span class="error"><?php echo $errChildPrice ?></span> 
                                <label for="vacation_child_price">Vacation Child Price: </label>
                                <input type="text" class="form-control form-control-sm" name="vacation_child_price" id="vacation_child_price" value="<?php echo $vacationChildPrice;?>"> 
                            </div>
                            <div class="form-group">
                                <span class="error"><?php echo $errGroupSize ?></span>
                                <label for="vacation_group_size">Vacation Group Size: </label>
                                <input type="text" class="form-control form-control-sm" name="vacation_group_size" id="vacation_group_size" value="<?php echo $vacationGroupSize;?>"> 
                            </div>
                            <div class="form-group">
                                <span class="error"><?php echo $errSpotsRemaining ?></span>
                                <label for="vacation_spots_remaining">Vacation Spots Reamaining: </label>
                                <input type="text" class="form-control form-control-sm" name="vacation_spots_remaining" id="vacation_spots_remaining" value="<?php echo $vacationSpotsRemaining;?>">
                            </div>
                            <div class="form-group">
                                <span class="error"><?php echo $errDateAvail ?></span>
                                <label for="vacation_date_avail">Vacation Date Available: </label>
                                <input type="date" class="form-control form-control-sm" name="vacation_date_avail" id="vacation_date_avail" value="<?php echo $vacationDateAvail;?>"> 
                            </div>
                            <div class="form-group">
                                <span class="error"><?php echo $errCheckInTime ?></span>
                                <label for="vacation_check_in_time">Vacation Check In Time: </label>
                                <input type="time" class="form-control form-control-sm" name="vacation_check_in_time" id="vacation_check_in_time" value="<?php echo $vacationCheckInTime;?>"> 
                            </div>
                            <div class="form-group">
                                <span class="error"><?php ?></span>
                                <label for="vacation_date_inserted">Vacation Date Inserted: </label>
                                <input type="text" class="form-control form-control-sm" name="vacation_date_inserted" id="vacation_date_inserted" value="<?php echo $dateInserted ?>" readonly> 
                            </div>
                            <div class="form-group">
                                <span class="error"><?php ?></span>
                                <label for="vacation_updated_date">Vacation Date Updated: </label>
                                <input type="text" class="form-control form-control-sm" name="vacation_updated_date" id="vacation_updated_date" value="<?php echo $dateUpdated ?>" readonly> 
                            </div>
                            <div class="text-center">
                                <input type="submit" class="bg-primary text-light rounded-sm" name="submit" id="submit" value="Add Vacation">
                                <input type="reset" name="Reset" id="button" value="Clear Form">
                            </div>
                        </form>
                    </div>
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
