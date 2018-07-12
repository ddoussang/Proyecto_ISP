<?php
include_once '../dto/EmpresaDto.php';
include_once '../dao/EmpresaDaoImp.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
try {
    $nuevaEmpresa = new EmpresaDto();
    $nuevaEmpresa->setRutEmpresa($_POST["txtRut"]);
    $nuevaEmpresa->setNombreEmpresa($_POST["nombre"]);
    $nuevaEmpresa->setDireccionEmpresa($_POST["direccion"]);
    $nuevaEmpresa->setPasswordEmpresa($_POST["passwordsignup"]);
    
    session_start();
    $_SESSION["empresaNueva"]= serialize($nuevaEmpresa);
    header("Location: ./registroContacto.php");
    
} catch (Exception $ex) {
    echo "Error en file registrar particular" . $ex->getMessage();
    session_start();
    $_SESSION["mj"] = 0;
    header('Location: ./loginCliente.php');
}
