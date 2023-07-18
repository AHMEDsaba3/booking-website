<?php

function alert($message){
    echo "<script> alert('$message'); </script>";
}

if(isset($_POST['loginBtn']))
{
    $email = $_POST['email'];
    $password = $_POST['psw'];

    include "dbh.classes.php";
    include "login.classes.php";
    include "login-contr.classes.php";
    $login = new LoginContr($email, $password);

    $login->loginUser();
    
    alert('success');
    //header("location: project.php");
}

?>