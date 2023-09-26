<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$username=$_POST['username'];
echo "Username: $username <br><br>";

$nombrecompleto=$_POST['nombrecompleto'];
echo "Nombre y Apellidos: $nombrecompleto <br><br>";

$direccion=$_POST['direccion'];
echo "Dirección: $direccion <br><br>";

$poblacion=$_POST['poblacion'];
echo "Población: $poblacion <br><br>";

$provincia=$_POST['provincia'];
echo "Provincia: $provincia <br><br>";

$cp=$_POST['cp'];
echo "CP: $cp <br><br>";

$email=$_POST['email'];
echo "E-mail: $email <br><br>";

$telefono=$_POST['telefono'];
echo "Telefono: $telefono <br><br>";

if (isset($_POST['carta'])) {
    $carta=$_POST['carta'];
    echo "Carta: <br> <ul>";
    foreach ($carta as $hamburguesa) {
        echo "<li>$hamburguesa</li> <br>";
    }
    echo "</ul><br>";
}

$metodopago=$_POST['metodopago'];
echo "Metodo de pago: $metodopago <br><br>";

$recogida=$_POST['recogida'];
echo "Modalidad de Recogida: $recogida <br><br>";

if (isset($_POST['obserbaciones'])) {
    $obserbaciones=$_POST['obserbaciones'];
    echo "Obserbaciones: $obserbaciones <br><br>";
}


?>

<form action="index.php" method="get">
    <input type="hidden" name="username" id="username" value="<?php echo $username?>">
    <input type="hidden" name="nombrecompleto" id="nombrecompleto" value="<?php echo $nombrecompleto?>">
    <input type="hidden" name="telefono" id="telefono" value="<?php echo $telefono?>">
    <input type="hidden" name="direccion" id="direccion" value="<?php echo $direccion?>">
    <input type="hidden" name="poblacion" id="poblacion" value="<?php echo $poblacion?>">
    <input type="hidden" name="provincia" id="provincia" value="<?php echo $provincia?>">
    <input type="hidden" name="cp" id="cp" value="<?php echo $cp?>">
    <input type="hidden" name="email" id="email" value="<?php echo $email?>">
    
    <?php
    if (isset($_POST['carta'])) {
        foreach ($carta as $hamburguesa) {
            echo '<input type="hidden" name="carta[]" id="carta" value="'. $hamburguesa .'">';
        }
    }
    ?>

    <input type="hidden" name="metodopago" id="metodopago" value="<?php echo $metodopago?>">
    <input type="hidden" name="recogida" id="recogida" value="<?php echo $recogida?>">
    <input type="hidden" name="obserbaciones" id="obserbaciones" value="<?php echo $obserbaciones?>">
    <input type="submit" value="Modificar pedido">
</form>


</body>
</html>