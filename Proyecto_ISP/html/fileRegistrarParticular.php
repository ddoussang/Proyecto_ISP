<?php

include_once '../dto/ParticularDto.php';
include_once '../dao/ParticularDaoImp.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
try {
    $nuevo = new ParticularDto();
    $nuevo->setRutParticular($_POST["txtRut"]);
    $nuevo->setNombreParticular($_POST["usernamesignup"]);
    $nuevo->setTelefonoParticular($_POST["telefono"]);
    $nuevo->setDireccionParticular($_POST["direccion"]);
    $nuevo->setEmailParticular($_POST["emailsignup"]);
    $nuevo->setPasswordParticular(md5(trim($_POST["passwordsignup"])));

    echo "nuevo " . $nuevo;

    $implementacion = new ParticularDaoImp();
    $implementacion->agregar($nuevo);
    session_start();
    $_SESSION["mj"]=1;
    header('Location: ./loginCliente.php');
    
    
} catch (Exception $ex) {
    echo "Error en file registrar particular" . $ex->getMessage();
    session_start();
    $_SESSION["mj"]=0;
    header('Location: ./loginCliente.php');
}
