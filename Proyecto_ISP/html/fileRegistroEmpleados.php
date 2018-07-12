<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once '../dto/EmpleadoDto.php';
include_once '../dao/EmpleadoDaoImp.php';
$nuevo = new EmpleadoDto();


$nuevo->setRutEmpleado($_POST["txtRut"]);
$nuevo->setNombreEmpleado($_POST["txtNombre"]);
$nuevo->setEmailEmpleado($_POST["txtCorreo"]);
$nuevo->setPasswordEmpleado(md5($_POST["txtPass"]));
$nuevo->setTipoEmpleado($_POST["tipo"]);
$nuevo->setHabilitadoEmpleado(true);

if(EmpleadoDaoImp::agregar($nuevo)){
    echo "<script>alert('Empleado Agregado');</script>";
    session_start();
    $_SESSION["mj"];
}else{
    echo "<script>alert('Lo sentimos, no se pudo registrar');</script>";
}
session_start();
$_SESSION["mj"];

//session_start();
//$_SESSION["user"]= serialize($nuevo);

header('Location: ./ventanaRegistroEmpleados.php');