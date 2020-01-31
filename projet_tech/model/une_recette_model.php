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
$ingredients=$data['ingredients'];
$etape=$data['etape'];