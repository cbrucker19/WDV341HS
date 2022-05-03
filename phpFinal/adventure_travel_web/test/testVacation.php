<?php
    // test the vacation class

    require '../resources/Vacation.php';     // get access to the class

    $newVacation = new Vacation();  // create a vacation object

    // test setters
    $newVacation->setVacationId(1);
    $newVacation->setVacationName("Summer get away");
    $newVacation->setVacationImg("picture.jpg");
    $newVacation->setVacationDescription("Here is a long description");
    $newVacation->setVacationDays(7);
    $newVacation->setVacationNights(6);
    $newVacation->setVacationAdultPrice(2.00);
    $newVacation->setVacationChildPrice(1.00);
    $newVacation->setVacationGroupSize(18);
    $newVacation->setVacationSpotsRemaining(12);
    $newVacation->setVacationDateAvailable("08-15-22");
    $newVacation->setVacationCheckInTime("08:00:00");
    $newVacation->setVacationDateInserted("12-03-21");
    $newVacation->setVacationDateUpdated("12-03-21");

    // test getters

    echo "Should be '1': " . $newVacation->getVacationId() . "</br>";
    echo "Should be 'Summer get away': " . $newVacation->getVacationName() . "</br>";
    echo "Should be 'picture.jpg': " . $newVacation->getVacationImg() . "</br>";
    echo "Should be 'Here is a long description': " . $newVacation->getVacationDescription() . "</br>";
    echo "Should be '7': " . $newVacation->getVacationDays() . "</br>";
    echo "Should be '6': " . $newVacation->getVacationNights() . "</br>";
    echo "Should be '2.00': " . $newVacation->getVacationAdultPrice() . "</br>";
    echo "Should be '1.00': " . $newVacation->getVacationChildPrice() . "</br>";
    echo "Should be '18': " . $newVacation->getVacationGroupSize() . "</br>";
    echo "Should be '12': " . $newVacation->getVacationSpotsRemaining() . "</br>";
    echo "Should be '08-15-22': " . $newVacation->getVacationDateAvailable() . "</br>";
    echo "Should be '08:00:00': " . $newVacation->getVacationCheckInTime() . "</br>";
    echo "Should be '12-03-21': " . $newVacation->getVacationDateInserted() . "</br>";
    echo "Should be '12-03-21': " . $newVacation->getVacationDateUpdated() . "</br>";
?>