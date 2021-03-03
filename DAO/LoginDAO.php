<? php 

class LoginDAO {

    public function validarLoginYPass($email, $password) {
        require_once ("../DataBase/ConexionDB.php");

        $conexionDB = new ConexionDB ("localhost", "root", "", "agenciacac");
        $conexionDB->conectar();
    
        $sql = "SELECT * FROM login WHERE email = '$email' AND password = '$password'";
        $conexionDB->ejecutar($sql);
    
        return $conexionDB->cantFilas() > 0;
    }

    public function validarLogin($email){
        require_once ("../DataBase/ConexionDB.php");

        $conexionDB = new ConexionDB ("localhost", "root", "", "agenciacac");
        $conexionDB->conectar();
    
        $sql = "SELECT * FROM login WHERE email = $email";
        $conexionDB->ejecutar($sql);
    
        return $conexionDB->cantFilas() > 0;        
    }
}

?>