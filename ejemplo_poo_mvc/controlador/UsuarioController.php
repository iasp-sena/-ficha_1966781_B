<?php

class UsuarioController {

    private static $usuarioService;
    private static $template;

    public function __construct(){
        self::$usuarioService = new UsuarioService();
        self::$template = new Template();
    }

    public function listar() {
        $usuarios = self::$usuarioService->consultarTodos();

        self::$template->render(
            DIR_VIEW . "usuario/lista.php", 
            ["usuarios"=>$usuarios, "titulo"=>"Usuarios - Lista...."]
        );
    }

    public function registro() {
        self::$template->render(
            DIR_VIEW . "usuario/registro.php",
            ["titulo"=>"Registro Usuarios"]
        );
    }

    public function registrar() {
        $usuario = new Usuario();
        $usuario->setNombres($_GET["nombres"]);
        $usuario->setApellidos($_GET["apellidos"]);


        self::$usuarioService->registrar($usuario);

        $mensaje = "El usuario se creo correctamente...";

        self::$template->render(
            DIR_VIEW . "usuario/registro.php",
            ["titulo"=>"Registro Usuarios", "mensaje"=> $mensaje]
        );
    }

}