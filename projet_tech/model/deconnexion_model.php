<?php session_start();
session_destroy();
include("../model/debut.php"); 
include("../view/index_view.php"); 
if ($ID==0) erreur(ERR_IS_NOT_CO);