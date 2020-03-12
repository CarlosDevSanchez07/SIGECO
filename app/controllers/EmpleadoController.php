<?php
    defined('BASEPATH') or exit('No se permite acceso directo');
	/**
	 * clase EmpleadoController
	 */
    class EmpleadoController extends Controlador {
        private $sesion;
        private $modelo;
        public $datos = array();

        public function __construct(){
            $this->sesion = new Session;
            $this->modelo = $this->modelo("EmpleadoModelo");
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
            $this->datos["empleado"] = $this->modelo->getAllEmpleados();
            $this->vista("empleado/index", $this->datos);
        }

        public function getEmpleado($id){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = $this->modelo->getEmpleado($id);
                print(json_encode($res));
            endif;
        }

        public function deleteEmpleado($id){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = $this->modelo->deleteEmpleado($id);
                print($res);
            endif;
        }

        public function addEmpleado(){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = $this->modelo->addEmpleado(json_decode($_POST['data']));
                print($res);
            endif;
        }

        public function updateEmpleado($id){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = $this->modelo->updateEmpleado(json_decode($_POST["data"]), $id);
                print($res);
            endif;
        }
    }