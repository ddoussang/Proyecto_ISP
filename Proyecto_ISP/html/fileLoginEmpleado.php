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
    $contrasena = md5($_POST["pass"]);

    $implementacion = new EmpleadoDaoImp();
    $usuario = $implementacion->existeRutEmpleado($rut);

    session_start();
    if (!is_null($usuario)) {

        if ($usuario->getHabilitadoEmpleado() === true) {
            if ($contrasena === $usuario->getPasswordEmpleado()) {

                if ($usuario->getTipoEmpleado() === "Receptor") {
                    $_SESSION["user"] = serialize($usuario);
                    header('Location: ./HomeReceptor.php');
                } elseif ($usuario->getTipoEmpleado() === "Tecnico") {
                    $_SESSION["user"] = serialize($usuario);
                    header('Location: ./HomeTecnico.php');
                } else {
                    $_SESSION["user"] = serialize($usuario);
                    header('Location: ./HomeAdministrador.php');
                }
            } else {
                $_SESSION["message"] = "error [Contraseña incorrecta]";
                header('Location: ./loginEmpleado.php');
            }
        } else {
            $_SESSION["message"] = "error [Usuario deshabilitado]";
            header('Location: ./loginEmpleado.php');
        }
    } else {
        $_SESSION["message"] = "error [No existe usuario]";
        header('Location: ./loginEmpleado.php');
    }
} catch (Exception $ex) {
    echo "Error" . $ex->getMessage();
}