<?php

class ClientComment
{
    private $name;
    private $email;
    private $subject;
    private $comment;

    /**
     * ClientComment constructor.
     * @param $name
     * @param $email
     * @param $subject
     * @param $comment
     */
    public function __construct($name, $email, $subject, $comment)
    {
        $this->name = $name;
        $this->email = $email;
        $this->subject = $subject;
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject): void
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment): void
    {
        $this->comment = $comment;
    }




}