<?php

if(isset($_POST['submit']))
{
    $first = $_POST['firstname'];
    $second = $_POST['lastname'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];

    include "dbhc.classes.php";
    include "contact.classes.php";
    include "contact-contr.classes.php";
    $message = new ContactContr($first, $second, $country, $subject);

    $message->insertData();

    header("project.php?MessageSent");
}

?>