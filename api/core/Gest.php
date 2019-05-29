<?php

class Gest
{

    private $r_name;
    private $r_Email;
    private $r_Address;
    private $r_Country;
    private $r_PassportID;
    private $r_NIC;
    private $r_Tell;

    /**
     * Gest constructor.
     * @param $r_name
     * @param $r_Email
     * @param $r_Address
     * @param $r_Country
     * @param $r_PassportID
     * @param $r_NIC
     * @param $r_Tell
     */
    public function __construct($r_name, $r_Email, $r_Address, $r_Country, $r_PassportID, $r_NIC, $r_Tell)
    {
        $this->r_name = $r_name;
        $this->r_Email = $r_Email;
        $this->r_Address = $r_Address;
        $this->r_Country = $r_Country;
        $this->r_PassportID = $r_PassportID;
        $this->r_NIC = $r_NIC;
        $this->r_Tell = $r_Tell;
    }

    /**
     * @return mixed
     */
    public function getRName()
    {
        return $this->r_name;
    }

    /**
     * @param mixed $r_name
     */
    public function setRName($r_name): void
    {
        $this->r_name = $r_name;
    }

    /**
     * @return mixed
     */
    public function getREmail()
    {
        return $this->r_Email;
    }

    /**
     * @param mixed $r_Email
     */
    public function setREmail($r_Email): void
    {
        $this->r_Email = $r_Email;
    }

    /**
     * @return mixed
     */
    public function getRAddress()
    {
        return $this->r_Address;
    }

    /**
     * @param mixed $r_Address
     */
    public function setRAddress($r_Address): void
    {
        $this->r_Address = $r_Address;
    }

    /**
     * @return mixed
     */
    public function getRCountry()
    {
        return $this->r_Country;
    }

    /**
     * @param mixed $r_Country
     */
    public function setRCountry($r_Country): void
    {
        $this->r_Country = $r_Country;
    }

    /**
     * @return mixed
     */
    public function getRPassportID()
    {
        return $this->r_PassportID;
    }

    /**
     * @param mixed $r_PassportID
     */
    public function setRPassportID($r_PassportID): void
    {
        $this->r_PassportID = $r_PassportID;
    }

    /**
     * @return mixed
     */
    public function getRNIC()
    {
        return $this->r_NIC;
    }

    /**
     * @param mixed $r_NIC
     */
    public function setRNIC($r_NIC): void
    {
        $this->r_NIC = $r_NIC;
    }

    /**
     * @return mixed
     */
    public function getRTell()
    {
        return $this->r_Tell;
    }

    /**
     * @param mixed $r_Tell
     */
    public function setRTell($r_Tell): void
    {
        $this->r_Tell = $r_Tell;
    }




}