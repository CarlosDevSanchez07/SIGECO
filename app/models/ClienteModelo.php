<?php
    defined("BASEPATH") or exit("No se permite acceso directo");
    /**
     * Clase ClienteModelo
     */
    class ClienteModelo {
        private $db;

        public function __construct(){
            $this->db = new Base;
        }

        public function getAllClientes(){
            $sql = "SELECT cliente.*, ruta.* FROM tbl_cliente as cliente INNER JOIN tbl_ruta as ruta ON ruta.tbl_ruta_id = cliente.tbl_ruta_tbl_ruta_id";
            $this->db->query($sql);
            return $this->db->registros();
        }

        public function addCliente($data){
            $sql = "INSERT INTO tbl_cliente (tbl_cliente_nombre, tbl_cliente_apellido1, tbl_cliente_apellido2, tbl_cliente_documento,
            tbl_cliente_telefono, tbl_cliente_celular1, tbl_cliente_celular2, tbl_cliente_fecha_nacimiento,
            tbl_cliente_direccion, tbl_cliente_correo, tbl_cliente_imagen, tbl_cliente_estado_civil,
            tbl_cliente_tipo_casa, tbl_cliente_personas_cargo, tbl_ruta_tbl_ruta_id, tbl_cliente_genero) 
            VALUES (:nombre, :apellido1, :apellido2, :documento, :telefono, :celular1, :celular2, :fecha, 
            :direccion, :correo, :imagen, :estado_civil, :casa_tipo, :persona_cargo, :ruta, :genero);";
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
            $this->db->bind(':persona_cargo', $data[11]->{"value"});
            $this->db->bind(':genero', $data[12]->{"value"});
            $this->db->bind(':estado_civil', $data[13]->{"value"});
            $this->db->bind(':casa_tipo', $data[14]->{"value"});
            return $this->db->execute();
        }

        public function getCliente($id){
            $sql = "SELECT cliente.* FROM tbl_cliente as cliente WHERE cliente.tbl_cliente_id = :id;";
            $this->db->query($sql);
            $this->db->bind(":id", $id);
            return json_encode($this->db->registro());
        }

        public function updateCliente($data, $id){
            $sql = "UPDATE tbl_cliente SET tbl_cliente_nombre = :nombre, tbl_cliente_apellido1 = :apellido1,
             tbl_cliente_apellido2 = :apellido2, tbl_cliente_documento = :documento, tbl_cliente_telefono = :telefono, 
            tbl_cliente_celular1 = :celular1, tbl_cliente_celular2 = :celular2, tbl_cliente_fecha_nacimiento = :fecha,
            tbl_cliente_direccion = :direccion, tbl_cliente_correo = :correo, tbl_cliente_imagen = :imagen, 
            tbl_cliente_estado_civil = :estado_civil, tbl_cliente_tipo_casa = :casa_tipo, 
            tbl_cliente_personas_cargo = :persona_cargo, tbl_ruta_tbl_ruta_id = :ruta, tbl_cliente_genero = :genero 
            WHERE tbl_cliente_id = :id;";
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
            $this->db->bind(':persona_cargo', $data[11]->{"value"});
            $this->db->bind(':genero', $data[12]->{"value"});
            $this->db->bind(':estado_civil', $data[13]->{"value"});
            $this->db->bind(':casa_tipo', $data[14]->{"value"});
            $this->db->bind(':id', $id);
            return $this->db->execute();
        }

        public function deleteCliente($id){
            $sql = "DELETE FROM tbl_cliente WHERE tbl_cliente_id = :id;";
            $this->db->query($sql);
            $this->db->bind(":id", $id);
            return $this->db->execute();
        }
    }