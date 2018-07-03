<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../dto/ContactoDto.php';
include_once '../dao/ContactoDaoImp.php';

$dto = new ContactoDto();

$dto->setRutContacto("1-9");
$dto->setNombreContacto("conta");
$dto->setEmailContacto("c@c.cl");
$dto->setTelefonoContacto(111);
//$dto->setEmpresaCodigoEmpresa(3);

//if(ContactoDaoImp::agregar($dto)){
//    echo "agregado";
//}else{
//    echo "no agregado";
//}

/*No se puede modificar la FK (?)*/
//if(ContactoDaoImp::modificar($dto)){
//    echo "modificado";
//}else{
//    echo "No modificado";
//}

//if(ContactoDaoImp::existeRutContacto("1-9")){
//    echo "existe";
//}else{
//    echo "no existe";
//}
//
//echo ContactoDaoImp::existeRutContacto("1-9");