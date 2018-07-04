<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'ResultadoAnalisisDao.php';
include_once '../dto/ResultadoAnalisisDto.php';
include_once '../bd/ClasePDO.php';

class ResultadoAnalisisDaoImp implements ResultadoAnalisisDao{
    
    public static function agregar($dto) {
        try {
            $pdo = new clasePDO();

            $stmt = $pdo->prepare("INSERT INTO resultado_analisis (resultado_id_tipo_analisis,"
                    . " resultado_id_analisis_muestra, fecha_registro_resultado, ppm_resultado, estado, rut_empleado_analisis)"
                    . " VALUES (?,?,now(),?,?,?)");

            $stmt->bindValue(1, $dto->getResultadoIdTipoAnalisis());
            $stmt->bindValue(2, $dto->getResultadoIdAnalisisMuestra());
            $stmt->bindValue(3, $dto->getPpmResultado());
            $stmt->bindValue(4, $dto->getEstado());
            $stmt->bindValue(5, $dto->getRutEmpleadoAnalisis());
                       
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return TRUE;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao al agregar Resultado Analisis->" . $exc->getMessage();
        }
        return FALSE;
    }

    public static function buscarAnalisisPorCodigoMuestra($cod) {
        $lista = new ArrayObject();
         try {
             $pdo = new clasePDO();
             $stmt = $pdo->prepare("SELECT * FROM resultado_analisis WHERE "
                     . "resultado_id_analisis_muestra=?");
             $stmt->bindParam(1, $cod);
             
             $stmt->execute();
             $resultado = $stmt->fetchAll();
             foreach ($resultado as $value) {
                 $dto = new ResultadoAnalisisDto();
                 
                 $dto->setResultadoIdTipoAnalisis($value["resultado_id_tipo_analisis"]);
                 $dto->setResultadoIdAnalisisMuestra($value["resultado_id_analisis_muestra"]);
                 $dto->setFechaRegistroResultado($value["fecha_registro_resultado"]);
                 $dto->setPpmResultado($value["ppm_resultado"]);
                 $dto->setEstado($value["estado"]);
                 $dto->setRutEmpleadoAnalisis($value["rut_empleado_analisis"]);

                 $lista->append($dto);
             }
             $pdo=NULL;
         } catch (Exception $exc) {
             echo "Error dao al buscar Analisis por Codigo de Muestra->".$exc->getMessage();
         }
         return $lista;
    }

    /*Retorna objeto con los analisis encontrados*/    
    public static function buscarAnalisisPorRutEmpleado($rut) {
        try {
             $pdo = new clasePDO();
             $stmt = $pdo->prepare("SELECT * FROM resultado_analisis WHERE rut_empleado_analisis=?");
             $stmt->bindParam(1, $rut);
             
             $stmt->execute();
             $resultado = $stmt->fetchAll();
             foreach ($resultado as $value) {
                 $dto = new ResultadoAnalisisDto();
                 
                 $dto->setResultadoIdTipoAnalisis($value["resultado_id_tipo_analisis"]);
                 $dto->setResultadoIdAnalisisMuestra($value["resultado_id_analisis_muestra"]);
                 $dto->setFechaRegistroResultado($value["fecha_registro_resultado"]);
                 $dto->setPpmResultado($value["ppm_resultado"]);
                 $dto->setEstado($value["estado"]);
                 $dto->setRutEmpleadoAnalisis($value["rut_empleado_analisis"]);
                                                                    
                 return $dto;
             }
             $pdo=NULL;
         } catch (Exception $exc) {
             echo "Error dao al buscar Analisis por Rut Empleado->".$exc->getMessage();             
         }
         return NULL;
    }

    /*No se requiere*/
    public static function modificar($dto) {
        
    }

    public static function buscarAnalisisPorCodigoCliente($cod) {
        
    }

    public static function buscarAnalisisPorRutCliente($rut) {
        
    }

}
