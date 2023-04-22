<?php
if(isset($_POST['l_submit'])){

    require 'dbh.php';

    $name=$_POST['name'];
    $email=$_POST['email'];
    $pwd=$_POST['password'];

    if(empty($name)|| empty($email) || empty($pwd)){
        header("location: ../home.php?error=emptyfield1");
        
        exit();
    }
    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("location: ../home.php?error=fackmail");
        exit();
    }

    else{
        $sql4="SELECT uname,pwd FROM users where email=?; ";
        $stmt=mysqli_stmt_init($cnct);
        if(!mysqli_stmt_prepare($stmt,$sql4)){
            header("location: ../home.php?error=db1error");
            exit();
        } 
        else{
            mysqli_stmt_bind_param($stmt,"s",$email);
            mysqli_stmt_execute($stmt);
            $res=mysqli_stmt_get_result($stmt);
            if(!$res){
                header("location: ../home.php?error=db2error");
                exit();    
            }
            elseif( $row = mysqli_fetch_assoc($res)){
               
                $p_check=password_verify($pwd, $row['pwd']);
                if($p_check==true){
                    session_start();
                    $_SESSION['name'] = $row['uname'];
                    header("location: ../redirect.php");
                }
                else{
                    header("location: ../home.php?error=wrongpwd1");
                    exit();
                }
            }
            else{
                header("location: ../home.php?error=db3error");
                exit();    
            }
          
        }   
    }
}
else{
    header("location: ../home.php?error=notlogin");
    exit();
}
?>