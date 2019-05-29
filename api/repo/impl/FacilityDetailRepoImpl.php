<?php

require_once __DIR__.'/../FacilityDetailRepo.php';
require_once __DIR__.'/../../db/DBConnection.php';
require_once __DIR__.'/../../core/FacilityDetail.php';


class FacilityDetailRepoImpl implements  FacilityDetailRepo
{

    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addFacilityDetail(FacilityDetail $dto): bool
    {
        $result=  $this->connection->query(
            "INSERT INTO facility_detail values(
                    '{$dto->getFid()}',
                    ' {$dto->getReid()}')"

        );
        if ($result){
            echo "Facilitiy Details Added Successfully";
        }else{
            echo "Facilitiy Details to Added Faild",
            "<br>",
            mysqli_error($this->connection);
        }
        return $result>0;
    }

    public function deleteFacilityDetail($facID): bool
    {
        // TODO: Implement deleteFacilityDetail() method.
    }

    public function searchFacilityDetail($facID): FacilityDetail
    {
        // TODO: Implement searchFacilityDetail() method.
    }

    public function updateFacilityDetail(FacilityDetail $dto): bool
    {
        // TODO: Implement updateFacilityDetail() method.
    }

    public function getAllFacilityDetail(): array
    {
        $resultset=$this->connection->query("SELECT * FROM facility_detail");
        return $resultset->fetch_all();
    }
}