<?php

class Product{
    public $nome;
    public $preco;

    function __construct($paranome, $parampreco){
        $this->nome = $paranome;
        $this->preco = $parampreco;
    }
    function getNome(){
        return $this->nome;
    }
    function setNome($nome){
        $this->nome=$nome;
    }
    function getPreco(){
        return $this->preco;
    }
    function setPreco($preco){
        $this->preco=$preco;
    }
    function descontoProduto($desconto){
        get
    }

}