<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EmpresaDto {
    
    private $codigoEmpresa;//<--PK
    private $rutEmpresa;
    private $nombreEmpresa;
    private $passwordEmpresa;
    private $direccionEmpresa;
    private $habilitadoEmpresa;
    
    function __construct() {
        $this->codigoEmpresa = 1;
        $this->rutEmpresa = "";
        $this->nombreEmpresa = "";
        $this->passwordEmpresa = "";
        $this->direccionEmpresa = "";
        $this->habilitadoEmpresa = true;
    }
    
    function getCodigoEmpresa() {
        return $this->codigoEmpresa;
    }

    function getRutEmpresa() {
        return $this->rutEmpresa;
    }

    function getNombreEmpresa() {
        return $this->nombreEmpresa;
    }

    function getPasswordEmpresa() {
        return $this->passwordEmpresa;
    }

    function getDireccionEmpresa() {
        return $this->direccionEmpresa;
    }

    function getHabilitadoEmpresa() {
        return $this->habilitadoEmpresa;
    }

    function setCodigoEmpresa($codigoEmpresa) {
        $this->codigoEmpresa = $codigoEmpresa;
    }

    function setRutEmpresa($rutEmpresa) {
        $this->rutEmpresa = $rutEmpresa;
    }

    function setNombreEmpresa($nombreEmpresa) {
        $this->nombreEmpresa = $nombreEmpresa;
    }

    function setPasswordEmpresa($passwordEmpresa) {
        $this->passwordEmpresa = $passwordEmpresa;
    }

    function setDireccionEmpresa($direccionEmpresa) {
        $this->direccionEmpresa = $direccionEmpresa;
    }

    function setHabilitadoEmpresa($habilitadoEmpresa) {
        $this->habilitadoEmpresa = $habilitadoEmpresa;
    }

    public function __toString() {
        return $this->codigoEmpresa." ".$this->rutEmpresa." ".$this->nombreEmpresa." ".
                $this->passwordEmpresa." ".$this->direccionEmpresa." ".$this->habilitadoEmpresa;
    }


    
}
