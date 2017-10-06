<?php
require_once 'Db.php';

class Patient extends Db
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

    public function savePatientToDB()
    {

        $sql = "INSERT INTO patients (name, dob, pesel) VALUES ("
            . "'" . $this->getName() . "',"
            . $this->getDob() . ","
            . $this->getPesel()
            . ")";

        return $sql;

    }

    public function setHeight($id, $height)
    {
        $this->height = $height;
        $sql = "UPDATE patients SET height = " . $height . " WHERE id = " . $id ;

        return $sql;
    }

    public function setWeight($id, $weight)
    {
        $this->weight = $weight;
        $sql = "UPDATE patients SET weight = " . $weight . " WHERE id = " . $id ;

        return $sql;
    }

    public function showPatientsInfo($patientsIdArray, $units = "Eu")
    {

        if (!empty($patientsIdArray)) {
            $query = new Db();
        }

        if ($units == "Us") {
            foreach ($patientsIdArray as $patientId) {
                $sql = "SELECT * FROM patients WHERE id = $patientId";
                $result = $query->selectAndConvert($sql);
            }
        } else
        foreach ($patientsIdArray as $patientId) {
            $sql = "SELECT * FROM patients WHERE id = $patientId";
            $result = $query->select($sql);
        }

    }

    public function showPatientsDiseases($patientId)
    {
        $sql = "SELECT DISTINCT type FROM disease WHERE patientId = $patientId" ;

        return $sql;
    }

}
