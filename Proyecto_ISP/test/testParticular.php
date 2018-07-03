<?php

include_once '../dto/ParticularDto.php';
include_once '../dao/ParticularDaoImp.php';


$dto = new ParticularDto();

$dto->setRutParticular("1-9");
$dto->setPasswordParticular("123");
$dto->setNombreParticular("particular");
$dto->setDireccionParticular("DirePar");
$dto->setEmailParticular("par@par.cl");
$dto->setTelefonoParticular("222");

//if(ParticularDaoImp::agregar($dto)){
//    echo "agregó";
//}else{
//    echo "No agregó :(";
//}

//if(ParticularDaoImp::modificar($dto)){
//    echo "modificado";
//}else{
//    echo "no modificado";
//}

//if(ParticularDaoImp::deshabilitarParticular("1-9")){
//    echo "deshabilitado";
//}else{
//    echo "no deshabilitado";
//}

//if(ParticularDaoImp::existeRutParticular("6.214.751-2")){
//    echo "existe";
//}else{
//    echo "no existe";
//}

//echo ParticularDaoImp::existeRutParticular("6.214.751-2");