<?php
    include "resources/php_functions.php";
?>
<!DOCTYPE html>
<html lang='en'>
<head>
    <!--Cyrus Brucker || Start Date: march 29th || End Date: April 28 -->
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='description' content='advantages page'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <style>
        .container-fluid{
            text-align: center;
            background-color:burlywood;
            border:2px solid black;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .col{
            background-color: burlywood;
        }
        .jumbotron{
            background-color: wheat;
        }
        .col:hover{
            border:2px solid black;
        }
        h3, h5{
            color:black;
        }
    </style>
</head>
<body>
    <a name="topOfPage"></a>
    <div id="container">
        <header><!--Header Begining-->
            <div>
                <img src="images/banner.jpg" alt="banner" width="100%">
            </div>
        </header> <!--Header End-->
        <nav><!--Nav Begining-->
            <div class="flex-container-nav">
                <p><a style="color: #007FFF" href="index.php"><strong>Home Page</strong></a></p>
                <p><a style="color: #007FFF" href="destinations.php"><strong>Destinations </strong></a></p>
                <p><a style="color: #007FFF" href="faq.php"><strong>Frequently Asked Questions</strong></a></p>
                <p><a style="color: #007FFF" href="contact_us.php"><strong>Contact Us</strong></a></p>
                <p><a style="color: #007FFF" href="admin/login.php"><strong>Login</strong></a></p>
            </div>
        </nav><!--Nav End-->
        <main><!--Main Begining-->
            <div class="container-fluid">
                <h1>The Adventure Advantages</h1>
                <h5>For over 35 years, the Adventure Travel family has meticulously curated truly unique and enriching adventure travel vacations, earning top honors from Travel + Leisure, Conde Nast Traveler, and more</h5>
                <br>
                <div class="row jumbotron card-deck">
                
                    <div class="col-xl-4 card">

                        <h2 class="card-head">PAMPERED SMALL GROUPS</h2>

                        <div class="card-body">
                            <img src="images/small_grp.jpg" alt="small_group_on_cliff" width="100%">
                        </div>
                        <p class="card-body">With a maximum of 18 guests and the lowest guest-to-guide ratio (6:1) in the industry, our small groups are pampered with highly personalized, above-and-beyond service.</p>
                    </div>
                    <div class="col-xl-4 card">
                        <h2 class="card-head">EXPERT LOCAL GUIDES</h2>
                        <div class="card-body">
                            <img src="images/tour_guide.jpg" alt="people_rock_climbing" width="100%">
                        </div>
                        <p class="card-body">We have very high standards. That’s why our guides are the finest local experts around – renowned for their insider’s knowledge, leadership, and ability to anticipate your every need.</p>
                    </div>
                    <div class="col-xl-4 card">
                        <h2 class="card-head">FINEST LODGING & CUISINE</h2>
                        <div class="card-body">
                            <img src="images/restaurant.jpg" alt="restaurant" width="100%">
                        </div>
                        <p class="card-body">We go to great lengths to find the best lodging available, including hotels with a unique cultural reflection of the places we visit. And from five-star restaurants to dinner by campfire, you will enjoy the finest local cuisine.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mx-auto b-margin">
                <p><h3>We offer only the finest dining and lodgings local to the area as well exquisite by the campfire meals with top notch hospitality amongst some of the worlds most breathtaking landscapes.</h3></p>
                <p><h3>Based on our previous customers satisfaction, we are confident that your Adventure Travel will be one of the most memorable experiences in your life, leaving you wanting to come back for more.  Your adventure is 100% money back guaranteed</h3></p>
            </div>
            <div class="container-fluid">
                <div class="row jumbotron card-deck mx-auto">
                    <div class="col-lg-4 card">
                        <h2 class="card-head">THRILLING WOW MOMENTS</h2>
                        <div class="card-body">
                            <img src="images/man_on_mountain.jpg" alt="man_over_looking_cliff" width="100%">
                        </div>
                        <p class="card-body">Our team relishes the opportunities to surprise and delight with our signature, over-the-top moments that create memories of a lifetime.</p> 
                    </div>
                    <div class="col-lg-4 card">
                        <h2 class="card-head">GUARANTEED DEPARTURES</h2>
                        <div class="card-body">
                            <img src="images/departure.jpg" alt="girl_at_airport" width="100%">
                        </div>
                        <p class="card-body">When you book your vacation with Adventure Travel, rest assured that the tour will operate on the dates and itinerary as scheduled and will not be cancelled due to lack of participation.</p> 
                    </div>
                    <div class="col-lg-4 card">
                        <h2 class="card-head">100% MONEY BACK GUARANTEE</h2>
                        <div class="card-body">
                            <img src="images/morning.jpg" alt="morning_sunrise" width="100%">
                        </div class="card-body">
                        <p class="card-body">With decades of experience, impeccable service, and unmatched access to national parks and the world’s natural wonders, we guarantee you’ll love every moment with Adventure Travel.</p>
                    </div>
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
                <img src="images/AT_logo.gif" alt="logo" width="7%"> 
                <h4>
                    <a href="#topOfPage">Return To Top Of The Page</a>
                </h4>
                 <h6 style="font-size:medium;">©<?php echo showYear() ?> Adventure Travel, Inc. All rights reserved. Adventure Travel and the Logo are trademarks of Adventure Travel, Inc</h6>
             </div>
        </footer>
    </div><!--div container end -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> 
    </body>
</html>