<?php
    defined("BASEPATH") or exit("No se permite acceso directo");
    /**
     * classe NotificacionController
     */
    class NotificacionController extends Controlador{
        private $modelo;
        
        public function __construct(){
            $this->modelo = $this->modelo("NotificacionModelo");
        }

        public function index(){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = $this->modelo->getAllNotify();
                print(json_encode($res));
            endif;
        }
        
        public function updateState($id){
            if($_SERVER["REQUEST_METHOD"] == "POST"):
                $res = $this->modelo->updateState($id);
                print($res);
            endif;
        }
    }