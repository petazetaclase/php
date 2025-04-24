<?php

$usuarios = [
    "entrenador" => [
        "username" => "entrenador1",
        "password" => "fit2024",
        "role" => "entrenador"
    ],
    "cliente" => [
        "username" => "cliente1",
        "password" => "pass123",
        "role" => "cliente"
    ]
];

function verificar($username, $password) {
    global $usuarios;
    
    if (isset($usuarios[$username]) && $usuarios[$username]["password"] === $password) {
        return $usuarios[$username];
    }
    
    return false;
}

function comprobar($user) {
    if ($user["role"] === "entrenador") {
        echo "Bienvenido " . $user["username"] . "!<br>";
    } elseif ($user["role"] === "cliente") {
        echo "Bienvenido " . $user["username"] . "!<br>";
    } else {
        echo "Usuario no reconocido.<br>";
    }
}


$username = "entrenador1";
$password = "fit2024";

$user = verificar($username, $password);

if ($user) {
    comprobar($user);
} else {
    echo "Usuario o contraseña incorrectos.<br>";
}

?>