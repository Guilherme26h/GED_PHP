<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerContabilidade extends ClassRender implements InterfaceView{

    public function __construct(){

        $this->setTitle("Contabilidade");
        $this->setDescription("Gerenciador documentos Contabilidade");
        $this->setKeywords("Contador, administração, dinheiro");
        $this->setDir("contabilidade");
        $this->renderLayout();

    }
}
