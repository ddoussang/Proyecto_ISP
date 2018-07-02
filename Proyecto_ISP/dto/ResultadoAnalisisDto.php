<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class ResultadoAnalisisDto {
    
    private $resultadoIdTipoAnalisis;//<--FK
    private $resultadoIdAnalisisMuestra;//<--FK
    private $fechaRegistroResultado;
    private $ppmResultado;
    private $estado;
    private $rutEmpleadoAnalisis;//<--FK
    
    function __construct() {
        $this->resultadoIdTipoAnalisis = 1;
        $this->resultadoIdAnalisisMuestra = 1;
        $this->fechaRegistroResultado = null;
        $this->ppmResultado = 1;
        $this->estado = "";
        $this->rutEmpleadoAnalisis = "";
    }
    
    function getResultadoIdTipoAnalisis() {
        return $this->resultadoIdTipoAnalisis;
    }

    function getResultadoIdAnalisisMuestra() {
        return $this->resultadoIdAnalisisMuestra;
    }

    function getFechaRegistroResultado() {
        return $this->fechaRegistroResultado;
    }

    function getPpmResultado() {
        return $this->ppmResultado;
    }

    function getEstado() {
        return $this->estado;
    }

    function getRutEmpleadoAnalisis() {
        return $this->rutEmpleadoAnalisis;
    }

    function setResultadoIdTipoAnalisis($resultadoIdTipoAnalisis) {
        $this->resultadoIdTipoAnalisis = $resultadoIdTipoAnalisis;
    }

    function setResultadoIdAnalisisMuestra($resultadoIdAnalisisMuestra) {
        $this->resultadoIdAnalisisMuestra = $resultadoIdAnalisisMuestra;
    }

    function setFechaRegistroResultado($fechaRegistroResultado) {
        $this->fechaRegistroResultado = $fechaRegistroResultado;
    }

    function setPpmResultado($ppmResultado) {
        $this->ppmResultado = $ppmResultado;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setRutEmpleadoAnalisis($rutEmpleadoAnalisis) {
        $this->rutEmpleadoAnalisis = $rutEmpleadoAnalisis;
    }

    public function __toString() {
        return $this->resultadoIdTipoAnalisis." ".$this->resultadoIdAnalisisMuestra." ".
                $this->fechaRegistroResultado." ".$this->ppmResultado." ".$this->estado." ".
                $this->rutEmpleadoAnalisis;
    }


    
}
