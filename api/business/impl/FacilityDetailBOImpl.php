<?php

require_once __DIR__ . '/../FacilityDetailBO.php';
require_once __DIR__ . '/../../core/FacilityDetail.php';
require_once __DIR__ . '/../../db/DBConnection.php';
require_once __DIR__ . '/../../repo/impl/FacilityDetailRepoImpl.php';

class FacilityDetailBOImpl implements  FacilityDetailBO
{


    public function addFacilityDetail(facility_detail $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
        $faclitieDetailRepo = new FacilityDetailRepoImpl();
        $faclitieDetailRepo->setConnection($connection);
        $connection->autocommit(false);

        $connection->commit();
        $connection->rollback();
        $connection->autocommit(true);
        return $faclitieDetailRepo->addFacilityDetail($dto);
        return true;
    }

    public function deleteFacilityDetail($fdID): bool
    {
        // TODO: Implement deleteFacilityDetail() method.
    }

    public function searchFacilityDetail($fdID): facility_detail
    {
        // TODO: Implement searchFacilityDetail() method.
    }

    public function updateFacilityDetail(facility_detail $dto): bool
    {
        // TODO: Implement updateFacilityDetail() method.
    }

    public function getAllFacilityDetail(): array
    {
        $connection = (new DBConnection())->getConnection();
        $faclitieDetailRepo = new FacilityDetailRepoImpl();
        $faclitieDetailRepo->setConnection($connection);
        return $faclitieDetailRepo->getAllFacilityDetail();
    }
}