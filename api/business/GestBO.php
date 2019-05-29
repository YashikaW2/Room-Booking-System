<?php

require_once __DIR__."/../core/Gest.php";

interface GestBO
{
    public function addGest(Gest $dto):bool;
    public function deleteGest($suID):bool;
    public function searchGest($suID):Gest;
    public function updateGest(Gest $dto):bool;
    public function getAllGest():array;
}