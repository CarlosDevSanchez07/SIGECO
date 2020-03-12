<?php
    defined("BASEPATH")or exit("No se permite acceso directo");
    /**
     * clase PerfilController
     */
    class PerfilController extends Controlador {

        public function __construct(){}

        public function index(){
            $this->vista("perfil/index");
        }
    }