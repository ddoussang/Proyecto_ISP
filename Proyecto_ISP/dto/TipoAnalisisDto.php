<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class TipoAnalisisDto {
    
    private $idTipoAnalisis;//<-PK
    private $nombreAnalisis;
    
    function __construct() {
        $this->idTipoAnalisis = 1;
        $this->nombreAnalisis = "";
    }
    
    function getIdTipoAnalisis() {
        return $this->idTipoAnalisis;
    }

    function getNombreAnalisis() {
        return $this->nombreAnalisis;
    }

    function setIdTipoAnalisis($idTipoAnalisis) {
        $this->idTipoAnalisis = $idTipoAnalisis;
    }

    function setNombreAnalisis($nombreAnalisis) {
        $this->nombreAnalisis = $nombreAnalisis;
    }
    
    public function __toString() {
        return $this->idTipoAnalisis." ".$this->nombreAnalisis;
    }




}
