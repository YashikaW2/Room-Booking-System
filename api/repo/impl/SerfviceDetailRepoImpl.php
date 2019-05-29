<?php

require_once __DIR__.'/../ServiceDetailRepo.php';
require_once __DIR__.'/../../db/DBConnection.php';
require_once __DIR__.'/../../core/ServiceDetail.php';

class SerfviceDetailRepoImpl implements ServiceDetailRepo
{

    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addServiceDetail(ServiceDetail $dto): bool
    {
        $result=  $this->connection->query(
            "INSERT INTO service_detail values(
                    '{$dto->getSid()}',
                    ' {$dto->getReid()}')"

        );
        if ($result){
            echo "Service Details Added Successfully";
        }else{
            echo "Service Details Added Faild",
            "<br>",
            mysqli_error($this->connection);
        }
        return $result>0;
    }

    public function deleteServiceDetail($sdID): bool
    {
        // TODO: Implement deleteServiceDetail() method.
    }

    public function searchServiceDetail($sdID): ServiceDetail
    {
        // TODO: Implement searchServiceDetail() method.
    }

    public function updateServiceDetail(ServiceDetail $dto): bool
    {
        // TODO: Implement updateServiceDetail() method.
    }

    public function getAllServiceDetail(): array
    {
        $resultset=$this->connection->query("SELECT * FROM  service_detail");
        return $resultset->fetch_all();
    }
}