<html>
<head>
    <link type="text/css" rel="stylesheet" href="../view/css.css">
    <title>Projet Technologique</title>
</head>
<body><div>
    <h1> Recette : <?php echo $name ?> </h1>
    <form method="post" action="../controler/recettes.php">
    <p>
    Nombre de personnes : <?php echo $nb ?>
    </p>
    <p>
    Type de recette : <?php echo $type ?>
	</p>
	<fieldset>
	<legend>Ingrédients</legend>
	<p>
    <?php echo $ingredients ?>
	</p>
    </fieldset> 
    <fieldset>
	<legend>Etapes de la recette</legend>
	<p>
    <?php echo $etape ?>
	</p>
	</fieldset> 
    <p><input type="submit" value="Retour au menu des recettes" /></p></form>
    <p>Cliquez <a href="../view/index_view.php">ici</a> pour retourner à la page d\'acceuil</p>
    </div></body></html>
