<?php

class Patient
{
    public function __construct($name, $dob, $pesel)
    {
        $this->name = $name;
        $this->dob = $dob;
        $this->pesel = $pesel;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param mixed $dob
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    /**
     * @return mixed
     */
    public function getPesel()
    {
        return $this->pesel;
    }

    /**
     * @param mixed $pesel
     */
    public function setPesel($pesel)
    {
        $this->pesel = $pesel;
    }

    public function saveUserToDB()
    {

        echo $sql = "INSERT INTO patients (name, dob, pesel) VALUES ("
            . "'" . $this->getName() . "',"
            . $this->getDob() . ","
            . $this->getPesel()
            . ")";



        return $sql;

    }

    public function addHeight($id, $patient)
    {

    }
}