<?php
session_start();
include("../model/identifiants.php");
include("../model/debut.php"); 
include("../view/index_view.php");
$recette = (int)$_GET['r'];






$query=$base->prepare("SELECT * FROM recette WHERE count='$recette'");
$query->execute();
$data=$query->fetch();
$name=$data['name'];
$nb=$data['nb'];
$type=$data['type'];
$etape=$data['etape'];

$queryidingredient = $base -> prepare("SELECT id_ingredient,quantite,type_quantite FROM asso WHERE id_recette='$recette'");
$queryidingredient->execute();

function accederbasenom($id){
    $queryingredient = $base->prepare("SELECT nomingredient FROM ingredients WHERE id='$id'");
    $queryingredient->execute();
    $data2=$queryingredient->fetch();
}
