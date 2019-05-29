<?php

require_once __DIR__.'/../RegisterRepo.php';
require_once __DIR__.'/../../db/DBConnection.php';
require_once __DIR__.'/../../core/Register.php';

class RegisterRepoImpl implements RegisterRepo
{

    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addRegister(Register $dto): bool
    {
        $result=  $this->connection->query(
            "INSERT INTO registration values(
                    '0',
                    ' {$dto->getCid()}',
                    '{$dto->getCheakIn()}',
                    '{$dto->getCheakOut()}',
                    '{$dto->getNoOfRooms()}',
                    ' {$dto->getNoOfAdults()}',
                    '{$dto->getNoOfChildern()}',
                    '{$dto->getRoomID()}'
                    )"
        );
        if ($result){
            echo "Your Booking Successfully";
        }else{
            echo "Your Booking Faild",
            "<br>",
            mysqli_error($this->connection);
        }
        return $result>0;

    }

    public function deleteRegister($suID): bool
    {
        // TODO: Implement deleteRegister() method.
    }

    public function searchRegister($suID): Register
    {
        // TODO: Implement searchRegister() method.
    }

    public function updateRegister(Gest $dto): bool
    {
        // TODO: Implement updateRegister() method.
    }

    public function getAllRegister(): array
    {
        $resultset=$this->connection->query("SELECT * FROM registration");
        return $resultset->fetch_all();
    }
}