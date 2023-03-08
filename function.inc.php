<?php  
 session_start();

function wrongPassword($pwd,$pwdrepeat)
{        
    if($pwd === $pwdrepeat)
    return false;
    else
    return true;
}

function emailExists($conn,$email)
{    
    $sql ="SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("Location: register.php?error=stmtfailed");
       exit();
    }
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData))
    {
        return $row;
    }
    else
    {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}
function createUser($conn,$name,$surname,$email,$radio,$pwd)
{

    $postojiUser = emailExists($conn,$email);

    if($postojiUser === true)
    {
         header("location: login.php?error=existinbase");
         exit();
    }  


    $sql ="INSERT INTO users (usersName,usersSurname,usersEmail,usersType,usersPwd) VALUES (?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("Location: register.php?error=stmtfailed");
       exit();
    }
    $hashedPwd= password_hash($pwd,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt,"sssss",$name,$surname,$email,$radio,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: register.php?error=none");
    exit();
}

function loginUser($conn,$email,$password)
{    
    $postojiUser = emailExists($conn,$email);

    if($postojiUser === false)
    {
         header("location: login.php?error=wronglogin");
         exit();
    }    

    $pwdHashed = $postojiUser["usersPwd"];
    $check_pwd= password_verify($password,$pwdHashed);
    
    if($check_pwd=== false)
    {
        header("Location: login.php?error=wronglogin");
        exit();
    }
    else 
    {   
    if($check_pwd=== true)
    {
        session_start();
        $_SESSION["userid"]=$postojiUser["usersId"];
        $_SESSION["usertype"]=$postojiUser["usersType"];
        $_SESSION["username"]=$postojiUser["usersName"];
        $_SESSION["usersurname"]=$postojiUser["usersSurname"];
        $_SESSION["useremail"]=$postojiUser["usersEmail"];
        header("Location: index.php");
        exit();
    }   
    }
}


function changeUserSelf($conn,$name,$surname)
{    
    $sql= "UPDATE users SET usersName = ? , usersSurname = ? WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("Location: izmenisebe.php?error=stmtfailed");
       exit();
    }    
    mysqli_stmt_bind_param($stmt,"sss",$name,$surname,$_SESSION["useremail"]);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: izmenisebe.php?error=none");
    exit();
}


function obrisiKorisnika($conn,$email)
{  
   $postojiUser = emailExists($conn,$email);

    if($postojiUser === false)
    {
         header("location: admin.php?error=wronglogin");
         exit();
    }  


    $sql= "DELETE FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("Location: admin.php?error=stmtfailed");
       exit();
    }    
    mysqli_stmt_bind_param($stmt,"s",$email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("Location: admin.php?error=brisanje");
    exit();
}

function izmeniKorisnika($conn,$email,$name,$surname)
{     
    $postojiUser = emailExists($conn,$email);

    if($postojiUser === false)
    {
         header("location: admin.php?error=wronglogin");
         exit();
    } 
        $sql= "UPDATE users SET usersName = ? , usersSurname = ? WHERE usersEmail = ?;";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            header("Location: admin.php?error=stmtfailed");
           exit();
        }    
        mysqli_stmt_bind_param($stmt,"sss",$name,$surname,$email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("Location: admin.php?error=izmena");
        exit();    
}