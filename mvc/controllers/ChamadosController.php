<?php 

require_once '../models/chamado.php';

class ChamadosController{
    private $chamado;
    public function_construct(){
        $this -> chamado = new chamado();
    }
    public function create($titulo,$descricao,$situacao){
        if($this -> chamado ->create($titulo,$descricao,$situacao)){
            header("location:index.php?message=chamado cadastrado com sucesso!");
        }else{
            header("location:index.php?message=erro ao cadastrar chamado");
        }
    }
}