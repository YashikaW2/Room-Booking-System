<?php

require_once __DIR__.'/../ClientCommentRepo.php';
require_once __DIR__.'/../../db/DBConnection.php';
require_once __DIR__.'/../../core/ClientComment.php';


class ClientCommentRepoImpl implements ClientCommentRepo
{

    private $connection;


    public function setConnection(mysqli $connection)
    {
        $this->connection = $connection;
    }

    public function addComment(ClientComment $dto): bool
    {
        $result=  $this->connection->query(
            "INSERT INTO comment values('0',
                    '{$dto->getName()}',
                    ' {$dto->getEmail()}',
                    '{$dto->getSubject()}',
                     '{$dto->getComment()}')"
        );
        if ($result){
            echo "Comments Added Successfully";
        }else{
            echo "Comments to Added Faild",
            "<br>",
            mysqli_error($this->connection);
        }
        return $result>0;
    }

    public function deleteComment($facID): bool
    {
        // TODO: Implement deleteComment() method.
    }

    public function searchComment($facID): ClientComment
    {
        // TODO: Implement searchComment() method.
    }

    public function updateComment(ClientComment $dto): bool
    {
        // TODO: Implement updateComment() method.
    }

    public function getAllComment(): array
    {
        // TODO: Implement getAllComment() method.
    }
}