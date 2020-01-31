<?php 
 session_start();
 include("../model/debut.php"); 
 include("../view/index_view.php"); 
 include("../model/identifiants.php");
if(!isset($_POST['code'])){
    $is=1;
}
else{
    if($_POST['code']==$_SESSION['code']){
        $password=password_hash($_SESSION['password'],PASSWORD_DEFAULT);
        $query=$base->prepare('INSERT INTO compte(username,email,password,code)VALUES(:username,:email,:password,:code)');
        $query->execute(array(
        'username' => $_SESSION['username'],
        'email' => $_SESSION['email'],
        'password' => $password,
        'code' => $_SESSION['code']
        ));
        $is=2;
    }     
    else{
        $is=3;
    } 
}