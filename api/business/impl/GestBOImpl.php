<?php

require_once __DIR__ . '/../GestBO.php';
require_once __DIR__ . '/../../core/Gest.php';
require_once __DIR__ . '/../../db/DBConnection.php';
require_once __DIR__ . '/../../repo/impl/GestRepoImpl.php';

class GestBOImpl implements GestBO
{

    public function addGest(Gest $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
        $gestRepo = new GestRepoImpl();
        $gestRepo->setConnection($connection);
        $connection->autocommit(false);

        $connection->commit();
        $connection->rollback();
        $connection->autocommit(true);
        return $gestRepo->addGest($dto);
        return true;
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
        $connection = (new DBConnection())->getConnection();
        $gestRepo = new GestRepoImpl() ;
        $gestRepo->setConnection($connection);
        return $gestRepo->getAllGest();
    }
}