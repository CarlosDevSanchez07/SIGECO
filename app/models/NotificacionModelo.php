<?php

    class NotificacionModelo {
        private $db;
        public function __construct(){
            $this->db = new Base;
        }

        public function getAllNotify(){
            $sql = "SELECT * FROM tbl_eventos";
            $this->db->query($sql);
            return $this->db->registros();
        }

        public function updateState($id){
            $sql = "UPDATE tbl_eventos SET tbl_eventos_estado = :estado WHERE tbl_eventos_id = :id";
            $this->db->query($sql);
            $this->db->bind(":esatdo", 0);
            $this->db->bind(":id", $id);
            return $this->db->execute();
        }
    }