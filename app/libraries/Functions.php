<?php
    defined("BASEPATH") or exit("No se permite acceso directo");
    /**
     * integracion de la libreria de funciones para contrase~as hash mayor seguridad
     */
    require RUTA_APP . "/Password/Password.php";
    class Functions{
        
        public function __construct(){}

        /**
         * aqui creamos las contrase~as seguras nos retorna un @string
         */
        public static function hash($password) {
            return password_hash($password, PASSWORD_BCRYPT, ['cost' => 15]);
        }
        
        public static function verify($password, $hash) {
            return password_verify($password, $hash);
        }

        public function numSolicitudes($data){
            $num = 0;
            $saldo = 0;
            foreach($data as $item):
                if($item->tbl_prestamos_estado == "VERIFICACION"):
                    $num++;
                    $saldo += $item->tbl_prestamos_monto;
                endif;
            endforeach;
            $saldo = number_format($saldo, null, null, ",");
            return array($num, $saldo);
        }

        public function numActivos($data){
            $num = 0;
            $saldo = 0;
            $ganancia = 0;
            foreach($data as $item):
                if($item->tbl_prestamos_estado == "ACTIVO"):
                    $num++;
                    $saldo += $item->tbl_prestamos_monto;
                    $ganancia += $item->tbl_prestamos_monto * $item->tbl_prestamos_porcentaje;
                endif;
            endforeach;
            $saldo = number_format($saldo, null, null, ",");
            $ganancia = number_format($ganancia, null, null, ",");
            return array($num, $saldo, $ganancia);
        }

        public function colorEstado($tipo){
            $item = "";
            if($tipo == "VERIFICACION"):
                $item = "<span class='text-warning'>". $tipo . "</span>";
            elseif($tipo == "ACTIVO"):
                $item = "<span class='text-success'>". $tipo . "</span>";
            elseif($tipo == "CANCELADO"):
                $item = "<span class='text-primary'>". $tipo . "</span>";
            elseif($tipo == "DENEGADO"):
                $item = "<span class='text-danger'>". $tipo . "</span>";
            endif;
            return $item;
        }

        public static function getPrestamo($data, $id){
            $prestamo = null;
            foreach($data as $item):
                if($item->tbl_prestamos_id == $id)
                    $prestamo = $item;
            endforeach;
            return $prestamo;
        }
    }