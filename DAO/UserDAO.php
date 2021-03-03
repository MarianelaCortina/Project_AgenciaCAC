<?php 
class UserDAO {
    public function validarUser($user) {
        require_once("../DataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost", "root", "", "agenciacac");
        $conexionDB->conectar();

        $sql = "INSERT INTO user
        (`name`, `telephone`, `email`, `password`)
        VALUES (
            '{$user->getName()}',
            '{$user->getTelephone()}',
            '{$user->getEmail()}',
            '{$user->getPassword()}')";

        $conexionDB->ejecutar($sql);

        return $conexionDB->cantFilas() > 0;

    }

    public function guardarUser() {
        require_once("..DataBase/ConexionDB.php");
        $conexionDB = new ConexionDB("localhost", "root", "", "agenciacac");
        $conexionDB->conectar();

        $sql = "SELECT * FROM user";
        return $conexionDB->ejecutar($sql);    
    }

}


?>