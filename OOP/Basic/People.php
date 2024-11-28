<?php
class People{
    public $name;
    public $age;

    function __construct($name, $age){
        $this->name=$name;
        $this->age=$age;
    }

    function getName(){
        return $this->name;
    }
    function getAge(){
        return $this->age;
    }
    function setName($name){
        $this->name=$name;
    }
    function setAge($age){
        $this->age=$age;
    }
}