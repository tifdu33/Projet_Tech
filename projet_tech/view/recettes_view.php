<html>
<head>
    <link type="text/css" rel="stylesheet" href="../view/css.css">
    <title>Projet Technologique</title>
</head>

    <body>
        <table border='1'>
            <thead bgcolor='silver'>
                <tr>
                    <td>Nom de recette</td>
                </tr>
            </thead>

<?php 
while ($data1=$query->fetch()){
    $name=$data1['name'];
    $count=$data1['count'];
?>

            <tr> 
                <td> 
                    <a href="../controler/une_recette.php?r=<?php echo $count?>"><?php echo $name ?></a>
                </td>
            </tr>
        
<?php }
$query->CloseCursor();
?>
        </table>
    </body>
</html>

