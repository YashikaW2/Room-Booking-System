<?php

require_once __DIR__.'/../ServiceRepo.php';
require_once __DIR__.'/../../db/DBConnection.php';
require_once __DIR__.'/../../core/Services.php';

class ServiceRepolmpl implements ServiceRepo
{

    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addService(Services $dto): bool
    {
        $result=  $this->connection->query(
            "INSERT INTO  service values(
                    '{$dto->getSid()}',
                    ' {$dto->getServicename()}',
                    '{$dto->getPrice()}')"
        );
        if ($result){
            echo "Services Added Successfully";
        }else{
            echo "Services to Added Faild",
            "<br>",
            mysqli_error($this->connection);
        }
        return $result>0;
    }

    public function deleteService($serID): bool
    {
        // TODO: Implement deleteService() method.
    }

    public function searchService($serID): Services
    {
        // TODO: Implement searchService() method.
    }

    public function updateService(Services $dto): bool
    {
        // TODO: Implement updateService() method.
    }

    public function getAllService(): array
    {
        $resultset=$this->connection->query("SELECT * FROM service");
        return $resultset->fetch_all();
    }
}