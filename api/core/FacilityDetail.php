<?php

class FacilityDetail
{
    private $fid;
    private $reid;

    /**
     * FacilityDetail constructor.
     * @param $fid
     * @param $reid
     */
    public function __construct($fid, $reid)
    {
        $this->fid = $fid;
        $this->reid = $reid;
    }

    /**
     * @return mixed
     */
    public function getFid()
    {
        return $this->fid;
    }

    /**
     * @param mixed $fid
     */
    public function setFid($fid): void
    {
        $this->fid = $fid;
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