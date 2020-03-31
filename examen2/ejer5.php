<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>



<?php
$producto =$_POST['producto'];
$precio =$_POST['precio'];
$subtotal = $precio;
$formapago =$_POST['formapago'];

if($precio < '100'){
    echo 'Compra mas O te cobraremos los Abusivos 150 pesos de gastos de envio';
}
else{
    if($precio > '100' &&  '400' )
    {
        echo 'Haz una compra de 500 pesos y tu envio sera gratis';
    }
}

?>
 <h1>Total a pagar:</h1>
    <p>Producto: <?php echo $producto;?></p>
    <p>Precio: <?php echo $precio;?></p>
    <p>Forma De Pago: <?php echo $formapago?></p>
    <p>subtotal: <?php echo $subtotal ?></p>
    <p>Total: <?php echo $subtotal ?></p>



</body>
</html>