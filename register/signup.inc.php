 <?php
if(isset($_POST['name'])){

    require 'dbh.php';
    
    $name=$_POST['name'];
    $s_name=$_POST['s_name'];
    $email=$_POST['email'];
    $pwd=$_POST['password'];
    $r_pwd=$_POST['r-password'];
    $p_num1=$_POST['tel1'];
    $p_num2=$_POST['tel2'];

    if(empty($name) || empty($s_name) || empty($email) || empty($pwd) || empty($r_pwd)) {
        header("location: ../home.php?error=emptyfielda");
        exit();
    }
    elseif(empty($p_num2) && empty($p_num1)){
        header("location: ../home.php?error=emptyfieldb");
        exit();
    }
    elseif($pwd!=$r_pwd){
        header("location: ../home.php?error=badpwd");
        exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/" , $name) && !preg_match("/^[a-zA-Z0-9]*$/" , $s_name) && !filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("location: ../home.php?error=email&name");
        exit();
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        header("location: ../home.php?error=email");
        exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/" , $name)){
        header("location: ../home.php?error=name");
        exit();
    }
    elseif(!preg_match("/^[a-zA-Z0-9]*$/" , $s_name)){
        header("location: ../home.php?error=surname");
        exit();
    }
    elseif($p_num2 == $p_num1){
        header("location: ../home.php?error=emptyfieldc");
        exit();
    }

    else{
        
            $sqla="SELECT * from users where email=? ";
            $stmt=mysqli_stmt_init($cnct);
            if(!mysqli_stmt_prepare($stmt,$sqla)){
                header("location: ../home.php?error=mysqlfail");
                exit();
            }   
            else {
                mysqli_stmt_bind_param($stmt,"s",$email);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $r_check= mysqli_stmt_num_rows($stmt);
                if($r_check >0){
                    header("location: ../home.php?error=usertaken");
                    exit();
                }
                else{
                    $sql4="INSERT INTO users (uname,usname,email,pwd,tel1,tel2) VALUES(?,?,?,?,?,?) ;";
                    $stmt=mysqli_stmt_init($cnct);
                    if(!mysqli_stmt_prepare($stmt,$sql4)){
                        header("location: ../home.php?error=dbfail");
                        exit();
                    }
                    else{
                        $hashed=password_hash($pwd,PASSWORD_DEFAULT);
                        if(!password_verify($pwd,$hashed)){
                            header("location: ../home.php?error=HASHfail");
                            exit();
                        }
                       else{
                        mysqli_stmt_bind_param($stmt,"ssssss",$name,$s_name,$email,$hashed,$p_num1,$p_num2);
                        mysqli_stmt_execute($stmt);
                    
                        $sql="INSERT INTO `users`(`name`, `email`, `password`)
                         VALUES ($name,$email,$hashed)";
                    
                        $query1 = mysqli_query($cnct,$sql);
                        if($query1)
                        {
                            session_start();
                            $_SESSION['name'] = $name;
                            header("location: ../redirect2.php");
                        }
                        else
                        {
                            header("location: ../home.php?error=Something went wrong");
                        }
                        

                        exit();
                       }
                        
                       
                    }
                }
            }
            mysqli_stmt_close($stmt);
            mysqli_close($cnct);   
    }
}
else{
    header("location: ../home.php?error=notisset");
    exit();
}
?>