<?php 

    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    require_once("../Model/user.php");
    $user = new User($name, $telephone, $email, $password);
    
    require_once("../DAO/UserDAO.php");
    $userDAO = new UserDAO();
    $guardoOk = $userDAO->validarUser($user);

    if ($guardoOk) {
        echo "El usuario se registró correctamente <br>";
    } else {
        echo "Error en registrar al usuario <br>";
    }
    
    
?>