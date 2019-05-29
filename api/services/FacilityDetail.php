<?php
require_once __DIR__ . '/../business/impl/FacilityDetailBOImpl.php';
require_once __DIR__ . '/../core/FacilityDetail.php';

$facilityDetailBO = new FacilityDetailBOImpl();

//$operation=$_GET["operation"];

$mothod = $_SERVER["REQUEST_METHOD"];

switch ($mothod) {
    case "GET":
        echo json_encode($facilityDetailBO->getAllFacilityDetail());
        break;
    case "POST":
        $facilityDetailID = $_POST['f_id'];
        $facilityDetailID = $_POST['fr_id'];
        // $facilityPrice = $_POST['f_price'];
        $tempFaclitiyDetail = new Faclities($facilityDetailID, $facilityDetailID);
        $resp = $facilityDetailBO->addFacilityDetail($tempFaclitiyDetail);
        echo $resp;
        break;
}
