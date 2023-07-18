<?php

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $repPassword = $_POST['psw-repeat'];

    include "dbh.classes.php";
    include "signup.classes.php";
    include "signup-contr.classes.php";
    $signup = new SignupContr($email, $password, $repPassword);

    $signup->signupUser();

    header("project.php");
}

?>