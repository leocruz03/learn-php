<?php

## modelo para el usuario
class Usuario
{
    public $name;
    public $surname;
    public $email;
    public $password;

    public function getName()
    {
        return $this -> name;
    }

    public function setName($name)
    {
        $this -> name = $name;
    }

    public function getSurname()
    {
        return $this -> surname;
    }

    public function setSurname($surname)
    {
        $this -> surname = $surname;
    }

    public function getEmail()
    {
        return $this -> email;
    }

    public function setEmail($email)
    {
        $this -> email = $email;
    }

    public function getPassword()
    {
        return $this -> password;
    }

    public function setPassword($password)
    {
        $this -> password = $password;
    }

    public function getAll()
    {
        echo "getting all users...";
    }
}