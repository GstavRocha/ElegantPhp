<?php
class Discount{
    public $nome;
    public $produto;

    function __construct($nome,$produto){
        $this->nome= $nome;
        $this->produto= $produto;
    }
}