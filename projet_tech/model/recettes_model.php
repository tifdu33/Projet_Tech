<?php 
session_start();
include("../model/identifiants.php");
include("../model/debut.php");
include("../view/index_view.php");


$query=$base->prepare('SELECT * FROM recette WHERE 1 ');
$query->execute();



