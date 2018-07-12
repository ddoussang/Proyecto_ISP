<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'AnalisisMuestraDao.php';
include_once '../dto/AnalisisMuestraDto.php';
include_once '../bd/ClasePDO.php';

class AnalisisMuestraDaoImp implements AnalisisMuestraDao {

    public static function agregar($dto) {
        try {
            $pdo = new clasePDO();

            $stmt = $pdo->prepare("INSERT INTO analisis_muestra (fecha_recepcion_muestra, temperatura_muestra,"
                    . " cantidad_muestra, muestra_codigo_empresa, rut_empleado_recibe, muestra_codigo_particular)"
                    . " VALUES (now(),?,?,?,?,?)");

            $stmt->bindValue(1, $dto->getTemperaturaMuestra());
            $stmt->bindValue(2, $dto->getCantidadMuestra());
            $stmt->bindValue(3, $dto->getMuestraCodigoEmpresa());
            $stmt->bindValue(4, $dto->getRutEmpleadoRecibe());
            $stmt->bindValue(5, $dto->getMuestraCodigoParticular());

            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return TRUE;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao al agregar Muestra->" . $exc->getMessage();
        }
        return FALSE;
    }

    /* Retorna objeto con las muestras encontradas */

    public static function buscarMuestraPorRutEmpleado($rut) {
        //$lista= new ArrayObject();
        try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("SELECT * FROM analisis_muestra WHERE rut_empleado_recibe=?");
            $stmt->bindParam(1, $rut);

            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $value) {
                $dto = new AnalisisMuestraDto();

                $dto->setIdAnalisisMuestra($value["id_analisis_muestra"]);
                $dto->setFechaRecepcionMuestra($value["fecha_recepcion_muestra"]);
                $dto->setTemperaturaMuestra($value["temperatura_muestra"]);
                $dto->setCantidadMuestra($value["cantidad_muestra"]);
                $dto->setMuestraCodigoEmpresa($value["muestra_codigo_empresa"]);
                $dto->setRutEmpleadoRecibe($value["rut_empleado_recibe"]);
                $dto->setMuestraCodigoParticular($value["muestra_codigo_particular"]);

                return $dto;
                //$lista->append($dto);
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao al Buscar Muestra por Rut->" . $exc->getMessage();
        }
        return NULL;
        //return $lista;
    }

    /* Retorna objeto con las muestras encontradas */

    public function muestraPorCodigoCliente($rut) {
        $lista = new ArrayObject();
        try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("SELECT * FROM analisis_muestra WHERE muestra_codigo_empresa=? OR muestra_codigo_particular=?");
            $stmt->bindParam(1, $rut);
            $stmt->bindParam(2, $rut);

            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $value) {
                $dto = new AnalisisMuestraDto();
                $dto->setIdAnalisisMuestra($value["id_analisis_muestra"]);
                $dto->setFechaRecepcionMuestra($value["fecha_recepcion_muestra"]);
                $dto->setTemperaturaMuestra($value["temperatura_muestra"]);
                $dto->setCantidadMuestra($value["cantidad_muestra"]);
                $dto->setMuestraCodigoEmpresa($value["muestra_codigo_empresa"]);
                $dto->setRutEmpleadoRecibe($value["rut_empleado_recibe"]);
                $dto->setMuestraCodigoParticular($value["muestra_codigo_particular"]);

                $lista->append($dto);
            }
        } catch (Exception $exc) {
            echo "Error dao al Buscar Muestra por Rut->" . $exc->getMessage();
        }
        return $lista;
    }

    /* No se requiere */

    public static function modificar($dto) {
        
    }

}
