<?php
try
{
$base = new PDO ('mysql:host=dbserver;dbname=tbelley','tbelley','jocelyne1999');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

