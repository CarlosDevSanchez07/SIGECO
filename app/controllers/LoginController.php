<?php
    defined('BASEPATH') or exit('No se permite acceso directo');
	/**
	 * clase LoginController
	 */
    class LoginController extends Controlador{
        private $loginModel;
        private $sesion;
        
        public function __construct(){
            $this->loginModel = $this->modelo("LoginModel");
            $this->sesion = new Session;
        }

        public function index(){
            $this->vista("login/index");
        }

        public function getLogin(){
            $datos = [];
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $usuario = $_POST["username"];
                $contrasena = $_POST["contrasena"];
                $respuesta = $this->loginModel->getLogin($usuario);
                if(!$respuesta):
                    $datos["mensaje"] = "No se encontro ningun usuario relacionado.";
                    $this->vista("login/index", $datos);
                else:
                    if(Functions::verify($contrasena, $respuesta->tbl_usuarios_contrasena)):
                        $this->sesion->add("session", $respuesta);
                        header("Location: ". RUTA_URL .'/Principal/index');
                    else:
                        $datos["mensaje"] = "Contrasena invalida.";
                        $this->vista("login/index", $datos);
                    endif;
                endif;
            endif;
        }

        public function setLogout(){
            $this->sesion->close();
            header("Location: ". RUTA_URL . "/Login/index");
        }
    }