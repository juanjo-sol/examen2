<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>Examen2</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div id="encabezado">
<br>
</br>
<div>

<br>
<h2>UNIVERSIDAD AUTONOMA DE CHIAPAS </h2>
<H2>FACULTAD DE CONTADURÍA Y ADMINISTRACION C-1</H2>
<h2>LICENCIATURA EN SISTEMAS COMPUTACIONALES</h2>

<h2> Sol Pérez Juan José 5°J </h2>
</div>
</div>

<h1>Tablas de multiplicar</h1>
<h3>Escribe un número del 1 al 10 y yo te diré la tabla de multiplicar.</h3>
<form action="#" method="post">
   <p>Escribe aquí el número: <input type="text" name="num" maxlength="2" size="2" /></p>
   <p><input type="submit" value="Ver tabla de multiplicar." /></p>
</form>
<?php  
$n=$_POST['num'];
if ($n<1 or $n>15) {
    echo "no has escrito un nůmero entre el 1 y el 10.";
    }
else {
     echo "<h4>Tabla del $n:</h4>";
     $i=1;
     while ($i<=10) {
           echo "$n x $i = ".$n*$i."<br/>";
           $i++;
           } 
     }
?>

<H1>Ejemplo de formulario. Comparo números</H1> 
<FORM ACTION="ejer1.php" METHOD="GET"> 
   Introduzca el primer número:
    <INPUT TYPE="text" NAME="numero1"><BR> 
   Introduzca el segundo número:
   <INPUT TYPE="text" NAME="numero2"><BR> 
   <INPUT TYPE="submit" VALUE="Compara"> 
   <INPUT TYPE="reset" VALUE="Limpia">
</FORM> 

<form action="ejer5.php" method="POST">
        <h1>CALCULAR PEDIDO DE GLOBITOS</h1>
        <select name="producto">
            <option value="GLOBOS METALICOS DE NÚMEROS GIGANTES">GLOBOS METALICOS DE NÚMEROS GIGANTES</option>
            <option value="GLOBOS PERSONALIZADOS CON MENSAJE">GLOBOS PERSONALIZADOS CON MENSAJE</option>
            <option value="GLOBOS GIGANTES DECORADOS CON TELAS Y ETIQUETAS">GLOBOS GIGANTES DECORADOS CON TELAS Y ETIQUETAS</option>
        </select>
        <label for="">Precio:</label>
        <input type="text" name="precio">
        <label for="">Forma de Pago</label>
        <select name="formapago" >
            <option value="Contado">Contado</option>
            <option value="Crédito">Crédito</option>
        </select>
        <input type="submit" value="CALCULAR">

    </form>

    <form action="ejer2.php" method="post">
  <h3>sumatoria</h3>
  Introduzca la cadena del número:
    <INPUT TYPE="text" NAME="numeros"><BR> 
   <INPUT TYPE="submit" VALUE="Compara"> 
   <INPUT TYPE="reset" VALUE="Limpia">
</form>

</body>
</html>