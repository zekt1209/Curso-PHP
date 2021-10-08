<?php include 'includes/header.php';

// Equivalentes a los objetos en Javascript

$cliente = [
    "nombre" => "Juan",
    "saldo" => "200",
    "informacion" => [
        "tipo" => "Premium",
        "disponible" => 100
    ]
];

echo "<pre>";
var_dump($cliente["informacion"]);
echo "</pre>";

echo "Nombre del cliente: " . $cliente["nombre"];
echo "<br>";
echo "Tipo de cliente: " . $cliente["informacion"]["tipo"];

// Agregar algun otro campo al arreglo 
$cliente["codigo"] = 216132659;

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';
