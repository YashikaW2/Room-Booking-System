<?php

require_once __DIR__ . '/../business/impl/RoomBOImpl.php';
require_once __DIR__ . '/../core/Room.php';

$roomBO = new RoomBOImpl() ;

//$operation=$_GET["operation"];

$mothod = $_SERVER["REQUEST_METHOD"];

switch ($mothod) {
    case "GET":
        echo  json_encode($roomBO->getAllRoom());
        break;
    case "POST":
        $roomID = $_POST['r_id'];
        $roomRoomType = $_POST['r_roomtype'];
        $roomRoomFloor = $_POST['r_roomfloor'];
        $roomBedType = $_POST['r_bedtype'];
        $roomRoomDescription = $_POST['r_roomdescription'];
        $roomRoomNumber = $_POST['r_roomnumber'];
        $price = $_POST['r_price'];
        $tempRoom = new Room(
            $roomID, $roomRoomType, $roomRoomFloor,$roomBedType,$roomRoomDescription,$roomRoomNumber,$price
        );
        $resp = $roomBO->addRoom($tempRoom);
        echo $resp;
        break;

}