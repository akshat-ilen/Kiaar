<?php

    include 'PhpFunctions.php';

    if(!(isset($_SESSION)))
    {
        session_start();
    }
    if(isset($_SESSION["Employee_id"]) && isset($_SESSION["Fname"]) && isset($_SESSION["Mname"]) && isset($_SESSION["Lname"]) && isset($_SESSION["Gender"]) && isset($_SESSION["Email"]))
    {
        $SessionEmployee_id = $_SESSION["Employee_id"];
        $SessionFname = $_SESSION["Fname"];
        $SessionMname = $_SESSION["Mname"];
        $SessionLname = $_SESSION["Lname"];
        $SessionGender = $_SESSION["Gender"];
        $SessionEmail = $_SESSION["Email"];
    }
    session_destroy();
    header('Location: '.$hosting.'index.php');
?>
