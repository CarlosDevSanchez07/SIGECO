<?php
    defined("BASEPATH") or exit("No se permite acceso directo");
    /**
     * Clase CobroModelo
     */
    class CobroModelo {
        private $db;

        public function __construct(){
            $this->db = new Base;
        }
    }