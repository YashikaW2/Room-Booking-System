<?php

class Faclities
{
    private $fid;
    private $faclityname;
    private $price;

    /**
     * Faclities constructor.
     * @param $fid
     * @param $faclityname
     * @param $price
     */
    public function __construct($fid, $faclityname, $price)
    {
        $this->fid = $fid;
        $this->faclityname = $faclityname;
        $this->price = $price;
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
    public function getFaclityname()
    {
        return $this->faclityname;
    }

    /**
     * @param mixed $faclityname
     */
    public function setFaclityname($faclityname): void
    {
        $this->faclityname = $faclityname;
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