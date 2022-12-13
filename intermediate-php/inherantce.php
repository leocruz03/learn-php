<?php

### la herencia en PHP ###
class Person
{
    public $name;
    public $surname;
    public $job;

    public function __construct($name, $surname, $job)
    {
        $this -> name = $name;
        $this -> surname = $surname;
        $this -> job = $job;
    }

    public function getName() 
    {
        return $this -> name;
    }

    public function setName($name) 
    {
        return $this -> name = $name;
    }

    public function getSurname() 
    {
        $this -> surname;
    }

    public function setSurname($surname)
    {
        $this -> surname = $surname;
    }

    public function getJob()
    {
        $this -> job;
    }

    public function setJob($job)
    {
        $this -> job = $job;
    }
}

## la herencia es con 'extends', la cual significa extender, o sea la clase hija se extiende de la clase madre 
class Coder extends Person
{
    private $fav_lang;
    public $good_maths;

    public function __construct($fav_lang, $good_maths) 
    {
        $this -> fav_lang = $fav_lang;
        $this -> good_maths = $good_maths;
    }

    public function getFavLang()
    {
        $this -> fav_lang;
    }

    public function setFavLang($lang)
    {
        $this -> fav_lang = $fav_lang;
    }

    public function getGoodMaths()
    {
        $this -> good_maths;
    }

    public function setGoodMaths($good_maths)
    {
        $this -> good_maths = $good_maths;
    }
}
