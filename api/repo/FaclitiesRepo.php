<?php

require_once __DIR__."/../core/Faclities.php";
//require_once __DIR__."http://localhost/WEBPROJECT/RoomBooking%20System/api/core/Faclities.php";

interface FaclitiesRepo
{
    public function setConnection(mysqli $connection);
    public function addFacility(Faclities $dto):bool;
    public function deleteFacility($facID):bool;
    public function searchFacility($facID):Faclities;
    public function updateFacility(Faclities $dto):bool;
    public function getAllFacilitys():array;
}