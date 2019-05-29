<?php

class SystemUser
{
    private $suid;
    private $user_level;
    private $user_name;
    private $password;

    /**
     * SystemUser constructor.
     * @param $suid
     * @param $user_level
     * @param $user_name
     * @param $password
     */
    public function __construct($suid, $user_level, $user_name, $password)
    {
        $this->suid = $suid;
        $this->user_level = $user_level;
        $this->user_name = $user_name;
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getSuid()
    {
        return $this->suid;
    }

    /**
     * @param mixed $suid
     */
    public function setSuid($suid): void
    {
        $this->suid = $suid;
    }

    /**
     * @return mixed
     */
    public function getUserLevel()
    {
        return $this->user_level;
    }

    /**
     * @param mixed $user_level
     */
    public function setUserLevel($user_level): void
    {
        $this->user_level = $user_level;
    }

    /**
     * @return mixed
     */
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * @param mixed $user_name
     */
    public function setUserName($user_name): void
    {
        $this->user_name = $user_name;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }




}