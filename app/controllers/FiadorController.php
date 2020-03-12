<?php
    defined("BASEPATH")or exit("No se permite acceso directo");
    /**
     * clase FiadorController
     */
    class FiadorController extends Controlador {
        private $sesion;
        private $modelo;
        public $datos = array();

        public function __construct(){
            $this->sesion = new Session;
            $this->modelo = $this->modelo("FiadorModelo");
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
            $this->datos["fiadores"] = $this->modelo->getAllFiadores();
            $this->vista("fiador/index", $this->datos);
        }

        public function addFiador(){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = $this->modelo->addFiador(json_decode($_POST['data']));
                print($res);
            endif;
        }

        public function getFiador($id){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = $this->modelo->getFiador($id);
                print(json_encode($res));
            endif;
        }

        public function updateFiador($id){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = $this->modelo->updateFiador(json_decode($_POST["data"]), $id);
                print($res);
            endif;
        }

        public function deleteFiador($id){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = $this->modelo->deleteFiador($id);
                print($res);
            endif;
        }
    }