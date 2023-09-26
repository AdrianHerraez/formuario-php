<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>HAMBURGUESERIA ADRI</h1>
    
    <form action="check.php" method="post">
        
        <label for="username">Username:</label>
        <abbr title="obligatorio" aria-label="obligatorio"></abbr>
        <input type="text" name="username" id="username" placeholder="Introuduce tu username..." <?php if(isset($_GET['username'])) {echo "value='"  . $_GET['username'] . "'";}?>>
        <br><br>

        <label for="nombrecompleto">Nombre y Apellidos:</label>
        <abbr title="obligatorio" aria-label="obligatorio"></abbr>
        <input style="width: 230px;" type="text" name="nombrecompleto" id="nombrecompleto" placeholder="Introuduce tu nombre y apellidos..." <?php if(isset($_GET['nombrecompleto'])) {echo "value='"  . $_GET['nombrecompleto'] . "'";}?>>
        <br><br>

        <fieldset id="datoscliente" style="max-width:fit-content;">
            <legend for="datoscliente">Datos</legend>
            <label for="direccion">Dirección</label>
            <abbr title="obligatorio" aria-label="obligatorio"></abbr>
            <input type="text" name="direccion" id="direccion" placeholder="Introuduce tu dirección" <?php if(isset($_GET['direccion'])) {echo "value='"  . $_GET['direccion'] . "'";}?>>
            <br><br>
            <label for="poblacion">Población</label>
            <abbr title="obligatorio" aria-label="obligatorio"></abbr>
            <input type="text" name="poblacion" id="poblacion" placeholder="Introuduce tu población" <?php if(isset($_GET['poblacion'])) {echo "value='"  . $_GET['poblacion'] . "'";}?>>
            <br><br>
            <label for="provincia">Provincia</label>
            <abbr title="obligatorio" aria-label="obligatorio"></abbr>
            <input type="text" name="provincia" id="provincia" placeholder="Introuduce tu provincia" <?php if(isset($_GET['provincia'])) {echo "value='"  . $_GET['provincia'] . "'";}?>>
            <br><br>
            <label for="cp">CP</label>
            <abbr title="obligatorio" aria-label="obligatorio"></abbr>
            <input type="text" name="cp" id="cp" placeholder="Introuduce tu Código Postal" <?php if(isset($_GET['cp'])) {echo "value='"  . $_GET['cp'] . "'";}?>>
            <br>
        </fieldset>
        <br>
        
        <label for="e-mail">E-mail:</label>
        <abbr title="obligatorio" aria-label="obligatorio"></abbr>
        <input type="email" name="email" id="email" placeholder="Introuduce tu e-mail..." <?php if(isset($_GET['email'])) {echo "value='"  . $_GET['email'] . "'";}?>>
        <br><br>

        <label for="telefono">Telefono:</label>
        <abbr title="obligatorio" aria-label="obligatorio"></abbr>
        <input type="number" name="telefono" id="telefono" <?php if(isset($_GET['telefono'])) {echo "value='"  . $_GET['telefono'] . "'";}?>>        
        <br><br>

        <fieldset id="carta" style="max-width:fit-content;">
            <legend for="carta">Carta</legend>
            <input type="checkbox" name="carta[]" id="hamburguesa1" value="Hamburguesa Clásica" <?php if(isset($_GET['carta']) && in_array('Hamburguesa Clásica' , $_GET['carta'])) {echo "checked";}?>>
            <label for="hamburguesa1">Hamburguesa Clásica</label>
            <input type="checkbox" name="carta[]" id="hamburguesa2" value="Hamburguesa de Queso" <?php if(isset($_GET['carta']) && in_array('Hamburguesa de Queso' , $_GET['carta'])) {echo "checked";}?>>
            <label for="hamburguesa2">Hamburguesa de Queso</label>
            <input type="checkbox" name="carta[]" id="hamburguesa3" value="Hamburguesa BBQ" <?php if(isset($_GET['carta']) && in_array('Hamburguesa BBQ' , $_GET['carta'])) {echo "checked";}?>>
            <label for="hamburguesa3">Hamburguesa BBQ</label>
            <br>
            <input type="checkbox" name="carta[]" id="hamburguesa4" value="Hamburguesa de Pollo" <?php if(isset($_GET['carta']) && in_array('Hamburguesa de Pollo' , $_GET['carta'])) {echo "checked";}?>>
            <label for="hamburguesa4">Hamburguesa de Pollo</label>
            <input type="checkbox" name="carta[]" id="hamburguesa5" value="Hamburguesa de Ternera Angus" <?php if(isset($_GET['carta']) && in_array('Hamburguesa de Ternera Angus' , $_GET['carta'])) {echo "checked";}?>>
            <label for="hamburguesa5">Hamburguesa de Ternera Angus</label>
            <input type="checkbox" name="carta[]" id="hamburguesa6" value="Hamburguesa Vegetariana" <?php if(isset($_GET['carta']) && in_array('Hamburguesa Vegetariana' , $_GET['carta'])) {echo "checked";}?>>
            <label for="hamburguesa6">Hamburguesa Vegetariana</label>
            <br>
            <input type="checkbox" name="carta[]" id="hamburguesa7" value="Hamburguesa de Pescado" <?php if(isset($_GET['carta']) && in_array('Hamburguesa de Pescado' , $_GET['carta'])) {echo "checked";}?>>
            <label for="hamburguesa7">Hamburguesa de Pescado</label>
            <input type="checkbox" name="carta[]" id="hamburguesa8" value="Hamburguesa de Tofu" <?php if(isset($_GET['carta']) && in_array('Hamburguesa de Tofu' , $_GET['carta'])) {echo "checked";}?>>
            <label for="hamburguesa8">Hamburguesa de Tofu</label>
            <input type="checkbox" name="carta[]" id="hamburguesa9" value="Hamburguesa de Champiñones Portobello" <?php if(isset($_GET['carta']) && in_array('Hamburguesa de Champiñones Portobello' , $_GET['carta'])) {echo "checked";}?>>
            <label for="hamburguesa9">Hamburguesa de Champiñones Portobello</label>
            <br>
            <input type="checkbox" name="carta[]" id="hamburguesa10" value="Hamburguesa de Jalapeños" <?php if(isset($_GET['carta']) && in_array('Hamburguesa de Jalapeños' , $_GET['carta'])) {echo "checked";}?>>
            <label for="hamburguesa10">Hamburguesa de Jalapeños</label>
            <input type="checkbox" name="carta[]" id="hamburguesa11" value="Hamburguesa Hawaiana" <?php if(isset($_GET['carta']) && in_array('Hamburguesa Hawaiana' , $_GET['carta'])) {echo "checked";}?>>
            <label for="hamburguesa11">Hamburguesa Hawaiana</label>
            <input type="checkbox" name="carta[]" id="hamburguesa12" value="Hamburguesa con Huevo" <?php if(isset($_GET['carta']) && in_array('Hamburguesa con Huevo' , $_GET['carta'])) {echo "checked";}?>>
            <label for="hamburguesa12">Hamburguesa con Huevo</label>
            <br>
        </fieldset>
        <br>

        <label for="metodopago">Metodo de pago:</label>
        <abbr title="obligatorio" aria-label="obligatorio"></abbr>
        <select name="metodopago" id="metodopago">
            <option value="" disabled <?php if(!isset($_GET['metodopago'])) {echo "selected";}?>>Selecciona una opción de pago</option>
            <option value="efectivo" <?php if(isset($_GET['metodopago']) && $_GET['metodopago']=='efectivo') {echo "selected";}?>>Efectivo</option>
            <option value="visa" <?php if(isset($_GET['metodopago']) && $_GET['metodopago']=='visa') {echo "selected";}?>>VISA</option>
            <option value="paypal" <?php if(isset($_GET['metodopago']) && $_GET['metodopago']=='paypal') {echo "selected";}?>>PayPal</option>
        </select>
        <br><br>

        <fieldset id="recogida" style="max-width:fit-content;">
            <legend for="recogida">Modalidad de Recogida</legend>
            <input type="radio" name="recogida" id="Establecimiento" value="Establecimiento" <?php if(isset($_GET['recogida']) && $_GET['recogida']=='Establecimiento') {echo "checked";}?>>
            <label for="Establecimiento">Establecimiento</label>
            <br>
            <input type="radio" name="recogida" id="Domicilio" value="Domicilio" <?php if(isset($_GET['recogida']) && $_GET['recogida']=='Domicilio') {echo "checked";}?>>
            <label for="Domicilio">Domicilio</label>
            <br>
        </fieldset>
        <br>

        <label for="obserbaciones">Obserbaciones</label>
        <br>
        <textarea name="obserbaciones" id="obserbaciones" cols="50" rows="4" style="resize: none;"><?php if(isset($_GET['obserbaciones'])) {echo $_GET['obserbaciones'];}?></textarea>

        <br><br>
        
        <input type="submit" value="Enviar">

    </form>

</body>
</html>