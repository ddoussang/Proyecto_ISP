<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'ParticularDao.php';
include_once '../dto/ParticularDto.php';
include_once '../bd/ClasePDO.php';

class ParticularDaoImp implements ParticularDao {

    public static function agregar($dto) {
        try {
            $pdo = new clasePDO();

            $stmt = $pdo->prepare("INSERT INTO particular (rut_particular, password_particular, nombre_particular,"
                    . "direccion_particular, email_particular, telefono_particular, habilitado_particular)"
                    . " VALUES (?,?,?,?,?,?,true)");

            $stmt->bindValue(1, $dto->getRutParticular());
            $stmt->bindValue(2, $dto->getPasswordParticular());
            $stmt->bindValue(3, $dto->getNombreParticular());
            $stmt->bindValue(4, $dto->getDireccionParticular());
            $stmt->bindValue(5, $dto->getEmailParticular());
            $stmt->bindValue(6, $dto->getTelefonoParticular());

            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return TRUE;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao al agregar Usuario Particular->" . $exc->getMessage();
        }
        return FALSE;
    }

    public static function deshabilitarParticular($rut) {
        try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("UPDATE particular SET habilitado_particular=FALSE WHERE rut_particular=?");

            $stmt->bindValue(1, $rut);

            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return TRUE;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao en deshabilitar Usuario Particular->" . $exc->getMessage();
        }
        return FALSE;
    }

    public static function modificar($dto) {
        try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("UPDATE particular SET password_particular=?, nombre_particular=?,"
                    . "direccion_particular=?,email_particular=?, telefono_particular=?"
                    . "WHERE rut_particular=?");

            $stmt->bindValue(1, $dto->getPasswordParticular());
            $stmt->bindValue(2, $dto->getNombreParticular());
            $stmt->bindValue(3, $dto->getDireccionParticular());
            $stmt->bindValue(4, $dto->getEmailParticular());
            $stmt->bindValue(5, $dto->getTelefonoParticular());
            $stmt->bindValue(6, $dto->getRutParticular());

            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return TRUE;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao al modificar Usuario Particular->" . $exc->getMessage();
        }
        return FALSE;
    }

    public static function existeRutParticular($rut) {
        try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("SELECT * FROM particular WHERE rut_particular=?");
            $stmt->bindParam(1, $rut);
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $value) {
                $dto = new ParticularDto();
                $dto->setCodigoParticular($value["codigo_particular"]);
                $dto->setRutParticular($value["rut_particular"]);
                $dto->setPasswordParticular($value["password_particular"]);
                $dto->setNombreParticular($value["nombre_particular"]);
                $dto->setDireccionParticular($value["direccion_particular"]);
                $dto->setEmailParticular($value["email_particular"]);
                $dto->setTelefonoParticular($value["telefono_particular"]);
                $dto->setHabilitadoParticular($value["habilitado_particular"]);               
               
                return $dto;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao en existeRut->" . $exc->getMessage();
            //return;
        }
        return NULL;
    }

}
