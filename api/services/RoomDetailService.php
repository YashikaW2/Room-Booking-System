<?php

require_once __DIR__ . '/../business/impl/RoomDetailBOImpl.php';
require_once __DIR__ . '/../core/RoomDetail.php';

$roomDetailBO = new RoomDetailBOImpl();

//$operation=$_GET["operation"];

$mothod = $_SERVER["REQUEST_METHOD"];

switch ($mothod) {
    case "GET":
        echo  json_encode($roomBO->getAllRoom());
        break;
    case "POST":
        $roomID = $_POST['r_id'];
//        $roomID = $_POST['re_id'];

//        $tempRoomDetail = new Room(
//            $roomID, $roomID
//        );
//        $resp = $roomDetailBO->addRoomDetail($tempRoomDetail);
//        echo $resp;
        $resp = $roomDetailBO->searchRoomDetail($roomID);

        break;

}