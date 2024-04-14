<?php


use clases\Persona as per;
use clases\Estudiante;


require_once 'clases/persona.php';


$persona1 = new per('Juan', 25, 'Mexico');
$persona1->setNombre('Juan Carlos');
$persona2 = new per();
$persona2->setNombre('Carlos');
$persona2->setEdad(30);
$persona2->setPais('Argentina');
echo $persona1->mostrarInformacion() . '<br>';
echo $persona2->mostrarInformacion() . '<br>';



$est1 = new Estudiante();
$est2 = new Estudiante('Pedro', 20, 'Argentina', 'Desarrollo de software');
var_dump($est1);
echo '<br>';
echo $est2->mostrarInformacion();

require_once 'clases/traits.php';
$trait_ec = new Ecuatoriano();
$trait_es = new Español();

$trait_ec->bienvenida();
echo '<br>';
$trait_es->despedir();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO php</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
</head>

<body>

</body>

</html>