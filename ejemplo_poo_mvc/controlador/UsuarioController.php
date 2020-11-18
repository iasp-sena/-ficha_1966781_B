<?php

class UsuarioController {

    private static $usuarioService;
    private static $tdService;
    private static $template;

    public function __construct(){
        self::$usuarioService = new UsuarioService();
        self::$tdService = new TipoDocumentoService();
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
        $tiposDocumentos = self::$tdService->consultarTodos();
        self::$template->render(
            DIR_VIEW . "usuario/registro.php",
            ["titulo"=>"Registro Usuarios", "tiposDocumentos"=>$tiposDocumentos]
        );
    }

    public function registrar() {
        $usuario = new Usuario();
        $usuario->setTipoDocumento(filter_input(INPUT_GET, "tipoDocumento"));//$_GET["tipoDocumento"]);
        $usuario->setNumeroDocumento(filter_input(INPUT_GET, "numeroDocumento"));
        $usuario->setNombres($_GET["nombres"]);
        $usuario->setApellidos($_GET["apellidos"]);
        $usuario->setNombreUsuario($_GET["nombreUsuario"]);
        $usuario->setClave($_GET["clave"]);


        $rta = self::$usuarioService->registrar($usuario);

        $mensaje = $rta ? "El usuario se creo correctamente.": "Error registrando el usuario";

        $tiposDocumentos = self::$tdService->consultarTodos();

        self::$template->render(
            DIR_VIEW . "usuario/registro.php",
            ["titulo"=>"Registro Usuarios", "mensaje"=> $mensaje, "tiposDocumentos"=>$tiposDocumentos]
        );
    }

}