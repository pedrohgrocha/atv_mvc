<?php

class Projeto
{
    private $id;
    private $nome;
    private $duracao;
    private $con;
}


public function construct($id=null, $nome=null, $duracao=null)
{
    $this->id = $id;
    $this->nome = $nome;
    $this->duracao = $duracao

    $this->con = new PDO(SERVIDOR, USUARIO, SENHA)
}

public function all()
{
    $sql = this->con->prepare('select* from ver_projeto');
    $sql->execute();
    $rows = $sql->fetchALL(PDO::FETCH_CLASS);
    return $rows;

}


PUBLIC  FUNCTION create(){
    $sql = $this->con->prepare('insert into projeto (nome, duracao)
    values (?,?)');
    $sql->execute([$this->id, $this->duracao]);
    $row = $sql -> fetchObject();
    return $row;
}

public function read(){
    $sql = $this->con->prepare('select * from ver_projeto where id=?');
    $sql->execute([$this->nome]);
    $row = $sql -> fetchObject();
    return $row;
}

public function update(){
    $sql = $this->con->prepare('update projeto set nome=?, duracao=? where id=?');
    $sql->execute([$this->nome,$this->duracao,$this->id]);
   
}

public function delete(){
    $sql = $this->con->prepare('delete from projeto where id=?');
    $sql->execute([$this->id]);
}
?>