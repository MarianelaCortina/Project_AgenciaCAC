<?php 
class Login {
    private $idLogin;
    private $email;
    private $password;
   

    function __construct($email, $password) {
        $this->email=$email;
        $this->password=$password;
        
    }

        
/**
     * Get the value of idLogin
     */ 
    public function getidLogin()
    {
        return $this->idLogin;
    }

    /**
     * Set the value of idLogin
     *
     * @return  self
     */ 
    public function setidLogin($idLogin)
    {
        $this->idLogin = $idLogin;

        return $this;
    }

    
/**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

}

?>