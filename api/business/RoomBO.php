<?php

require_once __DIR__."/../core/Room.php";

interface RoomBO
{
    public function addRoom(Room $dto):bool;
    public function deleteRoome($roomID):bool;
    public function searchRoom($roomID):Room;
    public function updateRoom(Room $dto):bool;
    public function getAllRoom():array;

}