<?php

class Disease
{
    public function __construct($type, $patientId, $date, $medicine)
    {
        $this->type = $type;
        $this->patientId = $patientId;
        $this->date = $date;
        $this->medicine = $medicine;
    }

    /**
     * @return mixed
     */
    public function getPatientId()
    {
        return $this->patientId;
    }

    /**
     * @param mixed $patientID
     */
    public function setPatientId($patientId)
    {
        $this->patientId = $patientId;
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
       echo $sql = "INSERT INTO disease (patientID, type, date, medicine) VALUES ("
        . $this->getPatientId() . " ,"
        . "'" . $this->getType() . "',"
        . "'" . $this->getDate() . "',"
        . "'" . $this->getMedicine()
        . "')" ;

        return $sql;
    }
}