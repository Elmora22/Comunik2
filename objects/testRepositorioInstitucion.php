<?php
require_once "RepositorioInstitucion.php";

$repo = new RepositorioInstitucion();

$usuario = $repo->recuperarCredenciales("Urquiza", "1234");

if(!$usuario){
    echo "No soy un objeto";
}
else{
    echo $usuario->getIDINS()."<br>";
    echo $usuario->getNombre()."<br>";
    echo $usuario->getClave()."<br>";
}
//OK
