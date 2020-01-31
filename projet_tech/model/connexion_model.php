<?php
session_start();
include("../model/debut.php"); 
include("../view/index_view.php");
include("../model/identifiants.php");

if ($ID!=0) erreur(ERR_IS_CO);

if(!isset($_POST['username'])){
    $is=1;
}
else{
	if (empty($_POST['username']) || empty($_POST['password']) ) 
    {
       $is=2;
    }
    else 
    {
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query=$base->prepare("SELECT * FROM compte WHERE username='$username' ");
		$query->execute();
		$data=$query->fetch();

		if(password_verify($password,$data['password'])){
			$_SESSION['username']=$username;
			$_SESSION['ID']=$data['ID'];
			
			$is=3;
		}
		else {
			$is=4;
		}
		$query->CloseCursor();
    }
}