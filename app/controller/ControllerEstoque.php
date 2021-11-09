<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerEstoque extends ClassRender implements InterfaceView{

    public function __construct(){

        $this->setTitle("Estoque");
        $this->setDescription("Gerenciador documentos estoque");
        $this->setKeywords("Produtos, Marca, Tipo, Valor, Quantidade");
        $this->setDir("estoque");
        $this->renderLayout();

    }
}
