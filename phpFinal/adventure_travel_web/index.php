<?php 

    include "resources/php_functions.php";
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--Cyrus Brucker || Start Date: March 26th || End Date: April 11th -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adventure HomePage.">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>HomePage</title>
    <style>
        /*JumboTron CSS*/
        .imgSections img{
            display:block;
            margin:auto;
        }
        .jumboCSS div{
            margin-left: auto;
            margin-right: auto;
            
        }
        /*Bootstrap container with only text inside the container id*/
        .container{
            background-color: white;
            border: 5px solid black;
        }
        .text-center{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: larger;
            color:burlywood;
            margin-top: 10px;
            margin-bottom: auto;
        }
        .imgContainer{
            display:block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 35%;
            margin-bottom: 40%;  
        }
    </style>
</head>
<body>
    <a name="topOfPage"></a>
    <div id ="container">
        <header>
            <div>
                <img src="images/banner.jpg" alt="banner" width="100%">
            </div>
            <h1>ADVENTURE TRAVEL</h1>
            <h2>ADVENTURES OF A LIFE TIME START HERE</h2>
        </header>
        <nav>
            <div class="flex-container-nav">
                <p><a href="advantages.php"><strong>Advantages of Adventure</strong></a></p>
                <p><a href="destinations.php"><strong>Destinations</strong></a></p>
                <p><a href="faq.php"><strong>Frequently Asked Questions</strong></a></p>
                <p><a href="contact_us.php"><strong>Contact Us</strong></a></p>
                <p><a href="admin/login.php"><strong>Login</strong></a></p>
            </div>
        </nav>
        <main>
            <!--Jumbotron with 3 columns inside the first row only for pictures-->
            <div style="background-color:cornsilk; margin-top:32px; margin-bottom:32px;"class="jumbotron jumboCSS">
                <div style="background-color: cornsilk;" class="row">
                    <div class="col imgSections">
                        <img src="images/grand_canyon.jpg" alt="Grand Canyon" width="100%" height="auto">
                    </div>
                    <div class="col imgSections">
                        <img src="images/bear.jpg" alt="Bear" width="100%" height="auto">
                    </div>
                    <div class="col imgSections">
                        <img src="images/person_mountain.jpg" alt="Person on mountain" width="100%" height="auto">
                    </div>
                </div>
            </div>
            <!--End of JumboTron-->
            <!--Text for homepage inside a div container bootstrap-->
            <div  style="margin-top:32px; margin-bottom:32px;" class="container">
                <div class="row">
                    <div style="background-color: black;" class="col">
                        <img src="images/shoes.jpg" class="imgContainer" alt="CanyonLands" width="412px" height="280px">
                    </div>
                    <div class="col">
                        <p class="text-center">Adventure Travel is a best in class, family-owned and operated boutique international adventure travel outfitter. </p>
                        <p class="text-center">Our carefully curated and ultra-personalized itineraries allow guests to experience the land, the people, and the culture in the most immersive, energizing, and inspiring way possible.</p>
                        <p class="text-center">With the decades of experience and unmatched access to our National Parks, our knowledge, credibility, and insider access offer an experience that is – simply put – unparalleled</p>
                    </div>
                    <div style="background-color: black;"class="col">
                        <img src="images/man_hiking.jpg"  class="imgContainer" alt="Man hiking" width="412px" height="280px">
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
                 <h6 style="font-size:medium;">©2021 Adventure Travel, Inc. All rights reserved. Adventure Travel and the Logo are trademarks of Adventure Travel, Inc</h6>
             </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>