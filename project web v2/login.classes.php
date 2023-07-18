<?php

class Login extends Dbh{
    protected function getUser($email, $password){
        $stmt = $this->connect()->prepare('SELECT password FROM usersystem WHERE email = ?;');

        if(!$stmt->execute(array($email)))
        {
            $stmt = null;
            header("location: project.php?error=stmtfailed");
            exit();
        }

        if($stmt->rowCount() == 0)
        {
            $stmt = null;
            header("location: project.php?error=UserNotFound");
            exit();
        }

        $passwordDb = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPassword = password_verify($password, $passwordDb[0]["password"]);
        
        if($checkPassword == false)
        {
            $stmt = null;
            header("location: project.php?error=PasswordIncorrect");
            exit();
        }
        elseif($checkPassword == true){
            $stmt = $this->connect()->prepare('SELECT * FROM usersystem WHERE email = ? AND password = ?;');

            if(!$stmt->execute(array($email,$password))){
                $stmt = null;
                header("location: project.php?Error");
                exit();
            }

            if($stmt->rowCount()==0)
            {
                $stmt = null;
                header("location: project.php?NotFound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["userID"];
            $_SESSION["useruid"] = $user[0]["email"];
            echo "session started " . $_SESSION["userid"];
        }
        $stmt = null;
    }
    protected function gettUser($email,$password){
        $sql = "SELECT userID FROM usersystem WHERE email='$email' AND password='$password'";
        $result = $this->connect()->prepare($sql);

        if($result->rowCount() == 1){
            session_start();
            $_SESSION['email'] = $email;
            header("location: project.php?Success");
        }

    }

}

?>