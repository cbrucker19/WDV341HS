<?php
include "../resources/php_functions.php";

session_start(); 

$validUser = false;     
$errMsg = "";        

//If statement runs one the login form has been ran/submitted.
if(isset($_POST['submit'])){

    ///variables for logging in 
    $loginName = $_POST['loginName'];
    $loginPW = $_POST['password'];
    
    try {
        //Connecting to the database through the connectPDO file 	
        require '../../../connectPDO.php';	
        //Creating the SQL command strins for this page
        $sql = "SELECT vacation_user_name, ";
        $sql .= "vacation_user_password ";
        $sql .= "FROM vacation_user ";
        $sql .= "WHERE vacation_user_name=:userName ";
        $sql .= "AND vacation_user_password=:userPW";
        
        //PREPARE the SQL statement above
        $stmt = $conn->prepare($sql);
            
        //BIND the values to the input parameters of the prepared statement above
        $stmt->bindParam(':userName', $loginName);
        $stmt->bindParam(':userPW', $loginPW);		
        
        //EXECUTE the prepared statement above
        $stmt->execute();	
        
        //PDO FETCHALL stores any valid rows in the $resultArray variable
        $resultArray = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //Store number of matched rows in variable
        $numRows = count($resultArray);
        
        /* Condition sets user session variable and valid user variable
            to true allowing the admin options to be displayed by sending
            user to a admin home page.  Else will display an error message
            and redisplay the form.
        */
        //If statement that sets the user session variable along with user variable to true
        //This is for the admin options to be displayed by rerouting to the admin page
        //Else willl return an error message on login form.
        if($numRows == 1){
            //sets a session variable to use
            $_SESSION['validUser'] = true;
            //valid user is true, go to admin homepage
            $validUser = true;
            header("Location: admin_home.php");
        }else{
            //else display message on login page
            $errMsg = "Invalid user name or password. Please try again.";
        }
    }

    catch(PDOException $e)
    {
        //Catch page to display messge in a separate file for the administrator
        $message = "There has been a problem. The system administrator has been contacted. Please try again later.";
        error_log($e->getMessage());			
    }
} 
?>

<!DOCTYPE html>
<html lang='en'>
<head>
<!--Cyrus Brucker || Start Date: April 13 || End Date: April 29th -->
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='Login Page'>
<link rel="stylesheet" href="../styles.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<title>Login Page</title>
<style>
    .button{
        color:black;
        background-color:lightblue; 
    }


</style>
</head>
    <body>
        <a name="topOfPage"></a>
        <div id="container">
            <header>
                <div>
                    <img src="../images/banner.jpg" alt="banner" class="mx-auto d-block" width="100%">
                </div>
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
            <main style="background-color:burlywood;"> 
                <?php   //If statement displays errorMessage variable is not valid user
                    if(isset($_POST['submit']) && $validUser == false) {
                        echo "<h3 class='text-center text-danger'>$errMsg</h3>";
                    }
                ?>  
                <h1 class="text-center">Login Page</h1>
                <!--Block 2 display this block when you link to this page -->
                <div class= "jumbotron col-md-4 mx-auto border border-dark rounded-lg m-4 p-4" style="background-color:olive;">   
                    <form method="post" action="login.php">

                        <div class="form-group">
                            <label for="loginName">User Name: </label> <br>
                            <input type="text" class="button" name="loginName" id="loginName">
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label><br>
                            <input type="password" class="button" name="password" id="password">
                        </div>

                        <div class="text-center">
                            <input type="submit" class="button" name="submit" value="Sign On">
                            <input type="reset" class="button">
                        </div>
                    </form>
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
                    <h6 style="font-size:medium;">©2021 Adventure Travel, Inc. All rights reserved. Adventure Travel and the Logo are trademarks of Adventure Travel, Inc</h6>
                </div>
            </footer>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </body>
</html>