<?php

include_once '../dto/AnalisisMuestraDto.php';
include_once '../dao/AnalisisMuestraDaoImp.php';

$dto = new AnalisisMuestraDto();
$dto->setIdAnalisisMuestra(1);
$dto->setFechaRecepcionMuestra("2018-07-02");
$dto->setTemperaturaMuestra(1.1);
$dto->setCantidadMuestra(100);
$dto->setRutEmpleadoRecibe("11.379.616-2");

//if(AnalisisMuestraDaoImp::agregar($dto)){
//    echo "muestra agregada";
//}else{
//    echo "muestra NO agregada";
//}

if(AnalisisMuestraDaoImp::buscarMuestraPorRutEmpleado("11.379.616-2")){
    echo "si";
    foreach (AnalisisMuestraDaoImp::buscarMuestraPorRutEmpleado("11.379.616-2") as $value){
        echo $value."<br>";
    }
}else{
    echo "no";
}
$implement = new AnalisisMuestraDaoImp();
echo "creado implement";
$lista = $implement->muestraPorCodigoCliente(2);
echo "lista: ".$lista;

//foreach (AnalisisMuestraDaoImp::buscarMuestraPorRutEmpleado("11.379.616-2") as $value){
//    echo $value."<br>";
//}


