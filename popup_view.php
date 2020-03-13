<html>
<head>
    <link type="text/css" rel="stylesheet" href="../view/css.css">
    <title>Projet Technologique</title>
</head>

<body>
<form method="post" action="../controler/popup.php" enctype="multipart/form-data">
	<fieldset><legend>Ingrédients</legend>
    <div class="form-group">
    <label for="type">Type d'ingrédients :</label>
    
   <p>
<div class="dropdown">
  <label class="dropbtn">Catégorie</label>
  <div class="dropdown-content">
    <a href="../controler/popup.php?x=legumes">Légumes</a>
    <a href="../controler/popup.php?x=fruits">Fruits</a>
    <a href="../controler/popup.php?x=viandes">Viandes</a>
    <a href="../controler/popup.php?x=condiments">Condiments</a>
    <a href="../controler/popup.php?x=usuels">Usuels</a>
    <a href="../controler/popup.php?x=liquides">Liquides</a>
  </div>
</div> 

    <p>
      
    <div class="form-group">
    <select class="form-control" id="ingredient" name="ingredient">
      <?php while($data=$query->fetch()){
         $nom=$data['nomingredient'];?>
      <option value ="<?php echo $nom ?>" > <?php echo $nom ?></option>
     <?php } ?>
       
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

    <?php while($data=$affiche->fetch()){?>
      <table>
      <tr>
          <td><?php echo $data['nom'];?></td>
          <td><?php echo $data['quantite'];?></td>
          <td><?php echo $data['unite'];?></td>
      </tr>
      
   </table>
            
            
    <?php } ?>
<p>
    </form>

    </body>
    </html>