<html>
<head>
    <link type="text/css" rel="stylesheet" href="../view/css.css">
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
      <option value ="dessert">Dessert</option>
      <option value ="diner">Diner</option>
      <option value ="boisson">Boisson</option>
    </select>
    </div>
    <p>
    <label for="nb">Nombre de personnes : </label>  <input name="nb" type="text" id="nb" /> <br />
    <p>
      
    <SCRIPT LANGUAGE="JavaScript"> 
      function PopupCentrer(page,largeur,hauteur,options) 
      { 
        var top=(screen.height-hauteur)/2; 
        var left=(screen.width-largeur)/2; 
        window.open(page,"","top="+top+",left="+left+",width="+largeur+",height="+hauteur+","+options); 
      } 
      </SCRIPT> 

      <form>
      <input type='button' value='Ajouter les ingrédients' onClick='PopupCentrer("../controler/popup.php",500,500,"menubar=no,scrollbars=no,statusbar=no")'> 
      </form>

    
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
