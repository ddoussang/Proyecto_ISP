<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'BaseDao.php';

interface ResultadoAnalisisDao extends BaseDao {
    
    public static function buscarAnalisisPorCodigoMuestra($cod);
    
    public static function buscarAnalisisPorCodigoCliente($cod);    
    
    public static function buscarAnalisisPorRutEmpleado($rut);
    
    public static function buscarAnalisisPorRutCliente($rut);
}
