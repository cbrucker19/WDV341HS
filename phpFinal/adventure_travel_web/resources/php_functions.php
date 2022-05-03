<?php
//This class is declaring functions, this is so each class can use these classes if needed. All of the functions are for formatting date. 
    
    //This function retrieves the date, and sets the date to central US time. 
    function currentDate(){               
        date_default_timezone_set("America/Chicago");    
        $date = date("m/d/Y");             
        return $date;                      
    }
    
    //This function sets the date to central US time, mainly for showing the year. 
    function showYear(){
        date_default_timezone_set("America/Chicago");   
        $year = date("Y");                              
        return $year; 
    }
    
    //This function sets the date to central US time. 
    function currentDateUSFormat(){
        $date = date_default_timezone_set("America/Chicago");    
        $date = date("m/d/Y");                                   
        return $date;                                            
    }
    
    //This function sets the date to central US time, but with the format of Y-m-d
    function currentDateSqlFormat()
    {
        $date = date_default_timezone_set("America/Chicago");   
        $date = date("Y-m-d");                                    
        return $date;                                          
    }

    //This function configures a SQL date and formats it to a more user friendly date format. 
    function conDateSQLToUs($inDate){
      $date = date_create($inDate);
      return date_format($date, "m/d/Y");
    }
?>