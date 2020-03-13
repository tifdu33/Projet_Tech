<?php
session_start();
include("../model/identifiants.php");
include("../model/debut.php"); 
include("../view/index_view.php");
$recette = $_GET['r'];

$query=$base->prepare("SELECT * FROM recette WHERE type = '$recette' ");
$query->execute();