<?php

require_once __DIR__."/../core/Services.php";

interface ServiceRepo
{
    public function setConnection(mysqli $connection);
    public function addService(Services $dto):bool;
    public function deleteService($serID):bool;
    public function searchService($serID):Services;
    public function updateService(Services $dto):bool;
    public function getAllService():array;
}