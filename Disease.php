<?php

class Disease
{
    public function __construct($customerId, $type, $date, $medicine)
    {
        $this->customerId = $customerId;
        $this->type = $type;
        $this->date = $date;
        $this->medicine = $medicine;
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param mixed $customerID
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getMedicine()
    {
        return $this->medicine;
    }

    /**
     * @param mixed $medicine
     */
    public function setMedicine($medicine)
    {
        $this->medicine = $medicine;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function saveDiseaseToDB()
    {
       echo $sql = "INSERT INTO disease (customerID, type, date, medicine) VALUES ("
        . $this->getCustomerId() . " ,"
        . "'" . $this->getType() . "',"
        . "'" . $this->getDate() . "',"
        . "'" . $this->getMedicine()
        . "')" ;

        return $sql;
    }
}