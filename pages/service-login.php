<?php   
    include ("login-process.php");

    $email = $_POST["email"];
    $senha = $_POST["password"];

    switch($_POST["functionname"]){ 

        case 'loginservice': 
           loginprocess($email, $senha);
            break;      
   