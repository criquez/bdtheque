<?php
namespace App\Entity;
class User{
    protected $name;
    protected $email;
    protected $date;

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }
 
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDate()
    {
        return $this->date;
    }
 
    public function setDate($date)
    {
        $this->name = $date;
    }
}