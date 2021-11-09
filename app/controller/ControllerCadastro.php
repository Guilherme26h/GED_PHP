<?php
namespace App\Controller;

use App\Model\ClassCadastro;
use Src\Classes\ClassRender;

class ControllerCadastro extends ClassCadastro{

    protected $Nome;
    protected $Sexo;
    protected $Cidade;

    public function __construct(){

        $Render = new ClassRender();
        $Render->setTitle("Cadastro");
        $Render->setDescription("Cadastrar");
        $Render->setKeywords("Administração");
        $Render->setDir("cadastro");
        $Render->renderLayout();

    }

    public function recVariaveis(){
     
        if(isset($_POST['Nome'])){
            $this->Nome=filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        if(isset($_POST['Sexo'])){
            $this->Sexo=filter_input(INPUT_POST, 'Sexo', FILTER_SANITIZE_SPECIAL_CHARS );
        }

        if(isset($_POST['Cidade'])){
            $this->Cidade=filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_SPECIAL_CHARS);
        }

        
    }


    public function cadastrar(){
       
        $this->recVariaveis();
        $this->cadastroCliente($this->Nome, $this->Sexo, $this->Cidade);


    }

    public function seleciona(){
        $this->recVariaveis();
        var_dump($this->cadastroCliente($this->Nome, $this->Sexo, $this->Cidade));
        
    }

    
}