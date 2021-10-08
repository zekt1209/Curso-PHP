<?php include 'includes/header.php';

// in_array - Buscar elementos en un arreglo

$carrito = ["Tablet", "Computadora", "Television"];

var_dump(in_array("Tablet", $carrito));
var_dump(in_array("Audifonos", $carrito));

// Ordenar elementos de un arreglo
$numeros = [1, 4, 5, 9, 7, 8, 2];
sort($numeros);    // De menor a mayor
rsort($numeros);   // De mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

// Ordenar arreglo asociativo
$cliente = [
    "saldo" => 200,
    "tipo" => "Premium",
    "nombre" => "Juan"
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente);    // Ordena por valores (Alfabeticamente)
arsort($cliente);   // Ordena por valores (Invertido)
ksort($cliente);    // Ordena por llaves (Alfabeticamente)
krsort($cliente);   // Ordena por llaves (Invertido)

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
