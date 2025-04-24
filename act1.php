<?php
//apartado A
    $personas = [
        ["nombre" => "Juan", "edad" => 25, "ciudad" => "Madrid"],
        ["nombre" => "Ana", "edad" => 30, "ciudad" => "Barcelona"],
        ["nombre" => "Luis", "edad" => 22, "ciudad" => "Valencia"],
    ];
    foreach ($personas as $persona) {
        echo "Nombre: " . $persona["nombre"] . "<br>";
        echo "Edad: " . $persona["edad"] . "<br>";
        echo "Ciudad: " . $persona["ciudad"] . "<br><br>";
    }
    echo "edad: " . $personas[0]["edad"] . "<br>";

    //ordenamos el array por nombre
    usort($personas, function($a, $b) {
        return strcmp($a["nombre"], $b["nombre"]);
    });
    echo "<br>";
    foreach ($personas as $persona) {
        echo "Nombre: " . $persona["nombre"] . "<br>";
        echo "Edad: " . $persona["edad"] . "<br>";
        echo "Ciudad: " . $persona["ciudad"] . "<br><br>";
    }
    //sumamos 1 a todas las edades
    foreach ($personas as &$persona) {
        $persona["edad"] += 1;
    }
    foreach ($personas as $persona) {
        echo "Nombre: " . $persona["nombre"] . "<br>";
        echo "Edad: " . $persona["edad"] . "<br>";
        echo "Ciudad: " . $persona["ciudad"] . "<br><br>";
    }
    //apartado B
    //creamos un array con 6 numeros aleatirios
    $numeros = array();
    for ($i = 0; $i < 6; $i++) {
        $numeros[] = rand(1, 100);
    }
    //mostramos el array
    foreach ($numeros as $numero) {
        echo $numero . " ";
    }
    echo "<br>";
    //añadimos un 0 al principio del array
    array_unshift($numeros, 0);
    //añadimos un 0 al final del array
    array_push($numeros, 0);
    //mostramos el array
    foreach ($numeros as $numero) {
        echo $numero . " ";
    }
    //ordemos el array de menor a mayor
    sort($numeros);
    echo "<br>";
    foreach ($numeros as $numero) {
        echo $numero . " ";
    }
    //buscamos un numero dentro de array con array_search
    $buscado = 50;
    if (array_search($buscado, $numeros, true) == true) {
        echo "<br>El numero " . $buscado . " se encuentra en el array";
    }else {
        echo "<br>El numero " . $buscado . " no se encuentra en el array";
    }
    //mostramos los indices del array
    echo "<br>";
    foreach ($numeros as $indice => $numero) {
        echo "Indice: " . $indice . " Valor: " . $numero . "<br>";
    }
    //eliminamos el primer elemento del array
    array_shift($numeros);
    //eliminamos el ultimo elemento del array
    array_pop($numeros);
    //mostramos el array
    echo "<br>";    
    foreach ($numeros as $numero) {
        echo $numero . " ";
    }
?>