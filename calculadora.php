<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>
    
    <form class="caja" action="calculadora.php" method="get">
        <h1>Calculadora</h1>
        <input type="text" name="numero1" value="" placeholder="Ingrese un numero">
        <input type="text" name="numero2" value="" placeholder="Ingrese otro numero">
        <div class="column">
            <input type="submit" name="Suma" value="Suma">
            <input type="submit" name="Resta" value="Resta">
            <input type="submit" name="Multiplicacion" value="Multiplicación">
            <input type="submit" name="Division" value="División">
        </div>
        <output type="number" name="">
    </form>
</body>
</html>

<?php
if (isset($_GET['Suma'])) {
    if (isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2']));
    {
        $numero1= $_GET['numero1'];            
        $numero2= $_GET['numero2'];
        echo $numero1 + $numero2;
    }
} elseif (isset($_GET['Resta'])) {
    if (isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2']));
    {
        $numero1= $_GET['numero1'];            
        $numero2= $_GET['numero2'];
        echo ($numero1 - $numero2);
    }
}
elseif (isset($_GET['Multiplicacion'])) {
    if (isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2']));
    {
        $numero1= $_GET['numero1'];            
        $numero2= $_GET['numero2'];
        echo ($numero1 * $numero2);
    }
} elseif (isset($_GET['Division'])) {
    if (isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2']));
    {
        $numero1= $_GET['numero1'];            
        $numero2= $_GET['numero2'];
        echo ($numero1 / $numero2);
    }
}else {
    echo "No se selecciono ningun operador";
}

?>