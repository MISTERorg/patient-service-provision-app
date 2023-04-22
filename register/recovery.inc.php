<?php
if(isset($_POST['s-submit'])){

    require 'dbh.php';
    
    $q1=$_POST['q1'];
    $q2=$_POST['q2'];
    $q3=$_POST['q3'];
    $q4=$_POST['q4'];
    $q5=$_POST['q5'];
    $q6=$_POST['q6'];

    if( empty($q1) || empty($q2)  ) {
        header("location: ../home.php.php?error=emptyfield1");
        exit();
    }
    elseif(  empty($q3) && empty($q4) && empty($q5) && empty($q6) ){
        header("location: ../b_pwd.php.php?error=emptyfield2");
        exit();
    }
    elseif(!filter_var($q2,FILTER_VALIDATE_EMAIL)){
        header("location: ../b_pwd.php.php?error=email");
        exit();
    }

    else{
        $sqlb="SELECT * from users where question1=? and question2=? and question3=? and question4=? and question5=? and question6=? ;";
        $stmt1=mysqli_stmt_init($cnct);
        if(!mysqli_stmt_prepare($stmt1,$sqlb)){
            header("location: .../home.php.php?error=mysqlfail");
            exit();
        }   
        else {
            mysqli_stmt_bind_param($stmt1,"sssssss",$q1,$q2,$q3,$q4,$q5,$q6);
            mysqli_stmt_execute($stmt1);
            mysqli_stmt_store_result($stmt1);
            $r_check= mysqli_stmt_num_rows($stmt1);
            if($r_check >0){
                header("location: .../home.php.php?error=usertaken");
                exit();
            }
            else{
                $sql5="INSERT INTO  recover (question1,question2,question3,question4,question5,question6,question7) values (?,?,?,?,?,?,?)";
                $stmt1=mysqli_stmt_init($cnct);
                if(!mysqli_stmt_prepare($stmt1,$sql5)){
                    header("location: .../home.php.php?error=dbfail");
                    exit();
                }
                else{
                    $hashed=password_hash($pwd,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt1,"sssssss",$q1,$q2,$q3,$q4,$q5,$q6,$q7);
                    mysqli_stmt_execute($stmt1);
                    header("location: .../home.php.php?sql=sucess");
                    exit();
                }
            }
        }
        mysqli_stmt_close($stmt1);
        mysqli_close($cnct);
    }
    
}else{
    header("location ../home.php.");
    exit();
}