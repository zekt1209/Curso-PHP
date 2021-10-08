<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = ["Juan", "Pedro", "Alan"];
$clientes4 = [
    "nombre" => "Eduardo",
    "saldo" => "100"
];

// Empty - Revisa si un arreglo esta vacio
var_dump(empty($clientes));
var_dump(empty($clientes2));
var_dump(empty($clientes3));
echo "<br>";

// Isset - Revisar si un arreglo esta creado o una propiedad esta definida

var_dump(isset($clientes));
var_dump(isset($clientes2));
var_dump(isset($clientes5));
echo "<br>";
var_dump(isset($clientes4["nombre"]));
var_dump(isset($clientes4["codigo"]));


include 'includes/footer.php';
