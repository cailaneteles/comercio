<?php

namespace src\Models;

class Produto{

    private $id;
    private $nome;
    private $descricao;

    public function getId(){
        return $this ->id;
    }
    public function setid($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this ->nome;
    }
    public function setnome($nome){
        $this->nome = $nome;

    }
    public function getDescricao(){
        return $this ->descricao;
    }
    public function setdescricao($descricao){
        $this->descricao = $descricao;
}

}