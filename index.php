<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>2T POO Getters / Setters</h2>
    <?php
    require_once('./clases/Productos.php');
    echo "Hola mundo";
    echo "<br>";

    /* INSTANCIAR LA CLASE */
    $producto1=new Productos(100,"camisa",5,7.99);
    /* MODIFICAR PRECIO CAMISA */
    $producto1->setPrecio(7.95);
    echo $producto1->getPrecio();

    echo "<br>";
    echo calcularTotal($total);


    ?>




</body>
</html>