<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//includes
include_once '../dto/EmpresaDto.php';
include_once '../dto/ParticularDto.php';
include_once '../dao/EmpresaDaoImp.php';
include_once '../dao/ParticularDaoImp.php';
//fin includes

try {
    session_start();
    $cliente = unserialize($_SESSION["cliente"]);
    if ($cliente instanceof ParticularDto) {
        $implement = new ParticularDaoImp();
        $implement->deshabilitarParticular($cliente->getRutParticular());
    } elseif ($cliente instanceof EmpresaDto) {
        $implement = new EmpresaDaoImp();
        $implement->deshabilitarEmpresa($cliente->getRutEmpresa());
    }
    $_SESSION["mj"] = "usuario deshabilitado";
    header('Location: ./loginCliente.php');
} catch (Exception $ex) {
    echo "Error " . $ex->getMessage();
}


