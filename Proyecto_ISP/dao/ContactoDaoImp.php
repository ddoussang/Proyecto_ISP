<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once '../dto/ContactoDto.php';
include_once '../dao/ContactoDao.php';
include_once '../bd/ClasePDO.php';

class ContactoDaoImp implements ContactoDao {
    
    public static function agregar($dto) {
        try {
            $pdo = new clasePDO();

            $stmt = $pdo->prepare("INSERT INTO contacto (rut_contacto, nombre_contacto, email_contacto,"
                    . "telefono_contacto, empresa_codigoEmpresa)"
                    . " VALUES (?,?,?,?,?)");

            $stmt->bindValue(1, $dto->getRutContacto());
            $stmt->bindValue(2, $dto->getNombreContacto());
            $stmt->bindValue(3, $dto->getEmailContacto());
            $stmt->bindValue(4, $dto->getTelefonoContacto());
            $stmt->bindValue(5, $dto->getEmpresaCodigoEmpresa());
            
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return TRUE;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao al agregar Contacto->" . $exc->getMessage();
        }
        return FALSE;
    }   

    public static function existeRutContacto($rut) {
        try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("SELECT * FROM contacto WHERE rut_contacto=?");
            $stmt->bindParam(1, $rut);
            
            $stmt->execute();
            $resultado = $stmt->fetchAll();
            foreach ($resultado as $value) {
                $dto = new ContactoDto();
                $dto->setRutContacto($value["rut_contacto"]);
                $dto->setNombreContacto($value["nombre_contacto"]);
                $dto->setEmailContacto($value["email_contacto"]);
                $dto->setTelefonoContacto($value["telefono_contacto"]);
                $dto->setEmpresaCodigoEmpresa($value["empresa_codigoEmpresa"]);
                       
                return $dto;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao en existeRutContacto->" . $exc->getMessage();
            //return;
        }
        return NULL;
    }

    public static function modificar($dto) {
        try {
            $pdo = new clasePDO();
            $stmt = $pdo->prepare("UPDATE contacto SET nombre_contacto=?, email_contacto=?, telefono_contacto=? "
                    . "WHERE rut_contacto=?");

            $stmt->bindValue(1, $dto->getNombreContacto());
            $stmt->bindValue(2, $dto->getEmailContacto());
            $stmt->bindValue(3, $dto->getTelefonoContacto());            
            $stmt->bindValue(4, $dto->getRutContacto());            
            
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return TRUE;
            }
            $pdo = NULL;
        } catch (Exception $exc) {
            echo "Error dao al modificar Contacto->" . $exc->getMessage();
        }
        return FALSE;
    }

}
