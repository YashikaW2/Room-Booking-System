<?php

require_once __DIR__.'/../RoomDetailRepo.php';
require_once __DIR__.'/../../db/DBConnection.php';
require_once __DIR__.'/../../core/RoomDetail.php';

class RoomDetailRepoImpl implements  RoomDetailRepo
{

    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addRoomDetail(RoomDetail $dto): bool
    {
        $result=  $this->connection->query(
            "INSERT INTO room_detail values(
                    '{$dto->getRid()}',
                    ' {$dto->getReid()}')"

        );
        if ($result){
            echo "Room Details Added Successfully";
        }else{
            echo "Room Details Added Faild",
            "<br>",
            mysqli_error($this->connection);
        }
        return $result>0;
    }

    public function deleteRoomDetail($roomDetailID): bool
    {
        // TODO: Implement deleteRoomDetail() method.
    }

    public function searchRoomDetail($roomDetailID): RoomDetail
    {
        // TODO: Implement searchRoomDetail() method.
    }

    public function updateRoomDetail(RoomDetail $dto): bool
    {
        // TODO: Implement updateRoomDetail() method.
    }

    public function getAllRoomDetail(): array
    {
        $resultset=$this->connection->query("SELECT * FROM  room_detail");
        return $resultset->fetch_all();
    }
}