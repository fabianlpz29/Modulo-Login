<?php
class ConexionPDO {
    private $host; //nombre del servidor
    private $dbname; //nombre de la base de datos
    private $usuario; //nombre del usuario
    private $contraseña; //contrasena
    private $conexion; //manejar la conexion

    public function __construct($host, $dbname, $usuario, $contraseña) { //constructor
        $this->host = $host;
        $this->dbname = $dbname;
        $this->usuario = $usuario;
        $this->contraseña = $contraseña;
    }

            //funcion para conectar la base de datos
    public function conectar() {
        try {
            $opciones = array(  //manejador de error
                PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION
            );
             //generar la conexion
            $this->conexion = new PDO('mysql:host='.$this->host.';dbname='.$this->dbname, $this->usuario, $this->contraseña, $opciones);

            if ($this->conexion != null) {//verficar si la conexion es exitosa
                // echo "conectado";
            } else{
                // echo "desconectado";
            }
        } catch (PDOException $e) { //mensaje de error
            echo "Error de conexion: " . $e->getMessage();
            die();
        }
    }

    //funcion que ayudara a realizar las consultas
    public function getConnection() {
        return $this->conexion;
    }

    //funcion para cerrar la conexion
    public function desconectar() {
        $this->conexion = null; //borrar la conexion
        // echo "desconectado";
    }
}
?>