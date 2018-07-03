<?php

include_once '../dto/EmpleadoDto.php';
include_once '../dao/EmpleadoDaoImp.php';

$dto = new EmpleadoDto();

$dto->setRutEmpleado("1-9");
$dto->setNombreEmpleado("empleadoName");
$dto->setPasswordEmpleado("12");
$dto->setEmailEmpleado("emp@emp.com");
$dto->setTipoEmpleado("Receptor");

//if(EmpleadoDaoImp::agregar($dto)){
//    echo "agregado";
//}else{
//    echo "no agregado";
//}

//if(EmpleadoDaoImp::modificar($dto)){
//    echo "modificado";
//}else{
//    echo "no modificado";
//}
//
//if(EmpleadoDaoImp::deshabilitarEmpleado("1-9")){
//    echo "deshabilitado";
//}else{
//    echo "no deshabilitado";
//}

//if(EmpleadoDaoImp::existeRutEmpleado("1-9")){
//    echo "existe";
//}else{
//    echo "no existe";
//}

//echo EmpleadoDaoImp::existeRutEmpleado("1-9");