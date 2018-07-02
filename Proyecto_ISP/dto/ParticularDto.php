<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ParticularDto {
    
    private $codigoParticular;//<--PK
    private $rutParticular;
    private $passwordParticular;
    private $nombreParticular;
    private $direccionParticular;
    private $emailParticular;
    private $telefonoParticular;
    private $habilitadoParticular;
    
    function __construct() {
        $this->codigoParticular = 1;
        $this->rutParticular = "";
        $this->passwordParticular = "";
        $this->nombreParticular = "";
        $this->direccionParticular = "";
        $this->emailParticular = "";
        $this->telefonoParticular = 1;
        $this->habilitadoParticular = true;
    }
    
    function getCodigoParticular() {
        return $this->codigoParticular;
    }

    function getRutParticular() {
        return $this->rutParticular;
    }

    function getPasswordParticular() {
        return $this->passwordParticular;
    }

    function getNombreParticular() {
        return $this->nombreParticular;
    }

    function getDireccionParticular() {
        return $this->direccionParticular;
    }

    function getEmailParticular() {
        return $this->emailParticular;
    }

    function getTelefonoParticular() {
        return $this->telefonoParticular;
    }

    function getHabilitadoParticular() {
        return $this->habilitadoParticular;
    }

    function setCodigoParticular($codigoParticular) {
        $this->codigoParticular = $codigoParticular;
    }

    function setRutParticular($rutParticular) {
        $this->rutParticular = $rutParticular;
    }

    function setPasswordParticular($passwordParticular) {
        $this->passwordParticular = $passwordParticular;
    }

    function setNombreParticular($nombreParticular) {
        $this->nombreParticular = $nombreParticular;
    }

    function setDireccionParticular($direccionParticular) {
        $this->direccionParticular = $direccionParticular;
    }

    function setEmailParticular($emailParticular) {
        $this->emailParticular = $emailParticular;
    }

    function setTelefonoParticular($telefonoParticular) {
        $this->telefonoParticular = $telefonoParticular;
    }

    function setHabilitadoParticular($habilitadoParticular) {
        $this->habilitadoParticular = $habilitadoParticular;
    }
    
    public function __toString() {
        return $this->codigoParticular." ".$this->rutParticular." ".$this->passwordParticular." ".
                $this->nombreParticular." ".$this->direccionParticular." ".$this->emailParticular." ".
                $this->telefonoParticular." ".$this->habilitadoParticular;
    }




}
