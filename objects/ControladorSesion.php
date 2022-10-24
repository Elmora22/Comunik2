<?php
include_once "RepositorioInstitucion.php";

class ControladorSesion{

    private $usuario;
    private $repoInst;
    private $repoFlia;

    /*public function __constructor(){
        
    }*/





    public function validarCredencialesInstitucion($nombre, $clave){
        $this->repoInst = new RepositorioInstitucion();

        if(($nombre != " " && $clave != " ") && ($nombre != "" && $clave != "")){
            echo "antes de instanciar usuario<br>";
            $this->usuario = $this->repoInst->recuperarCredenciales($nombre, $clave);
            
            echo $this->usuario->getIDINS();
            echo $this->usuario->getNombre();
            echo $this->usuario->getClave();
        }
        else{
            echo "Un dato esta vacio";
        }

    }
}