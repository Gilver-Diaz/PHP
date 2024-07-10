<?php
// asi se crean las variables en php  con el signo de $  
//signo de = es lo mismo que <?php? 

$name = "Gilver";
$isDev = true;
$numero = 27;

define('LOGO_URL', 'https://static-cse.canva.com/blob/951789/1250logotiposqueteinspiraran.png');
$numeroFinal = $numero . '5'; //el punto es para concatenar 
$output = "hola $name ";
// asi se puede concatenar
$output .=  ", con una edad de $numero";
// variable estatica 
const NOMBRE = 'Yadriel ';
// cambio de edad 
$isOld = $numero > 20;

if ($isOld) {
  echo "<h2>Eres viejo, lo siento </h2>";
} else {
  echo "<h2>Eres joven vive </h2>";
}



?>


<img src="<?= LOGO_URL ?>" alt="php logo " width="200">
<h1>

  <?= $output ?>

</h1>

<style>
  :root {
    color-scheme: ligth dark;
  }

  body {
    display: grid;
    place-content: center;
  }
</style>