<?php

require_once __DIR__.'/../GestRepo.php';
require_once __DIR__.'/../../db/DBConnection.php';
require_once __DIR__.'/../../core/Gest.php';

class GestRepoImpl implements GestRepo
{

    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addGest(Gest $dto): bool
    {
        $result=  $this->connection->query(
            "INSERT INTO customer values(
                    '0',
                    ' {$dto->getRName()}',
                    '{$dto->getREmail()}',
                    '{$dto->getRAddress()}',
                    '{$dto->getRCountry()}',
                    ' {$dto->getRPassportID()}',
                    '{$dto->getRNIC()}',
                    '{$dto->getRTell()}'
                    )"
        );
        if ($result){
            echo "Your Registration Successfully";
        }else{
            echo "Your Registration Faild",
            "<br>",
            mysqli_error($this->connection);
        }
        return $result>0;
    }

    public function deleteGest($suID): bool
    {
        // TODO: Implement deleteGest() method.
    }

    public function searchGest($suID): Gest
    {
        // TODO: Implement searchGest() method.
    }

    public function updateGest(Gest $dto): bool
    {
        // TODO: Implement updateGest() method.
    }

    public function getAllGest(): array
    {
        $resultset=$this->connection->query("SELECT * FROM customer");
        return $resultset->fetch_all();
    }
}