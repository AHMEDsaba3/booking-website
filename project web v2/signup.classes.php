<?php

class Signup extends Dbh 
{
    protected function setUser($email,$password)
    {
        $stmt = $this->connect()->prepare('INSERT INTO usersystem (email,password) VALUES (?,?);');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        if(!$stmt->execute(array($email,$hashedPassword)))
        {
            $stmt = null;
            header("location: project.php");
            exit();
        }
        
        $stmt = null;
    }

    protected function checkUser($email)
    {
        $stmt = $this->connect()->prepare('SELECT email FROM usersystem WHERE email = ?;');
        if(!$stmt->execute(array($email)))
        {
            $stmt = null;
            header("location: project.php");
            exit();
        }

        $resultCheck = false;
        if($stmt->rowCount() > 0)
        {
            $resultCheck = false;
        }
        else
        {
            $resultCheck = true;
        }

        return $resultCheck;
    }
}

?>