<?php 

    class Vacation {

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
    private $vacationDateUpdated

    /* 
    Getters and setters methods for each vacation attribute
    */

        public function getVacationId(){
            return $this->vacationId;
        }

        public function setVacationId($vacationId)
        {
        $this->vacationId = $vacationId;

        return $this;
        }
        public function getVacationName()
        {
        return $this->vacationName;
        }
        public function setVacationName($vacationName)
        {
        $this->vacationName = $vacationName;

        return $this;
        }
        public function getVacationImg()
        {
            return $this->vacationImg;
        }
        public function setVacationImg($vacationImg)
        {
            $this->vacationImg = $vacationImg;
    
            return $this;
        }
        public function getVacationDescription()
        {
        return $this->vacationDescription;
        }
        public function setVacationDescription($vacationDescription)
        {
        $this->vacationDescription = $vacationDescription;

        return $this;
        }
        public function getVacationDays()
        {
        return $this->vacationDays;
        }
        public function setVacationDays($vacationDays)
        {
        $this->vacationDays = $vacationDays;

        return $this;
        }
        public function getVacationNights()
        {
        return $this->vacationNights;
        }
        public function setVacationNights($vacationNights)
        {
        $this->vacationNights = $vacationNights;

        return $this;
        }
        public function getVacationAdultPrice()
        {
        return $this->vacationAdultPrice;
        }
        public function setVacationAdultPrice($vacationAdultPrice)
        {
        $this->vacationAdultPrice = $vacationAdultPrice;

        return $this;
        }
        public function getVacationChildPrice()
        {
            return $this->vacationChildPrice;
        }
        public function setVacationChildPrice($vacationChildPrice)
        {
        $this->vacationChildPrice = $vacationChildPrice;

        return $this;
        }
        public function getVacationGroupSize()
        {
        return $this->vacationGroupSize;
        }
        public function setVacationGroupSize($vacationGroupSize)
        {
        $this->vacationGroupSize = $vacationGroupSize;

        return $this;
        }
        public function getVacationSpotsRemaining()
        {
        return $this->vacationSpotsRemaining;
        }
        public function setVacationSpotsRemaining($vacationSpotsRemaining)
        {
        $this->vacationSpotsRemaining = $vacationSpotsRemaining;

        return $this;
        }
        public function getVacationDateAvailable()
        {
            return $this->vacationDateAvailable;
        }
        public function setVacationDateAvailable($vacationDateAvailable)
        {
        $this->vacationDateAvailable = $vacationDateAvailable;

        return $this;
        }
        public function getVacationCheckInTime()
        {
        return $this->vacationCheckInTime;
        }
        public function setVacationCheckInTime($vacationCheckInTime)
        {
        $this->vacationCheckInTime = $vacationCheckInTime;

        return $this;
        }
        public function getVacationDateInserted()
        {
        return $this->vacationDateInserted;
        }
        public function setVacationDateInserted($vacationDateInserted)
        {
            $this->vacationDateInserted = $vacationDateInserted;
    
            return $this;
        }
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