<?php

class ServiceDetail
{
    private $sid;
    private $reid;

    /**
     * ServiceDetail constructor.
     * @param $sid
     * @param $reid
     */
    public function __construct($sid, $reid)
    {
        $this->sid = $sid;
        $this->reid = $reid;
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
    public function getReid()
    {
        return $this->reid;
    }

    /**
     * @param mixed $reid
     */
    public function setReid($reid): void
    {
        $this->reid = $reid;
    }




}