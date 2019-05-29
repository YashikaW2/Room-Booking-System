<?php

require_once __DIR__."/../core/RoomDetail.php";

interface RoomDetailRepo
{
    public function setConnection(mysqli $connection);
    public function addRoomDetail(RoomDetail $dto):bool;
    public function deleteRoomDetail($roomDetailID):bool;
    public function searchRoomDetail($roomDetailID):RoomDetail;
    public function updateRoomDetail(RoomDetail $dto):bool;
    public function getAllRoomDetail():array;

}