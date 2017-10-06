<?php

require_once 'Patient.php';
require_once 'Db.php';
require_once 'Disease.php';

$patient = new Patient('Adam Nowak', 112, 111);
// connect to db
$query = new Db();
// execute query parsed by Patient method
//$result = $query->query($patient->savePatientToDB());
// set or update height
//$result = $query->query($patient->setHeight(2, 150));
// set or update weight
//$result = $query->query($patient->setWeight(1,50));
//$disease = new Disease('cancer', 1, '2017-01-10', 'chemotherapy');
// add patient's disease in diseases table
//$result = $query->query($disease->saveDiseaseToDB());
//search patients info
//$patientsIdArray = [1,3,60];
//$result = $query->select($patient->showPatientsInfo($patientsIdArray));
// search patient and his diseases
//$result = $query->select($patient->showPatientsDiseases(1));