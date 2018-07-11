<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include_once '../dao/EmpleadoDaoImp.php';
include_once '../dto/EmpleadoDto.php';

try {
    $rut = $_POST["txtRut"];
    $contrasena = $_POST["pass"];

    $implementacion = new EmpleadoDaoImp();
    $usuario = $implementacion->existeRutEmpleado($rut);

    session_start();
    if (!is_null($usuario)) {
        if ($contrasena === $usuario->getPasswordEmpleado()) {
            if ($usuario->getTipoEmpleado() === "Receptor") {
                $_SESSION["user"] = serialize($usuario);
                header('Location: ./HomeReceptor.php');
            } else {                
                $_SESSION["user"] = serialize($usuario);                
                header('Location: ./HomeTecnico.php');
            }
        } else {
            $_SESSION["message"] = "error";
            header('Location: ./index.php');
        }
    } else {
        $_SESSION["message"] = "error";
        header('Location: ./index.php');
    }
} catch (Exception $ex) {
    echo "Error" . $ex->getMessage();
}