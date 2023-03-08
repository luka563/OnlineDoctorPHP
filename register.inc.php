<?php

if(isset($_POST["submit"]))
{
    $name =$_POST["name"];
    $surname =$_POST["surname"];
    $email =$_POST["email"];
    $pwd =$_POST["pwd"];
    $pwdrepeat=$_POST["pwdrepeat"];
    $radio =$_POST["radio"];   

   require_once 'db.inc.php';
   require_once 'function.inc.php';
   
   if(wrongPassword($pwd,$pwdrepeat)!== false)
   {    
    header("Location: register.php?error=passwordsdontmatch");
    exit();
   }
   if(emailExists($conn,$email)!== false)
   {
       header("Location: register.php?error=emailtaken");
       exit();
   }
   
   if($radio==="pacijent")
   $radio=1;
   else
   $radio=2;   
   createUser($conn,$name,$surname,$email,$radio,$pwd);

}
else
{
    header("Location: register.php");
}