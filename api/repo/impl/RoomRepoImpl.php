<?php

require_once __DIR__.'/../RoomRepo.php';
require_once __DIR__.'/../../db/DBConnection.php';
require_once __DIR__.'/../../core/Room.php';

class RoomRepoImpl implements RoomRepo
{

    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addRoom(Room $dto): bool
    {
        $result=  $this->connection->query(
            "INSERT INTO room values(
                    '{$dto->getRid()}',
                    ' {$dto->getRoomType()}',
                    '{$dto->getRoomFloor()}',
                    '{$dto->getBedType()}',
                    '{$dto->getRoomDecription()}',
                    '{$dto->getRoomNumber()}',
                    '{$dto->getPrices()}')"
        );
        if ($result){
            echo "Room Added Successfully";
        }else{
            echo "Room to Added Faild",
            "<br>",
            mysqli_error($this->connection);
        }
        return $result>0;
    }

    public function deleteRoom($roomID): bool
    {
        // TODO: Implement deleteRoom() method.
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
        $resultset=$this->connection->query("SELECT * FROM  room");
        return $resultset->fetch_all();
    }
}