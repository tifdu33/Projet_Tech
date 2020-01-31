<html>
<head>
    <link type="text/css" rel="stylesheet" href="../view/css.css">
    <title>Projet Technologique</title>
</head>
<body><div>
<?php if($is==1){?>

        <h1> Vérification </h1>   
        <form method="post" action="../controler/confirm_email.php">
        <fieldset>
        <legend>Code de vérification</legend>
        <p>
        <label for="code">Code : </label><input name="code" type="text" id="code" /><br />
        </p>
        </fieldset> 
        <p><input type="submit" value="Vérification" /></p></form>
        <a href="../view/index_view.php">Retourner à la page d'acceuil</a>

<?php } ?>
        
<?php if($is==2){?>
        <p>C'est bon, t'es inscrit mec !</p>
        <p>Cliquez <a href="../controler/connexion.php">ici</a> pour te connecter</p>
        <p>Cliquez <a href="../view/index_view.php">ici</a> pour retourner à la page d'acceuil</p>
        <?php } ?>


<?php if($is==3){?>
        Code incorrect
        <form method="post" action="../controler/confirm_email.php">
        <fieldset>
        <legend>Code de vérification</legend>
        <p>
        <label for="code">Code : </label><input name="code" type="text" id="code" /><br />
        </p>
        </fieldset> 
        <p><input type="submit" value="Vérification" /></p></form>
        <a href="../view/index_view.php">Retourner à la page d'acceuil</a>
<?php } ?>

</div></body></html>
