<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class ContactoDto {
    
    private $rutContacto;//<--PK
    private $nombreContacto;
    private $emailContacto;
    private $telefonoContacto;
    private $empresaCodigoEmpresa;//<--FK
    
    
    function __construct() {
        $this->rutContacto = "";
        $this->nombreContacto = "";
        $this->emailContacto = "";
        $this->telefonoContacto = 1;
        $this->empresaCodigoEmpresa = 1;        
    }
    
    function getRutContacto() {
        return $this->rutContacto;
    }

    function getNombreContacto() {
        return $this->nombreContacto;
    }

    function getEmailContacto() {
        return $this->emailContacto;
    }

    function getTelefonoContacto() {
        return $this->telefonoContacto;
    }

    function getEmpresaCodigoEmpresa() {
        return $this->empresaCodigoEmpresa;
    }

    function setRutContacto($rutContacto) {
        $this->rutContacto = $rutContacto;
    }

    function setNombreContacto($nombreContacto) {
        $this->nombreContacto = $nombreContacto;
    }

    function setEmailContacto($emailContacto) {
        $this->emailContacto = $emailContacto;
    }

    function setTelefonoContacto($telefonoContacto) {
        $this->telefonoContacto = $telefonoContacto;
    }

    function setEmpresaCodigoEmpresa($empresaCodigoEmpresa) {
        $this->empresaCodigoEmpresa = $empresaCodigoEmpresa;
    }

    public function __toString() {
        return $this->rutContacto." ".$this->nombreContacto." ".$this->emailContacto." ".
                $this->telefonoContacto." ".$this->empresaCodigoEmpresa;
    }


    
}
