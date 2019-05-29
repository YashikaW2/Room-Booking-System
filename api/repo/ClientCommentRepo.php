<?php

require_once __DIR__."/../core/ClientComment.php";

interface ClientCommentRepo
{

    public function setConnection(mysqli $connection);
    public function addComment(ClientComment $dto):bool;
    public function deleteComment($ccID):bool;
    public function searchComment($ccID):ClientComment;
    public function updateComment(ClientComment $dto):bool;
    public function getAllComment():array;

}