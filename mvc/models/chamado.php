<?php

    require_once 'Database.php';

    class Chamado{
        private $conn;
        public function_construct(){
            $database = new Database();
            $this ->conn = $database->getConnesction();}
            public function create($titulo,$descricao,$situacao){
                $query = "INSERT INTO chamados (titulo, descricao , situacao) VALUES ('$titulo','$descricao','$situacao')";
                return mysqli_query($this->conn,$query);
            }
    }
?>
