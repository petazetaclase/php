<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>GIMNASIO</h1>
    <h3>Introduce tus datos entrenador o cliente</h3>
    <form method="post">
        <label for="usuario">usuario: <input type="text" name="usuario"></label>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $usuario = $_POST["usuario"] ?? '';
            $contraseña = $_POST["contraseña"] ?? '';
    
            if (empty($usuario)) {
                echo "<label style='color: red;'>Introduce usuario</label>";
            } elseif ($usuario !== "entrenador" && $usuario !== "cliente") {
                echo "<label style='color: red;'>Usuario incorrecto</label>";
            }
        }
        ?>
        <br>
        <label for="contraseña">contraseña: <input type="password" name="contraseña"></label>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
            $usuario = $_POST["usuario"] ?? '';
            $contraseña = $_POST["contraseña"] ?? '';
            if (empty($contraseña)) {
                echo "<label style='color: red;'>Introduce contraseña</label>";
            }elseif ($usuario === "entrenador" && $contraseña !== "fit2024") {
                echo "<label style='color: red;'>Contraseña incorrecta</label>";
            }elseif ($usuario === "cliente" && $contraseña !== "pass123") {
                echo "<label style='color: red;'>Contraseña incorrecta</label>";
            }elseif ($contraseña !== "pass123" && $contraseña !== "fit2024") {
                echo "<label style='color: red;'>Contraseña incorrecta</label>";
            }
        }
        ?>
        <br>
        <input type="submit" value="Iniciar sesion">

        <?php
        //enviamos a la pagina correspondiente dependiendo del usuario
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $usuario = $_POST["usuario"] ?? '';
            $contraseña = $_POST["contraseña"] ?? '';

            if ($usuario === "entrenador" && $contraseña === "fit2024") {
                header("Location: act2form.php?usuario=" . $usuario);
                exit();
            } elseif ($usuario === "cliente" && $contraseña === "pass123") {
                header("Location: act3form.php?usuario=" . $usuario);
                exit();
            }
        }
        ?>
    </form>
</body>
</html>