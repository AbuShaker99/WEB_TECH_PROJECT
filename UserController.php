<?php
//--Admin Profile--//


$username="";
	$err_username="";
	
	$password="";
	$err_password="";

$err_db="";

$hasError=false;

if (isset($_POST["admin_login"])){
    if(empty($_POST["username"])){
        $hasError = true;
        $err_username = "Username Required!";
    }
    else{
        $username = $_POST["username"];
    }
    if(empty($_POST["password"])){
        $hasError = true;
        $err_password = "Password Required!";
    }
    else{
        $password = $_POST["password"];
    }
    

    }
?>