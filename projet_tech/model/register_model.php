<?php
session_start();
include("../model/debut.php"); 
include("../view/index_view.php");
include("../model/identifiants.php");
if ($ID!=0) erreur(ERR_IS_CO);
$is=0;
if (empty($_POST['username'])) {
 $is=1;
} 
else {
	$username=$_POST['username'];
	$password1=$_POST['password'];
	$password2=$_POST['confirm'];
	$email=$_POST['email'];
	$code=rand();
	$i = 0;
	$pseudo_erreur1 = NULL;
    $pseudo_erreur2 = NULL;
    $mdp_erreur = NULL;
    $query=$base->prepare("SELECT * FROM compte WHERE username='$username' ");
    $query->execute();
    $pseudo_free=($query->fetchColumn()==0)?1:0;
	$query->CloseCursor();
    if(!$pseudo_free)
    {
        $pseudo_erreur1 = "Votre pseudo est déjà utilisé par un membre";
        $i++;
    }

    if (strlen($username) < 3 || strlen($username) > 15)
    {
        $pseudo_erreur2 = "Votre pseudo est soit trop grand, soit trop petit";
        $i++;
	}
	
    if ($password1 != $password2 || empty($password1) || empty($password2))
    {
        $mdp_erreur = "Votre mot de passe et votre confirmation diffèrent, ou sont vides";
        $i++;
    }
    if($i==0){
        $_SESSION['username']=$username;
			$_SESSION['password']=$password1;
			$_SESSION['email']=$email;
            $_SESSION['code']=$code;
    }
}