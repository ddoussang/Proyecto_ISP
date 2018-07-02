<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EmpleadoDto {
    
    private $rutEmpleado;//<--PK
    private $nombreEmpleado;
    private $passwordEmpleado;
    private $emailEmpleado;
    private $tipoEmpleado;
    private $habilitadoEmpleado;
    
    function __construct() {
        $this->rutEmpleado = "";
        $this->nombreEmpleado = "";
        $this->passwordEmpleado = "";
        $this->emailEmpleado = "";
        $this->tipoEmpleado = "";
        $this->habilitadoEmpleado = true;
    }
    
    function getRutEmpleado() {
        return $this->rutEmpleado;
    }

    function getNombreEmpleado() {
        return $this->nombreEmpleado;
    }

    function getPasswordEmpleado() {
        return $this->passwordEmpleado;
    }

    function getEmailEmpleado() {
        return $this->emailEmpleado;
    }

    function getTipoEmpleado() {
        return $this->tipoEmpleado;
    }

    function getHabilitadoEmpleado() {
        return $this->habilitadoEmpleado;
    }

    function setRutEmpleado($rutEmpleado) {
        $this->rutEmpleado = $rutEmpleado;
    }

    function setNombreEmpleado($nombreEmpleado) {
        $this->nombreEmpleado = $nombreEmpleado;
    }

    function setPasswordEmpleado($passwordEmpleado) {
        $this->passwordEmpleado = $passwordEmpleado;
    }

    function setEmailEmpleado($emailEmpleado) {
        $this->emailEmpleado = $emailEmpleado;
    }

    function setTipoEmpleado($tipoEmpleado) {
        $this->tipoEmpleado = $tipoEmpleado;
    }

    function setHabilitadoEmpleado($habilitadoEmpleado) {
        $this->habilitadoEmpleado = $habilitadoEmpleado;
    }

    public function __toString() {
        return $this->rutEmpleado." ".$this->nombreEmpleado." ".$this->passwordEmpleado." ".
                $this->emailEmpleado." ".$this->tipoEmpleado." ".$this->habilitadoEmpleado;
    }


            
}
