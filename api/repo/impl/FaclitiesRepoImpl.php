<?php

require_once __DIR__.'/../FaclitiesRepo.php';
require_once __DIR__.'/../../db/DBConnection.php';
require_once __DIR__.'/../../core/Faclities.php';

class FaclitiesRepoImpl implements FaclitiesRepo
{

    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addFacility(Faclities $dto): bool
    {
        $result=  $this->connection->query(
            "INSERT INTO facility values(
                    '{$dto->getFid()}',
                    ' {$dto->getFaclityname()}',
                    '{$dto->getPrice()}')"
        );
        if ($result){
            echo "Facilities Added Successfully";
        }else{
            echo "Facilities to Added Faild",
            "<br>",
            mysqli_error($this->connection);
        }
        return $result>0;
    }

    public function deleteFacility($facID): bool
    {
        // TODO: Implement deleteFacility() method.
    }

    public function searchFacility($facID): Faclities
    {
        // TODO: Implement searchFacility() method.
    }

    public function updateFacility(Faclities $dto): bool
    {
        // TODO: Implement updateFacility() method.
    }

    public function getAllFacilitys(): array
    {
        $resultset=$this->connection->query("SELECT * FROM facility");
        return $resultset->fetch_all();
    }
}