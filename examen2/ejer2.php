
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>descomponer numeros en unidades</title>
</head>
<body>

<?php
//$numero=intval($_GET['numero']);
$numero=$_POST['numeros'];
//$numero=1325;

$longitud=strlen($numero);

$vector[$longitud];//longitud
for ($i=0;$i<$longitud;$i++)
    {
        echo  $vector[$i]=substr($numero,$i,1);
        echo "El número ("$numero[0]")";
        echo "El número ("$numero[1]")";
        echo "El número ("$numero[2]")";
        echo "El número ("$numero[3]")";
        
    }
    
    ?>
</body>
</html>