<?php
    defined("BASEPATH") or exit ("No se permite acceso directo");
    /**
     * clase FiadorModelo
     */
    class FiadorModelo{
        private $db;

        public function __construct(){
            $this->db = new Base;
        }

        public function getAllFiadores(){
            $sql = "SELECT * FROM tbl_fiador";
            $this->db->query($sql);
            return $this->db->registros();
        }

        public function addFiador($data){
            $sql = "INSERT INTO tbl_fiador (tbl_fiador_nombre, tbl_fiador_apellido1, tbl_fiador_apellido2, tbl_fiador_documento,
            tbl_fiador_telefono, tbl_fiador_celular1, tbl_fiador_celular2, tbl_fiador_fecha_nacimiento,
            tbl_fiador_direccion, tbl_fiador_correo, tbl_fiador_imagen, tbl_fiador_profesion, 
            tbl_fiador_genero) 
            VALUES (:nombre, :apellido1, :apellido2, :documento, :telefono, :celular1, :celular2, :fecha, 
            :direccion, :correo, :imagen, :profesion, :genero);";
            $this->db->query($sql);
            $this->db->bind(':nombre', $data[0]->{"value"});
            $this->db->bind(':apellido1', $data[1]->{"value"});
            $this->db->bind(':apellido2', $data[2]->{"value"});
            $this->db->bind(':documento', $data[3]->{"value"});
            $this->db->bind(':telefono', $data[4]->{"value"});
            $this->db->bind(':celular1', $data[5]->{"value"});
            $this->db->bind(':celular2', $data[6]->{"value"});
            $this->db->bind(':direccion', $data[7]->{"value"});
            $this->db->bind(':fecha', $data[8]->{"value"});
            $this->db->bind(':correo', $data[9]->{"value"});
            $this->db->bind(':imagen', '');
            $this->db->bind(':genero', $data[11]->{"value"});
            $this->db->bind(':profesion', $data[10]->{"value"});
            #$this->db->bind(':imagen_documento', );
            return $this->db->execute();
        }

        public function getFiador($id){
            $sql = "SELECT * FROM tbl_fiador WHERE tbl_fiador_id = :id;";
            $this->db->query($sql);
            $this->db->bind(":id", $id);
            return $this->db->registro();
        }

        public function updateFiador($data, $id){
            $sql = "UPDATE tbl_fiador SET tbl_fiador_nombre = :nombre, tbl_fiador_apellido1 = :apellido1,
             tbl_fiador_apellido2 = :apellido2, tbl_fiador_documento = :documento, tbl_fiador_telefono = :telefono, 
            tbl_fiador_celular1 = :celular1, tbl_fiador_celular2 = :celular2, tbl_fiador_fecha_nacimiento = :fecha,
            tbl_fiador_direccion = :direccion, tbl_fiador_correo = :correo, tbl_fiador_imagen = :imagen, 
            tbl_fiador_profesion = :profesion, tbl_fiador_genero = :genero 
            WHERE tbl_fiador_id = :id;";
            $this->db->query($sql);
            $this->db->bind(':nombre', $data[0]->{"value"});
            $this->db->bind(':apellido1', $data[1]->{"value"});
            $this->db->bind(':apellido2', $data[2]->{"value"});
            $this->db->bind(':documento', $data[3]->{"value"});
            $this->db->bind(':telefono', $data[4]->{"value"});
            $this->db->bind(':celular1', $data[5]->{"value"});
            $this->db->bind(':celular2', $data[6]->{"value"});
            $this->db->bind(':direccion', $data[7]->{"value"});
            $this->db->bind(':fecha', $data[8]->{"value"});
            $this->db->bind(':correo', $data[9]->{"value"});
            $this->db->bind(':imagen', '');
            $this->db->bind(':genero', $data[11]->{"value"});
            $this->db->bind(':profesion', $data[10]->{"value"});
            $this->db->bind(':id', $id);
            return $this->db->execute();
        }

        public function deleteFiador($id){
            $sql = "DELETE FROM tbl_fiador WHERE tbl_fiador_id = :id;";
            $this->db->query($sql);
            $this->db->bind(":id", $id);
            return $this->db->execute();
        }
    }