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

    <?php while($data1=$queryidingredient->fetch()){
    $id=$data1['id_ingredient'];
    $queryingredient = $base->prepare("SELECT nomingredient FROM ingredients WHERE id='$id'");
    $queryingredient->execute();
    $data2=$queryingredient->fetch();?>
      <table>
      <tr>
          <td><?php echo nl2br($data2['nomingredient']);?></td>
          <td><?php echo $data1['quantite'];?></td>
          <td><?php echo $data1['type_quantite'];?></td>
      </tr>
      
   </table>
            
            
    <?php } ?>

	</p>
    </fieldset> 
    <fieldset>
	<legend>Etapes de la recette</legend>
	<p>
    <?php echo nl2br($etape) ?>
	</p>
	</fieldset> 
    <p><input type="submit" value="Retour au menu des recettes" /></p></form>
    <p>Cliquez <a href="../view/index_view.php">ici</a> pour retourner à la page d\'acceuil</p>
    </div></body></html>
