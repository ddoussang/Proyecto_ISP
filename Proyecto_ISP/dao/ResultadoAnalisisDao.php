<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'BaseDao.php';

interface ResultadoAnalisisDao extends BaseDao {
    
    public static function buscarAnalisisPorCodigo($cod);
    
    public static function buscarAnalisisPorRut($rut);
}
