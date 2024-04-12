<?php  
    class Conexion{
    	public $url = "192.168.1.10";
    	public $usuario = "user";
    	public $password = "david";
    	public $base = "seguridad";
    	public $conexion = null; 
    	public $sentencia ="";

    	public function __construct() {
    		$this->abrirConexion();
    	}

		protected function abrirConexion(){
			$this->conexion = new mysqli($this->url, $this->usuario, $this->password, $this->base);
		}

    	public function __destruct() {
    		$this->cerrarConexion();
    	}

		protected function cerrarConexion(){
			if ($this->conexion !== null) {
				$this->conexion->close();
				$this->conexion = null;
			}
		}

        public function ejecutarSentencia(){
        	return $this->conexion->query($this->sentencia);
        }

        public function obtenerSentencia(){
        	return $this->conexion->query($this->sentencia);
        }
   }
?>
