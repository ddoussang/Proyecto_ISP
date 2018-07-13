<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../dto/ContactoDto.php';
include_once '../dao/ContactoDaoImp.php';
include_once '../dto/EmpresaDto.php';
include_once '../dao/EmpresaDaoImp.php';

try {
    $contacto = new ContactoDto();
    $contacto->setRutContacto($_POST["txtRut"]);
    $contacto->setNombreContacto($_POST["nombre"]);
    $contacto->setEmailContacto($_POST["emailsignup"]);
    $contacto->setTelefonoContacto($_POST["telefono"]);
    session_start();

    $empresa = unserialize($_SESSION["empresaNueva"]);
    $implementacionEmpresa = new EmpresaDaoImp();
    $implementacionEmpresa->agregar($empresa);
    $empresa = $implementacionEmpresa->existeRutEmpresa($empresa->getRutEmpresa());

    $implementacionContacto = new ContactoDaoImp();
    $contacto->setEmpresaCodigoEmpresa($empresa->getCodigoEmpresa());
    $implementacionContacto->agregar($contacto);

    $_SESSION["mj"] = "Empresa registrada!";
    header('Location: ./loginCliente.php');
} catch (Exception $ex) {
    echo "Error " . $ex->getMessage();
}
