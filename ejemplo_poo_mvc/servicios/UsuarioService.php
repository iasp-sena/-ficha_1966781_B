<?php

class UsuarioService {

    public function consultarTodos(){
        $usuario1 = new Usuario();
        $usuario1->setId(1);
        $usuario1->setNombres("Andres");
        $usuario1->setApellidos("Castro");
        $usuario2 = new Usuario();
        $usuario2->setId(2);
        $usuario2->setNombres("Diana");
        $usuario2->setApellidos("Ramirez");
        
        $usuarios = [];
        array_push($usuarios, $usuario1);
        array_push($usuarios, $usuario2);
        return $usuarios;
    }

    public function registrar($usuario){
        echo("Registramos el nuevo usuario: " . $usuario->getNombres() . " " . $usuario->getApellidos());
    }

}