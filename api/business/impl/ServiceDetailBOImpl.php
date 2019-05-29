<?php

require_once __DIR__ . '/../ServiceDetailBO.php';
require_once __DIR__ . '/../../core/ServiceDetail.php';
require_once __DIR__ . '/../../db/DBConnection.php';
require_once __DIR__ . '/../../repo/impl/SerfviceDetailRepoImpl.php';

class ServiceDetailBOImpl implements ServiceDetailBO
{

    public function addServiceDetail(ServiceDetail $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
        $serviceDetailRepo = new SerfviceDetailRepoImpl();
        $serviceDetailRepo->setConnection($connection);
        $connection->autocommit(false);

        $connection->commit();
        $connection->rollback();
        $connection->autocommit(true);
        return $serviceDetailRepo->addServiceDetail($dto);
        return true;
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
        $connection = (new DBConnection())->getConnection();
        $serviceDetailRepo = new SerfviceDetailRepoImpl();
        $serviceDetailRepo->setConnection($connection);
        return $serviceDetailRepo->getAllServiceDetail();
    }
}