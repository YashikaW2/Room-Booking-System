<?php

class Services{
    private $sid;
    private $servicename;
    private $price;

    /**
     * Services constructor.
     * @param $sid
     * @param $servicename
     * @param $price
     */
    public function __construct($sid, $servicename, $price)
    {
        $this->sid = $sid;
        $this->servicename = $servicename;
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * @param mixed $sid
     */
    public function setSid($sid): void
    {
        $this->sid = $sid;
    }

    /**
     * @return mixed
     */
    public function getServicename()
    {
        return $this->servicename;
    }

    /**
     * @param mixed $servicename
     */
    public function setServicename($servicename): void
    {
        $this->servicename = $servicename;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }



}