<?php
    defined('BASEPATH') or exit('No se permite acceso directo');
    /**
     * clase LoginModel
     */
    class LoginModel{
        /**
         * varibale privada @object
         */
        private $db;
       function __construct(){
           $this->db = new Base;
       }

       public function getLogin($usuario){
            $this->db->query("SELECT usuario.*, empleado.* FROM tbl_usuarios as usuario 
            INNER JOIN tbl_empleado as empleado 
            ON  empleado.tbl_empleado_id = usuario.tbl_empleado_tbl_empleado_id 
            WHERE usuario.tbl_usuarios_usuario = :usuario");
            $this->db->bind(':usuario', $usuario);
            return $this->db->registro();
       }
    }