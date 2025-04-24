<?php
$frase = "El conocimiento es un superpoder que nadie puede arrebatarte. Cada minuto que inviertes en aprender te acerca un paso mas a tus sueños.";
//obtenemos la longitud de la frase
echo "La longitud de la frase es: " . strlen($frase) . "<br>";
//obtenemos los 5 primeros caracteres de la frase
echo "Los 5 primeros caracteres de la frase son: " . substr($frase, 0, 5) . "<br>";
//reemplazamos "un" por "el" en la frase
echo "La frase con el reemplazo es: " . str_replace("un", "el", $frase) . "<br>";
//convertimos la frase a mayusculas
echo "La frase en mayusculas es: " . strtoupper($frase) . "<br>";
//convertimos la frase a minusculas
echo "La frase en minusculas es: " . strtolower($frase) . "<br>";
//cuantas veces aparece cada caracter
$caracteres = count_chars($frase, 1);
foreach ($caracteres as $caracter => $cantidad) {
    echo "El caracter " . chr($caracter) . " aparece " . $cantidad . " veces<br>";
}
//cuantas veces aparece la palabra que
$palabra = "que";
$contador = substr_count($frase, $palabra);
echo "La palabra " . $palabra . " aparece " . $contador . " veces<br>";
?>