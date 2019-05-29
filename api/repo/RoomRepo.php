<?php

require_once __DIR__ . "/../core/Room.php";

interface RoomRepo
{
    public function setConnection(mysqli $connection);

    public function addRoom(Room $dto): bool;

    public function deleteRoom($roomID): bool;

    public function searchRoom($roomID): Room;

    public function updateRoom(Room $dto): bool;

    public function getAllRoom(): array;
}