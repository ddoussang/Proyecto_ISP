<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'BaseDao.php';

interface EmpleadoDao extends BaseDao {

    public static function deshabilitarEmpleado($rut);

    public static function existeRutEmpleado($rut);
}
