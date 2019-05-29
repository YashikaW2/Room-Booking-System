<?php

require_once __DIR__ . '/../business/impl/ClientCommentBOImpl.php';
require_once __DIR__ . '/../core/ClientComment.php';

$clientCommentBO = new ClientCommentBOImpl() ;

//$operation=$_GET["operation"];

$mothod = $_SERVER["REQUEST_METHOD"];

switch ($mothod) {
    case "POST":
        $clientCommentName = $_POST['cc_name'];
        $clientCommentEmail = $_POST['cc_email'];
        $clientCommentSubject = $_POST['cc_subject'];
        $clientCommentComment = $_POST['cc_comment'];
        $tempClientComment = new ClientComment($clientCommentName, $clientCommentEmail,$clientCommentSubject,$clientCommentComment);
        $resp = $clientCommentBO->addComment($tempClientComment);
        echo $resp;
        break;

}