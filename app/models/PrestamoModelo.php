<?php
    defined("BASEPATH") or exit ("No se permite acceso directo");
    /**
     * clase PrestamoModelo
     */
    class PrestamoModelo {
        private $db;

        public function __construct(){
            $this->db = new Base;
        }

        public function addPrestamo($data, $id_empleado, $fecha){
            $sql = "INSERT INTO tbl_prestamos (tbl_prestamos_monto, tbl_prestamos_fecha_inicio,
            tbl_prestamos_fecha_final, tbl_prestamos_estado, tbl_empleado_tbl_empleado_id,
            tbl_cliente_tbl_cliente_id, tbl_fiador_tbl_fiador_id, tbl_prestamos_tipo, tbl_ruta_tbl_ruta_id,
            tbl_prestamos_porcentaje, tbl_prestamos_reembolso, tbl_prestamos_fecha) 
            VALUES (:monto, :fecha_inicio, :fecha_fin, :estado, :id_empleado, :id_cliente, :id_fiador,
            :tipo_cobro, :id_ruta, :porcentaje, :reembolso, :fecha);";
            $this->db->query($sql);
            $this->db->bind(':monto', $data[0]->{'value'});
            $this->db->bind(':tipo_cobro', $data[2]->{'value'});
            $this->db->bind(':id_cliente', $data[3]->{'value'});
            $this->db->bind(':id_fiador', $data[4]->{'value'});
            $this->db->bind(':id_ruta', $data[5]->{'value'});
            $this->db->bind(':porcentaje', $data[6]->{'value'});
            $this->db->bind(':estado', $data[7]->{'value'});
            $this->db->bind(':reembolso', $data[8]->{'value'});
            $this->db->bind(':fecha_inicio', $data[9][0]);
            $this->db->bind(':fecha_fin', $data[9][1]);
            #$this->db->bind(':id_ingresos', '');
            $this->db->bind(':id_empleado', $id_empleado);
            $this->db->bind(':fecha', $fecha);
            return $this->db->execute();
        }

        public function getAllPrestamos(){
            $sql = "SELECT cliente.*, prestamo.* , ruta.tbl_ruta_nombre, empleado.*, ingresos.*, fiador.* 
            FROM tbl_prestamos as prestamo INNER JOIN tbl_cliente as cliente ON cliente.tbl_cliente_id = prestamo.tbl_cliente_tbl_cliente_id
             INNER JOIN tbl_ruta as ruta ON ruta.tbl_ruta_id = prestamo.tbl_ruta_tbl_ruta_id
             INNER JOIN tbl_empleado as empleado ON empleado.tbl_empleado_id = prestamo.tbl_empleado_tbl_empleado_id
             INNER JOIN tbl_ingresos as ingresos ON ingresos.tbl_ingresos_id = prestamo.tbl_ingresos_tbl_ingresos_id
             INNER JOIN tbl_fiador as fiador ON fiador.tbl_fiador_id = prestamo.tbl_fiador_tbl_fiador_id
              ORDER BY tbl_prestamos_id desc";
            $this->db->query($sql);
            return $this->db->registros();
        }

        public function updatePrestamos($data, $id){
            $sql = "UPDATE tbl_prestamos SET tbl_prestamos_monto = :monto, tbl_prestamos_fecha_inicio = :fecha_inicio,
            tbl_prestamos_fecha_final = :fecha_final, tbl_prestamos_tipo = :tipo, tbl_prestamos_porcentaje = :porcentaje,
            tbl_prestamos_estado = :estado, tbl_prestamos_reembolso = :reembolso WHERE tbl_prestamos_id = :id;";
            $this->db->query($sql);
            $this->db->bind(":monto", $data[0]->{"value"});
            $this->db->bind(":fecha_inicio", $data[1]->{"value"});
            $this->db->bind(":tipo", $data[2]->{"value"});
            $this->db->bind(":porcentaje", $data[3]->{"value"});
            $this->db->bind(":estado", $data[4]->{"value"});
            $this->db->bind(":reembolso", $data[5]->{"value"});
            $this->db->bind(":fecha_final", $data[6]->{"value"});
            $this->db->bind(":id", $id);
            return $this->db->execute();
        }

        public function updateCarteraUsuario(){
            $sql = "UPDATE tbl_cartera SET 
            tbl_cartera_dinero_cargo = (SELECT sum((tbl_prestamos_monto)+(tbl_prestamos_monto*tbl_prestamos_porcentaje)) FROM tbl_prestamos WHERE tbl_prestamos_estado = 'ACTIVO' AND tbl_ruta_tbl_ruta_id = 1) 
            WHERE tbl_cartera_id = 1;";
            $this->db->query($sql);
            return $this->db->execute();
        }
    }