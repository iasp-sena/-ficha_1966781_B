<?php

class UsuarioService {

    public function consultarTodos(){
        $usuarios = [];
        $pdo = ConexionBD::getPDO();

        $stm = $pdo->prepare("SELECT u.*, td.codigo, td.descripcion FROM tbl_usuarios u INNER JOIN tbl_tipos_documentos td ON u.tipo_documento_id = td.id");
        if($stm->execute()){
            while($fila = $stm->fetch(PDO::FETCH_OBJ)){
                array_push($usuarios, $this->toUsuario($fila));
            }
        } 

        return $usuarios;
    }

    public function registrar($usuario){
        $pdo = ConexionBD::getPDO();
        $stm = $pdo->prepare("INSERT INTO tbl_usuarios(tipo_documento_id, numero_documento, nombres, apellidos, nombre_usuario, clave) VALUES (:tipoDocumento, :numeroDocumento, :nombres, :apellidos, :nombreUsuario, MD5(:clave))");
        $stm->bindParam(":tipoDocumento",$usuario->getTipoDocumento(),PDO::PARAM_INT);
        $stm->bindParam(":numeroDocumento",$usuario->getNumeroDocumento(),PDO::PARAM_STR,45);
        $stm->bindParam(":nombres",$usuario->getNombres(),PDO::PARAM_STR);
        $stm->bindParam(":apellidos",$usuario->getApellidos(),PDO::PARAM_STR);
        $stm->bindParam(":nombreUsuario",$usuario->getNombreUsuario(),PDO::PARAM_STR,50);
        $stm->bindParam(":clave",$usuario->getClave(),PDO::PARAM_STR,45);

        return $stm->execute();
    }

    private function toUsuario($datosUsuario){
        $tipoDocumento = new TipoDocumento();
        $tipoDocumento->setId($datosUsuario->tipo_documento_id);
        $tipoDocumento->setCodigo($datosUsuario->codigo);
        $tipoDocumento->setDescripcion($datosUsuario->descripcion);

        $usuario = new Usuario();
        $usuario->setId($datosUsuario->id);
        $usuario->setTipoDocumento($tipoDocumento);
        $usuario->setNumeroDocumento($datosUsuario->numero_documento);
        $usuario->setNombres($datosUsuario->nombres);
        $usuario->setApellidos($datosUsuario->apellidos);
        $usuario->setNombreUsuario($datosUsuario->nombre_usuario);
        $usuario->setClave($datosUsuario->clave);

        return $usuario;
    }

}