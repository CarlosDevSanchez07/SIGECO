<?php
define('BASEPATH', true);
/**
 * se define la zona horaria del sistema
 */
date_default_timezone_set('America/Bogota');

/**
 * autoload de las clases en la carpeta librearie
 */
require_once '../app/autoload.php';

/**
 * nivel de errores 
 */
error_reporting(ERROR_REPORTING_LEVEL);

/**
 * Instanciamos la clase controlador
 */ 
$iniciar = new Core;

/**
 * Instancia de la clase funciones para las clases controlador
 */
$functions = new Functions;