<?php


class DBConnection
{
    private $host = "localhost";
    private $userName = "root";
    private $password = "19960913";
    private $database = "HotelManagementSystem";
    private $port = "3306";

    private $connection;

    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->userName, $this->password, $this->database, $this->port);
        if ($this->connection->connect_errno){
            echo $this->connection->connect_error;
            die();
        }
    }

    public function getConnection()
    {
        return $this->connection;
    }


}