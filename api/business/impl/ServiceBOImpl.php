<?php

require_once __DIR__ . '/../ServiceBO.php';
require_once __DIR__ . '/../../core/Services.php';
require_once __DIR__ . '/../../db/DBConnection.php';
require_once __DIR__ . '/../../repo/impl/ServiceRepolmpl.php';

class ServiceBOImpl implements ServiceBO
{

    public function addService(Services $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
        $serviceRepo = new ServiceRepolmpl();
        $serviceRepo->setConnection($connection);
        $connection->autocommit(false);

        $connection->commit();
        $connection->rollback();
        $connection->autocommit(true);
        return $serviceRepo->addService($dto);
        return true;

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
        $connection = (new DBConnection())->getConnection();
        $serviceRepo = new ServiceRepolmpl();
        $serviceRepo->setConnection($connection);
        return $serviceRepo->getAllService();
    }
}