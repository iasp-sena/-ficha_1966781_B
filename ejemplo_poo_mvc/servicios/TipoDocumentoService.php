<?php

class TipoDocumentoService {

    public function consultarTodos(){
        $tiposDocumentos = [];
        $pdo = ConexionBD::getPDO();

        $stm = $pdo->prepare("SELECT * FROM tbl_tipos_documentos td ");
        if($stm->execute()){
            while($fila = $stm->fetch(PDO::FETCH_OBJ)){
                array_push($tiposDocumentos, $this->toTipoDocumento($fila));
            }
        } 

        return $tiposDocumentos;
    }

    private function toTipoDocumento($datosTipoDocumento){
        $tipoDocumento = new TipoDocumento();
        $tipoDocumento->setId($datosTipoDocumento->id);
        $tipoDocumento->setCodigo($datosTipoDocumento->codigo);
        $tipoDocumento->setDescripcion($datosTipoDocumento->descripcion);
        return $tipoDocumento;
    }

}