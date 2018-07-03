<?php

include_once '../dto/EmpresaDto.php';
include_once '../dao/EmpresaDaoImp.php';

$dto = new EmpresaDto();

$dto->setRutEmpresa("1-9");
$dto->setNombreEmpresa("empresaModificado");
$dto->setPasswordEmpresa("123");
$dto->setDireccionEmpresa("Direccion");


//if(EmpresaDaoImp::agregar($dto)){
//    echo "agregado";
//}else{
//    "no agregado";
//}

//if(EmpresaDaoImp::modificar($dto)){
//    echo "modificado";
//}else{
//    echo "no modificado";
//}

//if(EmpresaDaoImp::deshabilitarEmpresa("1-9")){
//    echo "deshabilitado";
//}else{
//    echo "no deshabilitado";
//}

//if(EmpresaDaoImp::existeRutEmpresa("1-9")){
//    echo "existe";
//}else{
//    echo "no existe";
//}

//echo EmpresaDaoImp::existeRutEmpresa("1-9");