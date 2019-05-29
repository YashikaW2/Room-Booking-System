<?php

require_once __DIR__ . '/../RoomDetailBO.php';
require_once __DIR__ . '/../../core/RoomDetail.php';
require_once __DIR__ . '/../../db/DBConnection.php';
require_once __DIR__ . '/../../repo/impl/RoomDetailRepoImpl.php';

class RoomDetailBOImpl implements RoomDetailBO
{

    public function addRoomDetail(RoomDetail $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
        $roomDetailRepo = new RoomDetailRepoImpl();
        $roomDetailRepo->setConnection($connection);
        $connection->autocommit(false);

        $connection->commit();
        $connection->rollback();
        $connection->autocommit(true);
        return $roomDetailRepo->addRoomDetail($dto);
        return true;
    }

    public function deleteRoomDetail($roomDetailID): bool
    {
        // TODO: Implement deleteRoomDetail() method.
    }

    public function searchRoomDetail($roomDetailID):  array
    {
        $connection = (new DBConnection())->getConnection();
        $roomDetailRepo = new RoomDetailRepoImpl();
        $roomDetailRepo->setConnection($connection);
        return $roomDetailRepo->searchRoomDetail($roomDetailID);

    }

    public function updateRoomDetail(RoomDetail $dto): bool
    {
        // TODO: Implement updateRoomDetail() method.
    }

    public function getAllRoomDetail(): array
    {
        $connection = (new DBConnection())->getConnection();
        $roomDetailRepo = new RoomDetailRepoImpl();
        $roomDetailRepo->setConnection($connection);
        return $roomDetailRepo->getAllRoomDetail();
    }
}