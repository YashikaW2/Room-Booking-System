<?php

require_once __DIR__ . '/../SystemUserBO.php';
require_once __DIR__ . '/../../core/SystemUser.php';
require_once __DIR__ . '/../../db/DBConnection.php';
require_once __DIR__ . '/../../repo/impl/SystemUserRepoImpl.php';


class SystemUserBOImpl implements SystemUserBO
{


    public function addSystemUser(SystemUser $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
        $systemUserRepo = new SystemUserRepoImpl();
        $systemUserRepo->setConnection($connection);
        $connection->autocommit(false);

        $connection->commit();
        $connection->rollback();
        $connection->autocommit(true);
        return $systemUserRepo->addSystemUser($dto);
        return true;
    }

    public function deleteSystemUser($suID): bool
    {
        // TODO: Implement deleteSystemUser() method.
    }

    public function searchSystemUser($suID): SystemUser
    {
        // TODO: Implement searchSystemUser() method.
    }

    public function updateSystemUser(SystemUser $dto): bool
    {
        // TODO: Implement updateSystemUser() method.
    }

    public function getAllSystemUser(): array
    {
        $connection = (new DBConnection())->getConnection();
        $systemUserRepo = new SystemUserRepoImpl();
        $systemUserRepo->setConnection($connection);
        return $systemUserRepo->getAllSystemUser();
    }
}