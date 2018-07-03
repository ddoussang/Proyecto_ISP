<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'EmpleadoDao.php';
include_once '../dto/EmpleadoDto.php';
include_once '../bd/ClasePDO.php';

class EmpleadoDaoImp implements EmpleadoDao {

    public static function agregar($dto) {
        try {
            $pdo = new clasePDO();

            $stmt = $pdo->prepare("INSERT INTO empleado (rut_empleado, nombre_empleado, password_empleado,"
                    . "email_empleado, tipo_empleado, habilitado_empleado)"
                    . " VALUES (?,?,?,?,?,true)");

            $stmt->bindValue(1, $dto->getRutEmpleado());
            $stmt->bindValue(2, $dto->getNombreEmpleado());
            $stmt->bindValue(3, $dto->getPasswordEmpleado());
            $stmt->bindValue(4, $dto->getEmailEmpleado());
            $stmt->bindValue(5, $dto->getTipoEmpleado());

            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return TRUE;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao al agregar Usuario Empleado->" . $exc->getMessage();
        }
        return FALSE;
    }

    public static function deshabilitarEmpleado($rut) {
        try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("UPDATE empleado SET habilitado_empleado=FALSE WHERE rut_empleado=?");

            $stmt->bindValue(1, $rut);

            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return TRUE;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao en deshabilitar Usuario Empleado->" . $exc->getMessage();
        }
        return FALSE;
    }

    public static function existeRutEmpleado($rut) {
        try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("SELECT * FROM empleado WHERE rut_empleado=?");
            $stmt->bindParam(1, $rut);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $value) {
                $dto = new EmpleadoDto();
                $dto->setRutEmpleado($value["rut_empleado"]);
                $dto->setNombreEmpleado($value["nombre_empleado"]);
                $dto->setPasswordEmpleado($value["password_empleado"]);
                $dto->setEmailEmpleado($value["email_empleado"]);
                $dto->setTipoEmpleado($value["tipo_empleado"]);
                $dto->setHabilitadoEmpleado($value["habilitado_empleado"]);
              
                return $dto;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao en existeRutEmpleado->" . $exc->getMessage();
            //return;
        }
        return NULL;
    }

    public static function modificar($dto) {
        try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("UPDATE empleado SET nombre_empleado=?, password_empleado=?, email_empleado=?,"
                    . "tipo_empleado=? WHERE rut_empleado=?");

            $stmt->bindValue(1, $dto->getNombreEmpleado());
            $stmt->bindValue(2, $dto->getPasswordEmpleado());
            $stmt->bindValue(3, $dto->getEmailEmpleado());
            $stmt->bindValue(4, $dto->getTipoEmpleado());
            $stmt->bindValue(5, $dto->getRutEmpleado());

            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return TRUE;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao al modificar Usuario Empleado->" . $exc->getMessage();
        }
        return FALSE;
    }

}
