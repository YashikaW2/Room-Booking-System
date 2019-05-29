<?php

class RoomDetail
{
    private $rid;
    private $reid;

    /**
     * RoomDetail constructor.
     * @param $rid
     * @param $reid
     */
    public function __construct($rid, $reid)
    {
        $this->rid = $rid;
        $this->reid = $reid;
    }

    /**
     * @return mixed
     */
    public function getRid()
    {
        return $this->rid;
    }

    /**
     * @param mixed $rid
     */
    public function setRid($rid): void
    {
        $this->rid = $rid;
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