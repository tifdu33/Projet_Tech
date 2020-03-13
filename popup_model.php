
<?php
session_start();
include("../model/debut.php"); 
include("../model/identifiants.php");

if(isset($_POST['nb'])){
    $ing=$_POST['ingredient'];
    $queryidingredient = $base->prepare("SELECT id FROM ingredients WHERE nomingredient = '$ing' ");
    $queryidingredient->execute();
    $dataidingredient = $queryidingredient->fetch();

    $query=$base->prepare('INSERT INTO tempo(idingredient,nom,quantite,unite)VALUES(:idingredient,:nom,:quantite,:unite)');
	$query->execute(array(
    'idingredient' => $dataidingredient['id'],
    'nom' => $ing,
    'quantite' => $_POST['nb'],
    'unite' => $_POST['quantite']
    ));
}
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

