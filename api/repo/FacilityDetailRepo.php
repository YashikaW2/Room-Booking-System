<?php

require_once __DIR__."/../core/FacilityDetail.php";

interface FacilityDetailRepo
{
    public function setConnection(mysqli $connection);
    public function addFacilityDetail(FacilityDetail $dto):bool;
    public function deleteFacilityDetail($facID):bool;
    public function searchFacilityDetail($facID):FacilityDetail;
    public function updateFacilityDetail(FacilityDetail $dto):bool;
    public function getAllFacilityDetail():array;

}