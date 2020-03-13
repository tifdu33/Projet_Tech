<?php 
session_start();
include("../model/identifiants.php");
include("../model/debut.php");
include("../view/index_view.php");

if (!isset($_POST['recherche'])){
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
        $is=2;
    }