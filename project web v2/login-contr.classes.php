<?php

class LoginContr extends Login 
{
    private $email;
    private $password;

    public function __construct($email,$password){
        $this->email = $email;
        $this->password = $password;
    }

    public function loginUser(){
        $this->gettUser($this->email, $this->password);
        header("location: project.php");
    }
}

?>