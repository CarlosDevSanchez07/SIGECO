<?php
    defined('BASEPATH') or exit('No se permite acceso directo');
	/**
	 * clase ClienteController
	 */
    class ClienteController extends Controlador {
        private $sesion;
        private $modelo;
        public $datos = array();

        public function __construct(){
            $this->sesion = new Session;
            $this->modelo = $this->modelo("ClienteModelo");
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
            $this->datos["clientes"] = $this->modelo->getAllClientes();
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                print(json_encode($this->datos["clientes"]));
            endif;
            $this->vista("cliente/index", $this->datos);
        }

        public function addCliente(){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = $this->modelo->addCliente(json_decode($_POST['data']));
                print($res);
            endif;
        }

        public function getCliente($id){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = $this->modelo->getCliente($id);
                print($res);
            endif;
        }

        public function updateCliente($id){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = $this->modelo->updateCliente(json_decode($_POST["data"]), $id);
                print($res);
            endif;
        }

        public function deleteCliente($id){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = $this->modelo->deleteCliente($id);
                print($res);
            endif;
        }
    }