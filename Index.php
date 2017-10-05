<?php

require_once 'Patient.php';
require_once 'Db.php';

$patient = new Patient('Adam Nowak', '1123', '090');
$query = $patient->saveUserToDB();
$db = new Db();
$result = $db->query($query);
