<?php
    defined("BASEPATH")or exit("No se permite el acceso directo.");
    /**
     * clase CobroController
     */
    class CobroController extends Controlador {
        private $sesion;
        private $cobroModelo;
        public $datos = array();

        public function __construct(){
            $this->sesion = new Session;
            $this->cobroModelo = $this->modelo("CobroModelo");
            if(!$this->sesion->getAll())
                header("Location: ". RUTA_URL .'/Login/index');
            $this->datos = [
                "usuario" => $this->sesion->get("session")->tbl_usuarios_usuario,
                "nombre" => $this->sesion->get("session")->tbl_empleado_nombre,
                "apellido1" => $this->sesion->get("session")->tbl_empleado_apellido1,
                "rol" => $this->sesion->get("session")->tbl_usuarios_rol
            ];
        }

        public function index(){
            
            $this->vista("cobro/index", $this->datos);
        }
    }