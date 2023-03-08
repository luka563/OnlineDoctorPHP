<?php 
if(isset($_POST["submit"]))
{
    $email = $_POST["email"];
    $password = $_POST["pwd"];

    require_once 'db.inc.php';
    require_once 'function.inc.php';
    loginUser($conn,$email,$password);
}
else
{
    header("Location: login.php");
    exit();
}