<?php

require_once __DIR__.'/../SystemUserRepo.php';
require_once __DIR__.'/../../db/DBConnection.php';
require_once __DIR__.'/../../core/SystemUser.php';

class SystemUserRepoImpl implements SystemUserRepo
{

    private $connection;

    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addSystemUser(SystemUser $dto): bool
    {
        $result=  $this->connection->query(
            "INSERT INTO system_user values(
                    '{$dto->getSuid()}',
                    ' {$dto->getUserLevel()}',
                    '{$dto->getUserName()}',
                    '{$dto->getPassword()}'
                    )"
        );
        if ($result){
            echo "System User Added Successfully";
        }else{
            echo "System User to Added Faild",
            "<br>",
            mysqli_error($this->connection);
        }
        return $result>0;
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
        $resultset=$this->connection->query("SELECT * FROM system_user");
        return $resultset->fetch_all();
    }
}