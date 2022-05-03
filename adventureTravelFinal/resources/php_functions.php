<?php 
    // gets the submittal date and sets the date to central standard time in the US
    function currentDate(){
        date_default_timezone_set("America/Chicago");
        $date = date("m/d/Y");
        return $date;
    }
    //sets the date to central time
    function showYear(){
        date_default_timezone_set("America/Chicago");
        $year = date("Y");
        return $year;
    }
    //sets the date to central US time because the server is in the EU
    function currentDateUSFormat(){
        $date = date_default_timezone_set("America/Chicago");
        $date = date("m/d/Y");
        return $date
    }
    //sets the date to US central in sql format
    function currentDateSqlFormat(){
        $date = date_default_timezone_set("America Chicago");
        $date = date("Y-m-d");
        return $date
    }
    //converst SQL formatted date to user friendly date
    function conDateSqlToUs($inDate){
        $date = date_create($inDate);
        return date_format($date, "m/d/Y");
    }
?>