<?php

require_once __DIR__ . '/../business/impl/RegisterBOImpl.php';
require_once __DIR__ . '/../core/Register.php';

$regisBO = new RegisterBOImpl() ;

//$operation=$_GET["operation"];

$mothod = $_SERVER["REQUEST_METHOD"];

switch ($mothod) {
    case "GET":
        echo  json_encode($regisBO->getAllRegister());
        break;
    case "POST":
        $cheakIn = $_POST['cheakIn'];
        $cheakOut = $_POST['cheakOut'];
        $adults = $_POST['adults'];
        $childern = $_POST['childern'];
        $rooms = $_POST['rooms'];
        $userName = $_POST['userName'];
        $roomsID = $_POST['roomsID'];

        $tempRegister = new Register(
            $userName,$cheakIn,$cheakOut,$rooms,$adults,$childern,$roomsID
        );
        $resp = $regisBO->addRegister($tempRegister);
        echo $resp;
    break;

}
