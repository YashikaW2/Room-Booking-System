<?php
require_once __DIR__ . '/../business/impl/SystemUserBOImpl.php';
require_once __DIR__ . '/../core/SystemUser.php';

$systemUserBO = new SystemUserBOImpl() ;

//$operation=$_GET["operation"];

$mothod = $_SERVER["REQUEST_METHOD"];

switch ($mothod) {
    case "GET":
        echo  json_encode($systemUserBO->getAllSystemUser());
        break;
    case "POST":
        $systemUserID = $_POST['su_id'];
        $systemUserLevel = $_POST['su_level'];
        $systemUserName = $_POST['su_name'];
        $systemUserPassword = $_POST['su_password'];
        $systemUserConfirmPassword = $_POST['su_ConPassword'];
        $tempSystemUser = new SystemUser($systemUserID, $systemUserLevel, $systemUserName,$systemUserPassword);
        $resp = $systemUserBO->addSystemUser($tempSystemUser);
        echo $resp;
        break;

}
