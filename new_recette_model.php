<?php
session_start();
include("../model/debut.php"); 
include("../model/identifiants.php");
include("../view/index_view.php");



if ($ID==0) erreur(ERR_IS_NOT_CO);

if(empty($_POST['name'])){
    $query= $base->prepare('DELETE FROM tempo');
    $query->execute();
    $is=1;
    if(!isset($_GET['x'])){
        $query=$base->prepare('SELECT nomingredient FROM ingredients WHERE type="Legumes"');
        $query->execute();
    }
    else{

        if($_GET['x']=="legumes"){
            $query=$base->prepare('SELECT nomingredient FROM ingredients WHERE type="Legumes"');
            $query->execute();
        }

        if($_GET['x']=="fruits"){
            $query=$base->prepare('SELECT nomingredient FROM ingredients WHERE type="Fruits"');
            $query->execute();
        }
        if($_GET['x']=="viandes"){
            $query=$base->prepare('SELECT nomingredient FROM ingredients WHERE type="Viandes"');
            $query->execute();
        }
        if($_GET['x']=="condiments"){
            $query=$base->prepare('SELECT nomingredient FROM ingredients WHERE type="Condiments"');
            $query->execute();
        }
        if($_GET['x']=="usuels"){
            $query=$base->prepare('SELECT nomingredient FROM ingredients WHERE type="Usuels"');
            $query->execute();
        }
        if($_GET['x']=="liquides"){
            $query=$base->prepare('SELECT nomingredient FROM ingredients WHERE type="Liquides"');
            $query->execute();
        }
    }
    $affiche=$base->prepare('SELECT nom,quantite,unite FROM tempo WHERE 1');
    $affiche->execute();

    
}

else {
    $name=$_POST['name'];
    $nb=$_POST['nb'];
    $type=$_POST['type'];
    $etape=$_POST['etape'];
	$query=$base->prepare('INSERT INTO recette(name,nb,type,etape)VALUES(:name,:nb,:type,:etape)');
	$query->execute(array(
    'name' => $name,
    'nb' => $nb,
    'type' => $type,
    'etape'=> $etape
    ));

    $queryrecette= $base->prepare("SELECT count FROM recette WHERE name='$name'");
    $queryrecette->execute();
    $data1=$queryrecette->fetch();
    $id_recette = $data1['count'];
    
  


    $query = $base->prepare('SELECT idingredient,quantite,unite FROM tempo WHERE 1');
    $query->execute();
    $queryinsert = $base->prepare('INSERT INTO asso(id_ingredient,id_recette,quantite,type_quantite)VALUES(:id_ingredient, :id_recette, :quantite, :type_quantite)');
    while($data=$query->fetch()){
        $id_ingredient=$data['idingredient'];
        $quantite = $data['quantite'];
        $type_quantite = $data['unite'];
        $queryinsert->execute(array(
            'id_ingredient' => $id_ingredient,
            'id_recette' => $id_recette,
            'quantite' => $quantite,
            'type_quantite' => $type_quantite
        ));
    }


    $is=2;
    }