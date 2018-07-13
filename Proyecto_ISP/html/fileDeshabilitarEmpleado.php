<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../dao/EmpleadoDaoImp.php';

session_start();

$rut = $_POST["txtRut"];

EmpleadoDaoImp::deshabilitarEmpleado($rut);
$ojb = EmpleadoDaoImp::existeRutEmpleado($rut);

$lista = new ArrayObject();
$lista->append($obj);
$_SESSION["lista"] = serialize($lista);


header('Location: ./ventanaRegistroEmpleados.php');
