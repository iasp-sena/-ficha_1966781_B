<?php
class LoginController {

    private static $usuarioService;
    private static $template;

    public function __construct(){
        self::$usuarioService = new UsuarioService();
        self::$template = new TemplateLogin();
    }

    public function ingresar() {
        $usuario = filter_input(INPUT_POST, "usuario");
        $clave = filter_input(INPUT_POST, "clave");
        $mensaje = null;
        if($usuario && $clave){
            $usuario = self::$usuarioService->consultarLogin($usuario, $clave);
            if($usuario){
                $usuario->setClave(null);
                $_SESSION["user"] = serialize($usuario);
                header("Location: " . getUrlControllerMethod("Usuario","listar"));
                return;
            }
            $mensaje = "Verifique sus credenciales...";
        }

        self::$template->render(
            ["titulo"=>"Login", "mensaje"=>$mensaje]
        );
    }

    public function salir() {
        session_destroy();
        header("Location: " . getUrlControllerMethod("Login","ingresar"));
    }

}