<?php 
if(isset($_POST["submit"]))
{
    $name =$_POST["name"];
    $surname =$_POST["surname"];

    require_once 'db.inc.php';
    require_once 'function.inc.php';    
    changeUserSelf($conn,$name,$surname);  
}
else
{
    header("Location: izmenisebe.php");
    exit();
}