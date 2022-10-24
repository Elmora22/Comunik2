<?php
include_once "Institucion.php";

class RepositorioInstitucion{

    public function __construct(){

        try{
            $this->conn = new mysqli("localhost", "root", "", "comunik2");
        }
        catch(Exception $e){
            echo "Error de credenciales al servidor<br>";
        }
        if($this->conn->connect_errno){
            echo "Fallo la conexion.<br>";
            exit();
        }

        echo "Conexion exitosa.<br>";
    }












    /*
    Recuperacion de credenciales de Institucion para validar en el controlador de sesion
    */

    public function recuperarCredenciales($nombre, $clave){

        $query = "SELECT IDINS, nombre, clave FROM instituciones WHERE nombre = ?";

        if($consulta = $this->conn->prepare($query)){           //preparacion de la query, devuelve un obj de sentencia o false

            $consulta->bind_param("s", $nombre);       //agrega variables a una sentencia preparada como parametros

            if($consulta->execute()){                           //ejecuta la consulta preparada, devuelve true o false
                
                if($consulta->bind_result($idins, $usuario, $clv)){     //vincula variables a una sentencia preparada para almacenar resultados, devuelve true o false
                    
                    if($consulta->fetch()){                     //obtiene los resultados de una sentencia preparada en las variables vinculadas

                        if(password_verify($clave, $clv)){      //confirmo la igualdad de claves para el usuario a loguearse
                            return new Institucion($idins, $usuario, $clv);
                        }
                        else{
                            echo "Clave incorrecta";
                        }                        
                    }
                    else{
                        echo "No se encontraron coincidencias";
                        return false;
                    }
                }
                else{
                    echo "Error en la vinculacion de las variables en la query";
                }
            }
            else{
                echo "Error en la ejecucion de la query";
            }
        }
        else{
            echo "Error en la preparacion de la query";
        }

    }









    
}