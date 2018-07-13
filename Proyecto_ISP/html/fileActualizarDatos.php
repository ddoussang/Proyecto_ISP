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
include_once '../dto/ContactoDto.php';
include_once '../dao/ContactoDaoImp.php';
//fin includes

try {
    session_start();
    $cliente = unserialize($_SESSION["cliente"]);
    if ($cliente instanceof ParticularDto) {
        if (md5($_POST["passwordsignup"]) === $cliente->getPasswordParticular()) {
            $cliente->setNombreParticular(trim($_POST["usernamesignup"]));
            $cliente->setEmailParticular(trim($_POST["emailsignup"]));
            $cliente->setDireccionParticular(trim($_POST["direccion"]));
            $cliente->setTelefonoParticular(trim($_POST["telefono"]));
            if ($_POST["nuevaContra"] != "") {
                $cliente->setPasswordParticular(md5($_POST["nuevaContra"]));
            }
            $implement = new ParticularDaoImp();
            $implement->modificar($cliente);
        } else {
            $_SESSION["mj"] = "Contraseña incorrecta!";
            header('Location: ./datosCliente.php');
        }
    } elseif ($cliente instanceof EmpresaDto) {
        echo "modificando empresa";
        $contacto = unserialize($_SESSION["contacto"]);
        if (md5($_POST["passActual"]) == $cliente->getPasswordEmpresa()) {
            $cliente->setDireccionEmpresa(trim($_POST["direccion"]));
            $cliente->setNombreEmpresa($_POST["usernamesignup"]);
            if ($_POST["nuevaPass"] != "") {
                $cliente->setPasswordEmpresa(md5($_POST["nuevaPass"]));
            }
            $empresaImp = new EmpresaDaoImp();
            $empresaImp->modificar($cliente);
            $contacto->setRutContacto(trim($_POST["txtRut"]));
            $contacto->setNombreContacto(trim($_POST["nombre"]));
            $contacto->setEmailContacto(trim($_POST["emailsignup"]));
            $contacto->setTelefonoContacto(trim($_POST["telefono"]));

            $contactoimp = new ContactoDaoImp();
            $contactoimp->modificar($contacto);
        } else {
            $_SESSION["mj"] = "Contraseña incorrecta!";
            header('Location: ./datosCliente.php');
        }
    }
    $_SESSION["mj"] = " Modificado!";
    header('Location: ./homeCliente.php');
} catch (Exception $ex) {
    echo "Error" . $ex->getMessage();
}