<?php

class Usuario {

    private $id;
    private $tipoDocumento;
    private $numeroDocumento;
    private $nombres;
    private $apellidos;
    private $nombreUsuario;
    private $clave;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getTipoDocumento(){
        return $this->tipoDocumento;
    }

    public function setTipoDocumento($tipoDocumento){
        $this->tipoDocumento = $tipoDocumento;
    }

    public function getNumeroDocumento(){
        return $this->numeroDocumento;
    }

    public function setNumeroDocumento($numeroDocumento){
        $this->numeroDocumento = $numeroDocumento;
    }

    public function getNombres(){
        return $this->nombres;
    }

    public function setNombres($nombres){
        $this->nombres = $nombres;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function setApellidos($apellidos){
        $this->apellidos = $apellidos;
    }

    public function getNombreUsuario(){
        return $this->nombreUsuario;
    }

    public function setNombreUsuario($nombreUsuario){
        $this->nombreUsuario = $nombreUsuario;
    }

    public function getClave(){
        return $this->clave;
    }

    public function setClave($clave){
        $this->clave = $clave;
    }

}