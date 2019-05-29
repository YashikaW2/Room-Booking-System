<?php


require_once __DIR__ . '/../business/impl/GestBOImpl.php';
require_once __DIR__ . '/../core/Gest.php';

$gestBO = new GestBOImpl() ;

//$operation=$_GET["operation"];

$mothod = $_SERVER["REQUEST_METHOD"];
switch ($mothod) {
    case "GET":
        echo  json_encode($gestBO->getAllGest());
        break;
    case "POST":
        $r_name = $_POST['r_name'];
        $r_Email = $_POST['r_Email'];
        $r_Address = $_POST['r_Address'];
        $r_Country = $_POST['r_Country'];
        $r_PassportID = $_POST['r_PassportID'];
        $r_NIC = $_POST['r_NIC'];
        $r_Tell = $_POST['r_Tell'];
        $tempGest = new Gest(
            $r_name, $r_Email, $r_Address,$r_Country,$r_PassportID,$r_NIC,$r_Tell
        );
//        $resp=$gestBO->searchGest($tempGest);
        $resp = $gestBO->addGest($tempGest);
        echo $resp;
        break;
}
