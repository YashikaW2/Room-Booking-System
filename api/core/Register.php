<?php

class Register
{
    private $cid;
    private $cheakIn;
    private $cheakOut;
    private $noOfRooms;
    private $noOfAdults;
    private $noOfChildern;
    private $roomID;

    /**
     * Register constructor.
     * @param $cid
     * @param $cheakIn
     * @param $cheakOut
     * @param $noOfRooms
     * @param $noOfAdults
     * @param $noOfChildern
     * @param $roomID
     */
    public function __construct($cid, $cheakIn, $cheakOut, $noOfRooms, $noOfAdults, $noOfChildern, $roomID)
    {
        $this->cid = $cid;
        $this->cheakIn = $cheakIn;
        $this->cheakOut = $cheakOut;
        $this->noOfRooms = $noOfRooms;
        $this->noOfAdults = $noOfAdults;
        $this->noOfChildern = $noOfChildern;
        $this->roomID = $roomID;
    }

    /**
     * @return mixed
     */
    public function getRoomID()
    {
        return $this->roomID;
    }

    /**
     * @param mixed $roomID
     */
    public function setRoomID($roomID): void
    {
        $this->roomID = $roomID;
    }


    /**
     * @return mixed
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param mixed $cid
     */
    public function setCid($cid): void
    {
        $this->cid = $cid;
    }

    /**
     * @return mixed
     */
    public function getCheakIn()
    {
        return $this->cheakIn;
    }

    /**
     * @param mixed $cheakIn
     */
    public function setCheakIn($cheakIn): void
    {
        $this->cheakIn = $cheakIn;
    }

    /**
     * @return mixed
     */
    public function getCheakOut()
    {
        return $this->cheakOut;
    }

    /**
     * @param mixed $cheakOut
     */
    public function setCheakOut($cheakOut): void
    {
        $this->cheakOut = $cheakOut;
    }

    /**
     * @return mixed
     */
    public function getNoOfRooms()
    {
        return $this->noOfRooms;
    }

    /**
     * @param mixed $noOfRooms
     */
    public function setNoOfRooms($noOfRooms): void
    {
        $this->noOfRooms = $noOfRooms;
    }

    /**
     * @return mixed
     */
    public function getNoOfAdults()
    {
        return $this->noOfAdults;
    }

    /**
     * @param mixed $noOfAdults
     */
    public function setNoOfAdults($noOfAdults): void
    {
        $this->noOfAdults = $noOfAdults;
    }

    /**
     * @return mixed
     */
    public function getNoOfChildern()
    {
        return $this->noOfChildern;
    }

    /**
     * @param mixed $noOfChildern
     */
    public function setNoOfChildern($noOfChildern): void
    {
        $this->noOfChildern = $noOfChildern;
    }



}