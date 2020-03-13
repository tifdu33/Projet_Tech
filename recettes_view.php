<html>
<head>
    <link type="text/css" rel="stylesheet" href="../view/css.css">
    <title>Projet Technologique</title>
</head>

    <body>
<?php if($is==1){ ?>


    <form method="post" action="./recettes.php" enctype="multipart/form-data">
    <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="recherche">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
    </nav>

    <a class="btn btn-primary" href="../controler/type_recettes.php?r=entree" role="button">Entrée</a>
    <a class="btn btn-primary" href="../controler/type_recettes.php?r=plat" role="button">Plat</a>
    <a class="btn btn-primary" href="../controler/type_recettes.php?r=gouter" role="button">Goûter</a>
    <p>
    <a class="btn btn-primary" href="../controler/type_recettes.php?r=dessert" role="button">Dessert</a>
    <a class="btn btn-primary" href="../controler/type_recettes.php?r=boisson" role="button">Boisson</a>
    <a class="btn btn-primary" href="../controler/type_recettes.php?r=diner" role="button">Diner</a>
    </form>

<?php } ?>

<?php if($is==2){?>
<form>
<table border='1'>
            <thead bgcolor='silver'>
                <tr>
                    <td>Nom de recette</td>
                </tr>
            </thead>

<?php 
while ($dataidrecette=$querysearch2->fetch()){
    $idrecette = $dataidrecette['id_recette'];
    $querysearch3 = $base -> prepare ("SELECT * FROM recette WHERE count = $idrecette");
    $querysearch3 -> execute();
    $data3=$querysearch3->fetch();
    $name=$data3['name'];
?>

            <tr> 
                <td> 
                    <a href="../controler/une_recette.php?r=<?php echo $idrecette ?>"><?php echo $name ?></a>
                </td>
            </tr>
        
<?php } ?>
</form>
        </table>
      </body>  </html>