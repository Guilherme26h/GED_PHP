<?php
namespace App\Controller;

use Src\Classes\ClassRender;
use Src\Interfaces\InterfaceView;

class ControllerAdministrativo extends ClassRender implements InterfaceView{

    public function __construct(){

        $this->setTitle("Administrativo");
        $this->setDescription("Gerenciador de dados administrativos");
        $this->setKeywords("Administração");
        $this->setDir("administrativo");
        $this->renderLayout();

    }
}