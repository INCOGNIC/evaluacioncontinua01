<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular compra tienda en linea</title>
</head>
<body>
    <h1>Resultado de la Compra</h1>
    <?php
    $precio1 = 100;
    $cantidad1 = 2; 

    $precio2 = 150; 
    $cantidad2 = 1; 

    $precio3 = 50;  
    $cantidad3 = 3;

    $tasaImpuesto = 10; 
    $descuento = 5;
    $subtotal = ($precio1 * $cantidad1) + ($precio2 * $cantidad2) + ($precio3 * $cantidad3);
    $montoDescuento = $subtotal * ($descuento / 100);
    $subtotalConDescuento = $subtotal - $montoDescuento;
    $montoImpuesto = $subtotalConDescuento * ($tasaImpuesto / 100);
    $totalFinal = $subtotalConDescuento + $montoImpuesto;
    echo "<p>Subtotal de la compra: S/ " . number_format($subtotal, 2) . "</p>";
    echo "<p>Descuento aplicado: S/ " . number_format($montoDescuento, 2) . "</p>";
    echo "<p>Subtotal después de descuento: S/ " . number_format($subtotalConDescuento, 2) . "</p>";
    echo "<p>Monto de impuestos: S/ " . number_format($montoImpuesto, 2) . "</p>";
    echo "<p>Total final de la compra: S/ " . number_format($totalFinal, 2) . "</p>";
    ?>
</body>
</html>
