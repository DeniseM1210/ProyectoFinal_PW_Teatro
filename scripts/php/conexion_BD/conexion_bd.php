<?php
    class ConexionBDTeatro{
        private $conexion;
        private $host = "localhost:3306";
        private $usuario = "denise";
        private $contra = "denise12";
        private $bd = "teatro";

        public function __construct(){
            $this->conexion = msqli_connect(
                $this->host,
                $this->usuario,
                $this->contra,
                $this->bd
            );
            if(!$this->conexion)
                die("Error de conexion a BD" . mysqli_connect_error() . " - " . mysqli_connect_errno());

        }

        public function getConexion(){
            return $this->conexion;
        }
    }

?>