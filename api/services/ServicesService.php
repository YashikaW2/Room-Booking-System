<?php

require_once __DIR__ . '/../business/impl/ServiceBOImpl.php';
require_once __DIR__ . '/../core/Services.php';

$serviceBO = new ServiceBOImpl() ;

//$operation=$_GET["operation"];

$mothod = $_SERVER["REQUEST_METHOD"];

switch ($mothod) {
    case "GET":
        echo  json_encode($serviceBO->getAllService());
        break;
    case "POST":
        $serviceID = $_POST['s_id'];
        $serviceName = $_POST['s_name'];
        $servicePrice = $_POST['s_price'];
        $tempService = new Services($serviceID, $serviceName, $servicePrice);
        $resp = $serviceBO->addService($tempService);
        echo $resp;
        break;

}
