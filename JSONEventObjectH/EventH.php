<?php 
//This class is called in the delievrEventObject.php to describe properties and methods avaibale to the events from the database

class Event{

public $eventDate;
public $eventDescription;
public $eventId;
public $eventName;
public $eventPresenter;
public $eventTime;

//setters and getters to set the values and get them

public function getEventDate(){
    return $this->eventDate;
}
public function setEventDate($inEventDate){
    $this->eventDate = $inEventDate;
}

function setEventDescription($inDescription){
    $this->eventDescription = $inDescription;
}
function getEventDescription(){
    return $this->eventDescription;
}

function setEventId($inId){
    $this->eventId = $inId;
}
function getEventId(){
    return $this->eventId;
}

function setEventName($inName){
    $this->eventName = $inName;
}
function getEventName(){
    return $this->eventName;
} 

public function getEventPresenter()
{
    return $this->eventPresenter;
}
public function setEventPresenter($inEventPresenter)
{
    $this->eventPresenter = $inEventPresenter;

    return $this;
} 

public function getEventTime()
{
    return $this->eventTime;
}
public function setEventTime($ineventTime)
{
    $this->eventTime = $ineventTime;

    return $this;
}


}

?>