<? php 
    require_once ("../DAO/LoginDAO.php");
    $loginDAO = new LoginDAO();
    $loginValido = $loginDAO->validarLoginYPass($_POST['inputEmail'], $_POST['inputPassword']);

    if ($loginValido) {
        header("Location: ../blog.html");
        exit;
    } else {
        echo "E-mail o password incorrectos <br>";
    }


?>