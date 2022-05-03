<?php
//This class is used to create the vacation along with the attributes of a vacation.
class Vacation {
    //Vacation attributes
    private $vacationId;
    private $vacationName;
    private $vacationImg;
    private $vacationDescription;
    private $vacationDays;
    private $vacationNights;
    private $vacationAdultPrice;
    private $vacationChildPrice;
    private $vacationGroupSize;
    private $vacationSpotsRemaining;
    private $vacationDateAvailable;
    private $vacationCheckInTime;
    private $vacationDateInserted;
    private $vacationDateUpdated;
    
    

    //getter/setter for vacationId
    public function getVacationId()
    {
        return $this->vacationId;
    }
    public function setVacationId($vacationId)
    {
        $this->vacationId = $vacationId;

        return $this;
    }

    //getter/setter for vacationName
    public function getVacationName()
    {
        return $this->vacationName;
    }
    public function setVacationName($vacationName)
    {
        $this->vacationName = $vacationName;

        return $this;
    }

    //getter/setter for vacationImg
    public function getVacationImg()
    {
        return $this->vacationImg;
    } 
    public function setVacationImg($vacationImg)
    {
        $this->vacationImg = $vacationImg;

        return $this;
    }

    //getter/setter for vacationDescription 
    public function getVacationDescription()
    {
        return $this->vacationDescription;
    }
    public function setVacationDescription($vacationDescription)
    {
        $this->vacationDescription = $vacationDescription;

        return $this;
    }

    //getter/setter for vacationDays
    public function getVacationDays()
    {
        return $this->vacationDays;
    }
    public function setVacationDays($vacationDays)
    {
        $this->vacationDays = $vacationDays;

        return $this;
    }

    //getter/setter for vacationNights
    public function getVacationNights()
    {
        return $this->vacationNights;
    }
    public function setVacationNights($vacationNights)
    {
        $this->vacationNights = $vacationNights;

        return $this;
    }

    //getter/setter for vacationAdultPrice
    public function getVacationAdultPrice()
    {
        return $this->vacationAdultPrice;
    }
    public function setVacationAdultPrice($vacationAdultPrice)
    {
        $this->vacationAdultPrice = $vacationAdultPrice;

        return $this;
    }

    //getter/setter for vacationChildPrice 
    public function getVacationChildPrice()
    {
        return $this->vacationChildPrice;
    }
    public function setVacationChildPrice($vacationChildPrice)
    {
        $this->vacationChildPrice = $vacationChildPrice;

        return $this;
    }

    //getter/setter for vacationGroupSize 
    public function getVacationGroupSize()
    {
        return $this->vacationGroupSize;
    } 
    public function setVacationGroupSize($vacationGroupSize)
    {
        $this->vacationGroupSize = $vacationGroupSize;

        return $this;
    }

    //getter/setter for vacationSpotsRemaining
    public function getVacationSpotsRemaining()
    {
        return $this->vacationSpotsRemaining;
    }
    public function setVacationSpotsRemaining($vacationSpotsRemaining)
    {
        $this->vacationSpotsRemaining = $vacationSpotsRemaining;

        return $this;
    }

    //getter/setter for vacationDateAvailable 
    public function getVacationDateAvailable()
    {
        return $this->vacationDateAvailable;
    }
    public function setVacationDateAvailable($vacationDateAvailable)
    {
        $this->vacationDateAvailable = $vacationDateAvailable;

        return $this;
    }

    //getter/setter for vacationCheckInTime
    public function getVacationCheckInTime()
    {
        return $this->vacationCheckInTime;
    } 
    public function setVacationCheckInTime($vacationCheckInTime)
    {
        $this->vacationCheckInTime = $vacationCheckInTime;

        return $this;
    }

    //getter/setter for vacationDateInserted
    public function getVacationDateInserted()
    {
        return $this->vacationDateInserted;
    }
    public function setVacationDateInserted($vacationDateInserted)
    {
        $this->vacationDateInserted = $vacationDateInserted;

        return $this;
    }

   //getter/setter for vacationDateUpdated 
    public function getVacationDateUpdated()
    {
        return $this->vacationDateUpdated;
    }
    public function setVacationDateUpdated($vacationDateUpdated)
    {
        $this->vacationDateUpdated = $vacationDateUpdated;

        return $this;
    }
}
?>