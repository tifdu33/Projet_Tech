<?php 
session_start();
include("../model/identifiants.php");
include("../model/debut.php");
include("../view/index_view.php");

if (!isset($_POST['recherche'])){
$query=$base->prepare('SELECT * FROM recette WHERE 1 ');
$query->execute();
$is=1;
}

else {
    $nom = $_POST['recherche'];
    $querysearch = $base -> prepare ("SELECT id FROM ingredients WHERE nomingredient =  '$nom'");
    $querysearch -> execute();
    $dataidingredient = $querysearch−>fetch();
    $idingredient = $dataidingredient['id'];
    $querysearch2 = $base -> prepare ("SELECT id_recette FROM asso WHERE id_ingredient = $idingredient");
    $querysearch2 -> execute();
    $dataidrecette = $querysearch2 -> fetch();
    $idrecette = $dataidrecette['id_recette'];
    $querysearch3 = $base -> prepare ("SELECT * FROM recette WHERE count = $idrecette");
    $querysearch3 -> execute();
    $is=2;
}

