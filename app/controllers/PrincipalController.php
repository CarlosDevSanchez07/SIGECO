<?php
    defined('BASEPATH') or exit('No se permite acceso directo');
	/**
	 * clase PrincipalController
	 */
    class PrincipalController extends Controlador {
        private $sesion;
        public $datos = array();

        public function __construct(){
            $this->sesion = new Session;
            if(!$this->sesion->getAll())
                header('Location: '. RUTA_URL . '/Login/index');
            $this->datos = [
                "usuario" => $this->sesion->get("session")->tbl_usuarios_usuario,
                "nombre" => $this->sesion->get("session")->tbl_empleado_nombre,
                "apellido1" => $this->sesion->get("session")->tbl_empleado_apellido1,
                "rol" => $this->sesion->get("session")->tbl_usuarios_rol
            ];
        }

        public function index(){
            $this->vista("principal/index", $this->datos);
        }
    }


    #realizar funciones para simplificar los datosb