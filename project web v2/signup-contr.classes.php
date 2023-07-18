<?php
class SignupContr extends Signup
{

    private $email;
    private $password; 
    private $repPassword;

    public function __construct($email, $password, $repPassword){
        $this->email = $email;
        $this->password = $password;
        $this->repPassword = $repPassword;
    }

    public function signupUser()
    {
        if($this->pwdMatch() == false)
        {
            header("location: project.php");
            exit();
        }
        if($this->userCheck() == false)
        {
            header("location: project.php");
            exit();
        }
        else
        {
            $this->setUser($this->email, $this->password);
            header("location: project.php");
        }
    }

    private function pwdMatch()
    {
        $result = false;
        if($this->password !== $this->repPassword)
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }

    private function userCheck()
    {
        $result = false;
        if(!$this->checkUser($this->email))
        {
            $result = false;
        }
        else
        {
            $result = true;
        }
        return $result;
    }
}   

?>