<?php 
if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $submit = $_POST["submit"];

    require_once 'db.inc.php';
    require_once 'function.inc.php';


    if($submit === "obrisi")
    obrisiKorisnika($conn,$email);
    if($submit === "izmeni")
    izmeniKorisnika($conn,$email,$name,$surname);
}
else
{
    header("Location: admin.php");
    exit();
}