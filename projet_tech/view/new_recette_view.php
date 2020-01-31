<html>
<head>
    <link type="text/css" rel="stylesheet" href="../view/formulaire.css">
    <title>Projet Technologique</title>
</head>
<body><div>
<?php if($is==1){?>

    <h1>Nouvelle Recette </h1>
	<form method="post" action="../controler/new_recette.php" enctype="multipart/form-data">
	<fieldset><legend>Descriptif de la recette</legend>
    <label for="name">Nom de la recette : </label>  <input name="name" type="text" id="name" /> <br />
    <div class="form-group">
    <label for="type">Type de recette :</label>
    <select class="form-control" id="type" name="type">
      <option value ="entree">Entrée</option>
      <option value ="plat">Plat</option>
      <option value ="gouter">Goûter</option>
      <option value ="dessert">Desssert</option>
      <option value ="diner">Diner</option>
      <option value ="boisson">Boisson</option>
    </select>
    </div>
    <p>
    <label for="nb">Nombre de personnes : </label>  <input name="nb" type="text" id="nb" /> <br />
    <p>
    <form method="post" action="../controler/new_recette.php" enctype="multipart/form-data">
	<fieldset><legend>Ingrédients</legend>
    <div class="form-group">
    <label for="type">Type d'ingrédients :</label>
    <p>
    <select class="form-control" id="type" name="type">
      <option value ="legumes" href="#">Légumes</option>
      <option value ="fruits"href="#">Fruits</option>
      <option value ="viandes"href="#">Viandes</option>
      <option value ="condiments"href="#">Condiments</option>
      <option value ="usuels"href="#">Usuels</option>
      <option value ="liquides"href="#">Liquides</option>
    </select>
    </div>
    <p>
    <div class="form-group">
    <select class="form-control" id="ingredient" name="ingredient">
      <option value ="legumes" href="#">Légumes</option>
      <option value ="fruits"href="#">Fruits</option>
      <option value ="viandes"href="#">Viandes</option>
      <option value ="condiments"href="#">Condiments</option>
      <option value ="usuels"href="#">Usuels</option>
      <option value ="liquides"href="#">Liquides</option>
    </select>
    </div>
    <p>
    <label for="nb">Quantité : </label>  <input name="nb" type="text" id="nb" /> <br />
    <div class="form-group">
    <select class="form-control" id="quantite" name="quantite">
      <option value ="L" href="#">L</option>
      <option value ="kg"href="#">kg</option>
      <option value ="pieces"href="#">pièces</option>
    </select>
    </div>
    <p><input type="submit" value="Ajouter un ingrédient" /></p>
</fieldset>
    </form>
    <p>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Ingrédients : </label><br />
    TABLEAU D'INGREDIENTS
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Etapes de la recette : </label>
    <p>
    <textarea class="form-control-box" id="etape" name="etape" rows="20" cols="40"></textarea>
    </div>
	<p><input type="submit" value="Ajouter" /></p></fieldset></form>
    <p>Cliquez <a href="../view/index_view.php">ici</a> pour retourner à la page d'acceuil</p>

<?php } ?>

<?php if($is==2){?>

    Recette ajoutée
	<form action="../view/index_view.php" method="POST">
	<INPUT type="submit" value="Retourner à la page d accueil"/>
	<INPUT type="hidden" name="attr" value="val"/>
	</form>

<?php } ?>

    </div></body></html>
