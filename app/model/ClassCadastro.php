<?php
namespace App\Model;
use App\Model\ClassConexao;

class ClassCadastro extends ClassConexao{

    private $Db;

    protected function cadastroCliente($Nome , $Sexo, $Cidade){


        $id = 0;
        $this->Db=$this->conexaoDB()->prepare("insert into teste values(:id, :nome, :sexo, :cidade)");
        $this->Db->bindParam(":id", $id,\PDO::PARAM_INT);
        $this->Db->bindParam(":nome", $Nome,\PDO::PARAM_STR_CHAR);
        $this->Db->bindParam(":sexo", $Sexo,\PDO::PARAM_STR_CHAR);
        $this->Db->bindParam(":cidade", $Cidade,\PDO::PARAM_STR_CHAR);
        $this->Db->execute();
        echo "Cadastro efetuado com sucesso";

    }


    #Acesso ao banco de dados select
    protected function selecionaCliente($Nome , $Sexo, $Cidade){
        $this->Db=$this->conexaoDB()->prepare("select * from teste;");
        $this->Db->bindParam(":nome", $Nome,\PDO::PARAM_STR_CHAR);
        $this->Db->bindParam(":sexo", $Sexo,\PDO::PARAM_STR_CHAR);
        $this->Db->bindParam(":cidade", $Cidade,\PDO::PARAM_STR_CHAR);
        $this->Db->execute();
        echo "Cadastro efetuado com sucesso";

    }

    
}