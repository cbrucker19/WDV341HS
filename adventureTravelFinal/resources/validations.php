<?php
// function checks name is empty
function valVacationName($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}
// checks if image is set, can't be empty
function valVacationImage($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

// checks if description is set, can't be empty
function valVacationDescription($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}
//Checks if dats is set, can't be empty
function valVacationDays($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

//Checks if nights is set, can't be empty
function valVacationNights($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

//Checks if adult price is set, can't be empty
function valVacationAdultPrice($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

//Checks if Child price is set, can't be empty
function valVacationChildPrice($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

//Checks if group size is set, can't be empty
function valVacationGroupSize($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}
//Checks if spots is set, can't be empty
function valVacationSpotsRemaining($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}
//Checks vacationDateAvail is set, can't be empty
function valVacationDateAvail($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

//Checks vaacationDateCheck is set, can't be empty
function valVacationCheckInTime($inVar){
    if($inVar == ""){
        return false;
    }
    return true;
}

?>