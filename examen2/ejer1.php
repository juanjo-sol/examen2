<html> 
<head> 
   <title>Ejemplo de PHP</title> 
</head> 
<body> 
<H1>Comparación de números</H1> 
<p>
<?php 
/* LEER VARIABLES DE $_GET */
$n1=intval($_GET['numero1']);
$n2=intval($_GET['numero2']);

if ($n1>$n2){
    echo "El número (".$n1.") es mayor que (".$n2.")";
}
elseif ($n1==$n2){
    echo "El número (".$n1.") es igual a (".$n2.")";
}
else{
    echo "El número (".$n1.") es menor que (".$n2.")";
}
 ?>
</p>
<br> 
</body> 
</html>