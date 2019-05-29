<?php

require_once __DIR__."/../core/Register.php";

interface RegisterBO
{
    public function addRegister(Register $dto):bool;
    public function deleteRegister($suID):bool;
    public function searchRegister($suID):Register;
    public function updateRegister(Gest $dto):bool;
    public function getAllRegister():array;
}