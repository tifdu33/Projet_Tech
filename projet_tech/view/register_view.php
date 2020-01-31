<html>
<head>
    <link type="text/css" rel="stylesheet" href="../view/css.css">
    <title>Projet Technologique</title>
</head>
<body><div>
<h1> Inscription </h1>

<?php if($is==1){?>
<form method="post" action="./register.php" enctype="multipart/form-data">
	<fieldset><legend>Identifiants</legend>
	<p>
	<label for="username"> Username : </label>  <input name="username" type="text" id="username" /> <br />
	<p>
	<label for="password"> Password : </label><input type="password" name="password" id="password" /><br />
	<p>
	<label for="confirm"> Confirm password : </label><input type="password" name="confirm" id="confirm" /><br />
	<p>
	<label for="email"> Email : </label><input type="email" name="email" id="email" /><br />
	</fieldset>
	<p><input type="submit" value="S'inscrire" /></p></form>
<?php }
else { ?>
<?php if($i==0){ ?>
        <form>
            Veuillez confimer votre adresse mail en cliquant ici :
            <a href = "http://tiffany.belley.emi.u-bordeaux.fr/projet_tech/controler/confirm_email.php ">
            http://tiffany.belley.emi.u-bordeaux.fr/projet_tech/controler/confirm_email.php 
			</a>
			<p>et en renseignant dans le champ prévu à cet effet le code suivant : <?php echo $code ?> </p>
			</form>

        <?php }
		else{?>

			<h1>Inscription interrompue</h1>
			<p>Une ou plusieurs erreurs se sont produites pendant l incription</p>
			<p><?php echo $i ?> erreur(s)</p>
			<p><?php echo $pseudo_erreur1 ?></p>
			<p><?php echo $pseudo_erreur2 ?></p>
			<p><?php echo $mdp_erreur ?></p>
       
			<p>Cliquez <a href="./register.php">ici</a> pour recommencer</p>
			<p>Cliquez <a href="./index.php">ici</a> pour retourner à la page d\'acceuil</p>
		<?php } ?>
<?php } ?>
        </div></body></html>
