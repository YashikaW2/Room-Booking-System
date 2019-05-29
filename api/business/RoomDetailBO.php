<?php

require_once __DIR__ . "/../core/RoomDetail.php";

interface RoomDetailBO
{
    public function addRoomDetail(RoomDetail $dto): bool;

    public function deleteRoomDetail($roomDetailID): bool;

    public function searchRoomDetail($roomDetailID): array;

    public function updateRoomDetail(RoomDetail $dto): bool;

    public function getAllRoomDetail(): array;

}