<?php

require_once __DIR__ . '/../business/impl/FaclitiesBOImpl.php';
require_once __DIR__ . '/../core/Faclities.php';

$facilityBO = new FaclitiesBOImpl();

//$operation=$_GET["operation"];

$mothod = $_SERVER["REQUEST_METHOD"];

switch ($mothod) {
    case "GET":
        echo  json_encode($facilityBO->getAllFacilitys());
        break;
    case "POST":
        $facilityID = $_POST['f_id'];
        $facilityName = $_POST['f_name'];
        $facilityPrice = $_POST['f_price'];
        $tempFaclities = new Faclities($facilityID, $facilityName, $facilityPrice);
        $resp = $facilityBO->addFacility($tempFaclities);
        echo $resp;
        break;

}
