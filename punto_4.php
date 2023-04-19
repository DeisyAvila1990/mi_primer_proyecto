<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <label for="">Ingrese la cantidad de veces que desea imprimir</label>
        <input type="number" name="cantidad" placeholder="Ingrese Cantidad">
        <input type="submit" name="datos" value="Generar Ciclo"> <br>
    </form>
</body>

</html>

<?php
//include 'punto_4.html';

if (isset($_POST['datos'])) {
    $a = 1;
    $cant = $_POST['cantidad'];

    while ($a <= $cant) {
        echo 'Hola Mundo' . $a . '<br>';
        $a++;
    }

}
?>