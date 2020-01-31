<?php

$ID=(isset($_SESSION['ID']))?(int) $_SESSION['ID']:0;
$username=(isset($_SESSION['username']))?$_SESSION['username']:'';
$password=(isset($_SESSION['password']))?$_SESSION['password']:'';
$email=(isset($_SESSION['email']))?$_SESSION['email']:'';
$nb_recette=(isset($_SESSION['nb_recette']))?$_SESSION['nb_recette']:'';

include("functions.php");
include("constants.php");

