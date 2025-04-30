<?php
require_once 'controllers/ChamadosController.php';

$controller = new chamadosController();
    //verifica se o formulário foi enviado
    if($_SERVER['REQUEST_METHOD']== 'POST'){
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $situacao = $_POST['situacao'];

        $controller -> create ($titulo,$descricao,$situacao);
    }else{
        require 'view/formchamado.php';
    }


