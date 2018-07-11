<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


include_once '../dao/ParticularDaoImp.php';
include_once '../dto/ParticularDto.php';
include_once '../dto/EmpresaDto.php';
include_once '../dao/EmpresaDaoImp.php';

try {
    $rut = $_POST["txtRut"];
    $contrasena = md5($_POST["password"]);

    $implementacion = new ParticularDaoImp();
    $particular = $implementacion->existeRutEmpleado($rut);

    $implementacionEmpresa = new EmpresaDaoImp();
    $empresa = $implementacionEmpresa->existeRutEmpresa($rut);

    session_start();

    if (!is_null($particular)) {
        if ($particular->getHabilitadoParticular()) {
            if ($contrasena === $particular->getPasswordParticular()) {
                $_SESSION["cliente"] = serialize($particular);
                header('Location: ./homeCliente.php');
            } else {
                $_SESSION["message"] = "Contraseña incorreceta";
                header('Location: ./loginCliente.php');
            }
        } else {
            $_SESSION["message"] = "Usuario deshabilitado";
            header('Location: ./loginCliente.php');
        }
    } elseif (!is_null($empresa)) {
        if ($empresa->getHabilitadoEmpresa()) {
            if ($contrasena === $empresa->getPasswordEmpresa()) {
                $_SESSION["cliente"] = serialize($empresa);
                header('Location: ./homeCliente.php');
            } else {
                $_SESSION["message"] = "Contraseña incorreceta";
                header('Location: ./loginCliente.php');
            }
        } else {
            $_SESSION["message"] = "Usuario deshabilitado";
            header('Location: ./loginCliente.php');
        }
    }else{
        $_SESSION["message"] = "Usuario incorrecto";
            header('Location: ./loginCliente.php');
    }
} catch (Exception $ex) {
    echo "Error" . $ex->getMessage();
}