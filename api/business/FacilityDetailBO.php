<?php

require_once __DIR__."/../core/FacilityDetail.php";

interface FacilityDetailBO
{
    public function addFacilityDetail(facility_detail $dto):bool;
    public function deleteFacilityDetail($fdID):bool;
    public function searchFacilityDetail($fdID):facility_detail;
    public function updateFacilityDetail(facility_detail $dto):bool;
    public function getAllFacilityDetail():array;

}