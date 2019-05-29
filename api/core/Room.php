<?php

class Room
{
    private $rid;
    private $room_type;
    private $room_floor;
    private $bed_type;
    private $room_decription;
    private $room_number;
    private $prices;

    /**
     * Room constructor.
     * @param $rid
     * @param $room_type
     * @param $room_floor
     * @param $bed_type
     * @param $room_decription
     * @param $room_number
     * @param $prices
     */
    public function __construct($rid, $room_type, $room_floor, $bed_type, $room_decription, $room_number, $prices)
    {
        $this->rid = $rid;
        $this->room_type = $room_type;
        $this->room_floor = $room_floor;
        $this->bed_type = $bed_type;
        $this->room_decription = $room_decription;
        $this->room_number = $room_number;
        $this->prices = $prices;
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
    public function getRoomType()
    {
        return $this->room_type;
    }

    /**
     * @param mixed $room_type
     */
    public function setRoomType($room_type): void
    {
        $this->room_type = $room_type;
    }

    /**
     * @return mixed
     */
    public function getRoomFloor()
    {
        return $this->room_floor;
    }

    /**
     * @param mixed $room_floor
     */
    public function setRoomFloor($room_floor): void
    {
        $this->room_floor = $room_floor;
    }

    /**
     * @return mixed
     */
    public function getBedType()
    {
        return $this->bed_type;
    }

    /**
     * @param mixed $bed_type
     */
    public function setBedType($bed_type): void
    {
        $this->bed_type = $bed_type;
    }

    /**
     * @return mixed
     */
    public function getRoomDecription()
    {
        return $this->room_decription;
    }

    /**
     * @param mixed $room_decription
     */
    public function setRoomDecription($room_decription): void
    {
        $this->room_decription = $room_decription;
    }

    /**
     * @return mixed
     */
    public function getRoomNumber()
    {
        return $this->room_number;
    }

    /**
     * @param mixed $room_number
     */
    public function setRoomNumber($room_number): void
    {
        $this->room_number = $room_number;
    }

    /**
     * @return mixed
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @param mixed $prices
     */
    public function setPrices($prices): void
    {
        $this->prices = $prices;
    }




}