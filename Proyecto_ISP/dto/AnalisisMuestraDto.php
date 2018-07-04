<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class AnalisisMuestraDto {
    
    private $idAnalisisMuestra;//<--PK
    private $fechaRecepcionMuestra;
    private $temperaturaMuestra;
    private $cantidadMuestra;
    private $muestraCodigoEmpresa;//<--FK
    private $rutEmpleadoRecibe;//<--FK
    private $muestraCodigoParticular;//<--FK
    
    function __construct() {
        $this->idAnalisisMuestra = 1;
        $this->fechaRecepcionMuestra = null;
        $this->temperaturaMuestra = 1.1;
        $this->cantidadMuestra = 1;
        $this->muestraCodigoEmpresa = null;
        $this->rutEmpleadoRecibe = "";
        $this->muestraCodigoParticular = null;
    }

    function getIdAnalisisMuestra() {
        return $this->idAnalisisMuestra;
    }

    function getFechaRecepcionMuestra() {
        return $this->fechaRecepcionMuestra;
    }

    function getTemperaturaMuestra() {
        return $this->temperaturaMuestra;
    }

    function getCantidadMuestra() {
        return $this->cantidadMuestra;
    }

    function getMuestraCodigoEmpresa() {
        return $this->muestraCodigoEmpresa;
    }

    function getRutEmpleadoRecibe() {
        return $this->rutEmpleadoRecibe;
    }

    function getMuestraCodigoParticular() {
        return $this->muestraCodigoParticular;
    }

    function setIdAnalisisMuestra($idAnalisisMuestra) {
        $this->idAnalisisMuestra = $idAnalisisMuestra;
    }

    function setFechaRecepcionMuestra($fechaRecepcionMuestra) {
        $this->fechaRecepcionMuestra = $fechaRecepcionMuestra;
    }

    function setTemperaturaMuestra($temperaturaMuestra) {
        $this->temperaturaMuestra = $temperaturaMuestra;
    }

    function setCantidadMuestra($cantidadMuestra) {
        $this->cantidadMuestra = $cantidadMuestra;
    }

    function setMuestraCodigoEmpresa($muestraCodigoEmpresa) {
        $this->muestraCodigoEmpresa = $muestraCodigoEmpresa;
    }

    function setRutEmpleadoRecibe($rutEmpleadoRecibe) {
        $this->rutEmpleadoRecibe = $rutEmpleadoRecibe;
    }

    function setMuestraCodigoParticular($muestraCodigoParticular) {
        $this->muestraCodigoParticular = $muestraCodigoParticular;
    }

    public function __toString() {
        return $this->idAnalisisMuestra." ".$this->fechaRecepcionMuestra." ".$this->temperaturaMuestra." ".
                $this->cantidadMuestra." ".$this->muestraCodigoEmpresa." ".$this->rutEmpleadoRecibe." ".
                $this->muestraCodigoParticular;
    }

}
