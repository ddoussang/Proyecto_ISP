<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'EmpresaDao.php';
include_once '../dto/EmpresaDto.php';
include_once '../bd/ClasePDO.php';

class EmpresaDaoImp implements EmpresaDao {
    
    public static function agregar($dto) {
        try {
            $pdo = new clasePDO();

            $stmt = $pdo->prepare("INSERT INTO empresa (rut_empresa, nombre_empresa, password_empresa,"
                    . "direccion_empresa, habilitado_empresa)"
                    . " VALUES (?,?,?,?,true)");

            $stmt->bindValue(1, $dto->getRutEmpresa());
            $stmt->bindValue(2, $dto->getNombreEmpresa());
            $stmt->bindValue(3, $dto->getPasswordEmpresa());
            $stmt->bindValue(4, $dto->getDireccionEmpresa());
            
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return TRUE;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao al agregar Empresa->" . $exc->getMessage();
        }
        return FALSE;
    }

    public static function deshabilitarEmpresa($rut) {
        try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("UPDATE empresa SET habilitado_empresa=FALSE WHERE rut_empresa=?");

            $stmt->bindValue(1, $rut);

            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return TRUE;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao en deshabilitar Empresa->" . $exc->getMessage();
        }
        return FALSE;
    }

    public static function existeRutEmpresa($rut) {
        try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("SELECT * FROM empresa WHERE rut_empresa=?");
            $stmt->bindParam(1, $rut);
            
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $value) {
                $dto = new EmpresaDto();
                $dto->setCodigoEmpresa($value["codigo_empresa"]);
                $dto->setRutEmpresa($value["rut_empresa"]);
                $dto->setNombreEmpresa($value["nombre_empresa"]);
                $dto->setPasswordEmpresa($value["password_empresa"]);
                $dto->setDireccionEmpresa($value["direccion_empresa"]);
                $dto->setHabilitadoEmpresa($value["habilitado_empresa"]);
                       
                return $dto;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao en existeRutEmpresa->" . $exc->getMessage();
            //return;
        }
        return NULL;
    }

    public static function modificar($dto) {
         try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("UPDATE empresa SET nombre_empresa=?, password_empresa=?, direccion_empresa=? "
                    . "WHERE rut_empresa=?");

            $stmt->bindValue(1, $dto->getNombreEmpresa());
            $stmt->bindValue(2, $dto->getPasswordEmpresa());
            $stmt->bindValue(3, $dto->getDireccionEmpresa());            
            $stmt->bindValue(4, $dto->getRutEmpresa());

            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return TRUE;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao al modificar Empresa->" . $exc->getMessage();
        }
        return FALSE;
    }

}
