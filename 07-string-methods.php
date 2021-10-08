<?php include 'includes/header.php';

$nombreCliente = " Juan Pablo ";

// Conocer la extension de un string
echo strlen($nombreCliente);
echo "<br>";
var_dump($nombreCliente);
echo "<br>";

// Eliminar los espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);
echo "<br>";

// Convertir un texto en mayusculas
echo strtoupper($nombreCliente);
echo "<br>";

// Convertir un texto en minusculas
echo strtolower($nombreCliente);
echo "<br>";

$mail1 = "correo@correo.com";
$mail2 = "Correo@correo.com";

//strtolower($mail1);
//strtolower($mail2);

var_dump(strtolower($mail1) === strtolower($mail2));
echo "<br>";
echo str_replace("Juan", "J", $nombreCliente);
echo "<br>";

// Revisar si un string existe o no
echo strpos($nombreCliente, "Pablo");
echo "<br>";

// Concatenar strings con variables

$tipoCliente = "Premium";

echo "El cliente " . $nombreCliente . " es " . $tipoCliente;
echo "<br>";

include 'includes/footer.php';
