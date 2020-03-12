<?php
    defined("BASEPATH")or exit("No tiene permiso para aceder directamente");
    /**
     * clase PrestamoController
     */
    class PrestamoController extends Controlador {
        private $sesion;
        public $datos = array();
        private $modeloCliente, $modeloEmpleado, $modeloFiador;
        private $modelo;

        public function __construct(){
            $this->sesion = new Session;
            if(!$this->sesion->getAll())
                header("Location: ". RUTA_URL .'/Login/index');
            $this->modeloCliente = $this->modelo("ClienteModelo");
            $this->modeloEmpleado = $this->modelo("EmpleadoModelo");
            $this->modeloFiador = $this->modelo("FiadorModelo");
            $this->modelo = $this->modelo("PrestamoModelo");
            $this->datos = [
                "usuario" => $this->sesion->get("session")->tbl_usuarios_usuario,
                "nombre" => $this->sesion->get("session")->tbl_empleado_nombre,
                "apellido1" => $this->sesion->get("session")->tbl_empleado_apellido1,
                "rol" => $this->sesion->get("session")->tbl_usuarios_rol
            ];
            $this->datos["prestamos"] = $this->modelo->getAllPrestamos();
        }

        public function solicitar(){
            $this->datos["clientes"] = $this->modeloCliente->getAllClientes();
            $this->datos["empleados"] = $this->modeloEmpleado->getAllEmpleados();
            $this->datos["fiadores"] = $this->modeloFiador->getAllFiadores();
            $this->vista("cartera/index", $this->datos);
        }

        public function listar(){
            $this->datos["funciones"] = new Functions;
            $this->vista("cartera/listar/index", $this->datos);
        }

        public function gestionar($id = 0){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = Functions::getPrestamo($this->datos["prestamos"], $id);
                print(json_encode($res));
            endif;
            $this->vista("cartera/gestionar/index", $this->datos);
        }

        public function addPrestamo(){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $fecha = srt_replace("-", "/", date("yyyy-mm-dd"));
                $res = $this->modelo->addPrestamo(json_decode($_POST["data"]), $this->sesion->get("session")->tbl_empleado_id);
                print($res);
            endif;
        }

        public function updatePrestamos($id){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = $this->modelo->updatePrestamos(json_decode($_POST["data"]), $id);
                $this->modelo->updateCarteraUsuario();
                print($res);
            endif;
        }

        public function getAllPrestamos(){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = $this->datos["prestamos"];
                print(json_encode($res));
            endif;
        }
    }