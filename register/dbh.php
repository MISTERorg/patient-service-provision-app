<?php
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if (!$conn){
    die("connection failed:". mysqli_connect_error());
}
$sql=mysqli_select_db($conn,"mister");
if (!$sql){
    $sql1="CREATE DATABASE mister";
    mysqli_query($conn,$sql1);
    if (!mysqli_query($conn,$sql1)){
        die("connection failed:". mysqli_connect_error());        
    }else{
        $sql=mysqli_select_db($conn,"mister");
        if(!$sql){
            die("connection failed:". mysqli_connect_error());        
        }
    }
}
$cnct=mysqli_connect($servername,$username,$password,"mister");
if (!$cnct){
    die("connection failed:". mysqli_connect_error());
}
else{
    $sql3="describe users";
    $v=mysqli_query($cnct,$sql3);
    if(!$v){
        $sql2="CREATE TABLE users (usid INTEGER PRIMARY KEY AUTO_INCREMENT, uname VARCHAR(30), usname VARCHAR(30), email VARCHAR(40), pwd  char(60),tel1 char(25),tel2 char(25) ,mesage text  )";
        $db=mysqli_query($cnct,$sql2);
        if(!$db){
            die("connection failed:". mysqli_error($db));        
        }else{
        $sql3="CREATE table recover(question1 varchar(225),question2 varchar(225),question3 varchar(225),question4 varchar(225),question4 varchar(225),question5 varchar(225),question6 varchar(225))";
        $db2=mysqli_query($cnct,$sql3);
        if(!$db2){
            die("connection failed:". mysqli_error($db2));        
            exit();
            }
            $sql5="INSERT INTO `register`(`name`, `email`, `password`, `number`, `address`)
            VALUES ('".$name."','".$email."','".$password."','".$number."','".$address."')"; 
            $db5=mysqli_query($cnct,$sql5);
            if(!$db5){
                die("connection failed:". mysqli_error($db5));        
                exit();
                }      
        }
    
    }
}

?>