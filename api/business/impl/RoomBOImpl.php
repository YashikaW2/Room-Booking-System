<?php

require_once __DIR__ . '/../RoomBO.php';
require_once __DIR__ . '/../../core/Room.php';
require_once __DIR__ . '/../../db/DBConnection.php';
require_once __DIR__ . '/../../repo/impl/RoomRepoImpl.php';

class RoomBOImpl implements RoomBO
{


    public function addRoom(Room $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
        $roomRepo = new RoomRepoImpl();
        $roomRepo->setConnection($connection);
        $connection->autocommit(false);

        $connection->commit();
        $connection->rollback();
        $connection->autocommit(true);
        return $roomRepo->addRoom($dto);
        return true;

    }

    public function deleteRoome($roomID): bool
    {
        // TODO: Implement deleteRoome() method.
    }

    public function searchRoom($roomID): Room
    {
        // TODO: Implement searchRoom() method.
    }

    public function updateRoom(Room $dto): bool
    {
        // TODO: Implement updateRoom() method.
    }

    public function getAllRoom(): array
    {
        $connection = (new DBConnection())->getConnection();
        $roomRepo = new RoomRepoImpl();
        $roomRepo->setConnection($connection);
        return $roomRepo->getAllRoom();
    }
}