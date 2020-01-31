<html>
<head>
    <link type="text/css" rel="stylesheet" href="../view/css.css">
    <title>Projet Technologique</title>
</head>
<body><div>
<h1> Connexion </h1>

<?php if($is==1){?>


    <form method="post" action="connexion.php">
	<fieldset>
	<legend>Identifiants</legend>
	<p>
	<label for="username">Username : </label><input name="username" type="text" id="username" /><br />
	</p>
	<p>
	<label for="password">Mot de Passe : </label><input type="password" name="password" id="password" />
	</p>
	</fieldset> 
	<p><input type="submit" value="Connexion" /></p></form>
	<a href="./register.php">Pas encore inscrit ?</a>

<?php } ?>

<?php if($is==2){?>
    <p>une erreur s\'est produite pendant votre identification.
	Vous devez remplir tous les champs</p>
	<p>Cliquez <a href="./connexion.php">ici</a> pour revenir</p>
<?php } ?>

<?php if($is==3){?>

            <p> Bienvenue <?php echo $data['username'] ?> , 
			vous êtes maintenant connecté!</p>
			<p>Cliquez <a href="../view/index_view.php">ici</a> 
			pour revenir à la page d accueil</p>
<?php } ?>

<?php if($is==4){?>
            <p>Pseudo ou mot de passe incorrect.</p>
            <p>Cliquez <a href="./connexion.php">ici</a> 
	   	 	pour revenir à la page précédente
	    	<br /><br />Cliquez <a href="../view/index_view.php">ici</a> 
	   		pour revenir à la page d accueil</p>
<?php } ?>       

    </div></body></html>
