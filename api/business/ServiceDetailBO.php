<?php

require_once __DIR__."/../core/ServiceDetail.php";

interface ServiceDetailBO
{
    public function addServiceDetail(ServiceDetail $dto):bool;
    public function deleteServiceDetail($sdID):bool;
    public function searchServiceDetail($sdID):ServiceDetail;
    public function updateServiceDetail(ServiceDetail $dto):bool;
    public function getAllServiceDetail():array;

}