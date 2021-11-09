<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerFinanceiro extends ClassRender implements InterfaceView{

    public function __construct(){

        $this->setTitle("Financeiro");
        $this->setDescription("Gerenciador Documentos Financeiros");
        $this->setKeywords("Financeiro, Pagas, Não Pagas, Valores");
        $this->setDir("financeiro");
        $this->renderLayout();

    }
}
