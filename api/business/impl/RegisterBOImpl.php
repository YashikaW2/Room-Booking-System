<?php

require_once __DIR__ . '/../RegisterBO.php';
require_once __DIR__ . '/../../core/Register.php';
require_once __DIR__ . '/../../db/DBConnection.php';
require_once __DIR__ . '/../../repo/impl/RegisterRepoImpl.php';

class RegisterBOImpl implements RegisterBO
{

    public function addRegister(Register $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
        $registerRepo = new RegisterRepoImpl();
        $registerRepo->setConnection($connection);
        $connection->autocommit(false);

        $connection->commit();
        $connection->rollback();
        $connection->autocommit(true);
        return $registerRepo->addRegister($dto);
        return true;
    }

    public function deleteRegister($suID): bool
    {
        // TODO: Implement deleteRegister() method.
    }

    public function searchRegister($suID): Register
    {
        // TODO: Implement searchRegister() method.
    }

    public function updateRegister(Gest $dto): bool
    {
        // TODO: Implement updateRegister() method.
    }

    public function getAllRegister(): array
    {
        $connection = (new DBConnection())->getConnection();
        $registerRepo = new RegisterRepoImpl() ;
        $registerRepo->setConnection($connection);
        return $registerRepo->getAllRegister();
    }
}