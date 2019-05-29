<?php

require_once __DIR__ . '/../ClientCommentBO.php';
require_once __DIR__ . '/../../core/ClientComment.php';
require_once __DIR__ . '/../../db/DBConnection.php';
require_once __DIR__ . '/../../repo/impl/ClientCommentRepoImpl.php';


class ClientCommentBOImpl implements ClientCommentBO
{


    public function addComment(ClientComment $dto): bool
    {
        $connection = (new DBConnection())->getConnection();
        $clientCommentRepo = new ClientCommentRepoImpl();
        $clientCommentRepo->setConnection($connection);
        $connection->autocommit(false);

        $connection->commit();
        $connection->rollback();
        $connection->autocommit(true);
        return $clientCommentRepo->addComment($dto);
        return true;
    }

    public function deleteComment($ccID): bool
    {
        // TODO: Implement deleteComment() method.
    }

    public function searchComment($ccID): ClientComment
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