<?php
//This class checks/validates inputs from the user, to insure the inputted data is good data.

//This Function checks if vacationName is good data
function valVacationName($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

//This Function checks if vacationImage is good data
function valVacationImage($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

//This Function checks if vacationDescription is good data
function valVacationDescription($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

//This Function checks if vacationDays is good data
function valVacationDays($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

//This Function checks if vacationNights is good data
function valVacationNights($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

//This Function checks if vacationAdultPrice is good data
function valVacationAdultPrice($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

//This Function checks if vacationChildPrice is good data
function valVacationChildPrice($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

//This Function checks if vacationGroupSize is good data
function valVacationGroupSize($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

//This Function checks if vacationSpotsRemaining is good data
function valVacationSpotsRemaining($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

//This Function checks if vacationDateAvail is good data
function valVacationDateAvail($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

//This Function checks if vacationCheckInTime is good data
function valVacationCheckInTime($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}
?>