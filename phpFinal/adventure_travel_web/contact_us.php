<?php
    include "resources/php_functions.php";
    
    // Include email php files if form is submitted and honeypot is empty
    if(isset($_POST['submit'])){
        $honeypot = $_POST['company_name'];
        if(empty($honeypot)){
           include "resources/contact_email.php";
           include "resources/response_email.php";  
        }
    }
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<!--Cyrus Brucker || Start Date: March 29th  || End Date: April 2th -->
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='description' content='ContactUs Page'>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<title>Contact Us</title>
</head>
    <body>
        <a name="topOfPage"></a>
        <div id = "container">
        <header>
            <div>
                <img src="images/banner.jpg" alt="banner" width="100%">
            </div>
        </header>
            <nav>
                <div class="flex-container-nav">
                    <p><a href="index.php"><strong>HomePage</strong></a></p>
                    <p><a href="advantages.php"><strong>Advantages of Adventure</strong></a></p>
                    <p><a href="Destinations.php"><strong>Destinations</strong></a></p>
                    <p><a href="faq.php"><strong>Asked Questions</strong></a></p>
                    <p><a href="admin/login.php"><strong>Login</strong></a></p>

                </div>
            </nav>
        <main class="col-12">

            <div class="col-md-6 mx-auto">
                <?php 
                    if(isset($_POST['submit'])){
                        if(!empty($honeypot)){
                ?>
                        <div class='jumbotron'>
                            <h2>Thank you  <?php echo $_POST['first_name'];?>, for contacting us!</h2></br>
                            <h3>We have recieved your information and you should recieve an email confirmation shortly.</h3>
                            <br>
                            <a href="index.php">Click this link to return to the homepage. </a>
                        </div>
                    <?php 
                        }else{
                    ?>
                        <h2>Were sorry!</h2>
                        <h3>Something went wrong and your access was denied</h3></br>
                        <h3>Click the button below to try again.</h3>
                        <form method="post" action="contact_us.php" style="background-color: whitesmoke;">
                            <button type="submit" class="btn btn-outline-secondary mx-auto d-block" name="redirct" value="redirct">Back To Form</button>
                        </form>
                <?php
                        }   
                    }else{   
                ?>
                        <hr>  
                        <h3>Contact Us Here!</h3>
                        <hr>
                        <p class="center">Send us a message.  We would love to hear from you!</p>

                        <form class="col mx-auto border border-dark rounded-lg p-4 mb-5" id="contactForm" name="contactForm" method="post" action="contact_us.php" onsubmit="return validateContactForm();">
                            <legend class="text-center">Contact Information</legend>
                            <hr class="border border-dark">
                            <div class="form-group">
                                <label for="first_name">First Name:</label> 
                                <input type="text" class="form-control" name="first_name" id="first_name"/>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name:</label> 
                                <input type="text" class="form-control" name="last_name" id="last_name"/>
                            </div>
                            <div class="form-group">
                                <label for="company_name">Company Name:</label> 
                                <input type="text" class="form-control" name="company_name" id="company_name"/>
                            </div>
                            <div class="form-group">
                                <label for="email_address">Email:</label>
                                <input type="email" class="form-control" id="email_address" name="email_address" placeholder="youremail@mail.com"/>
                            </div>
                            <div class="form-group">
                                <label for="phone_number">Phone Number:</label> 
                                <input type="tel" class="form-control" name="phone_number" id="phone_number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" />
                            </div>
                            <div class="form-group">
                                <label for="reason">Reason for contact:</label>
                                <select class="form-control" name="reason" id="reason">
                                    <option value="">Please select a Topic</option>
                                    <option value="trips">Trips</option>
                                    <option value="reservations">Reservations</option>
                                    <option value="referrals">Referrals/Reviews</option>
                                </select>
                            </div>
                                <p>Please send me information on: </p>
                                <input type="checkbox" name="alberta" id="alberta" value="alberta/banff">
                                <label for="alberta">Alberta Banff Hike</label>
                                <br>
                                <input type="checkbox" name="bryce_zion" id="bryce_zion" value="bryce/zion">
                                <label for="bryce_zion">Grand Canyon To Bryce & Zion</label>
                                <br>
                                <input type="checkbox" name="glacier" id="glacier_park" value="glacier park">
                                <label for="glacier_park">Glacier National Park</label>
                                <br>
                                <input type="checkbox" name="bryce" id="bryce" value="bryce canyon">
                                <label for="bryce">Utah Bryce Canyon</label>
                                <br>
                                <input type="checkbox" name="tetons" id="tetons" value="tetons">
                                <label for="tetons">Tetons & Yellowstone</label>
                                <br>
                                <input type="checkbox" name="grand_canyon" id="grand_canyon" value="grand canyon">
                                <label for="grand_canyon">Grand Canyon National Park</label>
                                <br>
                                <input type="checkbox" name="yosemite" id="yosemite" value="yosemite">
                                <label for="yosemite">Yosemite Tour</label>
                                <br>
                                <input type="checkbox" name="arches" id="arches" value="arches">
                                <label for="arches">Arches & Canyonlands</label>
                                <br>
                                <input type="checkbox" name="all_trips" id="all_trips" value="all trips">
                                <label for="all_trips">All Of Them!</label>
                            <div>
                            </div>
                            <div class="form-group pt-3">
                                <label for="comments">Comments:</label></br>
                                <textarea class="form-control" id="comments" name="comments"></textarea>
                            </div>
                            <div class="text-center">
                                <input type="reset"  class="btn btn-secondary" style="width:150px" name="button2" id="button2" value="Reset" />
                                <input type="submit" class="btn btn-primary" style="width:150px" name="submit" id="submit" value="Submit"/>
                            </div>
                        </form>        
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
    </body>
</html>