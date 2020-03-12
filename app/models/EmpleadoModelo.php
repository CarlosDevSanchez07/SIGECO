<?php
    defined("BASEPATH")  or exit("No se permite acceso directo");
    /**
     * clase EmpleadoModelo
     */
    class EmpleadoModelo{
        private $db;

        public function __construct(){
            $this->db = new Base;
        }

        public function getAllEmpleados(){
            $sql = "SELECT empleado.*, ruta.* FROM tbl_empleado as empleado INNER JOIN tbl_ruta as ruta
             ON tbl_ruta_id = tbl_ruta_tbl_ruta_id;";
            $this->db->query($sql);
            return $this->db->registros();
        }

        public function getEmpleado($id){
            $sql = "SELECT * FROM tbl_empleado WHERE tbl_empleado_id = :id;";
            $this->db->query($sql);
            $this->db->bind(":id", $id);
            return $this->db->registro();
        }

        public function deleteEmpleado($id){
            $sql = "DELETE FROM tbl_empleado WHERE tbl_empleado_id = :id;";
            $this->db->query($sql);
            $this->db->bind(":id", $id);
            return $this->db->execute();
        }

        public function addEmpleado($data){
            $sql = "INSERT INTO tbl_empleado (tbl_empleado_nombre, tbl_empleado_apellido1, tbl_empleado_apellido2, tbl_empleado_documento,
            tbl_empleado_telefono, tbl_empleado_celular1, tbl_empleado_celular2, tbl_empleado_fecha_nacimiento,
            tbl_empleado_direccion, tbl_empleado_correo, tbl_empleado_imagen,tbl_ruta_tbl_ruta_id, tbl_empleado_genero) 
            VALUES (:nombre, :apellido1, :apellido2, :documento, :telefono, :celular1, :celular2, :fecha, 
            :direccion, :correo, :imagen, :ruta, :genero);";
            $this->db->query($sql);
            $this->db->bind(':nombre', $data[0]->{"value"});
            $this->db->bind(':apellido1', $data[1]->{"value"});
            $this->db->bind(':apellido2', $data[2]->{"value"});
            $this->db->bind(':documento', $data[3]->{"value"});
            $this->db->bind(':telefono', $data[4]->{"value"});
            $this->db->bind(':celular1', $data[5]->{"value"});
            $this->db->bind(':celular2', $data[6]->{"value"});
            $this->db->bind(':direccion', $data[7]->{"value"});
            $this->db->bind(':ruta', $data[8]->{"value"});
            $this->db->bind(':fecha', $data[9]->{"value"});
            $this->db->bind(':correo', $data[10]->{"value"});
            $this->db->bind(':imagen', '');
            $this->db->bind(':genero', $data[11]->{"value"});
            return $this->db->execute();
        }

        public function updateEmpleado($data, $id){
            $sql = "UPDATE tbl_empleado SET tbl_empleado_nombre = :nombre, tbl_empleado_apellido1 = :apellido1,
             tbl_empleado_apellido2 = :apellido2, tbl_empleado_documento = :documento, tbl_empleado_telefono = :telefono, 
            tbl_empleado_celular1 = :celular1, tbl_empleado_celular2 = :celular2, tbl_empleado_fecha_nacimiento = :fecha,
            tbl_empleado_direccion = :direccion, tbl_empleado_correo = :correo, tbl_empleado_imagen = :imagen, 
            tbl_ruta_tbl_ruta_id = :ruta, tbl_empleado_genero = :genero 
            WHERE tbl_empleado_id = :id;";
            $this->db->query($sql);
            $this->db->bind(':nombre', $data[0]->{"value"});
            $this->db->bind(':apellido1', $data[1]->{"value"});
            $this->db->bind(':apellido2', $data[2]->{"value"});
            $this->db->bind(':documento', $data[3]->{"value"});
            $this->db->bind(':telefono', $data[4]->{"value"});
            $this->db->bind(':celular1', $data[5]->{"value"});
            $this->db->bind(':celular2', $data[6]->{"value"});
            $this->db->bind(':direccion', $data[7]->{"value"});
            $this->db->bind(':ruta', $data[8]->{"value"});
            $this->db->bind(':fecha', $data[9]->{"value"});
            $this->db->bind(':correo', $data[10]->{"value"});
            $this->db->bind(':imagen', '');
            $this->db->bind(':genero', $data[11]->{"value"});
            $this->db->bind(':id', $id);
            return $this->db->execute();
        }
    } 