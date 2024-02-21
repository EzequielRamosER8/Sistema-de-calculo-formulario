<?php
if (isset($_POST['submit'])) {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $impuesto = $_POST['impuesto'];
    $cantidad = $_POST['cantidad'];

    // Cálculo del producto de entrada
    $producto_de_entrada = $precio * $cantidad;

    // Cálculo del precio neto
    $precio_neto = $producto_de_entrada + ($producto_de_entrada * ($impuesto / 100));

    // Suma de los totales de todos los productos
    if (isset($_POST['total_acumulado'])) {
        $total_acumulado = $_POST['total_acumulado'];
        $total_acumulado += $precio_neto;
    } else {
        $total_acumulado = $precio_neto;
    }



    // Mostrar resultados
    echo "<h2>Resultado:</h2>";
    echo "<p>Producto: $producto</p>";
    echo "<p>Cantidad: $cantidad</p>";
    echo "<p>Precio unitario: $precio</p>";
    echo "<p>Producto de entrada: $producto_de_entrada</p>";
    echo "<p>Impuesto: $impuesto%</p>";
    echo "<p>Precio Neto: $precio_neto</p>";
    echo "<p>Total acumulado: $total_acumulado</p>";

    // Puedes utilizar $total_acumulado en el formulario HTML para mantener el valor entre envíos

    // by Ramos Ezequiel
}
?>
