<?php
require_once "ControladorSesion.php";
require_once "RepositorioInstitucion.php";

$controlador = new ControladorSesion();
$repositorio = new RepositorioInstitucion();

$controlador->validarCredencialesInstitucion("Urquiza", "1234");
//OK
