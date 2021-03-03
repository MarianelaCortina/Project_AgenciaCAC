<?php 

class ConexionDB {
    //definición de atributos
    private $host;
    private $email;
    private $password;
    private $databaseName;
    private $conn;

    public function __construct($host,$email,$password,$databaseName){
        $this->host=$host;
        $this->email=$email;
        $this->password=$password;
        $this->databaseName=$databaseName;
    }

    /**
     * Conecta con la base de datos,
     * matienen la conexion en el atributo $conn
     */
    public function conectar() {
        $this->conn = new mysqli($this->host, $this->email, $this->password, $this->databaseName);
        if($this->conn->connect_errno) {
            die("Error de conexion: (" . $this->conn->connect_error . ")" . $this->conn->connect_errno);
        }
    }

    public function cerrar() {
        //Método que cierra la conexión con la BD
        $this->conn->close();
    }

    /**
     * Ejecuta la query recibida con el 
     * parametro $sql.
     * Devuelve el resultado
     */
    public function ejecutar($sql){
        $result = $this->conn->query($sql);
        return $result;
    }

    /**
     * Devuelve la cantidad de filas
     * que arroja la ultima consulta a la 
     * conexion.
     */
    public function cantFilas(){
        return $this->conn->affected_rows;
    }

    public function ultimoreglon($result){
        return $result->fetch_row();
    }

}

?>