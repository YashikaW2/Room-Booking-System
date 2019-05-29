<?php


require_once __DIR__ . '/../FaclitiesBO.php';
require_once __DIR__ . '/../../core/Faclities.php';
require_once __DIR__ . '/../../db/DBConnection.php';
require_once __DIR__ . '/../../repo/impl/FaclitiesRepoImpl.php';

class FaclitiesBOImpl implements FaclitiesBO
{
    public function addFacility(Faclities $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
        $faclitieRepo = new FaclitiesRepoImpl();
        $faclitieRepo->setConnection($connection);
        $connection->autocommit(false);

        $connection->commit();
        $connection->rollback();
        $connection->autocommit(true);
        return $faclitieRepo->addFacility($dto);
        return true;
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
        $connection = (new DBConnection())->getConnection();
        $faclitieRepo = new FaclitiesRepoImpl();
        $faclitieRepo->setConnection($connection);
        return $faclitieRepo->getAllFacilitys();
    }
}