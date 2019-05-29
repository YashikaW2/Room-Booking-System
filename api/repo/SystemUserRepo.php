<?php

require_once __DIR__."/../core/SystemUser.php";

interface SystemUserRepo
{
    public function setConnection(mysqli $connection);
    public function addSystemUser(SystemUser $dto):bool;
    public function deleteSystemUser($suID):bool;
    public function searchSystemUser($suID):SystemUser;
    public function updateSystemUser(SystemUser $dto):bool;
    public function getAllSystemUser():array;

}