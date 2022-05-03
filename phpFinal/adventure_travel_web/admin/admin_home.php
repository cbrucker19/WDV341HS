<?php
//This class is the homepage for the admin page, once you login, this is where it brings you
session_start(); 

if(isset($_SESSION['validUser']) && $_SESSION['validUser']){

}else{
    //If not validUser, then return to the location
    header("Location: login.php");
}
include "../resources/php_functions.php";
    
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<!--Cyrus Brucker || Start Date: April 12th || End Date: April 28th -->
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='Admin homepage'>
<link rel="stylesheet" href="../styles.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">    
<title>Admin HomePage</title>
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
<body id="topOfPage">
    <a name = "topOfPage"></a> 
    <div id ="container">
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
            <main>
                <div class="container-fluid">
                    <h2>Hello! Welcome to Admin Home Page</h2>
                    <div class="jumbotron" style="background: gray; border:2px solid black;" >
                        <h5><strong>As an Admin, you can:</strong></h5>                       
                            <li>1. View all the Vacations</li>
                            <li>2. Add a new Entry</li>
                            <li>3. Update Entries</li>
                            <li>4. Delete Entries</li>
                            <li>5. Logout!</li>
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
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    </div>
</body>
</html>
