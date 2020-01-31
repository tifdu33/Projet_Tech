<?php
session_start();
include("../model/debut.php"); 
include("../model/identifiants.php");
include("../view/index_view.php");

if ($ID==0) erreur(ERR_IS_NOT_CO);

if(empty($_POST['name'])){
    $is=1;
}

else {
    $name=$_POST['name'];
    $nb=$_POST['nb'];
    $type=$_POST['type'];
    $etape=$_POST['etape'];
    $ingredients=$_POST['ingredients'];
	$query=$base->prepare('INSERT INTO recette(name,nb,type,ingredients,etape)VALUES(:name,:nb,:type,:ingredients,:etape)');
	$query->execute(array(
    'name' => $name,
    'nb' => $nb,
    'type' => $type,
    'ingredients' => $ingredients,
    'etape'=> $etape
    ));
    $is=2;
}