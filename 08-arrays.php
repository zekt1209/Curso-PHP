<?php include 'includes/header.php';

// Creacion de un array
// Usualmente usado en Laravel
$carrito = ['Celular', "Tablet", "Computadora"];

// Util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Acceder a un elemento del array
echo $carrito[1];

// Añade un nuevo elemento en el indice 3 del arreglo
$carrito[3] = "Keyboard";

// Añadir un nuevo elemento al final
array_push($carrito, "Audifonos");

// Añadir un nuevo elemento al inicio
array_unshift($carrito, "Smartwatch");

echo "<pre>";
var_dump($carrito);
echo "</pre>";

// Otra manera de crear arrays
// Usualmente usado en Wordpress
$clientes = array("Cliente 1", "Cliente 2", "Cliente 3");


include 'includes/footer.php';
