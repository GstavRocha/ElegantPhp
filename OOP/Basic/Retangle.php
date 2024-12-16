<?php
class Retangle{
    public $largura;
    public $altura;

    function __construct($lagura,$altura){
        $this->largura=$lagura;
        $this->altura=$altura;
    }
      
    function setAltura($altura){
        $this->altura=$altura;
    }
    
    function setLargura($largura){
    	$this->largura=$largura;
    }
    
    function getAltura(){
    	return $this->altura;
    }
    
    function getLargura(){
    	return $this->largura;
    }
    function calcularArea($altura,$largura){
    	return $altura*$largura;
    }
};
